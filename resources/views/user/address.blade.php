@extends('layouts.indexLayouts')

@section('content')


	<section style="min-height: 700px;">
		



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

				<span style="position: absolute; margin-top:38px; left: 10%;">0</span>

				</li>
				<li style="border-right: 1px solid #ddd; border-left: 1px solid #ddd;">
				<span>سفارشات در انتظار تأیید</span>	
				<span style="position: absolute; margin-top:38px; left: 23%;">0</span>



				</li>
				<li>
					
				<span>تعداد کل سفارشات</span>	
				<span style="position: absolute; margin-top:38px; left: 34%;">0</span>


				</li>


			</ul>



		</div>

</div>
		</div>




	
@include('user.sidebar')

		<div class="profile-content">
			

			<h4>اطلاعات مشتری حقیقی </h4>

			
<button class="add-address" value=""  data-toggle="modal" 
          data-target="#address1" style="position: absolute !important; left: 13% !important;">افزودن آدرس جدید</button>


@foreach(App\address::all() as $address)

@if($address->user_id == Auth::user()->id )

<input type="hidden" name=" "  value="{{$address->user_id}}" id="address">


<div style="width: 71%;outline: 2px solid #4ad5dc;">

  <table class="table" style=" width: 100% !important; background-color: #fff !important;
  height: auto !important; margin-top: 31px;">

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

@if(empty($address->user_id ))

  <table class="table table_null" style="border: 1px solid #ddd; height: 110px; " >
      <tr>
        

        <td>
          

          <a href="#" class="btn btn-default btn-shopping-list  " data-toggle="modal" 
          data-target="#address1">افزودن آدرس جدید</a>

        </td>

      </tr>




  </table>

@endif


@endforeach



		</div>

	</section>

@include('address')



@endsection