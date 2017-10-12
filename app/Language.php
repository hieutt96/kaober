<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

	protected $primaryKey = 'lang_id';

    protected $fillable = ['name', 'slug', 'description', 'status'];

    // public $timestamps = true;
}
