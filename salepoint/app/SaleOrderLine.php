<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SaleOrderLine extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sale_order_lines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name', 'qty', 'unitPrice', 'subTotal', 'sale_order_id', 'product_id'];

    public function sale_order(){
        return $this->belongsTo('App\SaleOrder');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

}
