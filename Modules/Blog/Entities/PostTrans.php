<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class PostTrans extends Model
{
    protected $table = 'blog_post_translations';

	protected $primaryKey = 'trans_id';

    protected $fillable = ['title', 'content', 'post_id', 'lang_id', 'meta_description', 'meta_keyword'];

    public $timestamps = true;
}
