<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    // Declare an even handler
    protected static function boot() {
        parent::boot();

        static::deleting(function($user) { 
             $user->address()->delete();
        });
    }
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'user_roles_id',
    ];
    
    // Define the address relationship
    public function address(){
        return $this->hasOne('App\UserAddress');
    }
    
}
