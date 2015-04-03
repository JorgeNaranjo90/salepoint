<?php namespace App\Http\Controllers\Partners;

use App\Partner;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\EditPartnerRequest;
use  Illuminate\Support\Facades;
use  Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\PdfLibrary;

class PartnersController extends Controller {

    protected  $request;

    public function __construct(Request $request){
        $this->middleware('auth');
        $this->request = $request;
    }

    public function report(Request $request,PdfLibrary $library)
    {
        $library->load();
        $dompdf = new \DOMPDF();
        $partners = Partner::filterAndPaginate($request->get('name'));
        $html = view('partners.report',compact('partners'));
        $dompdf->load_html($html);
        $dompdf->get_css();
        $dompdf->render();
        $dompdf->stream("partners.pdf");
    }

    public function index(Request $request)
    {
        $partners = Partner::filterAndPaginate($request->get('name'));
        //$partners2 = DB::table('partners')->where('partners.deleted_at','is','null')->count();
        return view('partners.index',compact('partners'));
    }

    public function customer(Request $request)
    {
        $partners = Partner::filterAndPaginateCustomer($request->get('name'));
        return view('partners.index',compact('partners'));
    }

    public function supplier(Request $request)
    {
        $partners = Partner::filterAndPaginateSupplier($request->get('name'));
        return view('partners.index',compact('partners'));
    }

    public function delete(Request $request)
    {
        $partners = Partner::filterAndPaginateDelete($request->get('name'));
        $p = "/delete";
        return view('partners.index'.$p,compact('partners'));

    }

    public function create()
    {
        $countrys = \DB::table('countrys')->orderBy('name','ASC')->lists('name','id');
        $states = \DB::table('states')->orderBy('name','ASC')->lists('name','id');
        $citys = \DB::table('citys')->orderBy('name','ASC')->lists('name','id');
        return view('partners.create',compact('countrys','states','citys'));

    }

    public function store(CreatePartnerRequest $request)
    {
        $partner = Partner::create($request->all());
        Session::flash('message', $partner->name .' was registred !');
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $partner= Partner::findOrFail($id);
        return view('partners.profile', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        $countrys = \DB::table('countrys')->get('name','id')->orderBy('name','ASC')->lists('name','id');
        $states = \DB::table('states')->orderBy('name','ASC')->lists('name','id');
       /* $states = \DB::table('states')->join('countrys','states.country_id','=','countrys.id')->
            get('states.id','states.name')->orderBy('states.name','ASC')->lists('states.name','id');*/
        $citys = \DB::table('citys')->orderBy('name','ASC')->lists('name','id');
        return view('partners.edit',compact('partner','countrys','states','citys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditPartnerRequest $request,$id)
    {

        $partner = Partner::findOrFail($id);
        $partner->customer = Input::has('customer');
        $partner->supplier = Input::has('supplier');
        $partner->fill($request->all());
        $partner->save();
        Session::flash('message', $partner->name .' was updated !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        Session::flash('message', $partner->name.' was deleted !');
        return \Redirect::route('partners.index');
    }



}
