<?php namespace App\Http\Controllers\Partners;

use App\Partner;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\EditPartnerRequest;
use  Illuminate\Support\Facades;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PartnersController extends Controller {

    protected  $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function index(Request $request)
    {

        $partners = Partner::
        join('countrys','partners.country_id','=','countrys.id')
            ->join('citys','partners.city_id','=','citys.id')
            ->join('states','partners.state_id','=','states.id')
            ->select('partners.*',
                'countrys.name as country_name',
                'citys.name as city_name',
                'states.name as state_name')->paginate();

        //$partners = Partner::filterAndPaginate($request->get('partners.name'));

        /*$partners = Partner::filterAndPaginate($request->get('name'))->
        join('countrys','partners.country_id','=','countrys.id')
            ->join('citys','partners.city_id','=','citys.id')
            ->join('states','partners.state_id','=','states.id')
            ->select('partners.*',
                'countrys.name as country_name',
                'citys.name as city_name',
                'states.name as state_name')->paginate();*/

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
        // $partner = Partner::findOrFail($id);

        $partner = Partner::
        join('countrys','partners.country_id','=','countrys.id')
            ->join('citys','partners.city_id','=','citys.id')
            ->join('states','partners.state_id','=','states.id')
            ->select('partners.*',
                'countrys.name as country_name',
                'citys.name as city_name',
                'states.name as state_name')->firstOrFail();
        return view('partners.profile',compact('partner'));
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
        //$country = Country::findOrFail($id);
        return view('partners.edit',compact('partner'));
        //return view('partners.edit',compact('partner','country'));
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
        $partner->fill($request->all());;
        $partner->save();
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
        Session::flash('message', $partner->name.' was delete !');
        //Session::flash(' was delete !');
        return \Redirect::route('partners.index');
    }

    public function count($id)
    {
        $partner = \DB::table('partners')->count($id);
        return view('partners.index',compact('partner'));
    }

}
