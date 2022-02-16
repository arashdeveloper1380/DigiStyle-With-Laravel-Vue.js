<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\discount;
use App\product;
class DiscountController extends Controller
{
    


    public function index(){

        $product=product::all();

    	return view('admin.discount.index',['product'=>$product]);
    }

    public function store(Request $request){


    	$begindate= $request->date;
    	$enddate= $request->date1;
    	$value= $request->value;
    	$name= $request->name;
        $code= $request->code;
        $product_id=$request->productId;


    	$discount=new discount();
    	$discount->name=$name;
    	$discount->value=$value;
    	$discount->enddate=$enddate;
    	$discount->begindate=$begindate;
        $discount->code=$code;
        $discount->product_id=$product_id;

    	if ($discount->save()) {
    	
    		return $discount;


    	}

    }


    public function show(){

        $discount=discount::orderby('id','desc')->paginate(8);
        return view('admin.discount.show',['discount'=>$discount]);

    }

    public function delete($id){
        
        $discount=discount::find($id)->delete();

        if ($discount) {
          return 'true';
        }


    }
   
}
