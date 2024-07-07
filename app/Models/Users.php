<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    protected $fillable = ['email','password', 'nama_lengkap', 'no_hp','role'];

    public function customer():HasOne
    {
        return $this->hasOne(Users::class, 'id', 'user_id');
    }
}