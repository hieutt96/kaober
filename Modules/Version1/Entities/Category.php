<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'shop_categories';

	protected $primaryKey = 'cate_id';

    protected $fillable = ['title', 'description', 'thumbnail', 'slug', 'status'];

    public $timestamps = true;

    public function products() {
    	return $this->hasMany('Modules\Version1\Entities\Product', 'cate_id');
    }
}
