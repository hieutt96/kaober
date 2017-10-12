<?php

namespace Modules\Invoice\Entities;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	protected $table = 'shops';

	protected $primaryKey = 'shop_id';

    protected $fillable = ['title', 'description', 'slug', 'status', 'address', 'slogan', 'user_id', 'thumbnail', 'meta_description', 'meta_keyword', 'hotline'];

    public $timestamps = true;
}
