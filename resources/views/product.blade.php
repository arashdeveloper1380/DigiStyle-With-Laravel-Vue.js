
@foreach($product as $products)



<div class="modal fade" id="product1{{$products->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
						

						<div class="modal-dialog" style="width:63%; height: 1000px; ">
							
							<div class="modal-content" style="height: 70% ; border-radius:0px !important;  "   onmouseover="showdlider('{{$products->id}}')">
								
							
									
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								

								


								<div class="carousel1">
									

									<div id="pager{{$products->id}}" class="pager">
										

									
										@foreach($image as $images)
										@if($images->product_id == $products->id)
										@foreach(getimage1($images->image_id) as $image1)

										
										<span id="item{{$images->image_id}}" onmouseover="img('{{$images->image_id}}')">
										<img src="/imageproduct/{{$image1->image}}" width="120px" width="120px">
										</span>


								     


										@endforeach
										@endif
										@endforeach
									

									</div>
									<a href="#" id="next2{{$products->id}}" class="next3"><i class="icon icon-angle-up"></i></a>
									<a href="#" id="prev2{{$products->id}}" class="prev3"><i class="icon icon-angle-down"></i></a>



				@foreach($discount as $discounts)

			
		

				@if($discounts->product_id === $products->id )
				

					
				

				<span class="discounts">
					
					<span class="discounts1">{{$discounts->value}}%</span>



				</span>
				
				@endif
				@endforeach


									<div id="carousel{{$products->id}}" class="carousel" style="display: block;">
										

						
			





									</div>




								</div>







								<!--left content-*-->




								<section class="content-left">


									<span class="brand-left">
										
										@foreach($productbrand as $productbrands)

				@if($productbrands->product_id===$products->id)


				{!! getproductbrands($productbrands->brand_id) !!}


				@endif

				@endforeach

									</span>

			

							<span class="products-name">
								

								<h5>{{$products->name}}</h5>


							</span>




								<div class="boxs">
				

								
									<select class="right">
										

										<option data-display="امتخاب کنید"></option>

										@foreach($size as $sizes)
										@if($sizes->product_id == $products->id)

										@foreach(getsizeproduct($sizes->size_id) as $sizess)


										<option value="{{$sizess->id}}">{{$sizess->size}}</option>



										@endforeach
										@endif
										@endforeach
									</select>

							</div>




							<span class="products-price">
								
								

								@if(is_null(getprice1($products->id)))

								<h5>{{$products->price}}</h5>	
								<h6>تومان</h6>
								@else

								{!! getprice1($products->id) !!}

								@endif


								

							</span>



							<button class="shoping-cart "  onclick="addcart({{$products->id}})">
								
								<i class="icon1 icon1-cart"></i>


								<span>افزودن به سبد خرید</span>


							</button>

							<a href="#">
									
									<i class="icon1 icon1-tike"></i>


							</a>
							<a href="#">
									
									<i class="icon1 icon1-car"></i>


							</a>
							<a href="#">
									
									<i class="icon1 icon1-tike1"></i>


							</a>


							<a href="/singleproduct/{{$products->id}}/{{$products->category_id}}" class="single-product">
								
								<i class="icon icon-angle-left"></i>
								<span>مشاهده جزئیات محصول</span>
							</a>


								</section>


							</div>
						





							</div>




						
</div>
</div>


@endforeach