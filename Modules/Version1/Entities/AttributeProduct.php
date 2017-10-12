<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class AttributeProduct extends Model
{
    protected $table = 'shop_product_attributes';
	protected $primaryKey = 'attribute_id';
    protected $fillable = ['title', 'description', 'status'];
    public $timestamps = true;
}
