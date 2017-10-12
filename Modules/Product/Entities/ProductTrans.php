<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductTrans extends Model
{
    protected $table = 'shop_product_translations';

	protected $primaryKey = 'trans_id';

    protected $fillable = ['title', 'description', 'product_id', 'meta_description', 'meta_keyword', 'lang_id'];

    public $timestamps = true;
}
