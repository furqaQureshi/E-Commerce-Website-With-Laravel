<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     * fillable propertity model ke ander use huti hai
     * ya is bat ka idea mean khayal rakta hai
     * ke kin filled per consider mean gor kiya jaye     
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function userPhoneGet()
    {
        return $this->hasMany(phone::class);
    }
}
