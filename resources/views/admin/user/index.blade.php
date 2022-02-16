@extends('layouts.adminLayouts')

@section('content')


<div class="col-lg-8"  style="margin-left: 13%;margin-right: 13%;" id="app">


	<div class="panel panel-default">
		
		<div class="panel panel-heading">

			<h3>ایجاد کاربر جدید</h3>

		</div>

		<div class="panel panel-body">

			<div class="col-lg-6">
				

				<div class="form-group">
					
					<label for="name">نام کاربر</label>

					<input type="text" name="" class="form-control" v-model="fname">
				</div>


				<div class="form-group">
					
					<label for="name">نام خانوادگی</label>

					<input type="text" name="" class="form-control" v-model="lname">
				</div>


				<div class="form-group">
					
					<label for="name">نقش کاربر</label>

					<select class="form-control" v-model="roule">

							<option value="1">مدیر</option>
							<option value="0">کاربر</option>

					</select>
				</div>
</div>

<div class="col-lg-6">


				<div class="form-group">
					
					<label for="name">ایمیل</label>

					<input type="text" name="" class="form-control" v-model="email">
				</div>



				<div class="form-group">
					
					<label for="name">کلمه عبور</label>

					<input type="text" name="" class="form-control" v-model="password">
				</div>
<input type="text" name=""  id="imageuser">

					<div class="form-group">

						<form action="/admin/uloaduser" class="dropzone" method="post" id="imageuser1">
							
							{{csrf_field()}}

						
						</form>


					
					</div>



				<div class="form-group">
					
				

					<input type="submit" name="" class="btn btn-primary" value="ایجاد کاربر" v-on:click="adduser">
				</div>
	


		

			</div>


		</div>
		



		</div>


		</div>



@endsection