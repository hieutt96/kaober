<?php

namespace Modules\SettingAdmin\Entities;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'admin_settings';

	protected $primaryKey = 'set_id';

    protected $fillable = ['title', 'description'];

    public $timestamps = true;
}
