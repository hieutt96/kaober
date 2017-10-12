<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = 'shop_product_values';

	protected $primaryKey = 'value_id';

    protected $fillable = ['value', 'product_id', 'attribute_id', 'lang_id'];

    // public $timestamps = true;
}
