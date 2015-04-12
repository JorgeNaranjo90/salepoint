<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PurchaseOrderLine extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchase_order_lines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name', 'qty', 'unitPrice', 'subTotal', 'purchase_order_id', 'product_id'];

    public function purchase_order(){
        return $this->belongsTo('App\PurchaseOrder');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

}
