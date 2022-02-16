@extends('layouts.adminLayouts')


@section('content')


		<div class="col-lg-8" style="margin-left: 13%;margin-right: 13%;" id="app">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">ثبت برند </h3>


				</div>
				<div class="panel panel-body">

				<div class="col-lg-6" style="float: right; margin-right: 25%;">

				<div class="form-group">
					

					<label for="name">نام برند </label>
					<input type="text" name="name" class="form-control" placeholder="نام برند..." v-model="brandName">

				</div>


				<div class="form-group">
					

					<label for="country">نام کشور</label>
					<input type="text" name="country" class="form-control" placeholder="نام کشور" v-model="brandcountry">

				</div>
				<div class="form-group">
					

					<label for="country">نام کشور</label>
					<select class="form-control" v-model="brandcategory">
						
						@foreach($category as $categorys)
						<option value="{{$categorys->id}}">{{$categorys->name}}</option>
						@endforeach
					</select>

				</div>
<input type="hidden" name="" id="url" >


				<div class="form-group">
					
					<form action="/admin/uploadimage" method="post" class="dropzone" id="imageurl">
						
						{{csrf_field()}}


					</form>





				<div class="form-group">
					

					
					<input type="submit" name="" value="ایجاد برند" class="btn btn-primary" @click="savebrand">
				</div>






						</div>
				</div>

			</div>

		</div>

	</div>




@endsection