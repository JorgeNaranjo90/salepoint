<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PurchaseOrder extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchase_orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'purchase_order_time', 'subTotal', 'total', 'partner_id', 'status'];

	//
    public function purchase_order_lines(){
        return $this->hasMany('App\PurchaseOrderLine','purchase_order_id');
    }

    public function partner(){
        return $this->belongsTo('App\Partner');
    }

    public static function filterAndPaginate($name)
    {
        return PurchaseOrder::name($name)
            ->orderBy('name','ASC')
            ->paginate();
    }

    public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where("name", "LIKE", "%$name%");
        }
    }


}
