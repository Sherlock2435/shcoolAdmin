<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static create(array $array)
 */
class User extends Authenticatable implements  MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *在create()方法中允许被赋值的字段
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'uid', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // 对数据格式进行转化
    ];
}
