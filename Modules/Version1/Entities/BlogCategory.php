<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';

	protected $primaryKey = 'cate_id';

    protected $fillable = ['title', 'description', 'thumbnail', 'slug', 'status'];

    public $timestamps = true;

    public function posts() {
    	return $this->hasMany('Modules\Version1\Entities\Blog', 'cate_id');
    }
}
