
		@foreach($order as $orders)

		<div class="modal fade" id="show{{$orders->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						

						<div class="modal-dialog" style="width:100%; ">
							
							<div class="modal-content">
								
								<div class="modal-header">
									
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
							
						</tr>

					</thead>

					<tbody>
						@foreach($product_orders as $product_order)

						@if($product_order->order_id == $orders->id)

						<tr class="tr">
							
							{!! getOrderProduct($product_order->product_id) !!}
						{!! getOrderbrand1($product_order->product_id) !!}
							<td>{{$product_order->price}}</td>
							<td>{{$product_order->count}}</td>
						
						</tr>

						@endif

						@endforeach

					</tbody>

				</table>


</div>

					    	</div>
						</div>
						</div>



@endforeach
