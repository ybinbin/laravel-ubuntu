<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*方法名随意*/
    public function articles()
    {
        return $this->hasMany('App\Article');  //$user->articles()   可以取到该user下的所有文章
    }

    public function isAdmin()
    {
        return $this->name === 'ybinbin';  //如果is_admin字段为Y就返回TRUE，否则返回false
    }
}
