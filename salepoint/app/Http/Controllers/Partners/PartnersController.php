<?php namespace App\Http\Controllers\Partners;

use App\Partner;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\EditPartnerRequest;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\PdfLibrary;

class PartnersController extends Controller {

    protected  $request;
    protected  $dompdf;

    public function __construct(Request $request){
        $this->middleware('auth');
        $this->request = $request;
    }

    public function report(PdfLibrary $library)
    {
        $library->load();
        $this->dompdf = new \DOMPDF();
        $partners = Partner::report();
        $title = trans('general.partner_report');
        return $html = view('partners.report',compact('partners','title'));
        $this->dompdf->load_html($html);
        $this->dompdf->get_css();
        $this->dompdf->render();
        $this->dompdf->stream("partners.pdf");
    }

    public function reportCustomer(PdfLibrary $library)
    {
        $library->load();
        $this->dompdf = new \DOMPDF();
        $partners = Partner::reportCustomer();
        $title = trans('general.customer_report');
        return $html = view('partners.report',compact('partners','title'));
        $this->dompdf->load_html($html);
        $this->dompdf->get_css();
        $this->dompdf->render();
        $this->dompdf->stream("partners_customer.pdf");
    }

    public function reportSupplier(PdfLibrary $library)
    {
        $library->load();
        $this->dompdf = new \DOMPDF();
        $partners = Partner::reportSupplier();
        $title = trans('general.supplier_report');
        return $html = view('partners.report',compact('partners','title'));
        $this->dompdf->load_html($html);
        $this->dompdf->get_css();
        $this->dompdf->render();
        $this->dompdf->stream("partners_supplier.pdf");
    }

    public function index(Request $request)
    {
        $partners = Partner::filterAndPaginate($request->get('name'));
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

    public function delete(Request $request,$query)
    {
        $partners = Partner::filterAndPaginateDelete($request->get('name'));
            return view('partners.index',compact('partners'));
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
    public function show($id, Request $request)
    {
        $partner= Partner::findOrFail($id);
        if($request->ajax()){
            return Partner::join('countrys','partners.country_id','=','countrys.id')
                ->join('citys','partners.city_id','=','citys.id')
                ->join('states','partners.state_id','=','states.id')
                ->select('partners.*',
                    'countrys.name as country_name',
                    'citys.name as city_name',
                    'states.name as state_name')->findOrFail($id)->toJson();
        }
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
        $countrys = \DB::table('countrys')->orderBy('name','ASC')->lists('name','id');
        $states = \DB::table('states')->orderBy('name','ASC')->lists('name','id');
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
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pat = Partner::dontDelete($id);
        if ( $pat==[]){
            $partner = Partner::findOrFail($id);
            $partner->delete();
            Session::flash('message', $partner->name.' was deleted !');
            return redirect()->route('partners.index');
        }
        else{
            dd($pat);
            Session::flash('message',' dont is possible delete  the partner is linked to any product !');
            return redirect()->route('partners.index');
        }



    }

}
