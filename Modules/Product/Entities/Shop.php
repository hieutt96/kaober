<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	protected $table = 'shops';

	protected $primaryKey = 'shop_id';

    protected $fillable = ['title', 'description', 'slug', 'status', 'address', 'slogan', 'user_id', 'thumbnail', 'meta_description', 'meta_keyword', 'hotline'];

    public $timestamps = true;

    // khi gọi đến phương thức trong view thì ko cần (), vì nếu có () sẽ gọi đến hàm này mà ko có giá trị
    public function products() {
    	return $this->hasMany('Modules\Product\Entities\Product', 'shop_id');
    }

}
