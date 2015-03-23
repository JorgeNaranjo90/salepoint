<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partners';

    //protected $tableCity ='citys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastName', 'street','noExt','noInt','colony','zip','locality','rfc','phone','mobile','fax','email','customer','supplier','image','birthdate','city_id','state_id','country_id'];

}
