<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partners';

    protected $fillable = ['name','code','abbreviation'];

}
