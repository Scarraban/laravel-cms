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

    public function posts() {
      return $this->hasMany('App\Post');
    }

    /**
     * Get the user's name
     *
     * @param   string  $value
     * @return  string
     */
    public function getNameAttribute($value) {
      return ucfirst($value);
    }

    /**
     *  Set the user's name
     *
     * @param   string  $value
     * @return  string
     */
     public function setNameAttribute($value) {
       $newVal = ucwords($value, " -\t\r\n\f\v");
       return $this->attributes['name'] = $newVal;
     }
}
