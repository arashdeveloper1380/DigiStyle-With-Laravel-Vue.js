search=function(){

		var search=$("#searchBox").val();


		 $.ajaxSetup({

      headers:{

        'x-CSRF-Token':$('meta[name=_token]').attr('content')

      }


    });

    $.ajax({

      url:'/search',
      type:'post',
      data:'name='+search,
      success:function(response){
      	if (response) {
      	 $(".result").css("display" , "block");
          $(".result").html(response);
		}
		else{
			 $(".result").css("display" , "none");
		}
      },
      error:function(){

        alert('no');
      }

    });



		 }
