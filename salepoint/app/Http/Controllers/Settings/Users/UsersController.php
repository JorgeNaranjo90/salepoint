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

        $user_name_trim = str_replace(' ', '', $user->name);
        $username_rol = $user_name_trim.$user->id;
        $password = $user->password_hidden;
        $database = \Config::get('database.connections.mysql.database');
        $password_role = \DB::select("select password('$password') as password")[0]->password;
        /*
            * admin = all privileges.
            * user = insert,select and update.
            * sale = insert,select and update.
            * purchase = insert,select and update.
            * report = select.
        */
        //dd($password_role);
        //*0D22657BD7E16A953E5DEF4EC9E5933C4931755C
        if($user->type == 'admin'){
            \DB::statement("CREATE USER '".$username_rol."'@'localhost' IDENTIFIED BY PASSWORD'".$password_role."'");
            \DB::statement("grant all privileges on $database.* to '".$username_rol."'@'localhost'");
            \DB::statement("FLUSH PRIVILEGES");
            Session::flash('message', $user->name .' was registred !');
        }
        if($user->type == 'user' || $user->type == 'purchase' || $user->type == 'sale'){
            \DB::statement("CREATE USER '".$username_rol."'@'localhost' IDENTIFIED BY PASSWORD'".$password_role."'");
            \DB::statement("grant select,insert,update on $database.* to '".$username_rol."'@'localhost'");
            \DB::statement("FLUSH PRIVILEGES");
            Session::flash('message', $user->name .' was registred !');
        }
        if($user->type == 'report'){
            \DB::statement("CREATE USER '".$username_rol."'@'localhost' IDENTIFIED BY PASSWORD'".$password_role."'");
            \DB::statement("grant select on $database.* to '".$username_rol."'@'localhost'");
            \DB::statement("FLUSH PRIVILEGES");
            Session::flash('message', $user->name .' was registred !');
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
        $user_name_trim = str_replace(' ', '', $user->name);
        $username_rol = $user_name_trim.$user->id;
        \DB::statement("drop user '".$username_rol."'@'localhost';");
        Session::flash('message', $user->full_name.' was deleted !');
        return \Redirect::route('settings.users.index');

	}

}
