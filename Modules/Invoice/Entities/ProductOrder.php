<?php

namespace Modules\Invoice\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $table = 'product_orders';

	protected $primaryKey = 'po_id';

    protected $fillable = ['product_id', 'order_id', 'price', 'quantity'];

    public $timestamps = true;

    public function product() {
    	return $this->belongsTo('Modules\Invoice\Entities\Product', 'product_id');
    }
    
    
}
