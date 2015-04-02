<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class paramPac extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='paramPacs';

    protected $fillable=['name','methodType','urlWebService',
        'nameSpace','userPac','passwordPac', 'certificateLink','active'];

}






