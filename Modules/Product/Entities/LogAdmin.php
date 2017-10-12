<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class LogAdmin extends Model
{
    protected $table = 'log_admins';

	protected $primaryKey = 'log_id';

    protected $fillable = ['user_id', 'email', 'action', 'ip', 'description', 'type'];

    public $timestamps = true;
}
