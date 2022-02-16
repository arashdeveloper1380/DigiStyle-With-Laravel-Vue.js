@extends('layouts.mailLayouts')



@section('content')


	<div class="container">
		
		<div class="panel panel-default">
			
			<div class="panel panel-header">
				

				<h4 style="text-align: center; color: green">کاربر گرامی
				 {{$user->name}}{{$user->lname}} خرید شما در سایت دی جی استایل با موفقیت انجام شد.</h4>
			</div>


			<div class="panel panel-body"></div>

			<table class="tabel">
				

				<thead>
					
					<tr>
							<th>کد پیگیری</th>
							<th>شماره تراکنش</th>

					</tr>


				</thead>
				<tbody>
					
					<tr>
						
						<td style="width: 47%;"><span>{{$order->id_orders }}</span></td>
						<td><span style="width: 40%;margin-right: 97px;">{{$order->trans_id  }}</span></td>

					</tr>
					


				</tbody>


			</table>



			<h4>کاربر گرامی  {{$user->name}}{{$user->lname}} در صورت انصراف از خرید حداکثر تا هفت روز دیگر  شماره پیگیری و شماره تراکنش را برای ما ارسال کنید .</h4>

		</div>




	</div>

	

@endsection