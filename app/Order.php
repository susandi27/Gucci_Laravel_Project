<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['orderdate', 'user_id', 'total',  'status', 'orderno'];

    public function products()
    {
        return $this->belongsToMany('App\Product','orderdetails')
                    ->withPivot('qty')
                    ->withTimestamps();
    }
    
    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function deliveries($value='')
    {
        return $this->hasMany('App\Delivery');
    }
}
