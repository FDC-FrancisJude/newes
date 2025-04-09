<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{   
    protected $table = 'system_users';
    
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'remember_token'
    ];
}
