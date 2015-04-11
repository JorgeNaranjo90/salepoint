<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;


class SaleOrder extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sale_orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name', 'sale_order_time', 'subTotal', 'total' ,'discount', 'type','status', 'partner_id', 'paymentMethod_id', 'created_at'];

    public function sale_order_lines(){
        return $this->hasMany('App\SaleOrderLine','sale_order_id');
    }

    public function partner(){
        return $this->belongsTo('App\Partner');
    }

    public function paymentMethod(){
        return $this->belongsTo('App\PaymentMethod');
    }

    public static function filterAndPaginate($name)
    {
        return \DB::table('sale_orders')
            ->where('name','like','%'.$name.'%')
            ->paginate();

    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where("name","LIKE", "%$name%");
        }

    }
}
