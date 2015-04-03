<?php namespace App\Http\Controllers\PaymentMethods;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PaymentMethod;
use Illuminate\Support\Facades\Request;
use  App\Http\Requests\CreatePaymentMethodsRequest;
use  App\Http\Requests\EditPaymentMethodsRequest;


class PaymentMethodsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $payment=PaymentMethod::paginate();
        return view('paymentMethods.index', compact('payment'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('paymentMethods.create');

    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePaymentMethodsRequest $request)
	{
        PaymentMethod::create(Request::all());
        return redirect()->route('paymentMethods.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $payment = PaymentMethod::findOrFail($id);
        return view('paymentMethods.show',compact('payment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $payment=PaymentMethod::findOrFail($id);
        return view('paymentMethods.edit', compact('payment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPaymentMethodsRequest $request,$id)
	{
        $payment=PaymentMethod::findOrFail($id);
        $payment->fill($request->all());
        $payment->save();
        return redirect()->route('paymentMethods.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $payment=PaymentMethod::findOrFail($id);
        $payment->delete();
        return redirect()->route('paymentMethods.index');
	}

}
