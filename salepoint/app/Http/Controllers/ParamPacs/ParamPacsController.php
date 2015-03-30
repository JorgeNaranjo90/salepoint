<?php namespace App\Http\Controllers\ParamPacs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ParamPac;
use Illuminate\Support\Facades\Request;

class ParamPacsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $param=ParamPac::paginate();
        return view('paramPacs.index', compact('param'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('paramPacs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreateParamPacsRequest $request)
	{
        ParamPac::create(Request::all());
        return redirect()->route('paramPacs.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $param = ParamPac::findOrFail($id);
        return view('paramPacs.show',compact('param'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $param=ParamPac::findOrFail($id);
        return view('paramPacs.edit', compact('param'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\EditParamPacsRequest $request,$id)
	{
        $param=ParamPac::findOrFail($id);
        $param->fill($request->all());
        $param->save();
        return redirect()->route('paramPacs.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $param=ParamPac::findOrFail($id);
        $param->delete();
        return redirect()->route('paramPacs.index');
	}

}
