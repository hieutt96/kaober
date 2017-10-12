<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'product_orders';
	protected $primaryKey = 'po_id';
    protected $fillable = ['product_id', 'order_id', 'price', 'quantity'];
    public $timestamps = true;
}
