<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'guard_name',
        'description',
        'status',
    ];
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_permissions','permission_id','role_id');
    }
}
