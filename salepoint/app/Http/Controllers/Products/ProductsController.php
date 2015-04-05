<?php namespace App\Http\Controllers\Products;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PdfLibrary;


class ProductsController extends Controller {

    protected  $request;
    protected  $dompdf;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function report(Request $request,PdfLibrary $library)
    {
        $library->load();
        $dompdf = new \DOMPDF();
        $products = Product::filterAndPaginate($request->get('name'));
        $html = view('products.report',compact('products'));
        $dompdf->load_html($html);
        $dompdf->get_css();
        $dompdf->render();
        $dompdf->stream("products.pdf");
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $uom = \DB::table('uoms')->orderBy('name','ASC')->lists('name','id');
        return view('products.create',compact('uom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $product = Product::findOrFail($id);
        $uom = \DB::table('uoms')->orderBy('name','ASC')->lists('name','id');
        return view('products.edit', compact('product','uom'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(EditProductRequest $request, $id)
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
