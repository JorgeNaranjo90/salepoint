<?php namespace App\Http\Middleware;


class IsReport extends IsType{

    public function getType()
    {
        return 'report';

    }

}
