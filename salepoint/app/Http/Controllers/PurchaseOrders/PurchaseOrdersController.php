<?php namespace App\Http\Controllers\PurchaseOrders;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Partner;
use App\PurchaseOrder;
use App\PurchaseOrderLine;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Input;

class PurchaseOrdersController extends Controller {

    protected  $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $purchaseOrders = PurchaseOrder::filterAndPaginate($request->get('name'));
		return view('purchases.index' , compact('purchaseOrders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        $customers = Partner::getSupplier('');
        return view('purchases.create', compact('customers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $array_purchase_order =
            ['name' => 'PO'.\DB::table('purchase_orders')->max('id'),
                'purchase_order_time' => Input::get('sale_datetime'),
                'subTotal' => Input::get('subtotal'),
                'total' => Input::get('total'),
                'partner_id' => Input::get('partner_id'),
            ];
        $purchase_order_id = PurchaseOrder::create($array_purchase_order);

        $lines = sizeof(Input::get('sale_order_line_product_id'));
        $products_ids = Input::get('sale_order_line_product_id');
        $products_name_ids = Input::get('sale_order_line_name');
        $products_qty_ids = Input::get('sale_order_line_qty');
        $products_unitPrice_ids = Input::get('sale_order_line_unitPrice');
        $products_subTotal_ids = Input::get('sale_order_line_subtotal');


        for($i=0 ; $i<$lines ; $i++){
            $purchase_line = [
                'name' => $products_name_ids[$i],
                'qty' => $products_qty_ids[$i],
                'unitPrice' => $products_unitPrice_ids[$i],
                'subTotal' => $products_subTotal_ids[$i],
                'purchase_order_id' => $purchase_order_id->id,
                'product_id' => $products_ids[$i]
            ];
            PurchaseOrderLine::create($purchase_line);
        }

        return redirect()->route('purchases.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request, $id)
	{
        $purchase_order = PurchaseOrder::findOrFail($id);
        if($request->ajax()){
            return PurchaseOrder::findOrFail($id)->toJson();
        }
        return view('purchases.profile', compact('purchase_order'));
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
