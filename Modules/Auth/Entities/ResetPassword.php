<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $table = 'password_resets';

    public $primary = 'id';

    protected $fillable = [
        'token', 'email'
    ];

    public $timestamps = false;
}
