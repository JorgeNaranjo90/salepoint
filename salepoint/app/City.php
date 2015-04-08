<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class City extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'citys';

    protected $fillable = ['name','code','abbreviation','state_id'];


    public  function states(){
        return $this->belongsTo('App\State','id');
    }
}
