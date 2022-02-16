@extends('layouts.adminLayouts')


@section('content')



		<div class="col-lg-8" style="margin-left: 13%;margin-right: 13%;" id="app">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">مشاهده همه تخفیف ها   </h3>


				</div>
				<div class="panel panel-body">

						<table class="table" style="text-align: center;">
						<thead style="text-align: center;">
								<tr>
										<th>علت تخفیف </th>
										<th>میزان نخفیف</th>
										<th>تاریخ پایان</th>
										<th>تاریخ شروع</th>
										<th>عملیات</th>

								</tr>



						</thead>	
						<tbody>
							
							@foreach($discount as $discounts)
							<tr>
								
								<td>{{$discounts->name}}</td>
								<td>{{$discounts->value}}</td>
								<td>{!!getOrderProducts($discounts->product_id) !!}</td>
								<td>						
                               {{$discounts->enddate}}
								</td>
								<td>						
                                {{$discounts->begindate}}
								</td>
								<td>

									<input type="submit" name="" class="btn btn-danger" value="حذف" v-on:click="deletediscount('{{$discounts->id}}')">


								</td>

							</tr>
							@endforeach

						</tbody>


						</table>	


				</div>



			</div>
		</div>






@endsection