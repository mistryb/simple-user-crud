<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    
    // Set the table name
    protected $table = 'user_addresses';
    
    // Turn off timestamps for this model
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address', 'province', 'city', 'country', 'postal_code'
    ];
    
    // Define the user relationship
    public function user(){
        return $this->belongsTo('App/User');
    }
    
}
