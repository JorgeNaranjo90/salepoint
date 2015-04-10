<?php namespace App;

use Illuminate\Database\Eloquent\Model;
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
    protected $fillable = ['name', 'sale_order_time', 'subTotal', 'total' ,'discount', 'type', 'partner_id', 'paymentMethod_id'];

    public function sale_order_lines(){
        return $this->hasMany('App\SaleOrderLine','sale_order_id');
    }

    public function partner(){
        return $this->belongsTo('App\Partner');
    }

    public function paymentMethod(){
        return $this->belongsTo('App\PaymentMethod');
    }
}
