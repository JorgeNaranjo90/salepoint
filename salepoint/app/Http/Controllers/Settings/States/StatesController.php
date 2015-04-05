<?php namespace  App\Http\Controllers\Settings\States;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\EditStateRequest;
use App\Http\Requests\CreateStateRequest;


class StatesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $state=State::paginate();
        return view('settings.states.index', compact('state'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $country = \DB::table('countrys')->orderBy('name','ASC')->lists('name','id');
        return view('settings.states.create',compact('country'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateStateRequest $request)
	{
        State::create(Request::all());
        return redirect()->route('settings.state.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $state= State::findOrFail($id);
        return view('settings.states.show',compact('state'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $country = \DB::table('countrys')->orderBy('name','ASC')->lists('name','id');
        $state=State::findOrFail($id);
        return view('settings.states.edit',compact('state','country'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditStateRequest $request,$id)
	{
        $state=State::findOrFail($id);
        $state->fill($request->all());
        $state->save();
        return redirect()->route('settings.state.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $state=State::findOrFail($id);
        $state->delete();
        return redirect()->route('settings.state.index');
	}

}
