<?php namespace App\Http\Controllers\Settings\Certificatesats;

use App\CertificateSats;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateCertificateSatsRequest;
use App\Http\Requests\EditCertificateSatsRequest;
use App\Http\Requests;
use Illuminate\Http\Request;

class CertificatesatsController extends Controller {

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
        $certificatesats = CertificateSats::filterAndPaginate($request->get('name'));
        return view('settings.certificatesats.index',compact('certificatesats'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('settings.certificatesats.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCertificateSatsRequest $request)
	{
        $certificatesat = CertificateSats::create($request->all());
        Session::flash('message', $certificatesat->name .' was registred !');
        return redirect()->route('settings.certificatesats.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $certificatesat= CertificateSats::findOrFail($id);
        return view('settings.certificatesats.profile', compact('certificatesat'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $certificatesat = CertificateSats::findOrFail($id);
        return view('settings.certificatesats.edit',compact('certificatesat'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCertificateSatsRequest $request,$id)
	{
        $certificatesat = CertificateSats::findOrFail($id);
        $certificatesat->fill($request->all());
        $certificatesat->save();
        Session::flash('message', $certificatesat->name .' was updated !');
        return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $certificatesat = CertificateSats::findOrFail($id);
        $certificatesat->delete();
        Session::flash('message', $certificatesat->name .' was deleted !');
        return \Redirect::route('settings.certificatesats.index');
	}

}
