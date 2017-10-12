<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'shop_product_reviews';

	protected $primaryKey = 'review_id';

    protected $fillable = ['product_id', 'review', 'lang_id', 'status', 'star', 'user_id'];

    public $timestamps = true;

    public function getuser() {
    	return $this->belongsTo('Modules\Version1\Entities\User', 'user_id');
    }

}
