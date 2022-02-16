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
			

			<h4>گزارش عملکرد </h4>

			<table class="table-striped" style="height: 250px !important;">
				
				<tbody>
					
					<tr>

				<td>

					<span>تعداد کل سفارشات :</span>

					<span>{{$order}}</span>

				</td>

				<td>

					<span> سفارشات در حال آماده سازی : </span>

					<span>{{$order1}}</span>

				</td>


					</tr>
					<tr>
					<td>

						<span>سفارشات در حال بسته بندی :</span>

						<span>{{$order2}}</span>
					</td>

                    <td>

                    	<span>سفارشات ارسال شده : </span>

                    

                    	<span>{{$order3}}</span>
                    	
                    </td>


					</tr>
					<tr>
						<td>


							<span>نظرات ارسال شده:</span>
							<span>{{$comment}}</span>

						</td>



					</tr>

					




				</tbody>

			</table>


			
		</div>

	</section>





@endsection