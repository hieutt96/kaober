<?php

namespace Modules\Invoice\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'shop_products';

	protected $primaryKey = 'product_id';

    protected $fillable = ['title', 'description', 'price', 'discount', 'thumbnail', 'slug', 'status', 'cate_id', 'shop_id', 'meta_description', 'meta_keyword'];

    public $timestamps = true;

    public function shop(){
    	return $this->belongsTo('Modules\Invoice\Entities\Shop', 'shop_id');
    }

    // public function orders() {
    // 	return $this->belongsToMany('Modules\Invoice\Entities\Order');
    // }

}
