<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog_posts';

	protected $primaryKey = 'post_id';

    protected $fillable = ['title', 'content', 'thumbnail', 'slug', 'thumbnail', 'meta_description', 'meta_keyword', '	status', 'cate_id', 'user_id'];

    public $timestamps = true;

    public function category() {
    	return $this->belongsTo('Modules\Version1\Entities\BlogCategory', 'cate_id');
    }

    public function user() {
    	return $this->belongsTo('Modules\Version1\Entities\User', 'user_id');
    }

}
