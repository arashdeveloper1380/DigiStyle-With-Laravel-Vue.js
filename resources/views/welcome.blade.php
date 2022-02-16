@extends('layouts.indexLayouts')


@section('content')




	<div class="col-lg-12">
		
		<div class="pics" id="slider">
				
				@foreach($slide as $slides)
				<img src="/slider/{{$slides->image}}" width="100% !important"" height="466px" 
				style="width:100% !important">
				@endforeach
		</div>

		<a href="" id="next"><i class="icon icon-angle-left"></i></a>
		<a href="" id="prev"><i class="icon icon-angle-right"></i></a>

	</div>


	<div class="col-lg-12" style="margin-top: 26px;">

		<div class="container-large">
			
			
					
					@foreach($banner1 as $banners)

						<div class="col-lg-4 col-sm-12 col-xs-12 " >

					<img src="/banner/{{$banners->image}}" width="100%" height="355px">

						</div>

					@endforeach

			


		</div>
		

	</div>




<div class="col-lg-12 " style="display: contents;">
	

	<div class="wrapper">
	<h4 style="margin-right: 73px;">پیشنهاد دیجی استایل طبق سلیقه شما</h2>	
		<div class="list_carousel">
			
			<ul id="foo" class="">
				
				@foreach($product as $products)

				
	
			<li>


				@foreach($discount as $discounts)

			
		

				@if($discounts->product_id === $products->id )
				

					
				

				<span class="discount">
					
					<span class="discount1">{{$discounts->value}}%</span>



				</span>
				
				@endif
				@endforeach

				<img src="/imageproduct/{{$products->image}}" class="">


				@foreach($productbrand as $productbrands)

				@if($productbrands->product_id===$products->id)


				{!! getproductbrand($productbrands->brand_id) !!}


				@endif

				@endforeach
				
				<span class="productname">{{$products->name}}</span>
				<span class="price">{{$products->price}}تومان</span>	

				{!! getprice2($products->id) !!}

			</li>
	
		
			@endforeach

			</ul>
			<div class="clearfix"></div>
			<a href="" id="next2">&lt;</a>
			<a href="" id="prev2">&gt;</a>
<div id="gallery">
	<div id="largeImage">
		
	</div>

		</div>


	</div>


</div>


	<div class="usp">


			<div class="col-lg-12">
				
				<div class="container-large">
					

					<h4 style="text-align: center;">با خیال راحت از دیجی استایل خرید کنید</h4>

					<div class="usp1">
					<a class="col-lg-3 col-md-3 col-xs-12" style="">


						<span class="title">
							

							<h5>کالای اورجینال</h5>
							<img src="/img/original.png">

						</span>

						<span class="desc">
                        دیجی استایل نماینده رسمی برندهاست، با اطمینان از اورجینال بودن کالا خرید کنید
                    </span>

					</a>


						<a class="col-lg-3 col-md-3 col-xs-12" >


						<span class="title">
							

							<h5>تحویل سریع و ارزان</h5>
							<img src="/img/freeDelivery.png">

						</span>

						<span class="desc">
                     
                        سفارشهای بیش از ۱۰۰ هزار تومان در تهران و بیش از ۲۰۰ هزار تومان در شهرستان را رایگان تحویل بگیرید.
                    
                    </span>

					</a>



						<a class="col-lg-3 col-md-3 col-xs-12" >


						<span class="title">
							

							<h5>بازگشت کالا</h5>
							<img src="/img/7days.png">

						</span>

						<span class="desc">
                       
                        اگر کالا برای شما مناسب نبود تا هفت روز میتوانید با یک تماس آن را تعویض کنید
                    
                    </span>

					</a>

					</div>

				</div>

			</div>
		

	</div>
	




	<div class="sd_brand container-large">
		
		@foreach($brand->take(12) as $brands)
		<a href="" class="brand_item">
			<img src="/imagebrand/{{$brands->image}}" >
		</a>

		@endforeach

	</div>


	<div class="socialNet">
		
		<div class="container-large">
			
			<h4 style="text-align:center;margin-bottom: 40px; ">دیجی استایل را در شبکه های اجتماعی دنبال کنید </h4>
			<div class="" style="padding-right: 28%;">
				
				
				<a href="" class="socialNet_item " >
					
					<img src="/img/instagram.png">
					<span>صفحه دیجی استایل در اینستاگرام </span>


				</a>

				<a href=""  class="socialNet_item ">
					
					<img src="/img/telegram.png">
					<span>کانال تلگرام دیجی استایل</span>


				</a>


			</div>

		</div>


	</div>







		<div class="dk-about">
			

			<div class="container-large">
				
				<div class="about-content">
				<div class="about-first enamad">
						
						<img src="/img/enamad.png">

				</div>
				<div class="about-second samandehi">
						
						<img src="/img/samandehi.png">

				</div>

				  <div class="content">
				  	
				  	<span class="content-title">
				  		

فروشگاه اینترنتی مد و لباس دیجی استایل


				  	</span>
				  	<span class="content-first">
				  		

				  		فروشگاه اینترنتی دیجی استایل که یک تجربه منحصربه فرد بعد از دیجی کالا است، یکی از بزرگ ترین و جامع ترین مراکز آنلاین عرضه پوشاک با کیفیت است. در دیجی استایل تمامی کالاهای مرتبط با پوشش، با کیفیتی مطلوب و کم¬نظیر و با قیمتی مناسب ارائه می¬شود. تیم دیجی استایل تمام تلاش خود را کرده است تا محصولاتی را که به مشتریان عرضه می¬کند، علاوه بر تناسب با معیارهای ایرانی و اسلامی، زیبایی و اصالت را هم به همراه داشته باشد. تمامی محصولات این سایت از جمله لباس، کفش، زیورآلات، لوازم آرایش و سلامت، در نهایت دقت و با تلاش متخصصان تیم دیجی استایل انتخاب شده و در اختیار خریداران قرار گرفته اند. یکی از اهداف اصلی فروشگاه اینترنتی مد و لباس دیجی استایل در کنار برطرف کردن نیاز خرید لباس و خرید کفش و اکسسوری، سریع و مطمئن اینترنتی، معرفی و عرضه کالاهای فاخر ایرانی با کیفیتی کم نظیر و طراحی به روز است. در این راستا سعی شده تا با فروش محصولات تولید داخل کشور مانند اناربن، خانه مد راد، هورشید، تچر، پانیسا، مکث، پاتن چرم، آر ان اس، شهر چرم، هاترا، گالری آرتمیس، چرم مشهد، آنو جین و... در این سایت خریدی مطمئن در کمترین زمان برای خریداران تضمین شود. در کنار تمام محصولات ایرانی شناخته شده و با کیفیت، سعی شده تا با نگاهی دقیق و موشکافانه به فرهنگ و سبک زندگی ایرانی و اسلامی،دیجی استایل بعد از تجربه،کار و شناخت سلیقه مشتریان در دیجی کالا به این نتیجه رسید محصولات شرکت های خارج از ایران هم در کنار تولیدات ایرانی قرار گیرند تا با مقایسه محصولات داخلی و نمونه های مطرح جهانی، بتوانید بنا بر سلیقه خاص خود، تجربه ای به یاد ماندنی از خرید اینترنتی داشته باشید. 
				  	</span>

				  </div>



				</div>
			</div>

		</div>


@endsection