<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email',
    ];
    
    public function address(){
        return $this->hasOne('App\UserAddress');
    }
    
    public function role(){
        return $this->belongsTo('App\UserRole');
    }
    
}
