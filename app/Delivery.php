<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['deliver_date','name', 'address', 'phone', 'status', 'order_id'];

    public function order($value='')
    {
    	return $this->belongsTo('App\Order');
    }

    public function delivery()
    {
    	return $this->hasManyThrough('App\User','App\Order');
    }
}
