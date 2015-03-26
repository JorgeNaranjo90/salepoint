<?php namespace App\Http\Controllers\Partners;

use App\Partner;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\EditPartnerRequest;
use  Illuminate\Support\Facades;
use Illuminate\Support\Facades\Session;

class PartnersController extends Controller {


    public function duplicate()
    {

        $country_idd = Facades\Input::get('country_id');
        $states = \DB::table('states')->where('country_id','=',$country_idd)->get();
        return \Response::make($states);
    }

    public function index()
    {
        $partners = Partner::
        join('countrys','partners.country_id','=','countrys.id')
            ->join('citys','partners.city_id','=','citys.id')
            ->join('states','partners.state_id','=','states.id')
            ->select('partners.*',
                'countrys.name as country_name',
                'citys.name as city_name',
                'states.name as state_name')->paginate();

        return view('partners.index',compact('partners'));
    }

    public function create()
    {

        $countrys = \DB::table('countrys')->get();
        return view('partners.create',compact('countrys'));



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
        $partner = Partner::findOrFail($id);
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
        return view('partners.edit',compact('partner'));
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

}
