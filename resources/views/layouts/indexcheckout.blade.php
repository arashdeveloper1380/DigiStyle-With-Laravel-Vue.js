<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" type="text/css" href="/font-awesome/css/fontawesome-all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
      <meta name="_token" content="{{ csrf_token() }}" />
 <link rel="stylesheet" type="text/css" href="/css/style.css">
 <link rel="stylesheet" type="text/css" href="/css/nice-select.css">
        <title>فروشگاه کالا</title>



          <style>
       #shoping {
margin-top: 0px !important;

       }
    </style>

    </head>
    <body>


       <div id="">


    <div class="top-bar" rel="navigation" >

    <div class="container-large " >
        

        <ul class="top-bar_right">
            <li></li>
            <li>
                    <span href="#" id="register">

  @if(Auth::user())


 <span class="user_profile ">{{Auth::user()->name}}</span>

  <span class="list1">
    
    <ul>
      
      <li><a href="/updateprofile">حساب کاربری</a></li>
      <li><a href="/countorder">سفارشات</a></li>
      <li> <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           خروج
                                        </a></li>


    </ul>



  </span>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
  @else
                        <svg width="24" height="24" id="login" xmlns="http://www.w3.org/2000/svg">

                         <g>
                          <svg viewBox="0 0 24 24" id="login" width="100%" height="100%">
                                <circle fill="#ffffff" cx="9" cy="8" r="4"></circle>
                                <path fill="#ffffff" d="M9 14c-6.1 0-8 4-8 4v2h16v-2s-1.9-4-8-4z"></path>
                            </svg>
                         </g>
                        </svg>


                        
                        <span style="display: inline-block;" data-toggle="modal" 
                        data-target="#signup" data-popup="register-login" data-type="">ثبت نام / ورود</span>

<style type="text/css">   
#shoping{

  margin-top: 0px !important;
}
    

</style>

@endif
                  
                    </span>


            </li>
          <?php $count=sizeof(Session::get('cart'));  ?>


  <li class="cart-button" id="cart-button">
                <a href="#" >
                    
                    <span>
                        

                        <i class="icon-shopping-cart"></i>
                    </span>

                     <span class="cart">سبد خرید</span>
            <span class="count">{{$count}}</span>



                      </a>

 </li>
         
         <div id="shoping">
           @include('shoping')
</div>

           
    
            
        </ul>

        <ul class="top-bar_left">
            
            <li>
                
                <a href="#">مجله اینترنتی دیجی استایل</a>

            </li>

        </ul>


    </div>
</div>
    <div class="container-large ">

        <ul class="logo" style="border:none !important;  margin-right: 37%;">
            
           


            <li>
                
                    <a href="/">
                                
                        <img src="/img/logo.png">       


                    </a>

            </li>

        

        </ul>


    </div>


 


      
        @yield('content')
  @include('signup')
</div>

        <footer>
            
                <div class="container-large">
                    
                    <div class="footer-content first">
                        
                        <span class="footer-title">خدمات مشتریان</span>
                         <a href="#">
پاسخ به پرسش های متداول</a>
                         <a href="#">رویه های بازگرداندن کالا</a>
                         <a href="#">شرایط استفاده</a>
                         <a href="#">حریم خصوصی</a>


                    </div>
                    <div class="footer-content second">
                        

                        <span class="footer-title">ثبت نام در خبرنامه دیجی استایل</span>
                         <a href="#">با ثبت نام در خبرنامه دیجی استایل، اولین نفری باشید که از جدیدترین محصولات، جشنواره ها و فروش‌های ویژه ما مطلع می شوید.</a>


                         <input type="text" name="" >
                         <button >ثبت ایمیل</button>

                    </div>
                    <div class="footer-content third">
                        


                         <span class="footer-title">
                             

اطلاعات دیجی استایل
                             <span>پشتیبانی: ۹۵۱۱۹۹۰۰ (۰۲۱)</span>
                         </span>
                         <a href="#">تماس با ما</a>
                         <a href="#">دربراره ما</a>


                         <div class="social">
                             
                            <a href="#">
                                    
                                <i class="icon1 icon-instagram1"></i>
                            </a>
                             <a href="#">
                                    
                                <i class="icon1 icon-telgram1"></i>
                            </a>
                             <a href="#">
                                    
                                <i class="icon1 icon-facebook1"></i>
                            </a>
                             <a href="#">
                                    
                                <i class="icon1 icon-twitter1"></i>
                            </a>
                             <a href="#">
                                    
                                <i class="icon1 icon-aparat"></i>
                            </a>


                            <a href="#">
                                    
                                <i class="icon1 icon-plus1"></i>
                            </a>
                             <a href="#">
                                    
                                <i class="icon1 icon-pinterest1"></i>
                            </a>

                         </div>


                    </div>


                </div>


                <div class="copy">
                    <p>
                        کليه حقوق اين سايت متعلق به شرکت آوازه نو پوشان پارسی (فروشگاه اینترنتی دیجی استایل) می‌باشد.
                        <span> digistyle.com - 2018 © Copyright</span>
                    </p>

                </div>

        </footer>
        


    <script type="text/javascript" src="/js/app.js"></script>

    <script type="text/javascript" src="/js/state.js"></script>

       <script type="text/javascript" src="/js/jquery.nice-select.js"></script>










 

<script type="text/javascript">

  $(".list1").css('display','none');
$(".user_profile").mouseenter(function(){

     $(".list1").fadeIn();
 

});
$(".list1").mouseleave(function(){

     $(".list1").fadeOut();


});



  $(document).ready(function () {



     var address= $("#address").val();

     if (address > 0) {

       $(".table_null").hide();


     }else{
       $(".table_null").show();
     }



        // Tooltips
        $('.tip').each(function () {
            $(this).tooltip(
            {
                html: true,
                title: $('#' + $(this).data('tip')).html()
            });
        });
    });










  $("#shoping").css('display','none');


$(".cart-button").mouseenter(function () {
        $("#shoping").fadeIn();
    });
 $("#shoping").mouseleave(function(){
       $("#shoping").fadeOut();
});

deletecart=function(id){


    var quantity=parseInt($('#countnumber'+id+'').val());


    if (quantity > 0) {

  var q1=  $('#countnumber'+id+'').val(quantity-1);

      var price=parseInt($("#final-price"+id+"").val());

    var q=quantity-1;
    var fprice=price*q;

    $(".final-price1"+id+"").html(fprice+'تومان');


        }

     

$.ajaxSetup({

      headers:{

        'x-CSRF-Token':$('meta[name=_token]').attr('content')

      }


    });

    $.ajax({

      url:'/deletecart',
      type:'post',
      data:'product_id='+id,
   
      success:function(data){
        $("#shoping").html(data);

      },
      error:function(){

        alert('no');
      }

    });


}

addcart=function(id){

      var quantity=parseInt($('#countnumber'+id+'').val());

  var q1=  $('#countnumber'+id+'').val(quantity+1);


    var price=parseInt($("#final-price"+id+"").val());

    var q=quantity+1;
    var fprice=price*q;

    $(".final-price1"+id+"").html(fprice+'تومان');


$.ajaxSetup({

      headers:{

        'x-CSRF-Token':$('meta[name=_token]').attr('content')

      }


    });

    $.ajax({

      url:'/addcart',
      type:'post',
      data:'product_id='+id,
   
      success:function(data){
        $("#shoping").html(data);

      },
      error:function(){

        alert('no');
      }

    });
         

}



</script>
   
    </body>
</html>
