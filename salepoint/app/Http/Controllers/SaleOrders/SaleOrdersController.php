<?php namespace App\Http\Controllers\SaleOrders;

use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SaleOrder;
use App\SaleOrderLine;
use App\Partner;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SaleOrdersController extends Controller {

    protected  $request;

    public function __construct(Request $request){
        $this->middleware('auth');
        $this->request = $request;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
    {
        $sale_orders = SaleOrder::filterAndPaginate($request->get('name'));
        return view('sales.index', compact('sale_orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Request $request)
    {
        $array_sale_order =
            ['name' => 'SO'.\DB::table('sale_orders')->max('id'),
             'sale_order_time' => Input::get('sale_datetime'),
             'subTotal' => Input::get('subtotal'),
             'discount' => Input::get('discount'),
             'total' => Input::get('total'),
             'type' => Input::get('type'),
             'partner_id' => Input::get('partner_id'),
             'paymentMethod_id' => Input::get('paymentMethod_id'),
            ];
        $sale_order_id = SaleOrder::create($array_sale_order);

        $lines = sizeof(Input::get('sale_order_line_product_id'));
        $products_ids = Input::get('sale_order_line_product_id');
        $products_name_ids = Input::get('sale_order_line_name');
        $products_qty_ids = Input::get('sale_order_line_qty');
        $products_unitPrice_ids = Input::get('sale_order_line_unitPrice');
        $products_subTotal_ids = Input::get('sale_order_line_subtotal');


        for($i=0 ; $i<$lines ; $i++){
            $sale_line = [
                'name' => $products_name_ids[$i],
                'qty' => $products_qty_ids[$i],
                'unitPrice' => $products_unitPrice_ids[$i],
                'subTotal' => $products_subTotal_ids[$i],
                'sale_order_id' => $sale_order_id->id,
                'product_id' => $products_ids[$i]
            ];
            SaleOrderLine::create($sale_line);
        }
        $saleOrder = $sale_order_id;
        $company = Company::findOrFail(1);
        if(Input::get('type')==='saleOrder'){
            return view('POS.partials.ticket_report', compact('saleOrder','company'));
        }
        else{
            return view('POS.partials.invoice', compact('saleOrder','company'));
        }

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request, $id)
	{
        $sale_order = SaleOrder::findOrFail($id);
        if($request->ajax()){
            return SaleOrder::findOrFail($id)->toJson();
        }
        return view('sales.profile', compact('sale_order'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $sale_order = SaleOrder::findOrFail($id);
        return view('sales.edit', compact('sale_order'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $sale_order = SaleOrder::findOrFail($id);
        //        $sale_order->fill($request->all());

        if ( $sale_order->status != 'cancel')
        {
            $sale_order->status = "cancel";
            $sale_order->save();
            Session::flash('message', $sale_order->name.' was canceled !');
            return \Redirect::route('sales.index');
        }
        else {
            Session::flash('message',' dont is possible cancel the sale order it was canceled!');
            return redirect()->route('sales.index');
        }
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
