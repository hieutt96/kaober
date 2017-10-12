<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog_posts';

	protected $primaryKey = 'post_id';

    protected $fillable = ['title', 'content', 'thumbnail', 'slug', 'status', 'cate_id', 'user_id', 'meta_description', 'meta_keyword'];

    public $timestamps = true;

    public function category(){
    	return $this->belongsTo('Modules\Blog\Entities\Category', 'cate_id');
    }
}
