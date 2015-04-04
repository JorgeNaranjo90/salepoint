<?php namespace App\Http\Controllers\Settings\Currencys;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Currency;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateCurrencyRequest;
use App\Http\Requests\EditFiscalRegimenRequest;


class CurrencysController extends Controller {

    protected $request;

    public function _construct(Request $request)
    {
     $this->request=$request;
    }
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(\Illuminate\Http\Request $request)
	{
        $currency=Currency::Name($request->get('name'))->orderBy('id','ASC')->paginate();
        return view('settings.currencys.index', compact('currency'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('settings.currencys.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCurrencyRequest $request)
	{
        Currency::create(Request::all());
        return redirect()->route('settings.currency.index');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $currency = Currency::findOrFail($id);

        return view('settings.currencys.show',compact('currency'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $currency=Currency::findOrFail($id);

        return view('settings.currencys.edit', compact('currency'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditFiscalRegimenRequest $request,$id)
	{
        $currency=Currency::findOrFail($id);
        $currency->fill($request->all());
        $currency->save();
        return redirect()->route('settings.currency.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $currency=Currency::findOrFail($id);
        $currency->delete();
        Session::flash('message','El registro fue eliminado');
        return redirect()->route('settings.currency.index');
	}

}
