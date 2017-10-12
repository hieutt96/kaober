<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'shop_products';

	protected $primaryKey = 'product_id';

    protected $fillable = ['title', 'description', 'price', 'discount', 'thumbnail', 'slug', 'status', 'cate_id', 'shop_id', 'meta_description', 'meta_keyword'];

    public $timestamps = true;

    public function shop(){
    	return $this->belongsTo('Modules\Version1\Entities\Shop', 'shop_id');
    }

    public function category(){
    	return $this->belongsTo('Modules\Version1\Entities\Category', 'cate_id');
    }
    
    public function review(){
        return $this->hasMany('Modules\Product\Entities\Review', 'product_id');
    }

    public function value() {
        return $this->hasMany('Modules\Product\Entities\ValueProduct', 'product_id');
    }
}
