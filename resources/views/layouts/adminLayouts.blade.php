
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>پنل مدیریت</title>
	<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/admin.css">
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
	<link rel="stylesheet" type="text/css" href="/css/nice-select.css">
</head>
<body>


	<aside class="sidebar" style="overflow-y: scroll; position: absolute;height: 80%;width: 283px; ">
			<ul >
				
				<li ><a href="/"><i class="icon-dashboard"></i> میز کار</a></li>

			   

			  	<li data-toggle="collapse" data-target="#toggleDemo"><i class="icon-group"></i>مدیریت کاربران</li>


			  	<ul id="toggleDemo" class="collapse">
			  		
			  		<li><a href="/admin/adduser">ایجاد کاربر جدید</a></li>
			  		<li><a href="/admin/showuser">مشاهده کاربران</a></li>
			  	</ul>



			  		<li data-toggle="collapse" data-target="#toggleDemo1"><i class="icon-male"></i>مدیریت محصولات</li>


			  	<ul id="toggleDemo1" class="collapse">
			  		
			  		<li><a href="/admin/product">ایجاد محصول جدید</a></li>
			  		<li><a href="/admin/product">مشاهده کل محصولات</a></li>
			  	</ul>

			 
			  	<li data-toggle="collapse" data-target="#toggleDemo2"><i class="icon-list-alt"></i>مدیریت دسته ها </li>


			  	<ul id="toggleDemo2" class="collapse">
			  		
			  		<li><a href="/admin/category">ایجاد دسته جدید</a></li>
			  		
			  	</ul>



			  	 	<li data-toggle="collapse" data-target="#toggleDemo3"><i class="icon-shopping-cart"></i>مدیریت سفارشات </li>




			   	<li data-toggle="collapse" data-target="#toggleDemo4"><i class="icon-sort-by-attributes"></i>مدیریت برندها </li>


			  	<ul id="toggleDemo4" class="collapse">
			  		
			  		<li><a href="/admin/viewbrand">مشاهده برند</a></li>
			  		<li><a href="/admin/brand">ایجاد برند</a></li>
			  	</ul>



			   	<li data-toggle="collapse" data-target="#toggleDemo5"><i class="icon-sort-by-attributes"></i>مدیریت تخفیف ها </li>


			  	<ul id="toggleDemo5" class="collapse">
			  		
			  		<li><a href="/admin/discountshow">مشاهده تخفیف</a></li>
			  		<li><a href="/admin/discount">ایجاد تخفیف جدید</a></li>
			  	</ul>



			   	<li data-toggle="collapse" >


			   		<i class="icon-comment"></i>

<a href="/admin/commentshow">
			   	مدیریت دیگاها</a></li>






			</ul>




	</aside>
	<div id="app">
	@include('layouts.header')


	
	@yield('content')

	
</div>





 <script src="{{ asset('js/dropzone.js') }}"></script>

<script type="text/javascript" src="/js/app.js"></script>
   <script src="/js/zingchart.min.js"></script>
 <script type="text/javascript" src="/js/jquery.nice-select.js"></script>
<script type="text/javascript" src="/js/sweetalert.min.js"></script>

 <script>

</script>


@include('flash')



<script type="text/javascript">

	
 $.getJSON("/admin/report", function (data) {
     var labels = [],data1=[];
    for (var i = 0; i < data.length; i++) {
        labels.push(data[i].sums);
        data1.push(data[i].months);


    }


 var myConfig = {
      "graphset": [{
        "type": "bar",
        "title": {
          "text": "تعدا افرادی که محصولات سایت را خریداری",
                      "position":"0% 0%",
            "margin-top":10,
            "margin-right":0,
            "margin-left":0,
            "margin-bottom":10,
            "text-align":"right",
            fontWeight : "normal",
            fontStyle : 'italic'
        },
        "3d-aspect": {
          "true3d": false
        },

         "scale-x": {
                    "values":data1 ,
                    "line-color": "#cc3ff2",
                    "text-align":"center",
                    "tick": {
                        "visible": false
                    },
                    "guide": {
                        "visible": false
                    },
                    "item": {
                        "font-family": "arial",
                        "font-color": "#8B8B8B"
                    }
                },

    "plot":{
        "facets":{
            "front":{
                "background-color":"#3EA4F9 #0055BF"
                },
            "right":{
                "background-color":"#3EA4F9 #0055BF"
                },
            "left":{
                "background-color":"#3EA4F9 #0055BF"
                },
            "top":{
                "background-color":"white"
                },
            "bottom":{
                "background-color":"white"
                }
        }
 
    },


        "series": [{
          "values": labels
        }]
      }]
    };



    zingchart.render({
      id: 'userchart',

      data: myConfig,
      height: '75%',
      width: '100%'
    });



 });
   
$(document).ready(function(){

   $('select:not(.ignore)').niceSelect();
       FastClick.attach(document.body);
});



	Dropzone.options.imageurl={

		paramName:"file",
		maxFilesize:2,

		success:function(file,response){
			$("#url").val(response);
		}


	}


	



Dropzone.options.imageuser1={

		paramName:"file",
		maxFilesize:2,

		success:function(file,response){
			$("#imageuser").val(response);
			$("#imageuser2").val(response);
		}


	}

	$("#mybutton").click(function(){

		



	});


	$("#sidebar").click(function(){

		$(".sidebar").toggle(3000);

	});


</script>




</body>
</html>