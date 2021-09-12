<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users_roles';

    protected $fillable = [
        'role_id',
        'user_id',
        'role_id',
        'user_id',
    ];
}
