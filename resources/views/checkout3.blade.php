@extends('layouts.indexcheckout')

@section('content')
            <?php

use App\product;

use App\discount;

?>



  <section style="min-height:700px; ">
    



    <div id="dk-cart-progress">
      

        <div class="progress-steps-wrapper">
          <div class="progress-steps">
          

          <div class="container">
            

            <ul>
              
              <li class="progress-step current">
                

                <span class="step-icon basket_icon">
                  
                  <i class="icon icon-shopping-cart  "></i>

                  <span class="step-title">سبد خرید</span>


                </span>


              </li>


              <li class="progress-step current">
                

                <span class="step-icon basket_icon"  style="border:2px solid #3fc1c7 !important; ">
                  
                  <i class="icon icon-truck  " style="color: #3fc1c7 !important;"></i>

                  <span class="step-title" style="color: #3fc1c7 !important; right: -17% !important;">اطلاعات ارسال</span>


                </span>
              </li>


              <li class="progress-step current">
                


                <span class="step-icon basket_icon" style="border:2px solid #3fc1c7 !important; ">
                  
                  <i class="icon icon-credit-card   " style="color: #3fc1c7 !important;"></i>

                  <span class="step-title" style="color:  #3fc1c7 !important; right: -17% !important;">اطلاعات پرداخت</span>


                </span>

              </li>

            </ul>


          </div>


        </div>

</div>
    </div>



    <div class="container order-summery">
      

<h4 style="margin-bottom: 15px; margin-top: 20px;">خلاصه سفارش</h4>

      <div class="orders" style="text-align: center;">
        

<?php

         $price=0;

        $finalprice=0;


         ?>
              @if(!empty(Session::get('cart')))


        

        @foreach(Session::get('cart') as $key=>$value)


<?php 

$v=new Verta();

 $p=product::find($key);   
$discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->where('product_id',$p->id)->first();



?>

@if($discount)
<?php
    $dis1=$discount->value*$p->price/100;
    $price=$p->price-$dis1;

   
$finalprice+=$value*$price;
  ?>

  @else

 <?php $finalprice+=$value*$p->price  ?>

  @endif


        <span class="order-items" >
          

          <a href="#">
            
        

<img src="/imageproduct/{{$p->image}}"  class="tip cart-image" data-tip="my-tip{{$p->id}}">

          </a>


          <div id="my-tip{{$p->id}}" class="tip-content  hidden">
            
            
            <h5>{{$p->name}}</h5>
            <h5>{{$p->id}}</h5>


          </div>
          <span class="order-count">{{$value}}</span>

        </span>


        @endforeach

        @endif


      </div>




                <table>
                  


                  <tbody>
                    

                    <tr>
                      
                      <td><span  style="right: 13%;font-weight: bold;">مبلغ کل خرید</span></td>
                      <td><span style="right: 80%; font-weight: bold;"> {{$finalprice}} تومان </span></td>

                    </tr>

                    <tr>
                      
                      <td><span style="right: 13%;font-weight: bold;">هزینه ارسال، بیمه و بسته بندی</span></td>
                      <td><span style="right: 84%; font-weight: bold;">0تومان</span></td>

                    </tr>

                <tr>
                      
                      <td><span style="right: 13%;font-weight: bold;">قابل پرداخت</span></td>
                      <td><span style="right: 80%; font-weight: bold;"> {{$finalprice}} تومان</span></td>

                    </tr>



                  </tbody>

                </table>



                <span>
                  


                  @foreach($address as $ad)

                  <i class="icon icon-truck" style="font-size: 20px;"></i>
                  <h5 style="display: inline-block;">این سفارش به {{$ad->name}}  به آدرس  {{$ad->address}}و شماره تماس  {{$ad->mobile}} تحویل می‌گردد</h5>

                  <form method="post" action="/orders"> 
                  <?php $address_id=$ad->id; ?>

            
                  </form>

                  


                  @endforeach



                </span>

                <span style="display: inline-block; width:100%; margin-top: 88px; ">
                  
                  <h5 style="width: 44%;height: 55px;overflow: hidden;line-height: 29px;">با انتخاب دکمه پرداخت و تکمیل خرید موافقت خود را با شرایط و قوانین مربوط به ثبت و رویه های پردازش سفارشات دیجی استایل اعلام نموده اید</h5>


                         <div class="info-left" style="float: left; margin-top: -60px !important; ">



                 

       
    <a href="/orders/{{$ad->id}}" class="dk-btn dk-btn-lg dk-btn-pink next-step pull-left sb-btnlogin" style="background-color:#ef5a88 !important; left:0%;position: relative;">
                            <span style="color: #fff; font-size: 14px; border-bottom: 0px !important;">
                               ثبت اطلاعات و رفتن به مرحله بعد
                            </span>
                            <i class="icon icon-angle-left" style="color: #eeeeee; font-size: 18px;"></i>
                        </a>

</form>
                        
          </div>
                </span>



      </div>






    </div>

  </section>


    @endsection