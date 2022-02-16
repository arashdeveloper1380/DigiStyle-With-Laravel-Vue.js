
<?php
use Morilog\Jalali\jDate;

?>
@extends('layouts.adminLayouts')


@section('content')



		<div class="col-lg-8" style="margin-left: 13%;margin-right: 13%;" id="app">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">نمایش کل کالا های موجود  </h3>


				</div>
				<div class="panel panel-body">

						<table class="table" style="text-align: center;">
						<thead style="text-align: center;">
								<tr>
										<th>نام کالا</th>
										<th>قیمت </th>
										<th>تخفیف ها</th>
										<th>دسته کالا </th>
										<th>تاریخ قرار گیری در سایت</th>
										<th>مشاهده کالا</th>
										<th>ویرایش</th>
										<th>عملیات</th>

								</tr>



						</thead>	
						<tbody>
							
							@foreach($product as   $products)
							<tr>
								
								<td>{{  $products->name}}</td>
								<td>{{  $products->price}}تومان</td>
								<td>

									
									{{$products->getDiscount($products->id) }}


								</td>
								<td>{!! getCategory($products->category_id ) !!}</td>
								<td>{{  jDate::forge($products->created_at)->format('datetime') }}</td>

								<td>

									<input type="submit" data-toggle="modal"  data-target="#show{{$products->id}}" class="btn btn-info" value="مشاهده اطلاعات کالا" >


								</td>

								
								<td>

									<input type="submit" name="" class="btn btn-primary" value="ویرایش"
									v-on:click="EditProduct({{$products->id}})"  data-toggle="modal"  data-target="#EditProduct" >


								</td>
								<td>

									<input type="submit" name="" class="btn btn-danger" value="حذف"
									v-on:click="deleteproduct({{$products->id}})" >


								</td>

							</tr>
							@endforeach

						</tbody>


						</table>	

						<!--edit product-->


					<div class="modal fade" id="EditProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						

						<div class="modal-dialog" style="width:80%; ">
							
							<div class="modal-content">
								
								<div class="modal-header"></div>
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" style="text-align: center;">ویرایش محصولات</h4>
							</div>

							<div class="modal-body" style="background: #fff; overflow: hidden;">
								


						<div class="col-lg-5" style="float: right;margin-top: 20px;">

	<form action="/admin/updateproduct" method="post" class="dropzone" >						


{{csrf_field()}}
							<div class="form-group">

								<label for="name">نام کالا</label>
							<input type="text" name="name" class="form-control" placeholder="" id="ProductName">


							</div>

							<div class="form-group">

								<label for="name">توضیحات</label>
							<textarea  class="form-control" name="desc" id="ProductDesc"></textarea>


							</div>

							<div class="form-group">

								<label for="name">قیمت محصول</label>
							<input type="text" name="price" class="form-control" placeholder="" id="ProductPrice">


							</div>

								

							<div class="form-group">

								<label for="name">دسته بندی محصول</label>
							<select class="form-control" id="category_id" name="category_id">
								
									
								@foreach($category as $categorys)
								<option value="{{$categorys->id}}">{{$categorys->name}}</option>
								@endforeach

							</select>


							</div>


						

								
    
									

								

						


								

					</form>

						</div>



				<!--section 2-->
						





<div class="col-lg-5" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">سایز</label>

							<select class="form-control" id="size_id" >

					     		
							


								@foreach($size1 as $sizes)
								<option value="{{$sizes->id}}">{{$sizes->size}}</option>
								@endforeach
							</select>

						</div>

						



							<div class="form-group">

								<label for="name">عنوان خصوصیت</label>
							<select class="form-control"  id="attribute_id" >
								
							
							@foreach($attribute as $attributes)
								<option value="{{$attributes->id}}">{{$attributes->name2}}</option>
								@endforeach

							</select>


							</div>




							<div class="form-group">

								<label for="name">مقدار</label>
							<select class="form-control" id="attributeitem_id" >
								
						


								@foreach($attributeitem1 as $attributeitems)
								<option value="{{$attributeitems->id}}">{{$attributeitems->name1}}
								</option>
								@endforeach

							</select>


							</div>




							<div class="form-group">

								<label for="name">برند ها</label>
							<select class="form-control" id="brand_id">
								

								@foreach($brand1 as $brands)
								<option value="{{$brands->id}}">{{$brands->name}}</option>
								@endforeach

							</select>


							</div>



							<div class="form-group">

								<form action="/admin/productimage" method="post" class="dropzone" enctype="multipart/form-data">
    
									{{csrf_field()}}
									<input type="hidden" name="id" id="productID">

								</form>

							</div>



							



							









							</div>

								<div class="col-lg-1" style="float: right;margin-top: 47px;">


				<div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton" data-loading-text="در حال ذخیره سازی" autocomplete="off" v-on:click="updatesize">ویرایش</button>

							</div>



								<div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton1" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;"   v-on:click="updateattributetype">ویرایش</button>

							</div>




						     <div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton2" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;" v-on:click="updatevalueattributeitem">ویرایش</button>

							</div>




							    <div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton3" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;" v-on:click="updatevaluebrand">ویرایش</button>

							</div>







						




			</div>

		






			<div class="col-lg-1" style="float: right;margin-top: 47px;">


				<div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton" data-loading-text="در حال ذخیره سازی" autocomplete="off" v-on:click="addsize">ارسال</button>

							</div>



								<div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton1" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;"   v-on:click="addattributetype">ارسال</button>

							</div>




						     <div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton2" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;" v-on:click="addvalueattributeitem">ارسال</button>

							</div>




							    <div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton3" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;" v-on:click="addvaluebrand">ارسال</button>

							</div>







						




			</div>









						</div>



					</div>




</div>




						<!--show product-->
							@foreach($product as   $products)

					<div class="modal fade" id="show{{$products->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						

						<div class="modal-dialog" style="width:100%; ">
							
							<div class="modal-content">
								
								<div class="modal-header"></div>
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" style="text-align: center;">{{$products->name}}</h4>

							</div>

							<div class="modal-body" style="background: #fff; overflow: hidden;">
								


								<div class="col-lg-3" style="text-align: center;">
										
										<h3 style="font-size: 18px;margin-top: 53px;margin-bottom: 35px;">توضیحات کالا</h3>

				<span style="float: right;margin-right: 35px;">{{$products->desc}}</span>


								</div>


									<div class="col-lg-2">
											

										<h3 style="font-size: 18px;margin-top: 53px;margin-bottom: 35px;">عکس های کالا</h3>

										@foreach($image as   $images)

										@if($images->product_id==$products->id)

										<span>{!! getimageproduct($images->image_id)!!}<span>
											<span style="margin-right: 69px;"><input type="button" name="" class="btn btn-danger" value="حذف عکس" 
												v-on:click="deleteimage({{$images->id}})"></span>
										@endif 

										@endforeach



									</div>



									<div class="col-lg-3">
											


	<h3 style="font-size: 18px;margin-top: 53px;margin-bottom: 35px;">ویژگی های محصول</h3>

										<table class="table">
											


											


											<thead>
													<tr>
														
														<th>نام </th>
														<th>کشور</th>
														<th>تصویر</th>


													</tr>

													<tbody>
															

												@foreach($brand as   $brands)

										@if($brands->product_id==$products->id)

										{!! getbrand($brands->brand_id)!!}

										@endif 

										@endforeach

													</tbody>

											</thead>


										</table>


									</div>






									


									<div class="col-lg-2">
											


	<h3 style="font-size: 18px;margin-top: 53px;margin-bottom: 35px;">مشخصات محصول</h3>

										<table class="table">
											


											


											<thead>
													<tr>
														
														<th>نام </th>
														<th>نوع</th>
														



													</tr>

											</thead>
													<tbody>
															
										@foreach($attributeitem as   $attributeitems)

										@if($attributeitems->product_id==$products->id)

										{!! getattribute($attributeitems->attributeitem_id)!!}

										@endif 

										@endforeach

														



													</tbody>



										</table>


									</div>






										<div class="col-lg-2">
											


				<h3 style="font-size: 18px;margin-top: 53px;margin-bottom: 35px;">مشخصات محصول</h3>

										<table class="table">
											


											


											<thead>
													<tr>
														
														
														<th>سایز</th>
														<th>گروه کالایی</th>



													</tr>
											</thead>

													<tbody>
															


										@foreach($size as   $sizes)

										@if($sizes->product_id==$products->id)

										{!! getgroup($sizes->size_id)!!}

										@endif 

										@endforeach

										


													</tbody>

											


										</table>


									</div>







							</div>


						</div>



					</div>

					@endforeach

				</div>



			</div>
		</div>






@endsection