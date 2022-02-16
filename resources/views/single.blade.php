@extends('layouts.singleLayouts')

@section('content')


@foreach($product as $products)


@if($products->id == $id)
<div id="app">

<section id="content" style="border-top: 1px solid #ddd ; " class="sc-product-item">
		
		<div class="container-large" id="">
			

			<div class="col-lg-12" style="margin-top: 37px;">


								<div class="carousel2">
									

									<div id="pager" class="pager">
										

									
										@foreach($image as $images)
										@if($images->product_id == $id)
										@foreach(getimage1($images->image_id) as $image1)

										
										<span id="item{{$images->image_id}}" onmouseover="img('{{$images->image_id}}')">
										<img data-name="product_image" src="/imageproduct/{{$image1->image}}" width="120px" width="120px">
										</span>


								     


										@endforeach
										@endif
										@endforeach
									

									</div>
									<a href="#" id="next4" class="next3" style="right:9% !important;"><i class="icon icon-angle-up" ></i></a>
									<a href="#" id="prev4" class="prev3"  style="margin-top:15% !important; right:9% !important;"><i class="icon icon-angle-down"></i></a>



				@foreach($discount as $discounts)

			


				@if($discounts->product_id == $id )
				
 	
					
				

				<span class="discounts">
					
					<span class="discounts1">{{$discounts->value}}%</span>



				</span>
				
				@endif
				@endforeach


									<div id="carousel" class="carousel" style="display: block;">
										

						
			





									</div>




								</div>







								<!--left content-*-->




								<section class="content-left" style=" margin-top:3% ;width: 51% !important;">


									<span class="brand-left" style="top: -11% !important; position:absolute; right: 11%;">
										
										@foreach($productbrand as $productbrands)

				@if($productbrands->product_id==$id)


				{!! getproductbrands($productbrands->brand_id) !!}


				@endif

				@endforeach

									</span>

			

							<span class="products-name1" data-name="product_name">
								

								<h5>{{$products->name}}</h5>


							</span>




								<div class="boxs" style="right:13% !important; margin-top:160px !important;">
				

								
									<select class="right size_list" >
										

										<option data-display="انتخاب کنید"></option>

										@foreach($size as $sizes)
										@if($sizes->product_id == $id)

										@foreach(getsizeproduct($sizes->size_id) as $sizess)


										<option value="{{$sizess->id}}">{{$sizess->size}}</option>



										@endforeach
										@endif
										@endforeach
									</select>

							</div>




							<span class="products-price1" style="margin-top:70px !important; ">
								
								

								@if(is_null(getprice1($id)))

								<h5 >{{$products->price}}</h5>	
								<h6>تومان</h6>
								@else

								{!! getprice1($id) !!}

								@endif


								

							</span>



							<button class="shoping-cart sc-add-to-cart"  style="line-height: 42px !important; margin-top: 190px !important;"  onclick="addcart({{$id}})">
								
								<i class="icon1 icon1-cart"></i>


								<span>افزودن به سبد خرید</span>


							</button>

					
					<a href="#" data-toggle="tooltip" title="  افزودن به لیست خرید بعدی"  style="font-size: 17px; position: absolute;float: left; right: 50%;top: 43%;width: 44px;">

					<i class="fa fa-heart-o" style="font-size: 34px;color: #b9b3b3;" v-on:click="addlist('{{$id}}')"></i>

					<div class="tooltip top" role="tooltip">
					  <div class="tooltip-arrow"></div>
					  <div class="tooltip-inner">
					  <img src="/img/heart.png" >
					  </div>
					</div>
</a>

							<a href="#">
									
									<i class="icon1 icon1-tike"></i>
									<span style="position: relative;

									color:#666;padding-top:14px;font-size: 11px;
									vertical-align:middle;padding-left: 6px; 
									right:16%;

									">ضمانت هفت روز بازگشت کالا</span>
							</a>
							<a href="#">
									
									<i class="icon1 icon1-car"></i>
								
                                   <span style="position: relative;

									color:#666;padding-top:14px;font-size: 11px;
									right:16%;
									vertical-align:middle; 

									">تحویل رایگان</span>
							</a>
							<a href="#">
									
									<i class="icon1 icon1-tike1"></i>

							<span style="position: relative;

									color:#666;padding-top:14px;font-size: 11px;
									right:16%;
									vertical-align:middle;

									">ضمانت اصل بودن کالا</span>							
</a>

						

            <input name="product_price" value="{{$products->price}}" type="hidden" />
            <!-- PRODUCT ID, identified by name="product_id" or can be an element with data-name="product_id"  -->
            <input name="product_id" value="{{$id}}" type="hidden" />

							<div class="products-d">
								
								<h5>ویژگی ها</h5>

								<ul>
								
									<li data-name="product_desc">{{$products->desc}}</li>
						
								</ul>


							</div>






								</section>




							</div>
								
							
					</section>


<div id="tabpanel" style="min-height: 600px;">
									

									<div id="exTab1" class="container">	

									<ul  class="nav nav-pills">

												<li class="active" style="margin-right: 27%;">

									        <a  href="#1a" data-toggle="tab">مشخصات محصول</a>
												</li>

												<li>
													<a href="#2a" data-toggle="tab">

												نظرات کاربران

												</a>
												</li>
												
											</ul>


												<div class="tab-content clearfix">
										  <div class="tab-pane active" id="1a">
							        

										  	<table class="table table-striped">

										  		<thead>
										  			
										  			<tr>
										  				
										  				<th style="text-align: right; width: 20%;"></th>
										  				<th style="text-align: right;"></th>

										  			</tr>

										  		</thead>
										  	
 											<tbody>
 													
													@foreach($attributeitem as   $attributeitems)

										@if($attributeitems->product_id==$id)

										{!! getattribute1($attributeitems->attributeitem_id)!!}

										@endif 

										@endforeach
 											</tbody>
											</table>




											</div>
											<div class="tab-pane" id="2a">
							                 <h5>لطفا قبل از نوشتن نظر خود در مورد این محصول، قوانین و ضوابط را مطالعه کنید. </h5>


							                 <span style="height:65px; width: 97%; background-color: #f5f5f5;position: absolute;
 ">
							                 	

							                 	<label style="float: right;position: relative;margin-top: 19px;margin-right: 26px;">سایز : </label>							                 		<select class="custom-size" v-model="commentsize">
										

										<option data-display="انتخاب کنید">انتخاب کنید</option>

										@foreach($size as $sizes)
										@if($sizes->product_id == $id)

										@foreach(getsizeproduct($sizes->size_id) as $sizess)


										<option value="{{$sizess->id}}" >{{$sizess->size}}</option>



										@endforeach
										@endif
										@endforeach
									</select>

							                 </span>

							               @if(Auth::user())
							                 <div class="comment-single" style="margin-top:9%;margin-bottom: 103px;">
							                 	

							                 	<div class="form-group">
							                 		

							                 		<label>عنوان نظر :</label>

							                 		<input type="text" name="" class="form-control input-single" placeholder="عنوان نظر خود را وارد کنید ..." v-model="subjectcomment">

							                 	      	</div>


							                 	<div class="form-group">
							                 		
							                 		
							                 		<label>متن نظر :</label>

							                 		<textarea class="form-control textarea-single"  rows="7" v-model="textcomment"></textarea>

							                 	</div>


							                 	<input type="radio" name="" class="custom-radio" >
							                 	<span>خرید این محصول را پیشنهاد می کنم</span>

							                 		<input type="radio" name="" class="custom-radio" >
							                 	<span>خرید این محصول را پیشنهاد نمیکنم</span>


							                 	<input type="submit" name="" class="btn btn-success " value="ارسال نظر" style="float: left;" v-on:click="addcomment('{{$products->id}}')">

							                 </div><!--endcommentsingle -->
							                 @else

							                 <span class="usererror">برای نظر دادن ابندا باید وارد سایت شوید .</span>
							                 @endif


				              
<div style="">

{!! getcomment($products) !!}			                 

</div>


							                 
											</div>
        
         
											</div>


											
										</div>






											<div class="wrapper1">
	<h4 style="margin-right: 73px;">محصولات مرتبط با این کالا</h2>	
		<div class="list_carousel">
			
			<ul id="foo1" class="">
				
				@foreach($product as $products)

				@if($products->category_id== $id1)
	
			<li>
				<a href="/singleproduct/{{$products->id}}/{{$products->category_id}}">

				@foreach($discount as $discounts)

			
		

				@if($discounts->product_id === $products->id )
				

					
				

				<span class="discount">
					
					<span class="discount1">{{$discounts->value}}%</span>



				</span>
				
				@endif
				@endforeach

				<img src="/imageproduct/{{$products->image}}" class="">


				@foreach($productbrand as $productbrands)

				@if($productbrands->product_id===$products->id)


				{!! getproductbrand($productbrands->brand_id) !!}


				@endif

				@endforeach
				
				<span class="productname">{{$products->name}}</span>
				<span class="price">{{$products->price}}تومان</span>	

				{!! getprice2($products->id) !!}
</a>
			</li>
	@endif
		
			@endforeach

			</ul>
			<div class="clearfix"></div>
			<a href="" id="next2">&lt;</a>
			<a href="" id="prev2">&gt;</a>
<div id="gallery">
	<div id="largeImage">
		
	</div>

		</div>


	</div>


</div>

		



								</div>

</div>
</div>

									@endif
								@endforeach


						<script type="text/javascript">
							
			
						</script>


						@endsection
  