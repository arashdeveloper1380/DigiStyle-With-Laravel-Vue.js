@extends('layouts.adminLayouts')


@section('content')


		<div class="col-lg-8" style="margin-left: 13%;margin-right: 13%;" id="app">
			

			<div class="panel panel-default">
				

				<div  class="panel-panel-heading">
					
					<h3 style="text-align: center;">ایجاد تخفیف </h3>


				</div>
				<div class="panel panel-body">

				<div class="col-lg-6" style="float: right; margin-right: 25%;">

				<div class="form-group">
					

					<label for="name">مقدار تخفیف</label>
					<input type="text" name="name" class="form-control" placeholder="نام برند..." v-model="valuediscount">

				</div>


				<div class="form-group">
					

					<label for="country">علت تخفیف</label>
					<input type="text" name="namediscount" class="form-control" placeholder="نام کشور" v-model="namediscount">

				</div>

				<div class="form-group">
					

					<label for="country">کد تخفیف</label>
					<input type="text" name="namediscount" class="form-control" placeholder="" v-model="codediscount">

				</div>


				<div class="form-group">
					

					<label for="country">نام محصول</label>
					<select class="form-control" v-model="ProductDiscount">
						
						@foreach($product as $products)
						<option value="{{$products->id}}">{{$products->name}}</option>
						@endforeach
					</select>

				</div>

				<div class="form-group">
					<label for="begindate">تاریخ شروع</label>
					 <date-picker v-model="date"></date-picker>

				</div>		

					<div class="form-group">
					<label for="enddate">تاریخ پایان</label>
					<date-picker v-model="date1"></date-picker>

				</div>		

				<div class="form-group">
					

					
					<input type="submit" name="" value="ایجاد تخفیف" class="btn btn-primary" v-on:click="discountadd" >
				</div>






						</div>
				</div>

			</div>

		</div>

	</div>




@endsection