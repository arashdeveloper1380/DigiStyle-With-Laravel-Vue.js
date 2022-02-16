@extends('layouts.adminLayouts')


@section('content')



		<div class="col-lg-8" style="margin-left: 13%;margin-right: 13%;" id="app">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">مشاهده همه برند ها فروشگاه  </h3>


				</div>
				<div class="panel panel-body">

						<table class="table" style="text-align: center;">
						<thead style="text-align: center;">
								<tr>
										<th>نام برند</th>
										<th>کشور برند </th>
										<th>عکس</th>
										<th>عملیات</th>

								</tr>



						</thead>	
						<tbody>
							
							@foreach($brand as $brands)
							<tr>
								
								<td>{{$brands->name}}</td>
								<td>{{$brands->country}}</td>
								<td>

									<img src="/imagebrand/{{$brands->image}}" height="60px" width="100px">

									


								</td>
								<td>

									<input type="submit" name="" class="btn btn-danger" value="حذف" v-on:click="deletebrand('{{$brands->id}}')">


								</td>

							</tr>
							@endforeach

						</tbody>


						</table>	


				</div>



			</div>
		</div>






@endsection