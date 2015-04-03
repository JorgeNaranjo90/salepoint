<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class paymentMethod extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='paymentMethods';

    protected $fillable=['name'];

}