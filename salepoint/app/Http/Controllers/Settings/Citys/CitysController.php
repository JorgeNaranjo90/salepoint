<?php namespace  App\Http\Controllers\Settings\Citys;

use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\EditCityRequest;
use App\Http\Requests\CreateCityRequest;


class CitysController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $city=City::paginate();
        return view('settings.citys.index', compact('city'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $state = \DB::table('states')->orderBy('name','ASC')->lists('name','id');
        return view('settings.citys.create',compact('state'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCityRequest $request)
	{
        City::create($request->all());
        return redirect()->route('settings.city.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $city= City::findOrFail($id);
        return view('settings.citys.show',compact('city'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $state = \DB::table('states')->orderBy('name','ASC')->lists('name','id');
        $city=City::findOrFail($id);
        return view('settings.citys.edit',compact('city','state'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCityRequest $request,$id)
	{
        $city=City::findOrFail($id);
        $city->fill($request->all());
        $city->save();
        return redirect()->route('settings.city.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $city=City::findOrFail($id);
        $city->delete();
        return redirect()->route('settings.city.index');
	}

}
