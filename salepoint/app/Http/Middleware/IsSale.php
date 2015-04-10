<?php namespace App\Http\Middleware;

class IsSale extends IsType{

    public function getType()
    {
        return 'sale';

    }

}
