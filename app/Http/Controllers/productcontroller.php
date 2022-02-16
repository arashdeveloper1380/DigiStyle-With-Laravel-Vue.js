<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\attributegroup;
use App\attribute;
use App\product;
use App\image;
use App\size;
use App\attributeitem;
use App\brand;
use App\discount;
use App\image_product;
use App\productbrand;
use App\productsize;
use App\productitem;
use App\attribute_product;
use DB;
class productcontroller extends Controller
{
    

    public function index(){

    	$category=category::all();
    	$attributegroup=attributegroup::all();
    	$attribute=attribute::all();
        $size=size::all();
        $attributeitem=attributeitem::all();
        $brand=brand::all();
        $discount=discount::all();
    	return view('admin.product.index',['category'=>$category,'attributegroup'=>$attributegroup,'attribute'=>$attribute,'size'=>$size,'attributeitem'=>$attributeitem,'brand'=>$brand,'discount'=>$discount]);


    }


   
    public function create(){

        $product=product::all();
        $image=image_product::all();
        $brand=productbrand::all();
        $attributeitem=productitem::all();
        $size=productsize::all();
        $category=category::all();
        $attributegroup=attributegroup::all();
        $attribute=attribute::all();
        $size1=size::all();
        $attributeitem1=attributeitem::all();
        $brand1=brand::all();
        $discount=discount::all();
        return view('admin.product.show',['product'=>$product,'image'=>$image,'brand'=>$brand,'attributeitem'=>$attributeitem,'size'=>$size,'category'=>$category,'attributegroup'=>$attributegroup,'attribute'=>$attribute,'size1'=>$size1,'attributeitem1'=>$attributeitem1,'brand1'=>$brand1,'discount'=>$discount]);

    }
   

        public function delete(Request $request){

            $delete=product::find($request->id)->delete();


            if ($delete) {
               return 'true';
            }
        }
    public function addproduct(Request $request){

    	$price=$request->price;
    	$name=$request->name;
    	$desc=$request->desc;
        $category=$request->category;


    	$product=new product();

    	$product->name=$name;
    	$product->price=$price;
    	$product->desc=$desc;
        $product->category_id=$category;

    	if($product->save())
    	{

    		return $product;

    	}



    }




    public function image(Request $request)
    {

        $id=$request->id;
    	$file=$request->file('file');

    	 $filename=time().$file->getClientOriginalName();

    	 $file->move('imageproduct',$filename);

    	 $image=new image();


    	 $image->image=$filename;


    	 if ($image->save()) {
    	 	if ($id) {
              $product=product::find($id);

            }else{
                 $product=product::latest()->first();
            }

           
            $image=image::find($image->id);

    	 	return $product->images()->attach($image->id);

    	 }


    }






        public function deleteimage(Request $request){

           $imageID=$request->imageID;
           

           $image=image_product::find($imageID)->delete();

           if($image){
            return 'true';
           }


        }

    public function imageproduct(Request $request){

        $file=$request->file('file');

         $filename=time().$file->getClientOriginalName();

         $file->move('imageproduct',$filename);

         $product=product::latest()->first();

         $products=product::where('id',$product->id)->update(['image'=>$filename]);

         return $product;

    }

    public function size(Request $request){


    
        

        $id=$request->id;

        if($id){

            $product=product::find($id);
             $size_id=$request->size;

        }else{

            $product=product::latest()->first();
                    $size_id=$request->sizeid;
        }


      
  return $product->sizes()->attach($size_id);
     

        
    }





    public function addattribute(Request $request){


  

        
          $id=$request->id;

        if($id){

            $product=product::find($id);
           $attributeid=$request->attribute;

        }else{
          $product=product::latest()->first();

            $attributeid=$request->attributeid;

        }



        
      return   $product->attributes()->attach($attributeid);

        
    }

    public function addattributeitem(Request $request){



        
 $id=$request->id;

        if($id){

            $product=product::find($id);

                 $attributeitemid=$request->attributeitem;

         }
           else{
                $product=product::latest()->first();
                     $attributeitemid=$request->attributeitemid;
          }
        

     return   $product->attributeitems()->attach($attributeitemid);

        
    }

    

    public function addcategory(Request $request){


        
        $categoryid=$request->categoryid;
          



        $product=product::latest()->first();

        $product->categorys()->attach($categoryid);

        
    }


    public function addbrand(Request $request){


        
   
          
          $id=$request->id;

        if($id){

            $product=product::find($id);
                 $brandid=$request->brand;

        }else{
              $product=product::latest()->first();
                   $brandid=$request->brandid;

        }



     

        return $product->brands()->attach($brandid);

    
    }



    public function Editproduct(Request $request){

        $id=$request->id;

        $product=DB::table('products as t1')->where('t1.id',$id)
        ->select("t1.*","t3.size","t5.name1","t6.name2")
        ->leftjoin("product_size As t2","t1.id","=","t2.product_id")
        ->leftjoin("sizes As t3","t2.size_id","=","t3.id")

        ->leftjoin("attributeitem_product As t4","t4.product_id","=","t1.id")
        ->leftjoin("attributeitems As t5","t4.attributeitem_id","=","t5.id")
        ->leftjoin("attributes As t6","t5.attribut_id","=","t6.id")




       ->get();

        return $product;

    }


    public function updateproduct(Request $request){

       $image=$request->file('file');

       $filename=time().$image->getClientOriginalName();

       $image->move('imageproduct',$filename);

       $product=product::where('id',$request->id)->update([

        'name'=>$request->name,
        'desc'=>$request->desc,
        'price'=>$request->price,
        'category_id'=>$request->category_id,
        'image'=>$filename





       ]);

       if ($product) {
           
        return $product;
       }



    }


    public function updatesize(Request $request){

        $id=$request->id;
        $size_id=$request->sizeid;

        $product=product::find($id);

        $sizes=productsize::where('product_id',$id)->first();


        if($sizes)
        {
             $size=productsize::where('product_id',$id)->update([

            'size_id'=>$size_id

        ]);
         }else{

            $size=$product->sizes()->attach($size_id);


         }
       
      
          return $size;
     


    }

    public function updateattribute(Request $request){



         $id=$request->id;
        $attribute_id=$request->attributeid;

        $product=product::find($id);

        $attr=attribute_product::where('product_id',$id)->first();


        if($attr)
        {
             $attrs=attribute_product::where('product_id',$id)->update([

            'attribute_id'=>$attribute_id

        ]);
         }else{

            $attrs=$product->attributes()->attach($attribute_id);


         }
       
      
          return $attrs;
        
    }

    public function updateattributeitem(Request $request){


             $id=$request->id;
        $attributeitem_id=$request->attributeitemid;

        $product=product::find($id);

        $attribute=productitem::where('product_id',$id)->first();


        if($attribute)
        {
             $attributes=productitem::where('product_id',$id)->update([

            'attributeitem_id'=>$attributeitem_id

        ]);
         }else{

            $attributes=$product->attributeitems()->attach($attributeitem_id);


         }
       
      
          return $attributes;
        
    }

    public function updatevaluebrand(Request $request){

        
         $id=$request->id;
        $brand_id=$request->brandid;

        $product=product::find($id);

        $brand=productbrand::where('product_id',$id)->first();


        if($brand)
        {
             $brands=productbrand::where('product_id',$id)->update([

            'brand_id'=>$brand_id

        ]);
         }else{

            $brands=$product->brands()->attach($brand_id);


         }
       
      
          return $brand;

    }
 

}
