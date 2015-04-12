<?php namespace App\Http\Controllers\Settings\Users;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller {

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

        $users = User::filterAndPaginate($request->get('name'));
        return view('settings.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $type = User::typeUser();
        return view('settings.users.create',compact('type'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{

        $user = User::create($request->all());

        //$username_rol = $user->name.str_replace(" ","",".$user->name").$user->id;
        //$username_rol = $user->name.str_replace(" ", "", $user->name).$user->id;
        //$username_rol = $user->name.$user->id;
        $username_rol = $user->name;
        $password = $user->password;
        /*
            * admin = all privileges.
            * user = insert,select and update.
            * sale = insert,select and update.
            * purchase = insert,select and update.
            * report = select.
            * crear tres if, el primero van a consultar si es de
         * tipo admin, crear un usuario con todos los privi.
         * si no eres admin, eres user, purchase o sale
         * entonces crear los usuarios con insert, select and update
         * y el de reportes solamente podrán consultar.
         * */
        if($user->type == 'admin'){
            //'Mario12'@localhost IDENTIFIED BY 'metaloco750'
            \DB::statement("CREATE USER ".$username_rol."@'localhost' IDENTIFIED BY '".$password."';");
            //grant ALL PRIVILEGES on *.* to 'admin13'@'localhost' with grant option
            \DB::statement("grant all privilegies on salepoint.* to '".$username_rol."@localhost with grant option';");
            Session::flash('message', $user->name .' was registred !');
        }
        if($user->type == 'user' || $user->type == 'purchase' || $user->type == 'sale'){
            \DB::statement("CREATE USER '".$username_rol."'@'localhost' IDENTIFIED BY '".$password."';");
            \DB::statement("grant select,insert,update on salepoint.* to '".$username_rol."'@'localhost with grant option';");
            Session::flash('message', $user->name .' was registred !');
        }
        if($user->type == 'report'){
            \DB::statement("CREATE USER '".$username_rol."'@'localhost' IDENTIFIED BY '".$password."';");
            \DB::statement("grant select on salepoint.* to '".$username_rol."'@'localhost with grant option';");
            Session::flash('message', $user->name .' was registred !');
        }
        else{
            Session::flash('message',' error created user !');
        }

        return redirect()->route('settings.users.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::findOrFail($id);
        return view('settings.users.profile', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $user = User::findOrFail($id);
        $type = User::typeUser();
        return view('settings.users.edit',compact('user','type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request, $id)
	{
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message', $user->name .' was updated !');
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
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('message', $user->full_name.' was deleted !');
        $username_rol = $user->name.replace(" ","").$user->id;
        \DB::statement("grant insert,update,select privilegies on salepoint.* to ".$username_rol."'@'localhost';");
        return \Redirect::route('settings.users.index');

	}

}
