<?php

namespace Modules\SettingAdmin\Entities;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
        protected $table = 'admin_setting_options';

    	protected $primaryKey = 'opt_id';

        protected $fillable = ['value', 'set_id'];

        public $timestamps = true;
}
