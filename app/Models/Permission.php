<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    function roles()
    {
        return $this->belongsToMany(Role::class, RolePermission::class, 'permission_id', 'role_id', 'id', 'id');
    }
}
