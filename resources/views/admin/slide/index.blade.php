@extends('layouts.adminLayouts')

@section('content')

	
	<div class="col-lg-7" id="app" style="float: right; margin-right:22%;">


	<div class="panel panel-default">
		
		<div class="panel panel-heading">

			<h3 style="text-align: center;">آپلود تصاویر سایت</h3>

		</div>

		<div class="panel panel-body">
			
<ul class="nav nav-tabs" role="tablist">
			
			<li class="nav-item">
				
				<a class="nav-link" active  href="#step1" data-toggle="tab">ساخت اسلایدر</a>


			</li>
<li class="nav-item">
				
				<a class="nav-link" active  href="#step2" data-toggle="tab">ایجاد بنر</a>


			</li>

		</ul>

<div class="tab-content">		

			<div class="tab-pane active" id="step1" role="tabpanel">


					<div class="col-lg-8" style="float: right;margin-top: 20px;margin-right: 100px;">
						<form action="/admin/addslideimage" method="post" class="dropzone" enctype="multipart/form-data" id="imageslide">
							<div class="form-group">

								<label for="name">نام </label>
							<input type="text" name="name" class="form-control" placeholder="" >


							</div>


							<div class="form-group">

								<label for="name">توضیحات</label>
							<input type="text" name="text" class="form-control" placeholder="" >


							</div>



							<div class="form-group">

								<label for="name">انتخاب برند </label>
							
							<select class="form-control" name="brand_id">
								
								@foreach($brands as $brand)

								<option value="{{$brand->id}}">{{$brand->name}}</option>

								@endforeach

							</select>


							</div>


							<div class="form-group">

								<label for="name">دسته سطح صفر کالا </label>
							
					<select class="form-control"  name="category_id">
								
								@foreach($category as $categorys)

								<option value="{{$categorys->id}}">{{$categorys->name}}</option>

								@endforeach

							</select>


							</div>
							
						

						
 						 
							{{csrf_field()}}



							




							
							

						</form>
						</div>



</div>



<div class="tab-pane " id="step2" role="tabpanel">
				
						<div class="panel panel-default" style="height: 527px;margin-top: 30px;
background: #eee;">

						<div class="col-lg-8" style="float: right;margin-top: 20px;margin-right: 100px;">
							<form action="/admin/addbannerimage" method="post" class="dropzone" enctype="multipart/form-data" id="bannerimage">

							<div class="form-group">

								<label for="name">دسته</label>
						
							<select class="form-control" name="category_id1">
								
								@foreach($category as $categorys)

								<option value="{{$categorys->id}}">{{$categorys->name}}</option>

								@endforeach

							</select>

							</div>

							

						

								
    
									{{csrf_field()}}

								</form>



						</div>





			







						




<script type="text/javascript">
	


	
</script>

			</div>





		     	</div>


	</div>
			



		</div>


	</div>	


	



@endsection