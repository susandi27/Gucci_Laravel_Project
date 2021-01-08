<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Carbon\Carbon;
use App\User;
use App\Delivery;


class BackendController extends Controller
{
    public function dashboard($value='')
    {

       	//$mytime = Carbon::now();
    	$users = User::all();
        $count_user=count($users);
        $orders= Order::whereDate('created_at', Carbon::today())->get();
        $today_orders=count( $orders);
        $visited_users= User::whereDate('created_at', Carbon::today())->get();
        $today_users=count( $visited_users);
        //dd($count_user);
        $allorders=Order::take(7)->get();
    	return view('dashboard',compact('users','count_user','today_orders','today_users','allorders'));
    }

    public function orderconfirm($value='')
    {
    	$orders = Order::all();
    	return view('backend.orders.orderconfirm',compact('orders'));
    }

    public function orderhistory($value='')
    {
    	$orders = Order::all();
    	return view('backend.orders.orderhistory',compact('orders'));

    }

    public function delivered($value='')
    {
        $deliveries = Delivery::all();
        return view('backend.deliveries.delivered',compact('deliveries'));

    }
   
}
