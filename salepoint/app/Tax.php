<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tax extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taxs';


    protected $fillable = ['name', 'code','value'];

    public static function filterAndPaginate($name)
    {
        return Tax::name($name)
            ->orderBy('name','ASC')
            ->paginate();

    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where("name", "LIKE", "%$name%");
        }
    }

}
