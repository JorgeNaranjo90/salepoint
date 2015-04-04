<?php namespace App\Http\Controllers\Settings\FiscalRegimens;

use App\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FiscalRegimen;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\EditFiscalRegimenRequest;
use  App\Http\Requests\CreateFiscalRegimenRequest;

class FiscalRegimensController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(\Illuminate\Http\Request $request)
	{
        $fiscal=fiscalRegimen::NameF($request->get('name'))->orderBy('id','ASC')->paginate();
        return view('settings.fiscalRegimens.index', compact('fiscal'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('settings.fiscalRegimens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateFiscalRegimenRequest $request)
	{
        FiscalRegimen::create(Request::all());
        return redirect()->route('settings.fiscalRegimen.index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $fiscal = FiscalRegimen::findOrFail($id);
        return view('settings.fiscalRegimens.show',compact('fiscal'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $fiscal=FiscalRegimen::findOrFail($id);
        return view('settings.fiscalRegimens.edit',compact('fiscal'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditFiscalRegimenRequest $request,$id)
	{
		$fiscal=FiscalRegimen::findOrFail($id);
        $fiscal->fill($request->all());
        $fiscal->save();
        return redirect()->route('settings.fiscalRegimen.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $fiscal=FiscalRegimen::findOrFail($id);
        $fiscal->delete();
        Session::flash('message','El registro fue eliminado');
        return redirect()->route('settings.fiscalRegimen.index');
	}
}
