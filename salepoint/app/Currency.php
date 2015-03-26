<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Currency extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='currencys';

    protected $fillable=['name','description'];


    public function scopeName($query,$name)
    {
        if ($name != "")
        {
            $query->where(\DB::raw('name'),"LIKE","%$name%");
        }
    }
}


