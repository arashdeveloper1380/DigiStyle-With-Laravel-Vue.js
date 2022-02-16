<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Response;
use DB;
use App\product;
use App\address;
use Auth;
use App\lib\bitpay\bitpay;
use App\order;
use App\order_product;
use App\User;
use Verta;
use Mail;  
use App\Mail\OrdersStatus;
class ShopingController extends Controller
{
    









public function addcart(Request $request){


    if (session::has('cart')) {
      
        $cart=session::get('cart');

        if (array_key_exists($request->product_id, $cart)) {



            $cart[$request->product_id]++;
            # code...
        }else{
           $cart[$request->product_id]=1; 
        }

        session::put('cart',$cart);
    }else{
        $cart=array();
        $cart[$request->product_id]=1; 
         session::put('cart',$cart);
    }

    return view('shoping');



}


    public function deletecart(Request $request){


        $cart=session::get('cart');
        session::forget('cart');

        $cart2=array();

        foreach ($cart as $key => $value) {


           
           if ($key!=$request->product_id) {
             
             $cart2[$key]= $value;

           }else{
            $count=$cart[$request->product_id]-1;

            if ($count == 0) {
                # code...
            }
            else{
                $cart2[$request->product_id]=$count;
            }

           }

        }

        session::put('cart',$cart2);
          return view('shoping');


    }

        public function report(){
        
           /* $order=order::select('user_id',DB::raw('count(*) as sums'))
            ->groupBy('user_id')

            ->orderby('sums' ,'desc')
            ->get();*/

$order=order::select(DB::raw('count(*) as sums'),DB::raw('created_at  as months'))
            ->groupBy('months')

         
            ->get();
            return $order;
        }




    public function Addaddress(Request $request){


        $address=new address();

        $address->name=$request->fname;
        $address->city=$request->city;
        $address->mobile=$request->mobile;
        $address->phone=$request->phone;
        $address->codecity=$request->codecity;
        $address->address=$request->address;
        $address->zipcode=$request->zipcode;
        $address->province=$request->province;
        $address->user_id=Auth::user()->id;
        $address->status=0;

        if ($address->save()) {


            return $address; 
            # code...
        }



    }



    public function updatestatus(Request $request){


        $user_id=Auth::user()->id;


        $ad=address::find($request->id)->status;

$address=address::where('user_id',$user_id)->where('status',1)->update([

            'status'=>0



        ]);


        if($ad == 0){
 $address=address::where('user_id',$user_id)->where('id',$request->id)->update([

            'status'=>1



        ]);


        }else{

             $address=address::where('user_id',$user_id)->where('id',$request->id)->update([

            'status'=>0



        ]);

        }

       

  

            return $address;
            # code...
    


    }





    public function deleteaddress(Request $request){

        $address=address::find($request->id)->delete();


        if ($address) {

            return 'true';
            # code...
        }

    }

    public function store($id1){


  
$id=time().uniqid().'12a3';

    $price=0;

    
    $user_id=Auth::user()->id;

    $order=new order();



    $order->status=0;
    $order->id_orders=$id;
    $order->user_id=$user_id;

    $order->address_id=$id1;
  

   
 if ($order->save()) {

    
    if(!empty(Session::get('cart'))){

  foreach(Session::get('cart') as $key=>$value){
  

    $price+=product::where('id',$key)->first()['price']*$value;


    $orders=new order_product();

    $orders->product_id=$key;
    $orders->count=$value;
    $orders->price=$price;
    $orders->order_id=$order->id;

    $orders->save();
 
      
  }
        }




    session::put('id_orders',$order->id);
      


    $url = 'http://bitpay.ir/payment-test/gateway-send'; 
    $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
    $amount =$price;
    $redirect =url('/buyback');
    $name = Auth::user()->name;
    $email = Auth::user()->email;
    $description = Auth::user()->name;
    $factorId =$id;
    
    $result =bitpay::send($url,$api,$amount,$redirect,$factorId,$name,$email,$description); 
    
  if($result > 0 && is_numeric($result))
            {
            
                session::forget('cart');

                
              return redirect('http://bitpay.ir/payment-test/gateway-'.$result);
             } else if($result==-1){

            echo '-1';

       
        } else if($result==-2){

            echo '-2';

        } else if($result==-3){

            echo '-3';

        } else if($result==-4){

            echo '-4';

        }









}







    }







       
    public function update(Request $request){

        $status=$request->status;
        $id=$request->id;



        $order=order::find($id);


        $order->status=$status;

        if ($order->update()) {
           return redirect('/admin/buy');
        }


        


    }




    public function buy(){

            $order=order::orderby('id','desc')->get();

            $product_orders=order_product::orderby('id','desc')->get();

        return view('admin.orders.index',['order'=>$order , 'product_orders' =>$product_orders]);

    }

     public function buyback(Request $request){

    $url = 'http://bitpay.ir/payment-test/gateway-result-second'; 
    $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
    $trans_id =$request->trans_id; 
    $id_get = $request->id_get;
    $order=order::find(session::get('id_orders'));

    $order->trans_id=$trans_id;
    $order->id_get=$id_get;
       $user=User::find($order->user_id);
    $result = bitpay::get($url,$api,$trans_id,$id_get); 


    if($result == 1)
    {
       $order->status=1;

       Mail::to($user->email)->send(new OrdersStatus($user,$order));
       if ($order->update()) {
       
         session::forget('id_orders');

         return redirect('/');
       }
      
    }
    else
    {
        return 'خطا در ازتباط';
    }
        
    }

}