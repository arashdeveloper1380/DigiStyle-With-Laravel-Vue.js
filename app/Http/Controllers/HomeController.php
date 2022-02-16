<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\product;
use App\slide;
use App\banner;
use App\image_product;
use App\productbrand;
use App\discount;
use App\image;
use Morilog\Jalali\jDate;
use App\productsize;
use App\attribute;
use App\productitem;
use App\comment;
use Session;
use Verta;
use DB;
use App\address;
use Auth;
use App\User;
use App\order;
use App\order_product;
use App\listproduct;
use Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

   

  public function showlist(){


    $user_id=Auth::user()->id;  
    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');

      $list=listproduct::where('user_id',$user_id)->get();

      $order=order::where('user_id',$user_id)->get()->count();
      $order1=order::where('user_id',$user_id)->where('status',2)->get()->count();
      $order2=order::where('user_id',$user_id)->where('status',3)->get()->count();
      $order3=order::where('user_id',$user_id)->where('status',4)->get()->count();
      $comment=comment::where('user_id',$user_id)->get()->count();

   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.listorders',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'list'=>$list,'order'=>$order,'order1'=>$order1,'order2'=>$order2,'order3'=>$order3]);
  }


    public function reportcomment(){
    $user_id=Auth::user()->id;  
          $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');

      $comment=comment::where('user_id',$user_id)->get();


   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.comment',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'comment'=>$comment]);


    }



    public function OrderReport(){

    $user_id=Auth::user()->id;    
    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');




      $order=order::where('user_id',$user_id)->get()->count();
      $order1=order::where('user_id',$user_id)->where('status',2)->get()->count();
      $order2=order::where('user_id',$user_id)->where('status',3)->get()->count();
      $order3=order::where('user_id',$user_id)->where('status',4)->get()->count();
      $comment=comment::where('user_id',$user_id)->get()->count();



   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.report',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'order'=>$order,'order1'=>$order1,'order2'=>$order2,'order3'=>$order3,'comment'=>$comment]);

    }


    public function AddAddress(){

    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');
   
   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.address',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount]);

    }

    public function countorder(){

    $user_id=Auth::user()->id;    
    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');

   $order=order::where('user_id',$user_id)->get();

   $product_orders =order_product::all();
   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.orders',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'order'=>$order,'product_orders'=>$product_orders]);


    }


    public function updateuser(){




    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');
   
   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.edit',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount]);


    }





      public function index(){

$user_id=Auth::user()->id;
    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');
   $user=User::find($user_id);
   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('user.index',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'user'=>$user]);

  }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function checklogin(){


    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');
   
   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('caheck-login',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount]);
    
    }



    public function create(){

    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $slide=slide::orderby('id','desc')->get();
    $banner=banner::latest()->first();
    $banner1=banner::orderby('id','desc')->get();
    $image= image_product::orderby('id','desc')->get();
    $productbrand=productbrand::orderby('id','desc')->get();
    $date=jDate::forge(now())->format('date');
   
   $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();
    
        return view('welcome',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'slide'=> $slide,'banner'=> $banner,'banner1'=> $banner1,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount]);

    }



    public function filter(Request $request){

    $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $banner=banner::latest()->first();
     $image= image_product::all();
   $id=$request->id;
    // $attributeitem=productitem::orderby('id','desc')->get();
$attributeitem = DB::table('attributeitem_product')
            ->select('id','product_id', 'attributeitem_id')
            ->distinct()
            ->get();
      $attributes=attribute::all();
     $productbrand=productbrand::all();
     $v=new Verta();

    $v->formatJalaliDate();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();

    $size=productsize::all();
    
            return view('filter',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'banner'=> $banner,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'id'=>$id,'size'=>$size,'attributes'=>$attributes,'attributeitem'=>$attributeitem]);

        }

        public function single($id,$id1){

              $menus = category::where('parent_id',0)->get();
    $submenus = category::where('parent_id','!=',0)->get();
    $brand=brand::all();
    $product=product::all();
    $banner=banner::latest()->first();
     $image= image_product::all();
  
    $attributeitem=productitem::orderby('id','desc')->get();
/*$attributeitem = DB::table('attributeitem_product')
            ->select('id','product_id', 'attributeitem_id')
            ->distinct()
            ->get();*/
      $attributes=attribute::all();
     $productbrand=productbrand::orderby('id','desc')->get();
     $v=new Verta();
    $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->get();

    $size=productsize::all();
    
            return view('single',['menus'=>$menus,'submenus'=>$submenus,'brand'=>$brand,'product'=>$product,'banner'=> $banner,'image'=>$image,'productbrand'=>$productbrand,'discount'=>$discount,'id'=>$id,'id1'=>$id1,'size'=>$size,'attributes'=>$attributes,'attributeitem'=>$attributeitem]);

        }



        public function product(){

     
            



        
       $product=product::latest()->paginate(20);
        
           $response=[

                'pagination'=>[

                    'total'=>$product->total(),
                    'per_page'=>$product->perPage(),
                    'current_page'=>$product->currentPage(),
                    'last_page'=>$product->lastPage(),
                    'from'=>$product->firstitem(),
                    'to'=>$product->lastitem()

                ],

                'data'=>$product

            ];



           return response()->json($response);
        }


     
        public function productimage(Request $request){

            $image=image_product::where('product_id',$request->id)->get();

    foreach ($image as  $images) {

        $img=image::find($images->image_id);

        return $img->image;

        # code...
    }
        }

        public function productitem(){
      $product=DB::table('products as t1')
        ->selectRaw("t1.id , t5.name1")
        
        
        
        ->join("attributeitem_product As t4","t4.product_id","=","t1.id")
        ->join("attributeitems As t5","t4.attributeitem_id","=","t5.id")
        ->join("attributes As t6","t5.attribut_id","=","t6.id")




        ->get();

        return $product;

}

  public function checkout1(){

    return view('checkout1');
  }



   public function checkout2(){

    return view('checkout2');
  }


   public function checkout3(){

    $user_id=Auth::user()->id;
    $address=address::where('user_id',$user_id)->where('status',1)->get();

    return view('checkout3',['address'=>$address]);
  }
}
