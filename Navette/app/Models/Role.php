<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function permission(){
        return $this->belongsToMany(permission::class, 'role_permissions');
    }
}
