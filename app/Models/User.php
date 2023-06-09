<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

}
