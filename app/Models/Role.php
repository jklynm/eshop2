<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Role extends Model
{
    use Sluggable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'users_roles','role_id','user_id');
    }
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions','role_id','permission_id');
    }


}
