@extends('layouts.adminLayouts')


@section('content')



	<div class="col-lg-12" id="app">
		
		<div class="panel panel-default" style="text-align: center;">
			

			<div class="panel-heading">
				

				<h3>ایجاد دسته ها</h3>

			</div>


			<div class="panel-body">
				
				<div class="col-lg-4">

					<div class="form-group">

						<label for="name">حذف دسته</label>

						<select class="form-control ignore" v-model="select1">
							
								@foreach($categorys as $category)

							<option    value="{{$category->id}}">
								{{$category->name}}
							</option>

							@endforeach


						</select>
							<br>
							<input type="submit" name="" value="حذف" class="btn btn-info"  v-on:click="deletecategory">

					</div>

				</div>
				



					<div class="col-lg-4">

					<div class="form-group">

						<label for="name">نام زیر دسته</label>

							<input type="text" name="name" placeholder="نام زیر دسته را انتخاب نمایید..." class="form-control" v-model="categoryname">
					</div>


						<div class="form-group">

						<label for="parent_id">انتخاب دسته</label>

							<select class="form-control ignore" name="parent_id" v-model="select">
								
								<option  v-for="category in categorys"  :value="category.id">
								@{{category.name}}
							</option>

							@foreach($categorys as $category)

							<option    value="{{$category->id}}">
								{{$category->name}}
							</option>

							@endforeach

							<option    value="0">
								-
							</option>

							</select>
							
							<br>
							<input type="button" name="" value="ایجاد دسته " v-on:click="category"  class="btn btn-danger" >

					</div>

				</div>



				<div class="col-lg-4">
					

			



				</div>





			</div>

		</div>




	</div>



@endsection