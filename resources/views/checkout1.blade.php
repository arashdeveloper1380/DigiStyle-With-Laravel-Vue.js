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


              <li class="progress-step">
                

                <span class="step-icon basket_icon">
                  
                  <i class="icon icon-truck  "></i>

                  <span class="step-title" style="color:  #666 !important; right: -17% !important;">اطلاعات ارسال</span>


                </span>
              </li>


              <li class="progress-step ">
                


                <span class="step-icon basket_icon">
                  
                  <i class="icon icon-credit-card   "></i>

                  <span class="step-title" style="color:  #666 !important; right: -17% !important;">اطلاعات پرداخت</span>


                </span>

              </li>

            </ul>


          </div>


        </div>

</div>
    </div>






    <section>
      

      <div class="cart">
        


        <h4 style="margin-right: 179px;margin-bottom: 40px;">سبد خرید شما</h4>

        <table class="tabel  shopping-tabel" style="" border="1px">
          

          <thead>
            <tr>
              
              <th>مشخصات محصول</th>
              <th>تعداد</th>
              <th>قیمت</th>


            </tr>

          </thead>

          <tbody>
              @if(!empty(Session::get('cart')))


        <?php $price=0;
        $price1=0;

        $finalprice=0;


         ?>

        @foreach(Session::get('cart') as $key=>$value)


<?php

 $v=new Verta();
  $p=product::find($key);  

 $discount=discount::where('enddate', '>=', $v->formatJalaliDate())->where('begindate','<=' ,$v->formatJalaliDate())->where('product_id',$p->id)->first();



   ?>
           
            <tr>
              
              <td>

<img src="/imageproduct/{{$p->image}}" width="100px" height="100px" class="cart-image">
<p>{{$p->name}}</p>
<p>کد کالا :{{$p->id}}</p>


          </td>
              <td>


                <div class="number">
                  

                  <i class="icon icon-plus" onclick="addcart('{{$p->id}}')"></i>
                  <input type="text" name="countnumber" id="countnumber{{$p->id}}"  style="text-align: center;  height: 30px;width: 57px;" value="{{$value}}" min="1" max="5" >
                   <i class="icon icon-minus"  onclick="deletecart('{{$p->id}}')" ></i>
                </div>




              </td>
              <td>

          <div class="main-price" style="">

@if($discount)
<?php
    $dis1=$discount->value*$p->price/100;
    $price2=$p->price-$dis1;

   

  ?>
               <p   style="margin-top:17px;position: absolute;margin-right: 20px;">قیمت واحد : {{$price2}}</p>



@else


  <p   style="margin-top:17px;position: absolute;margin-right: 20px;">قیمت واحد : {{$p->price}}</p>
@endif
                <p   style="float: right;top: 9px;margin-top: 17px;padding-right:199px;"> تومان</p>

        </div>

        <div class="final-price">
          
                <p   style="margin-top:131px;position: absolute;margin-right: 41px;">قیمت نهایی : </p>

@if($discount)
<?php
    $dis1=$discount->value*$p->price/100;
    $price2=$p->price-$dis1;

    $price1=$value*$price2; 
$finalprice+=$value*$price2;
  ?>
<input type="hidden" name="" value="{{$price2}}" id="final-price{{$p->id}}" >

                <p   class="final-price1{{$p->id}}" style="float: right;top: 9px;margin-top: 131px;padding-right:223px;"> {{$price1}}تومان</p>
@else

<?php $price=$value*$p->price  ?>
     <?php $finalprice+=$value*$p->price  ?>
<input type="hidden" name="" value="{{$p->price}}" id="final-price{{$p->id}}" >

                <p   class="final-price1{{$p->id}}" style="float: right;top: 9px;margin-top: 131px;padding-right:223px;"> {{$price}}تومان</p>



@endif


        </div>
                <span class="close_pain">
                  
                  <a onclick="deletecart('{{$p->id}}')">
                  <i class="icon icon-remove" style="position: absolute;top: 41%;cursor: pointer;font-size: 19px;color: #ddd;z-index: 1;left: 11px;"></i>
                    </a>
                </span>

              </td>

            </tr>




@endforeach


@endif









          </tbody>


        </table>




          <div class="shopping-info">
            

            <div class="info-right">
              

                      <a href="#"   style="float: right;">
                  
                  <i class="icon1 icon1-tike"></i>
                  <span style="position: relative;

                  color:#666;padding-top:14px;font-size: 11px;
                  vertical-align:middle;padding-left: 33px; 
                  right:16%;

                  ">ضمانت هفت روز بازگشت کالا</span>
              </a>
              <a href="#"  style="float: right;">
                  
                  <i class="icon1 icon1-car"></i>
                
                                   <span style="position: relative;

                  color:#666;padding-top:14px;font-size: 11px;
                  right:16%;
                  vertical-align:middle; 

                  ">تحویل رایگان</span>
              </a>
              <a href="#"  style="float: right;">
                  
                  <i class="icon1 icon1-tike1"></i>

              <span style="position: relative;

                  color:#666;padding-top:14px;font-size: 11px;
                  right:16%;
                  vertical-align:middle;

                  ">ضمانت اصل بودن کالا</span>              
</a>

    


            </div>



            <div class="info-left" style="float: left;">
         

              <p class="total">مبلغ قابل پرداخت </p>

              <p class="total1"> {{$finalprice}}تومان </p>


            </div>


          </div>



          <div class="basket-total" style="min-height: 200px;">
              
              <div class="basket-message  text-alert">
                

                <div class="clock">
                  
                  <div class="clock_hand   clock_hand-short"></div>

                  <div class="clock_hand   clock_hand-long"></div>


                </div>

                <p>

موجودی کالاها <span>محدود <span> می باشد. افزودن محصولات به سبد به معنی رزرو آنها برای شما نیست</p>
                <p>برای حذف نشدن محصولات از سبد خرید، لطفا سفارش خود را تکمیل و نهایی کنید</p>

              </div>


<div class="basket-action">

                        
                        <a href="/checkout2" class="dk-btn dk-btn-lg dk-btn-pink next-step pull-left sb-btnlogin" onclick="submitData()" style="background-color: rgb(62, 193, 199) !important; left: 9%;position: absolute;">
                            <span style="color: #fff; font-size: 14px;">
                                ثبت سبد و مرحله بعد
                            </span>
                            <i class="icon icon-angle-left" style="color: #eeeeee; font-size: 18px;"></i>
                        </a>

                        
                    </div>

          </div>


      </div>


    </section>


  </section>




@endsection
