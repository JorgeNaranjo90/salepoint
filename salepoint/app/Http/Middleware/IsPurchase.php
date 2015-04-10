<?php namespace App\Http\Middleware;



class IsPurchase extends IsType{

	public function getType()
    {
        return 'purchase';

    }

}
