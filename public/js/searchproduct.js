
function Pruduct_FilterLevel2(pruducts,variants,filters){
var _this=this;
this.init=function(){
this.pruducts=pruducts;
this.variants=variants;
this.filters=filters;
this.bindEvents();

};
this.bindEvents=function(){

_this.pruducts.hide();

var filteredProducts = _this.variants;
    //filter by colour, size, shape etc
var filterAttributes = $('.filter-attributes');

filterAttributes.each(function(){

 var selectedFilters = $(this).find('input:checked');

 if (selectedFilters.length) {
        var selectedFiltersValues = [];
        selectedFilters.each(function() {
          var currentFilter = $(this);

         
          selectedFiltersValues.push("[data-" + currentFilter.attr('name') + "='" + currentFilter.val() + "']");
        });
        filteredProducts = filteredProducts.filter(selectedFiltersValues.join(','));

        console.log(selectedFiltersValues);
      }
});
   filteredProducts.parent().fadeIn(1000);


};
};
