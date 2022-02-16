@extends('layouts.indexLayouts')

@section('content')

 
	<section style="min-height: 700px;" id="app">
		



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

				<span style="position: absolute; margin-top:38px; left: 10%;">{{$order}}</span>

				</li>
				<li style="border-right: 1px solid #ddd; border-left: 1px solid #ddd;">
				<span>سفارشات در انتظار تأیید</span>	
				<span style="position: absolute; margin-top:38px; left: 23%;">{{$order1}}</span>



				</li>
				<li>
					
				<span>تعداد کل سفارشات</span>	
				<span style="position: absolute; margin-top:38px; left: 34%;">{{$order2}}</span>


				</li>


			</ul>



		</div>

</div>
		</div>



@include('user.sidebar')

		<div class="profile-content">
			

			<h4>لیست خرید بعدی ({{$list->count()}})</h4>

			<table class="table-striped" style="height: 250px !important;background-color: #fff !important;">
				

				<thead>



					@foreach($list as $lists)
					
					<tr style="background-color: #eee !important;">
						
						<th style="text-align: center;">مشخصات محصول</th>
						<th style="text-align: center;">قیمت</th>

					</tr>


				</thead>





				<tbody>
					
					<tr>

				<td>

				{!!getlistproduct($lists->product_id,$lists->size)!!}

				<span style="position: absolute !important;margin-top: 149px;margin-right: 38px;">


					<a href="">

				حذف محصول از لیست


			</a>


		</span>
					<span style="position: absolute !important;margin-top: 136px;margin-right: 217px;
border: 1px solid #eee;padding: 0 22px;line-height: 41px;background: #ef5a88;color: #fff;">


					<a href="javascript:;" style="color: #fff;" onclick="addcart('{{$lists->product_id}}')" v-on:click="deletelist('{{$lists->id}}')" class="listcart">افزودن به سبد خرید</a>

				</span>




				</td>

				<td>

					<span> قیمت نهایی  : </span>

					<span style="position: absolute !important;margin-right: 93px;margin-top: 0px;">



					 {!! getlistprice($lists->product_id) !!}

					</span>

				</td>


					</tr>
					@endforeach

					

				</tbody>

			</table>


		
		</div>

	</section>





@endsection