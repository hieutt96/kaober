<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'shop_categories';

	protected $primaryKey = 'cate_id';

    protected $fillable = ['title', 'description', 'thumbnail', 'slug', 'status'];

    public $timestamps = true;

    public function products() {
    	return $this->hasMany('Modules\Product\Entities\Product', 'cate_id');
    }

}
