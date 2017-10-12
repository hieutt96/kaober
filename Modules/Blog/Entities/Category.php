<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'blog_categories';

	protected $primaryKey = 'cate_id';

    protected $fillable = ['title', 'description', 'thumbnail', 'slug', 'status'];

    public $timestamps = true;

    public function posts() {
    	return $this->hasMany('Modules\Blog\Entities\Post', 'cate_id');
    }

}
