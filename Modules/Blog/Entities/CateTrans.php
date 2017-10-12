<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class CateTrans extends Model
{
    protected $table = 'blog_category_translations';

	protected $primaryKey = 'trans_id';

    protected $fillable = ['title', 'description', 'cate_id', 'lang_id'];

    public $timestamps = true;
}
