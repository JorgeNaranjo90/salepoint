<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class partner extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
