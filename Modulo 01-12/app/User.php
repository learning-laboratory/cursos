<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
       return $this->hasOne('App\Post','id_user');
    }

    public function posts(){
        return $this->hasMany('App\Post','id_user');
    }

    public function roles(){
       return $this->belongsToMany('App\Role','role_user','id_user','id_role')->withPivot('created_at');
       // return $this->belongsToMany('App\Role');
    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function getNameAttribute( $value ){
        return strtolower($value);
    }

    public function setNameAttribute( $value ){
        $this->attributes['name'] = strtolower($value);
    }
}
