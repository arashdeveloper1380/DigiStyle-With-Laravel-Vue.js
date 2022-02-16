<?php
use App\category;
use App\image;
use App\brand;
use App\attributegroup;
use App\attribute;
use App\attributeitem;
use App\size;
use App\product;
use App\banner;
use App\discount;
use App\image_product;
use App\productitem;
use App\User;
use App\comment;
use App\order;
use App\address;
use App\productbrand;

function getname($id){

	return User::find($id)->name;
}

function getemail($id){

	return User::find($id)->email;
}
/***************orders******************/


function getlistprice($id){

$product=product::find($id);

return $product->price;


}	




function getlistproduct($id,$size){



	$product=product::find($id);

	$sizes=size::find($size)->size;

return '<span style="position:absolute !important;margin-right: 118px;"> 

'.getOrderbrand($id).' 

</span>  


 <span style="margin-top: 32px;position: absolute !important;">'.$product->name.'</span>
  <span style="margin-top: 70px;position: absolute !important;">'.$sizes.'</span>
     <span style="float:right;"> <img src="/imageproduct/'.$product->image.'"  width="118px " height="172px"></span>'; 

}




function getOrderProducts($id){

$product=product::find($id);

return $product->name;

}




function getcategoryProduct($id){
	$product=product::find($id);

return $product->category_id;
}



function getOrderProduct($id){

$product=product::find($id);



return '<td>'.$product->name.'</td> <td> <img src="/imageproduct/'.$product->image.'"  width="80px " height="80px"></td>';



}	



function getOrderbrand($id){

	$product=productbrand::where('product_id',$id)->get();



	foreach ($product as  $products) {
		# code...
	

	return getproductbrand($products->brand_id);
}
	
}
function getOrderbrand1($id){

	$product=productbrand::where('product_id',$id)->get();



	foreach ($product as  $products) {
		# code...
	

	return '<td>'.getproductbrand($products->brand_id).'</td>';
}
	
}

function getOrderAddress($id){


	$address=address::find($id);



	return '<td>'.$address->address .'</td> <td>'.$address->codecity .' '.$address->phone .'</td>
	 <td>'.$address->mobile .'</td> <td>'.$address->zipcode  .'</td> <td>'.$address->province.'</td>
	  <td>'.$address->city  .'</td>';


}



/**********************************/
function flash($title,$message){


	$flash=app('App\Http\Flash');

	return $flash->message($title,$message);

}


function getproduct($id){

$product=product::find($id);


return $product->id;
}
	
function product($id){

$product=product::where('category_id',$id)->get();

foreach ($product as  $products) {


	return $products->name;
	
}

}	



function getprice($id,$id1)
{
	
$v=new Verta();
	 $price=product::find($id);

	
	$dis=discount::find($id1);

		if ($price->id == $dis->product_id) {
	
		$dis1=$dis->value*$price->price/100;
		$price2=$price->price-$dis1;

		return '<span class="price2"><span class="price1">'.$price->price.'</span> <span class="price4">'.$price2.' تومان</span></span>';


		}




}

function getprice2($id)
{
	
$v=new Verta();
	$price=product::find($id);


	$discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->where('product_id',$id)->get();

	foreach ($discount as $discounts) {

		$dis=$discounts->value*$price->price/100;
		$price2=$price->price-$dis;

		return '<hr class="hr"><span class="product-price   prices">'.$price2.' تومان</span>' ;

		
	}


}

function getsizeproduct($id){

	return size::where('id',$id)->get();
}





function getprice1($id)
{
$v=new Verta();
	$price=product::find($id);


	$discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->where('product_id',$id)->get();

	foreach ($discount as $discounts) {

		$dis=$discounts->value*$price->price/100;
		$price2=$price->price-$dis;

		return ' <h5 >'.$price2.'</h5><h6> تومان</h6><span class="prices">'.$price->price.' تومان</span> <span class="product-discount">

		     تخفیف : '.$dis.' تومان</span> ' ;

		
	}
}

	function getproductbrand($id){

	$brand=brand::find($id);

		return'<span class="brand orderbrand" > '.$brand->name.'   </span>' ;
	}
	function getproductbrands($id){

	$brand=brand::find($id);

		return'<span class="brand1 brands" > <h4>'.$brand->name.' </h4> <h6> نماینده رسمی </h6></span>' ;
	}


	function getattributeitem(){

		return attributeitem::all();
	}
function getattributeitems($id){

		$attr=attributeitem::find($id);

		return '<span class="pruduct-box" data-pruduct='.$attr->id.'></span> ';
	}
function getproductid($id){

	$product=attributeitem::find($id);

	
	return $product->name1;
}
function getitem1(){
	return $attributeitem = DB::table('attributeitem_product')
            ->select('attributeitem_id')->
            groupBy('attributeitem_id')
            ->get();

          //  $users = DB::table('users') ->select('id','name', 'email') ->groupBy('name') ->get();
}

function item(){
return $attributeitem = DB::table('attributeitem_product')
            ->select('product_id')
            ->distinct()
            ->get();	
}

function getproductimage($id){
	

$image=image::find($id);


	
return '<img src="/imageproduct/'.$image->image.'">';





}

 function getCategory($id){

	$category=category::find($id);


	return $category->name;

}


function getimageproduct($id){

$image=image::find($id);

return '<img  src="/imageproduct/'.$image->image.'" width="250px;" height="220px;">';

}

function getimage($id){


	$image=image_product::where('product_id',strip_tags($id))->get();

	foreach ($image as  $images) {

		$img=image::find($images->image_id);

		return '<img  src="/imageproduct/'.$img->image.'" class="alternate-image">';

		# code...
	}



}	

function getimage1($id){

	return image::where('id',$id)->get();
}


function getbrand($id){

$brandss=brand::find($id);


return '<tr> <td>'.$brandss->name.'</td>	<td>'.$brandss->country.'</td>	<td><img  src="/imagebrand/'.$brandss->image.'" width="100px;" height="60px;"></td> </tr>';

}


function getbanner($id){

	$banner=banner::find($id);

	
	return $banner->category_id;


}


function getattributes($id){
	$attribute=attribute::find($id);
	return $attribute->name2;
}




function getattribute1($id){

	$attributeitem=attributeitem::find($id);

return '<tr><td>'.getattributes($attributeitem->attribut_id).'</td> <td>'.$attributeitem->name1.'</td></tr>';
	
}




function getattributegroup($id){


	$group=attributegroup::find($id);


	return $group->name;
}




function getgroup($id){

$size=size::find($id);


return '<tr><td>'.$size->size.'</td> <td>'.getattributegroup($size->attributgroup_id).'</td> </tr>';
}



function getbanners($id){

	$banner=banner::find($id);

	return $banner->category_id;
}



function getcomment($products ,$parent_id="0"){



	$comment=$products->comments()->where('parent_id',$parent_id)->get();



	if(count($comment)>0 ){

		$commentbody='';

			foreach ($comment as $comments) {
				

				if($comments->status==1){

				$answerbody='<button data-comment="'.$comments->id.'" type="button" 
				class="btn-xs btn-danger answerbutton" style="float:left;">پاسخ</button>';

				$commentbody.='<div class="col-lg-12 comment" style="float:right" >

				<span><p class="commentname">'.getname($comments->user_id).'</p></span>
				<span><p class="commentdate">'.$comments->date.'</p></span>
				<span><p style="margin-right:49px; margin-top: 60px;">'.$comments->text.'


				'.$answerbody.'



				</p></span>

				'.getcomment($products,$comments->id).'


				</div>';


}
			}

			return $commentbody;

	}


}




function category($parent_id="0"){


	$categorys=category::where('parent_id',$parent_id)->get();

	$body='';
	foreach ($categorys as $key=> $categoryss) {
		

		$body.='<li>



		 <a href="#">'.$categoryss->name.'</a>

<ul>
  '.category($categoryss->id).'
	
       <li >   <a> </a><li>

		
</ul>



		  </li>

  
		   ';




	}
return $body;


}

?>