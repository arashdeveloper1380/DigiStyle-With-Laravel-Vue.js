@extends('layouts.adminLayouts')


@section('content')



		<div class="col-lg-12" style="" id="">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">مشاهده نظرات </h3>


				</div>
				<div class="panel panel-body">

					
<div class="col-lg-12"> 

			<div class="panel panel-default" style="margin-top: 30px; text-align: center;">
				
				<h3>جدید ترین نظرات</h3>
				<table class="table table-striped " style="margin-top: 54px;">
					
					<thead>
						
						<tr>
							<th>شماره کامنت</th>
							<th>نام </th>
							<th>ایمیل</th>
							<th>متن</th>
							<th>موضوع</th>
							<th>فرزند </th>
							<th>تاریخ</th>
							<th>وضعیت</th>
							<th>عملیات</th>
						</tr>

					</thead>

					<tbody>
						@foreach($comment as $comments)

						<tr>
							
							<td>{{$comments->id}}</td>
							<td>{!!getname($comments->user_id)!!}</td>
							<td>{!!getemail($comments->user_id)!!}</td>
							<td>{{$comments->text}}</td>
							<td>{{$comments->name}}</td>
							<td>{{$comments->parent_id}}</td>
							<td>{{$comments->date}}</td>
							<td>



										<span v-for="commentsstatus  in commentstatus">
									


									<span v-if="commentsstatus.id==<?php  echo  $comments->id ?>">
										

										<span v-if="commentsstatus.status==1">
											

											<a href="javascript:;" v-on:click="approvedcomment({{$comments->id}})"><i class="icon icon-ok" style="color: green;"></i></a>
										</span>

											<span v-else>
												
												<a href="javascript:;" v-on:click="approvedcomment({{$comments->id}})"><i class="icon icon-remove" style="color: red;"></i></a>


											</span>


									



									</span>







								</span>	







							</td>
							<td><button  type="button" class="btn btn-danger" v-on:click="deletecomment({{$comments->id}})">حذف نظر</button></td>
						</tr>

						@endforeach

					</tbody>

				</table>



			</div>


		</div>

				</div>



			</div>
		</div>






@endsection