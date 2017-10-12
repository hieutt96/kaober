<?php

namespace Modules\Invoice\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

	protected $primaryKey = 'order_id';

    protected $fillable = ['keyorder', 'name', 'email', 'phone', 'country', 'city', 'district', 'address', 'status'];

    public $timestamps = true;

    public function productOrders() {
    	return $this->hasMany('Modules\Invoice\Entities\ProductOrder', 'order_id');
    }

}
