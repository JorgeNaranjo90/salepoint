<?php namespace App\Http\Controllers\Partners;


use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\EditPartnerRequest;
use App\Partner;
use  Illuminate\Support\Facades;

class PartnersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

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
                'states.name as state_name'
            )->paginate();
        return view('partners.index',compact('partners'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $countrys = \DB::table('countrys')->get();


        return view('partners.create',compact('countrys'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreatePartnerRequest $request)
    {
        $partner = Partner::create($request->all());
        return redirect()->route('partners.index');

        //$partner->save();
        //$image = Image::make(Facades\Input::file('files')->getRealPath());
        //$partner =  new Partner($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

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
        return \Redirector::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        /*$partner = Partner::findOrFail($id);
        $partner->delete();
        Session::flash('message', $partner->full_name.' was delete !');
        return \Redirect::route('partner.index');*/
    }

}
