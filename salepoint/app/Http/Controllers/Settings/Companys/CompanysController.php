<?php namespace App\Http\Controllers\Settings\Companys;

use App\Company;
use App\FiscalRegimen;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;

class CompanysController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$company=Company::paginate();
        return view('settings.companys.index', compact('company'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $currency = \DB::table('currencys')->orderBy('name','ASC')->lists('name','id');
        $fiscal = \DB::table('fiscalRegimens')->orderBy('name','ASC')->lists('name','id');
        $partners = \DB::table('partners')->orderBy('name','ASC')->lists('name','id');
        return view('settings.companys.create',compact('company','partners','currency','fiscal'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
