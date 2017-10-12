<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'shop_products';

	protected $primaryKey = 'product_id';

    protected $fillable = ['title', 'description', 'price', 'discount', 'thumbnail', 'slug', 'status', 'cate_id', 'shop_id', 'meta_description', 'meta_keyword'];

    public $timestamps = true;
}
