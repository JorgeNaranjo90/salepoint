<?php namespace App\Http\Controllers\Taxs;

use App\Tax;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaxsRequest;
use App\Http\Requests\EditTaxsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaxsController extends Controller {

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
        $taxs = Tax::filterAndPaginate($request->get('name'));
        return view('taxs.index',compact('taxs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('taxs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTaxsRequest $request)
	{
        $tax = Tax::create($request->all());
        Session::flash('message', $tax->name .' was registred !');
        return redirect()->route('taxs.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $tax= Tax::findOrFail($id);
        return view('taxs.profile', compact('tax'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $tax = Tax::findOrFail($id);
        return view('taxs.edit', compact('tax'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditTaxsRequest $request,$id)
	{
        $tax = Tax::findOrFail($id);
        $tax->fill($request->all());
        $tax->save();
        Session::flash('message', $tax->name .' was updated !');
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
        $tax = Tax::findOrFail($id);
        $tax->delete();
        Session::flash('message', $tax->name .' was deleted !');
        return \Redirect::route('taxs.index');
	}

}
