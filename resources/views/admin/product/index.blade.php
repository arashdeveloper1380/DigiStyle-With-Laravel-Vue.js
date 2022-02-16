@extends('layouts.adminLayouts')

@section('content')

	<div  >
	<div class="col-lg-12" id="app">


	<div class="panel panel-default">
		
		<div class="panel panel-heading">

			<h3>ایجاد محصول جدید</h3>

		</div>

		<div class="panel panel-body">
			
<ul class="nav nav-tabs" role="tablist">
			
			<li class="nav-item">
				
				<a class="nav-link" active  href="#step1" data-toggle="tab">مرحله اول</a>


			</li>
<li class="nav-item">
				
				<a class="nav-link" active  href="#step2" data-toggle="tab">مرحله دوم</a>


			</li>

		</ul>

<div class="tab-content">		

			<div class="tab-pane active" id="step1" role="tabpanel">


					<div class="col-lg-3" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">عنوان گروه کالا</label>
							<input type="text" name="name" class="form-control" placeholder="" v-model="namegroup">


							</div>
							<div class="form-group">

								<label for="name">دسته کالا</label>
							<select  class="form-control" v-model="selectgroup">
								@foreach($category as $categorys)

								<option  value="{{$categorys->id}}">{{$categorys->name}}</option>


								@endforeach

							</select>
							

							</div>




							<div class="form-group">

							
							<input type="submit" name="name" class="btn btn-danger" value="ذخیره" v-on:click="addgroup" >


							</div>

						</div>

				
						<div class="col-lg-3" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">عنوان مشخصات</label>
							<input type="text" name="name" class="form-control" placeholder="" v-model="nameattribute">


							</div>


								<div class="form-group">

								<label for="name">انتحاب کنید </label>
							
								<select class="form-control" v-model="selectattribute">
									

									<option v-for="group in  groups"   :value="group.id">@{{group.name}}</option>



								@foreach($attributegroup as $attributegroups)

								<option  value="{{$attributegroups->id}}">{{$attributegroups->name}}</option>


								@endforeach

								</select>


							</div>



								<div class="form-group">

							
							<input type="submit" name="name" class="btn btn-danger" value="ذخیره" v-on:click="addattribute">


							</div>

						</div>





						<div class="col-lg-3" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">نوع</label>
							<input type="text" name="name" class="form-control" placeholder="" v-model="nameattributeitem" >


							</div>

							<div class="form-group">

								<label for="name">مقدار</label>

						<select class="form-control" v-model="selectattributeitem">
							
							<option v-for="attributes in  attribute2"   :value="attributes.id">@{{attributes.name}}</option>

							@foreach($attribute as $attributes)
							<option value="{{$attributes->id}}">{{$attributes->name}}</option>

							@endforeach

						</select>


							</div>
							



								<div class="form-group">

							
							<input type="submit" name="name" class="btn btn-danger" value="ذخیره" @click="attributeitem">


							</div>

						</div>




						<div class="col-lg-3" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">سایز</label>
							<input type="text" name="size" class="form-control" placeholder="" v-model="size">


							</div>

								<div class="form-group">

								<label for="name">گروه کالا
							</label>

							<select class="form-control" v-model="sizeid">
									

									<option v-for="group in  groups"   :value="group.id">@{{group.name}}</option>
									

								@foreach($attributegroup as $attributegroups)

								<option  value="{{$attributegroups->id}}">{{$attributegroups->name}}</option>


								@endforeach

								</select>

							</div>




								<div class="form-group">

							
							<input type="submit"  class="btn btn-danger" value="ذخیره" @click="addsize1">


							</div>

						</div>

			</div>


<div class="tab-pane " id="step2" role="tabpanel">
				
						<div class="panel panel-default" style="height: 527px;margin-top: 30px;
background: #eee;">

						<div class="col-lg-4" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">نام کالا</label>
							<input type="text" name="name" class="form-control" placeholder="" v-model="ProductName">


							</div>

							<div class="form-group">

								<label for="name">توضیحات</label>
							<textarea  class="form-control" name="desc" v-model="ProductDesc"></textarea>


							</div>

							<div class="form-group">

								<label for="name">قیمت محصول</label>
							<input type="text" name="price" class="form-control" placeholder="" v-model="ProductPrice">


							</div>



							<div class="form-group">

								<label for="name">دسته بندی محصول</label>
							<select class="form-control" v-model="category_id">
								
								@foreach($category as $categorys)
								<option value="{{$categorys->id}}">{{$categorys->name}}</option>
								@endforeach

							</select>


							</div>


							<div class="form-group">

								<form action="/admin/productimage" method="post" class="dropzone" enctype="multipart/form-data">
    
									{{csrf_field()}}

								</form>

							</div>


								<div class="form-group">

							
							<input type="submit" name="name" class="btn btn-danger" value="ذخیره" @click="AddProduct">


							</div>

						</div>






<div class="col-lg-4" style="float: right;margin-top: 20px;">

							<div class="form-group">

								<label for="name">سایز</label>
							<select class="form-control" v-model="size_id">
									
									<option v-for="sizes in  size2" :value="sizes.id">@{{sizes.size}}</option>


								@foreach($size as $sizes)
								<option value="{{$sizes->id}}">{{$sizes->size}}</option>
								@endforeach
							</select>

						</div>

						



							<div class="form-group">

								<label for="name">عنوان خصوصیت</label>
							<select class="form-control"  v-model="attribute_id" v-model="size_id">
								
								<option v-for="attribute in  attribute2" :value="attribute.id">@{{attribute.name}}</option> 

							@foreach($attribute as $attributes)
								<option value="{{$attributes->id}}">{{$attributes->name2}}</option>
								@endforeach

							</select>


							</div>




							<div class="form-group">

								<label for="name">مقدار</label>
							<select class="form-control" v-model="attributeitem_id" v-model="size_id">
								
								<option v-for="attributeitems in  attributeitem2" :value="attributeitems.id">@{{attributeitems.name}}</option> 


								@foreach($attributeitem as $attributeitems)
								<option value="{{$attributeitems->id}}">{{$attributeitems->name1}}
								</option>
								@endforeach

							</select>


							</div>




							<div class="form-group">

								<label for="name">برند ها</label>
							<select class="form-control" v-model="brand_id">
								

								@foreach($brand as $brands)
								<option value="{{$brands->id}}">{{$brands->name}}</option>
								@endforeach

							</select>


							</div>



							<div class="form-group">

								<form action="/admin/imageproduct" method="post" class="dropzone" enctype="multipart/form-data">
    
									{{csrf_field()}}

								</form>

							</div>



							

							



								<div class="form-group">

							




							</div>

						</div>





			<div class="col-lg-4" style="float: right;margin-top: 47px;">


				<div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton" data-loading-text="در حال ذخیره سازی" autocomplete="off" v-on:click="addsize">ارسال</button>

							</div>



								<div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton1" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;"   v-on:click="addattributetype">ارسال</button>

							</div>




						     <div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton2" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;" v-on:click="addvalueattributeitem">ارسال</button>

							</div>




							    <div class="form-group">

							<button type="button"  class="btn btn-primary" id="mybutton3" data-loading-text="در حال ذخیره سازی" autocomplete="off" style="margin-top: 27px;" v-on:click="addvaluebrand">ارسال</button>

							</div>







						




			</div>





		     	</div>

		    <div>


		</div>

	</div>
			



		</div>


	</div>	


	

</div>

@endsection