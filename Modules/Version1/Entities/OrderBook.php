<?php

namespace Modules\Version1\Entities;

use Illuminate\Database\Eloquent\Model;

class OrderBook extends Model
{
    protected $table = 'order_books';

	protected $primaryKey = 'order_id';

    protected $fillable = ['title', 'email', 'phone', 'username', 'status'];

    public $timestamps = true;
}
