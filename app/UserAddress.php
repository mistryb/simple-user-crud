<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    
    protected $table = 'user_addresses';
    
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address', 'province', 'city', 'country', 'postal_code'
    ];
    
    
    public function user(){
        return $this->belongsTo('App/User');
    }
    
}
