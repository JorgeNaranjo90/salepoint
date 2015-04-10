<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;
//use Illuminate\Http\Request;

abstract class IsType {

    private $auth;
    private $session;

    public function __construct(Guard $auth, Store $session){
        $this->auth = $auth;
        $this->session = $session;
    }

    abstract public function getType();

    public function handle($request, Closure $next)
    {


        if(! $this->auth->user()->is($this->getType())){

        }
        /*else{
            return $next($request);
        }*/
        return $next($request);

    }

        /*if( !$this->auth->user()->is($this->getType()))
        {



            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }*/


                /*return the address a that should redirect depends of type user*/

               // return redirect()->to('home');
                //$this->session->flash('message','You can not access, because you are not an administrator');

        //}




}
