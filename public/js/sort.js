$(function(){


var $container=$('.content');

$container.isotope({

  itemSelector:'.image-box',

  getSortData:{
    price:function($elm){

      return $elm.data("price");

    }
  }

});


$('[data-isotope-option]').click(function(event){

  event.preventDefault();
  var option =$ (this).attr('data-isotope-option');

  option=JSON.parse(option);
  option.sortAscending="true" ===  option.sortAscending ?true :false;


  $container.isotope(option);

});

});