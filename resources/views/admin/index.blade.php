@extends('layouts.adminLayouts')

@section('content')


		<div class="col-lg-12">
			

			<div class="col-lg-3">
				
				<div class="content">
				
				<i class="icon-user"></i>

				<p>{{ $user->count()}}</p>
				<span>تعداد کاربران</span>	


				</div>
			</div>




			<div class="col-lg-3">
				
				<div class="content">
					
				<i class="icon-comment"></i>

				<p>{{ $comment->count()}}</p>
				<span>تعداد نظرات</span>	
					
				</div>

			</div>




			<div class="col-lg-3">
				
				<div class="content">
					
				<i class="icon-shopping-cart"></i>

				<p>{{ $order->count()}}</p>
				<span>تعداد سفارشات</span>	
					
				</div>
			</div>




			<div class="col-lg-3">
				
				<div class="content">
					
					<i class="icon-male"></i>

				<p>{{ $product->count()}}</p>
				<span>تعداد کل محصولات</span>	
					
				</div>
			</div>

</div>

<div class="col-lg-12"> 

			<div class="panel panel-default" style="margin-top: 30px; text-align: center;">
				
				<h3>جدید ترین نظرات</h3>
				<table class="table table-striped " style="margin-top: 54px;">
						<thead>
						
						<tr>
							<th>شماره کامنت</th>
							<th>نام </th>
							<th>ایمیل</th>
							<th>متن</th>
							<th>موضوع</th>
							<th>فرزند </th>
							<th>تاریخ</th>
							<th>وضعیت</th>
							<th>عملیات</th>
						</tr>

					</thead>

					<tbody>
						@foreach($comment as $comments)

						<tr>
							
							<td>{{$comments->id}}</td>
							<td>{!!getname($comments->user_id)!!}</td>
							<td>{!!getemail($comments->user_id)!!}</td>
							<td>{{$comments->text}}</td>
							<td>{{$comments->name}}</td>
							<td>{{$comments->parent_id}}</td>
							<td>{{$comments->date}}</td>
							<td>



										<span v-for="commentsstatus  in commentstatus">
									


									<span v-if="commentsstatus.id==<?php  echo  $comments->id ?>">
										

										<span v-if="commentsstatus.status==1">
											

											<a href="javascript:;" v-on:click="approvedcomment({{$comments->id}})"><i class="icon icon-ok" style="color: green;"></i></a>
										</span>

											<span v-else>
												
												<a href="javascript:;" v-on:click="approvedcomment({{$comments->id}})"><i class="icon icon-remove" style="color: red;"></i></a>


											</span>


									



									</span>







								</span>	







							</td>
							<td><button  type="button" class="btn btn-danger" v-on:click="deletecomment({{$comments->id}})">حذف نظر</button></td>
						</tr>

						@endforeach

					</tbody>

				</table>



			</div>


		</div>

	<div class="col-lg-12"> 

			<div class="panel panel-default" style="margin-top: 30px; text-align: center;">



			<div id="userchart"></div>

			</div>
	


</div>				


		<!--orders-->

<div class="col-lg-12"> 

			<div class="panel panel-default" style="margin-top: 30px; text-align: center;">
				
				<h3>جدیدترین سفارشات</h3>
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
							<th>عملیات</th>
						</tr>

					</thead>

					<tbody>
						@foreach($order as $orders)

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
							<td>{{$orders->created_at }}</td>
							
							<td><button  type="button" class="btn btn-danger" data-toggle="modal"  data-target="#show{{$orders->id}}">مشاهده </button></td>
						</tr>

						@endforeach

					</tbody>

				</table>

			</div>


		</div>




@include('orders');
@endsection