<?php namespace  App\Http\Controllers\Settings\Countrys;

use App\Country;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\CreateCountryRequest;
use App\Http\Requests\EditCountryRequest;

class CountrysController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $country=Country::paginate();
        return view('settings.countrys.index', compact('country'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('settings.countrys.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCountryRequest $request)
	{
        Country::create(Request::all());
        return redirect()->route('settings.country.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $country= Country::findOrFail($id);
        return view('settings.countrys.show',compact('country'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $country=Country::findOrFail($id);
        return view('settings.countrys.edit',compact('country'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCountryRequest $request,$id)
	{
        $country=Country::findOrFail($id);
        $country->fill($request->all());
        $country->save();
        return redirect()->route('settings.country.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
