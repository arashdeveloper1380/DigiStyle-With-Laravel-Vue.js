
<?php

use App\image_product;

?>

@extends('layouts.indexLayouts')

@section('content')



	<section id="content" >
		
		<div class="container-large" id="app">
			
			<div class="col-lg-12">
				

				<div class="col-lg-9">

				<section style="margin-top: 17px;">

					<span class="title">

					
						<h3>عنوان کالا</h3>


					</span>
					 

					<span class="sort">
						
			
			<div class="box">
				

				<label class="right" style="margin-top: 53px;">مرتب سازی بر اساس : </label>
				
                               

				 <div class="form-inline sorting-by" style="position: absolute;">
                                    
                                    <select id="isotopeSorting" class="span3 ignore">
                                        <option data-isotope-option='{"sortBy":"price", "sortAscending":"true"}'>بر اساس قیمت (کم به زیاد) &uarr;</option>
                                        <option data-isotope-option='{"sortBy":"price", "sortAscending":"false"}'>بر اساس قیمت (زیاد به کم) &darr;</option>
                                      
                                      
                                    </select>
                                </div>


			</div>



				<div class="pagination" id="paginationup">
					<button class="btn btn-default" @click="fetchproduct(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"  >صفحه قبل</button>
					

					<span>

						<span>صفحه</span>
						<span>@{{pagination.current_page}}</span>

						<span>از</span>
						<span>@{{pagination.last_page}}</span>	


				</span>

					<button class="btn btn-default" @click="fetchproduct(pagination.next_page_url)" :disabled="!pagination.next_page_url"  >صفحه بعد</button>

				</div>


					</span>


					<div class="content " style="margin-top: 140px;">


					<ul  id="products" v-for="product in productss ">

					

						@foreach($submenus as  $submenu)

						@if($submenu->parent_id == $id || $submenu->id == $id)
					
						@foreach($productbrand as $productbrands)
						@foreach($brand as $brands)
						@if($brands->id == $productbrands->brand_id)

				
				

				
					
										


						<div  class="col-lg-4 resultblock image-box system"  style="height: 510px;" v-if="product.category_id == {{$submenu->id}} && product.id == {{$productbrands->product_id}} "  data-brand="{{$brands->name}}" :data-price="product.price" >





						   @foreach($attributeitem as   $attributeitems)

                                        @if($productbrands->product_id == $attributeitems->product_id)
                                        
                                        {!! getattributeitems($attributeitems->attributeitem_id)!!}

                                        @endif
                                        @endforeach

								
						
							<li v-on:mouseover="productimage(product.id)" >
								
									@foreach($discount as $discounts)

			
		

				
				

					
				<p v-if="product.id == {{$discounts->product_id}}">

				<span class="discount">
					
					<span class="discount1">{{$discounts->value}}%</span>



				</span>
				
				{!! getprice($discounts->product_id,$discounts->id) !!}
				</p>

			
				
				@endforeach

				
									





					<p :id="'product'+product.id"></p>
			
		

					
				<img :src="'/imageproduct/'+ product.image" class="animated fadeIn">





							</li >	

							<span class="magnifier">
								

								<a href="#"  data-toggle="modal" :data-target="'#product1'+product.id">
									

									<img src="/img/magnifier.png">


								</a>


							</span>

		
						<span class="brand">{{$brands->name}}</span>
				
						
				

				
				<span class="productname" >@{{product.name}}</span>
				<span class="price">@{{product.price}}تومان</span>	



			<div class="sizelist">
							@foreach($size as $sizes)

										
										<p v-if="product.id == {{$sizes->product_id}}">
										@foreach(getsizeproduct($sizes->size_id) as $sizess)


									<a href="#">{{$sizess->size}}</a>



										@endforeach
										</p>
										@endforeach
			
				</div>
					

		


						</div>
	 
						@endif
						@endforeach
  						@endforeach		
						@endif
					
						@endforeach



						</ul>



							<div class="pagination" id="paginationdown">
					<button class="btn btn-default" @click="fetchproduct(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"  >صفحه قبل</button>
					

					<span>

						<span>صفحه</span>
						<span>@{{pagination.current_page}}</span>

						<span>از</span>
						<span>@{{pagination.last_page}}</span>	


				</span>

					<button class="btn btn-default" @click="fetchproduct(pagination.next_page_url)" :disabled="!pagination.next_page_url"  >صفحه بعد</button>

				</div>


					</div>

		</section>

			</div>


				<div class="col-lg-3">


				<aside>

		
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                    براساس قیمت
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    



				<div class="rangefilter">
										
				<div id="slider-container"></div>
				<p>
				    <label >فیمت</label>
				    <input type="text" id="price" class="form-control col-md-2" />
				</p>

				<div id="slider-range"></div>
				</div>



                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                      بر اساس برند
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                   


                		<div id="filterbrand">
					


						@foreach($brand as  $brands)


						<div class="filterblock">
							
							<input type="checkbox" name="check" value="{{$brands->name}}" class="brandfilter">

							<label>{{$brands->name}}</label>

						</div>


						@endforeach


				</div>
				





                </div>
            </div>
        </div>




	@foreach($attributes as $attributess)
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree{{$attributess->id}}" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                      <h5>بر اساس: {{$attributess->name2}} </h5>
                    </a>
                </h4>
            </div>
            <div id="collapseThree{{$attributess->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                   




                	<div id="filterss" class='sections'>
	
	<div class="filter-attributes">
		


			
					

				@foreach(getattributeitem() as $item)
 	
 				@if($item->attribut_id == $attributess->id)



 				<div class="filterblock">
 					

 					<input  type="checkbox" name="pruduct" v-on:click="filters"  value="{{$item->id}}" >
            <label for="check1">{{$item->name1}}</label>

 				</div>

 				@endif
 	

 				@endforeach
 				


	</div>


</div>










                </div>
            </div>
        </div>
		@endforeach






    </div><!-- panel-group -->







        
				</aside>

				</div>

@include('product')
				


			</div>



		</div>



	</section>





@endsection