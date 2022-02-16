@extends('layouts.adminLayouts')


@section('content')



		<div class="col-lg-12" style="" id="app">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">مشاهده سفارشات </h3>


				</div>
				<div class="panel panel-body">

					
<div class="col-lg-12"> 

			<div class="panel panel-default" style="margin-top: 30px; text-align: center;">
				
				<h3>جدید ترین سفارشات</h3>
				<table class="table table-striped " style="margin-top: 54px;">
					
					<thead>
						
						<tr>
							<th>شماره سفارش</th>
							<th>نام </th>
							<th>ایمیل</th>
							<th> شماره تراکنش</th>
							<th>کد پیگیری</th>
							<th>وضعیت</th>
							<th>تاریخ خرید </th>
							<th>تاریخ بروز رسانی </th>
							<th>عملیات</th>
						</tr>

					</thead>

					<tbody>
						@foreach($order as $orders)
<?php 
 $v=new Verta($orders->updated_at );
$v1=new Verta($orders->created_at );

 ?>
						<tr>
							
							<td>{{$orders->id}}</td>
							<td>{!!getname($orders->user_id)!!}</td>
							<td>{!!getemail($orders->user_id)!!}</td>
							<td>{{$orders->trans_id}}</td>
							<td>{{$orders->id_orders}}</td>
							<td data-toggle="modal"  data-target="#edit{{$orders->id}}">



								@if($orders->status ==1)
							
								<span  style="color: green;">تاید شده </span>

								@elseif($orders->status ==0)

								<span style="color: red;"> تایید نشده</span>
								@elseif($orders->status ==2)

								<span style="color: blue;">در حال آماده سازی</span>
								@elseif($orders->status ==3)

								<span style="color: #ef5a88;">در حال بسته بندی</span>
								@elseif($orders->status ==4)

								<span style="color: #76e21d;">ارسال شده</span>
								@endif

							</td>
							<td> {{$v1->format('Y-n-j H:i')}}</td>
							<td> {{$v->format('Y-n-j H:i')}}</td>
							
							<td><button  type="button" class="btn btn-danger" data-toggle="modal"  data-target="#show{{$orders->id}}">مشاهده </button></td>
						</tr>

						@endforeach

					</tbody>

				</table>



			</div>


		</div>

				</div>



			</div>
		</div>


	@foreach($order as $orders)


						@endforeach


@include('orders');


@endsection