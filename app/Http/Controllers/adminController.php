<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\order_product;
use App\comment;
use App\User;
use App\product;

class adminController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function index(){

		      $order=order::orderby('id','desc')->get();

            $product_orders=order_product::orderby('id','desc')->get();

            $comment=comment::orderby('id','desc')->get();
            $user=User::orderby('id','desc')->get();
              $product=product::orderby('id','desc')->get();
          


        return view('admin.index',['order'=>$order , 'product_orders' =>$product_orders,'comment'=>$comment,'user'=>$user,'product'=>$product]);
	}

}
