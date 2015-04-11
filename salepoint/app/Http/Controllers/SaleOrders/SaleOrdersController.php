<?php namespace App\Http\Controllers\SaleOrders;

use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SaleOrder;
use App\SaleOrderLine;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Input;


class SaleOrdersController extends Controller {

    protected  $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		//
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
