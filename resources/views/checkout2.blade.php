@extends('layouts.indexcheckout')

@section('content')




  <section style="min-height:700px; "   id="app">
    



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





    <div class="address-content">
      
      <div class="container">

      <h4>آدرس محل تحویل سفارش خود را انتخاب و یا آدرس جدید اضافه کنید

</h4>


<button class="add-address" value=""  data-toggle="modal" 
          data-target="#address1">افزودن آدرس جدید</button>

<div class="shopping-address-list" style="margin-top: 53px;">
  

@foreach(App\address::all() as $address)

@if($address->user_id == Auth::user()->id )

<input type="hidden" name=" "  value="{{$address->user_id}}" id="address">


<div style="width: 105%;outline: 2px solid #4ad5dc;">

  <table class="table" style="">

    <colgroup>
      

      <col class="radio-box-col"></col>

    </colgroup>

    <tbody>
      <tr>
        

        <td class="tabel-radio tabel-radio-checked" rowspan="2"> 

          <label class="custom-radio">

         <label class="container1">


           <input type="radio" name="radio" checked=""  v-on:click="updatestatus('{{$address->id}}')"  id="radio" value="{{$address->id}}">
  <span class="checkmark"></span>
</label>

          </label>
           </td>
       <td colspan="1" class="shipping__name" width="27%">


                                        <span class="title">تحویل گیرنده:</span>
                                        <span class="value">{{$address->name}}</span>



                                    </td>
      <td colspan="1">


                                        <span class="title">شماره تماس ثابت:</span>
                                        <span class="value">{{$address->phone}}</span>
                                    </td>
        <td colspan="1" width="25%">
                                        <span class="title">شماره تماس اضطراری:</span>
                                        <span class="value" style="margin-right: 155px;" >{{$address->mobile}}</span>
                                    </td>
        <td class="action-cell" rowspan="3"> 



          <table class="action-table">



                                            <tbody>


                                              <tr>
                                                <td class="edit">
                                                    <a href="javascript:editRecipient(239384)">
                                                   <i class="icon icon-edit" style="color: #eeeeee"></i>
                                                    </a>
                                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="delete">
                                                    <a href="#" v-on:click="DeleteAddress('{{$address->id}}')" >
                                                       <i class="icon icon-remove" style="color: #eeeeee" ></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>


                                 </table> 



                                 </td>
       

      </tr>
      <tr>
        
        <td class="shipping__address" colspan="2">
                                        <span class="title" style="width: 66% !important;">آدرس:</span>
                                        <span class="value" style="margin-right: 60px;">{{$address->address}}</span>
                                    </td>
         <td colspan="1" width="25%">
                                        <span class="title" style="width: 20% !important;">کد پستی:</span>
                                        <span class="value">{{$address->zipcode}}</span>
                                    </td>

      </tr>


</tbody>

  </table>






</div>



@endif

@if(empty($address->user_id == Auth::user()->id))

  <table class="table table_null" style="border: 1px solid #ddd; height: 110px; " >
      <tr>
        

        <td>
          

          <a href="#" class="btn btn-default btn-shopping-list  " data-toggle="modal" 
          data-target="#address">افزودن آدرس جدید</a>

        </td>

      </tr>




  </table>

@endif


@endforeach


</div>

<h5>هزینه ارسال: رایگان تحویل اکسپرس دیجی استایل (ارسال رایگان برای خرید بالای 200 هزار تومان)</h5>

          <div class="shopping-info" style="margin-right: 0px !important;width: 570px !important;">
            

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



           


            </div>


             <div class="info-left" style="float: left; margin-top: -60px !important; ">
              
    <a  href="/checkout3" class="dk-btn dk-btn-lg dk-btn-pink next-step pull-left sb-btnlogin" onclick="submitData()" style="background-color: rgb(62, 193, 199) !important; left:-25%;position: relative;">
                            <span style="color: #fff; font-size: 14px;">
                               ثبت اطلاعات و رفتن به مرحله بعد
                            </span>
                            <i class="icon icon-angle-left" style="color: #eeeeee; font-size: 18px;"></i>
                        </a>


          </div>
</div>

    </div>



</section>

@include('address')

@endsection