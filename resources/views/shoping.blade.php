<?php

use App\product;
use App\discount;

?>

    


    

 <?php $count=sizeof(Session::get('cart'));  ?>
<input type="hidden" name="" value=" {{$count}}" id="count1">

			<div class="minicart">
		@if(!empty(Session::get('cart')))


				<?php



				 $price=0


				 ?>




<ul class="minicart-content">
@foreach(Session::get('cart') as $key=>$value)


<?php 
   $v=new Verta();

		 $p=product::find($key); 

		 $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->where('product_id',$p->id)->first();




   ?>
<li><a href="#">

<img src="/imageproduct/{{$p->image}}" width="100px" height="100px" class="cart-image">
<p>{{$p->name}}</p>
<p>تعداد : {{$value}}</p>

	@if($discount)
<?php
		$dis1=$discount->value*$p->price/100;
		$price2=$p->price-$dis1;

 		$price+=$value*$price2; 

  ?>
<p>{{$price2}} تومان</p>

	@else
<?php $price+=$value*$p->price ; ?>
<p>{{$p->price}} تومان</p>
	@endif


<div onclick="deletecart('{{$p->id}}')"  class=""  style="float: left;margin-top: -29px;">حذف</div>


</a>
</li>

@endforeach

</ul>
<div class="minicart-header"><p>قیمت کل :{{$price}} تومان</p></div>


<div class="micart-footer"><a href="/checkout1">انتخاب و رفتن به مرجله بعد</a><i class="icon icon-angle-left"></i></span></div>
@endif



</div>






        