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
			

			<h4>لیست نظرات شما </h4>

	
			<table style="background-color: #fff !important;">
				

				<thead  style="height: 63px; background-color: #eee !important;">
					<tr>
						<th style="text-align:right !important;">نام محصولی که در آن نظر خود را ثبت کرده اید</th>
						<th  style="text-align:right !important;">وضعیت</th>
						<th  style="text-align:right !important;">مشاهده نظر</th>
					</tr>
				<tr class="spacer" style="height:20px; background-color: #fff !important;"></tr>

				</thead>
@foreach($comment as $comments)
				<tbody style="height: 62px; background-color: #eee !important;">

					

					<tr>
					<td>{!! getOrderProducts($comments->product_id) !!}</td>
					<td>
							
							@if($comments->status == 1)

							<span style="color: green; position: relative !important;">تایید شده</span>

							@else

							<span style="color: #f19c95; position: relative !important;">تایید شده</span>

							@endif



					</td>
					<td>

						
						<a href="/singleproduct/{{$comments->product_id}}/{!!getcategoryProduct($comments->product_id)!!}"

							style="width: 38px; height: 26px; border:1px solid #666; text-align:center;

							display: inline-block; vertical-align: middle;" 

							> 
							


							<i class="icon1 icon1-link"></i>

						</a>


					</td>

					</tr>




				</tbody>

	@endforeach
			</table>

		
		</div>

	</section>





@endsection