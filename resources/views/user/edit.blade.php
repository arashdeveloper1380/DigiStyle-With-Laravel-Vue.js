@extends('layouts.indexLayouts')

@section('content')


	<section style="min-height:1500px; height: auto;">
		



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
			

			<h4>ویرایش اطلاعات </h4>



			<form action="/editprofile" method="post" >
				
				{{csrf_field()}}
				<table style="background-color: #fff !important; height: 250px !important;" class="table-edit">

				<tr >
					
					<td><label for="name">نام </label></td>
		    		<td><input type="text" name="fname" class="form-control" ></td>


				</tr>

				<tr>
					
					<td><label for="lname">نام خانوادگی </label></td>
		    		<td><input type="text" name="lname" class="form-control" ></td>


				</tr>


				<tr >
					
					<td><input id="type" type="checkbox" name="type" class="form-control" value="1" style="width: 20px !important; height: 20px !important;"><label for="name" 
						style="position: absolute;margin-top: -22px;margin-right: 32px;">تبعه خارجی فاقد کد ملی هستم</label></td>
		    	

				</tr>


				<tr id="NationalCode">
					
					<td><label for="name">کد ملی</label></td>
		    		<td><input type="text" name="NationalCode" class="form-control" ></td>


				</tr>

				<tr >
					
					<td><label for="name">تلفن همراه </label></td>
		    		<td><input type="text" name="mobile" class="form-control" ></td>


				</tr>

				<tr >
					
					<td><label for="name">تاریخ تولد </label></td>
		    		<td>


		    			<select class="day" name="day">
		    				

		    				<option value="1">1</option>
		    				<option value="2">2</option>
		    				<option value="3">3</option>


		    			</select>
		    			<select class="month" name="month">
		    				
		    				
		    				<option value="1">فروردین</option>
		    				<option value="2">اردیبهشت</option>
		    				<option value="3">خرداد</option>


		    			</select>
		    			<select class="year" name="year">
		    				
		    				
		    				<option value="1370">1370</option>
		    				<option value="1371">1371</option>
		    				<option value="1372">1372</option>


		    			</select>



		    		</td>


				</tr>

				<tr>
					
					<td>
						  <label class="container1" style="margin-top:73px; margin-right: 151px; position: absolute; ">


				           <input type="radio" name="gender" checked=""   id="radio" value="1">
							  <span class="checkmark">	



							  	<p style="padding-right: 37px; font-size: 17px; ">مرد</p>



							</span>
							</label>



							 <label class="container1" style="margin-top:73px; margin-right: 254px; position: absolute; ">


				           <input type="radio" name="gender" checked=""   id="radio" value="2">
							  <span class="checkmark">	



							  	<p style="padding-right: 37px; font-size: 17px; ">زن</p>



							</span>
							</label>



					</td>
					

				</tr>

				<tr>
					
					<td><span>محل سکونت </span></td>
					<td>
						
										<div class="box1" style="right: 44%; margin-top: 159px;">
				

								
									<select class="province  "  name="states">
										

										<option data-display="انتخاب کنید">انتخاب کنید</option>

									</select>



										<select class="city ignore" style="
position: absolute;" name="city">
										

										<option data-display="انتخاب کنید">انتخاب کنید</option>

									</select>
								</div>


					</td>

				</tr>


				<tr>
					

					<td><span>تلفن ثابت </span></td>
					<td><input type="text" name="phones" class="form-control" style="margin-top: 59px;"></td>


				</tr>


				<tr>
					<td><h5 style="position: absolute;margin-top: 45px;">شماره کارت بانکی 16 رقمی جهت مرجوع وجه در مواقع مورد نیاز و وارد کردن آن نیاز نیست</h5></td>

				</tr>





				<tr>
					

					<td><span style="margin-top: 46px;">شماره کارت </span></td>
					<td><input type="text" name="banknumber" class="form-control" style="margin-top:113px;"></td>


				</tr>

	<tr style="height: 25px; position:absolute; width: 56%; background-color: #eee;height: 59px;margin-top: 29px;">
						
	<td>
		<input type="checkbox" name="addsazmani" class="form-control" style="width: 15px !important; height: 15px !important;" id="addsazmani">
		<label for="name" style="position: absolute;margin-top: -22px;margin-right: 82px;">
			مایل به تکمیل اطلاعات حقوقی برای خرید سازمانی هستم .
		 </label>


	</td>



	</tr>

</table>


		<table style="background-color: #eee !important;margin-top: 87px !important;display: none;" class="table-edit-sazmani">



	<tr >
		
					<td>
						<span style="">نام شرکت </span>

					</td>
					<td>

						<input type="text" name="namesazmani" class="form-control" style="">

					</td>

	</tr>


	<tr >
		
					<td>
						<span style="">کد اقتصادی </span>

					</td>
					<td>

						<input type="text" name="code" class="form-control" style="">

					</td>

	</tr>


	<tr >
		
					<td>
						<span style="">شناسه ملی </span>

					</td>
					<td>

						<input type="text" name="nationalcode" class="form-control" style="">

					</td>

	</tr>

	<tr >
		
					<td>
						<span style="">شماره ثبت </span>

					</td>
					<td>

						<input type="text" name="number" class="form-control" style="">

					</td>

	</tr>

	<tr >
		
					<td>
						<span style="">شماره تلفن ثابت</span>

					</td>
					<td>

						<input type="text" name="phone" class="form-control" style="">

					</td>

	</tr>




			<tr style="height:100px;">
					
					<td><span style="margin-top: 83px;">محل سکونت </span></td>
					<td>
						
										<div class="box1" style="right: 44%; margin-top: 10px;">
				

								
									<select class="province  state"  name="statesazmani">
										

										<option data-display="انتخاب کنید">انتخاب کنید</option>

									</select>



										<select class="city ignore city1" style="
position: absolute;" name="citysazmani">
										

										<option data-display="انتخاب کنید">انتخاب کنید</option>

									</select>
								</div>


					</td>

				</tr>








</table>




<input type="submit" name="" value="ثبت اطلاعات" class="btn btn-danger"
 style="background-color:#ef5a88 !important;position: absolute;

right: 79%;margin-top: 31px;">


			</form>


		</div>
		





			</section>





@endsection	