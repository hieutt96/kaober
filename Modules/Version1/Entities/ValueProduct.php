<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class ValueProduct extends Model
{
    protected $table = 'shop_product_values';

	protected $primaryKey = 'value_id';

    protected $fillable = ['product_id', 'attribute_id', 'lang_id', 'value'];

    public $timestamps = true;
}
