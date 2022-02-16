@extends('layouts.indexLayouts')

@section('content')


	<section style="min-height: 700px;">
		



	<div class="user-order-info" style="width: 100%; ">

	<div class="container-large">	

		<div class="user-info pull-right" style="margin-right: 39px; margin-top: 50px;">
			
			<div class="thumb pull-right">
				

				<i class="icon1 icon1-user"></i>

			</div>
			<span class="user-info-name">{{Auth::user()->name}}</span>
		    <span class="user-info-email">{{Auth::user()->email}}</span>



		</div>




		<div class="status-user-orders pull-left">
			

			<ul>
				<li>
					
				<span>سفارشات در حال پردازش</span>

				<span style="position: absolute; margin-top:38px; left: 10%;">0</span>

				</li>
				<li style="border-right: 1px solid #ddd; border-left: 1px solid #ddd;">
				<span>سفارشات در انتظار تأیید</span>	
				<span style="position: absolute; margin-top:38px; left: 23%;">0</span>



				</li>
				<li>
					
				<span>تعداد کل سفارشات</span>	
				<span style="position: absolute; margin-top:38px; left: 34%;">0</span>


				</li>


			</ul>



		</div>

</div>
		</div>




	
@include('user.sidebar')



		<div class="profile-content">
			

<h4>سفارشات</h4>

							<table class="table table-hover table-condensed" style="margin-top: 54px; background-color:#fff ; width:87% !important; ">
					
					<thead>
						
						<tr>
						
							<th>نام </th>
							<th>ایمیل</th>
							<th> شماره تراکنش</th>
							<th>کد پیگیری</th>
							<th>تاریخ خرید </th>
							<th>عملیات</th>
						</tr>

					</thead>

					<tbody>
						@foreach($order as $orders)

						<tr>
							
						
							<td>{!!getname($orders->user_id)!!}</td>
							<td>{!!getemail($orders->user_id)!!}</td>
							<td>{{$orders->trans_id}}</td>
							<td>{{$orders->id_orders}}</td>
						
							<td>{{$orders->created_at }}</td>
							
							<td><button  type="button" class="btn btn-danger" data-toggle="modal"  data-target="#show{{$orders->id}}">مشاهده </button></td>
						</tr>

						@endforeach

					</tbody>

				</table>

			</div>


		</div>




@include('userorders');


			
		</div>

	</section>





@endsection