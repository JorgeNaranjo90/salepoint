<?php namespace App\Http\Controllers\Products;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller {

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
        $products = Product::filterAndPaginate($request->get('name'));
        return view('products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return \Redirect::route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.profile', compact('product'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('products.create');
	}





	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($request->all());
        $product->save();
        return \Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('message', $product->name.' was delete !');
        return \Redirect::route('products.index');
	}

}
