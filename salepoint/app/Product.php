<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model implements AuthenticatableContract
{


    use Authenticatable;//, CanResetPassword;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name', 'description','purchasePrice','salePrice','qtyAvailable','incomingQty','virtualAvailable','ean13'];

    //Scope for search

    /*
     * This function search Users by Name
     * @query query that you create in index
     * @name is the string name that you search
     * */

    public static function filterAndPaginate($name)
    {
        return Product::name($name)
            ->orderBy('name', 'ASC')
            ->paginate();

    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where("name", "LIKE", "%$name%");
        }

    }

}
