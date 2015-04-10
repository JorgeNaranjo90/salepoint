<?php namespace App\Http\Controllers\Settings\Companys;

use App\Company;
use App\Currency;
use App\FiscalRegimen;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use  App\Http\Requests\CreateCompanyRequest ;
use  App\Http\Requests\EditCompanyRequest;
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
	public function store(CreateCompanyRequest $request)
	{
        Company::create(Request::all());
        return redirect()->route('settings.company.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $company = Company::findOrFail($id);
        $partner = Partner::findOrFail($company->partner_id);
        return view('settings.companys.show',compact('company','partner'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $currency = \DB::table('currencys')->orderBy('name','ASC')->lists('name','id');
        $fiscal = \DB::table('fiscalRegimens')->orderBy('name','ASC')->lists('name','id');
        $partners = \DB::table('partners')->orderBy('name','ASC')->lists('name','id');
        $company=Company::findOrFail($id);
        return view('settings.companys.edit', compact('company','partners','currency','fiscal'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCompanyRequest  $request,$id)
	{
        $company=Company::findOrFail($id);
        $company->fill(Request::all());
        $company->save();
        return redirect()->route('settings.company.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $company=Company::findOrFail($id);
        $company->delete();
        return redirect()->route('settings.company.index');
	}

}
