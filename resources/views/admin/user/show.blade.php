@extends('layouts.adminLayouts')


@section('content')



		<div class="col-lg-8" style="margin-left: 13%;margin-right: 13%;" id="app">
			
		

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">مشاهده کاربر  </h3>


				</div>
				<div class="panel panel-body">

					<table class="table" style="text-align: center;">
						

						<thead>
							
							<tr>
								
								<th>نام</th>
								<th>نام خانوادگی </th>
								<th>ایمیل کاربر</th>
								<th>نقش کاربر </th>
								<th>تصویر</th>
								<th>وضعیت</th>
								<th>عملیات</th>


							</tr>


						</thead>
						<tbody>
						
							
							@foreach($users  as $user)
							<tr>
								
								<td>{{$user->name}} </td>
								<td>{{$user->lname}}</td>
								<td>{{$user->email}}</td>
								<td>

									@if($user->roule==1)

									<span style="color: green">مدیر</span>

									@else
									<span style="color: red">کاربر عادی</span>

									@endif
								


								</td>
								<td>

									@if($user->image)

									<img src="/imageusers/{{$user->image}}" width="100px" height="50px">
									@else

									<img src="/img/profile-picture.png" width="100px" height="50px">


									@endif


								</td>
								<td>

								<span v-for="showstatuss  in showstatus">
									


									<span v-if="showstatuss.id==<?php  echo  $user->id ?>">
										

										<span v-if="showstatuss.status==1">
											

											<a href="javascript:;" v-on:click="approved({{$user->id}})"><i class="icon icon-ok" style="color: green;"></i></a>
										</span>

											<span v-else>
												
												<a href="javascript:;" v-on:click="approved({{$user->id}})"><i class="icon icon-remove" style="color: red;"></i></a>


											</span>


									



									</span>







								</span>	

								

								


								</td>
								<td><input type="submit" name=""  class="btn btn-danger" value="حذف" v-on:click="deleteuser({{$user->id}})">

									<input type="submit" name=""   data-toggle="modal"  data-target="#edit"  class="btn btn-primary" value="ویرایش" v-on:click="edituser({{$user->id}})"></td>
							</tr>
							@endforeach

						</tbody>



					</table>


				</div>
				



					<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						

						<div class="modal-dialog" style="width:50%; ">
							
							<div class="modal-content">
								
								<div class="modal-header"></div>
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" style="text-align: center;">ویرایش کاربران</h4>
							</div>

							<div class="modal-body" style="background: #fff; overflow: hidden;">
								


								<div class="col-lg-5" style="float: right;">
										
										<div class="form-group">
											
											<label for="name">نام کاربر</label>
											<input type="text" name=""  class="form-control"
											  id="fname1">

										</div>
										<div class="form-group">
											
											<label for="name">نام خانوادگی</label>
											<input type="text" name=""  class="form-control"  id="lname1">

										</div>
										<input type="text" name="" id="id">
										<div class="form-group">
											
											<label for="name">ایمیل</label>
											<input type="text" name=""  class="form-control" id="email1">

										</div>


								</div>




								<div class="col-lg-5" style="float: right;">
										
										<div class="form-group">
											
											<label for="name">نقش کاربر</label>
											<select class="form-control" id="roule">
												
												<option value="1">مدیر</option>
												<option value="1">کاربر عادی</option>
											</select>

										</div>
										<input type="text" name="" id="imageuser2" >
										<div class="form-group">
											
											<label for="name">تصویر</label>
											<form action="/admin/uloaduser" method="post" class="dropzone" id="imageuser1">
													
													{{csrf_field()}}

											</form>

										</div>
										<div class="form-group">
											
											
											<input type="submit" name=""  class="btn btn-danger" value="ویرایش کاربر" v-on:click="update" >

										</div>


								</div>




							</div>


						</div>



					</div>




			</div>
			


	</div>				




@endsection