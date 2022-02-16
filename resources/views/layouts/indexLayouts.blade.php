<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="_token" content="{{ csrf_token() }}" />
                    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" type="text/css" href="/font-awesome/css/fontawesome-all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
   
 <link rel="stylesheet" type="text/css" href="/css/style.css">
 <link rel="stylesheet" type="text/css" href="/css/nice-select.css">
 <link rel="stylesheet" type="text/css" href="/css/nouislider.css">
  
  <link rel='stylesheet prefetch' href='/css/pgwslider.min.css'>
<link rel="stylesheet" href="/css/jquery_ui.css">

               
        <title>فروشگاه کالا</title>



          <style>
       
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

        <ul class="logo">
            
            <li>
                
                <div class="search-form">
                    

                    <input type="text" name="" id="searchBox" class="search-field" placeholder="جستجو کنید" onchange="search()">

                    <button class="search-btn pull-left">
                        


                        <i class="icon icon-search"></i>
                    </button>

                </div>


                <span class="result" style="width: 285px;height: auto;background-color: #fff;box-shadow: 2px 1px 3px 1px #eee;position: absolute;border: 1px solid #ddd;margin-top: 2px; display: none;z-index: 999;margin-right: -19px;line-height: 35px;font-size: 14px;"></span>
            </li>


            <li>
                
                    <a href="/">
                                
                        <img src="/img/logo.png">       


                    </a>

            </li>

            <li>
                        <a href="/">دانلود اپلیکیشن</a>

            </li>

        </ul>


    </div>


    <div class="container-large ">


        <ul class="nav navbar-nav">
            
   @foreach($menus as $menu)
                    <li class="dropdown dropdown-large "><a href="#" class="dropdown dropdown-large" data-toggle="dropdown"> {!! $menu->name !!}</a>
                        
                        <ul class="dropdown-menu dropdown-menu-large row pull-right" role="menu">
                            <div class="menu-level2">
                            <div class="menu-wrapper">
                        @foreach($submenus as $submenu)
                                @if($submenu->parent_id === $menu->id)
                                <li class="col-sm-2"><a href="/filter/{{$submenu->id}}" >{!! $submenu->name !!}</a>
                                <hr>
                                    @foreach($submenus as $smenu)
                                            @if($smenu->parent_id === $submenu->id)
                                                <ul  >
                                                    <li class="dropdown-header"><a href="/filter/{{$smenu->id}}">{!! $smenu->name !!}</a>
                                                    </li>
                                                </ul>
                                            @endif
                                    @endforeach
                                </li>
                            @endif
                            @endforeach
                            </div>
                           
                            <div class="col-sm-2" id="brand">
                                
                                 @foreach($brand as $brands)

                                 @if($brands->category_id ===  $menu->id)
                                    <a href="#">
                                 <img src="/imagebrand/{{$brands->image}}" width="100px" height="60px">
                                  </a>
                                 @endif



                                @endforeach
                                
                            </div>


                            <div class="col-sm-2" id="image">
                                
                                

                                 @if($banner->category_id ===  $menu->id)

                                <img src="/banner/{{$banner->image}}">
                                
                            
                                     @endif



                                
                                
                            </div>
                             
                            </div>
                        </ul>
                    </li>
                    @endforeach
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
 <script type="text/javascript" src="/js/vue.js"></script>
   <script src="/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>


    <script type="text/javascript" src="/js/vue_isotope.js"></script>
     <script src="/js/sort.js"></script>
<script src="/js/jquery_ui.js"></script>
<script src="/js/searchproduct.js"></script>
<script src="/js/answer.js"></script>
     <script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="/js/jquery.cycle.all.js"></script>
      <script type="text/javascript" src="/js/jquery.nice-select.js"></script>

    <script type="text/javascript" src="/js/state.js"></script>
<script type="text/javascript" src="/js/search.js"></script>


    <script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>







 

<script type="text/javascript">











  $(".list1").css('display','none');
$(".user_profile").mouseenter(function(){

     $(".list1").fadeIn();
 

});
$(".list1").mouseleave(function(){

     $(".list1").fadeOut();


});


  $("#shoping").css('display','none');


$(".cart-button").mouseenter(function () {
        $("#shoping").fadeIn();
    });
 $("#shoping").mouseleave(function(){
       $("#shoping").fadeOut();
});



 
deletecart=function(id){



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
        var count =parseInt( $("#count1").val());
      $(".count").html(count);
      },
      error:function(){

        alert('no');
      }

    });


}

addcart=function(id){







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
      var count =parseInt( $("#count1").val());
      $(".count").html(count);

      },
      error:function(){

        alert('no');
      }

    });
         

}





$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});



  function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);




$(function(){

    $('#slider-range').slider({

      range:true,
      min:19000,
      max:800000,
      values:[19000 ,800000],
      create:function(){

        $("#price").val("تومان19000 - تومان800000");
      },

      slide:function(event ,ui){

        $("#price").val("تومان" + ui.values[0] + "  -  تومان"+ ui.values[1]);

        var mi=ui.values[0];
        var mx=ui.values[1];

        filterprice(mi,mx);

      }
    })

  });
 function filterprice(minPrice, maxPrice) {
      $("#products div.system").hide().filter(function () {
          var price = parseInt($(this).data("price"), 10);
          return price >= minPrice && price <= maxPrice;
      }).show();


  }








  $(document).ready(function(){

  $('.brandfilter').on('change' ,function(){

    var branlist = [];

    $("#filterbrand :input:checked").each(function(){
      var brand=$(this).val();
      branlist.push(brand);  
alert(brand);
    });
    if(branlist.lenght == 0)
      $(".resultblock").fadeIn();

    else{
 $(".resultblock").each(function(){

  var item =$(this).attr('data-brand');

  if(jQuery.inArray(item,branlist)>-1)

    $(this).fadeIn('slow');
    else
$(this).hide();
 });



    }


  });

 });



  function img(id){
 $('#item'+id+'').mouseover(function(){

$(this).find('img').addClass('selected');


 });
 $('#item'+id+'').mouseout(function(){

$(this).find('img').removeClass('selected');


 });

  }
    
    function showdlider(id){


          $('#pager'+id+'').carouFredSel({

     
         auto:true,
         width:'100%',
         height:'100%',
          direction:"up",
        prev:'#prev2'+id+'',
        next:'#next2'+id+'',
        mousewheel:true,

        swipe:{

            onMouse:true,
            onTouch:true
        }


    });
         


          $('#pager'+id+'').delegate('img' ,'mouseover',function(){

            var src=$(this).attr('src');
         
            $("#carousel"+id+"").html('<img src="'+src+'" border="0" width="100%" height="100%">')

          });
    }


     $('#pager').carouFredSel({

     
         auto:true,
         width:'100%',
         height:'100%',
          direction:"up",
        prev:'#prev4',
        next:'#next4',
        mousewheel:true,

        swipe:{

            onMouse:true,
            onTouch:true
        }


    });
         


          $('#pager').delegate('img' ,'mouseover',function(){

            var src=$(this).attr('src');
            
            $("#carousel").html('<img src="'+src+'" border="0" width="100%" height="100%">')

          });







     $(document).on("change", ".attribute", function () {
    var selectedCBValue = $(this).val();
    if ($(this).is(":checked")) {
        ShowAvailableProducts(selectedCBValue);
    }else
    {
        ShowAllProducts();
    }
});

$(document).ready(function(){

   $('select:not(.ignore)').niceSelect();
       FastClick.attach(document.body);
});

$("#addsazmani").click(function(){
    if ($(this).is(":checked")) {

$('.table-edit-sazmani').show();

}else{

  $('.table-edit-sazmani').hide();
}
});





$("#type").click(function(){
    if ($(this).is(":checked")) {

$('#NationalCode').hide();

}else{

  $('#NationalCode').show();
}
});



function ShowAvailableProducts(selectedName) {
    $('.grid-variants').each(function (k, div) {
        var divValue = $(div).data("attr");
        if (divValue == selectedName) {
            $(div).show();
        } else {
            $(div).hide();
        }
    });
}

function ShowAllProducts()
{
    $('.resultblock').show();
}



  $(document).ready(function(){

   


    $('#foo').carouFredSel({

        
         auto:false,
         width:'100%',
         height:'100%',
   
        prev:'#prev2',
        next:'#next2',
        mousewheel:true,

        swipe:{

            onMouse:true,
            onTouch:true
        }


    });

    $('#foo1').carouFredSel({

        items:6,
         auto:false,
         width:'100%',
         height:'100%',
   
        prev:'#prev2',
        next:'#next2',
        mousewheel:true,

        swipe:{

            onMouse:true,
            onTouch:true
        }


    });




  });

    $(document).ready(function(){

        $('#slider').cycle({

            fx:'fade',
            speed:'fast',
            next:'#next',
            prev:'#prev'

        });

$(function(){

  var $container = $('.content');

  $container.isotope({
    itemSelector: '.image-box',
    
    getSortData: {
    price: function($elm) {
                        return $elm.data("price");
                    }
    }
  });

  $('[data-isotope-option]').click( function( event ) {
    event.preventDefault();
    var option = $(this).attr('data-isotope-option');
    // convert string to object
    option = JSON.parse( option );

    option.sortAscending = "true" === option.sortAscending ? true : false;


    $container.isotope( option );
  });

});

});




</script>
   
    </body>
</html>
