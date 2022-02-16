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
			

			<h4>اطلاعات مشتری حقیقی </h4>

			<table class="table-striped" style="height: 250px !important;">
				
				<tbody>
					
					<tr>

				<td>

					<span>نام و نام خانوادگی :</span>

					<span>{{$user->name}}{{$user->lname}}</span>

				</td>

				<td>

					<span> 	تاریخ تولد : </span>

					<span>{{$user->Dateofbirth }}</span>

				</td>


					</tr>
					<tr>
					<td>

						<span>آدرس الکترونیک :</span>

						<span>{{$user->email}}</span>
					</td>

                    <td>

                    	<span>جنسیت : </span>

                    	@if($user->gender == 1)
                    	<span>مرد</span>

                    	@else

                    	<span>زن</span>
                    	@endif
                    </td>


					</tr>
					<tr>
						<td>


							<span>کد ملی :</span>
							<span>{{$user->NationalCode}}</span>

						</td>

                    <td>


                    	<span>محل سکونت : </span>

                    	<span>{{$user->state}} ، {{$user->city}}</span>

                    </td>


					</tr>

					<tr>

						<td>

							<span>شماره تلفن ثابت : </span>

							<span>{{$user->phone}}</span>

						</td>

                    <td>	<span>دریافت خبرنامه :</span></td>


					</tr>
			     	<tr>
			     		<td>

			     			<span>شماره تلفن همراه :</span>
			     			<span>{{$user->mobile}}</span>
			     		</td>

						<td>

							<span>شماره کارت :</span>

							<span>{{$user->banknumber}}</span>
						</td>


			     	</tr>




				</tbody>

			</table>


			<a href="/updateprofile"  class="btn-edit">ویرایش اطلاعات</a>
		</div>

	</section>





@endsection