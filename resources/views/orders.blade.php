
		@foreach($order as $orders)

		<div class="modal fade" id="show{{$orders->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						

						<div class="modal-dialog" style="width:100%; ">
							
							<div class="modal-content">
								
								<div class="modal-header"></div>
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" style="text-align: center;">محصولات خریداری شده {!!getname($orders->user_id)!!}</h4>

							</div>

							 <div class="modal-body" style="background: #fff; overflow: hidden;">
								
							 	<table class="table table-hover table-condensed" style="margin-top: 54px; background-color:#fff ;  ">
					
					<thead>
						
						<tr>
							<th>نام کالا</th>
							<th>عکس محصول</th>
							<th>برند کالا </th>
							
							<th> قیمت</th>
							<th>تعداد</th>
							<th>آدرس</th>
							<th>شماره تماس ثابت </th>
							<th>شماره تماس اضطراری</th>
							<th>کد پستی</th>
							<th>استان</th>
							<th>شهر</th>
						</tr>

					</thead>

					<tbody>
						@foreach($product_orders as $product_order)

						@if($product_order->order_id == $orders->id)

						<tr>
							
							{!! getOrderProduct($product_order->product_id) !!}
						<td>{!! getOrderbrand($product_order->product_id) !!}<td>
							<td>{{$product_order->price}}</td>
							<td>{{$product_order->count}}</td>
							{!! getOrderAddress($orders->address_id) !!}
						</tr>

						@endif

						@endforeach

					</tbody>

				</table>





					    	</div>
						</div>
						</div>



						<div class="modal fade" id="edit{{$orders->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						

						<div class="modal-dialog" style="width:30%; ">
							
							<div class="modal-content" style="border-radius: 0px !important;">
								
								<div class="modal-header">	<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" style="text-align: center;">ویرایش وضعیت محصول کاربر{!!getname($orders->user_id)!!}</h4></div>
							

							
							 <div class="modal-body" style="background: #fff;">
								



							 	<form action="/admin/updateorders" method="post">

							 		{{csrf_field()}}

							 		<input type="hidden" name="id" value="{{$orders->id}}">
							 	<select class="order" name="status">
							 		

							 		<option data-display="انتخاب کنید">انتخاب کنید</option>


							 		<option value="2">در حال آماده سازی</option>
							 		<option value="3">در حال بسته بندی</option>
							 		<option value="4">ارسال شده</option>
							 	</select>

<input type="submit" name="" class="btn btn-info" value="تغییر وضعیت">
 </form>



								</div>


								</div>
							</div>
						</div>




@endforeach
