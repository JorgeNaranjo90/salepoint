<?php namespace App\Http\Controllers\Settings\Uoms;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUomRequest;
use App\Http\Requests\EditUomRequest;
use App\Uom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Created by PhpStorm.
 * User: deragonu89
 * Date: 25/03/15
 * Time: 07:54 PM
 */

class UomsController extends Controller {

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
        $uoms = Uom::filterAndPaginate($request->get('name'));
        return view('settings.uoms.index', compact('uoms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateUomRequest $request)
    {

        $uom = Uom::create($request->all());
        return \Redirect::route('settings.uoms.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $uom = Uom::findOrFail($id);
        return view('settings.uoms.profile', compact('uom'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('settings.uoms.create');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $uom = Uom::findOrFail($id);
        return view('settings.uoms.edit', compact('uom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditUomRequest $request, $id)
    {
        $uom = Uom::findOrFail($id);
        $uom->fill($request->all());
        $uom->save();
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
        $uom = Uom::findOrFail($id);
        $uom->delete();
        Session::flash('message', $uom->name.' was delete !');
        return \Redirect::route('settings.uoms.index');

    }

}