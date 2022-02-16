
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import swal from 'sweetalert';

import VueResource from 'vue-resource'
import VuePaginator from 'vuejs-paginator'

Vue.use(VueResource)
import VueSession from 'vue-session'
Vue.use(VueSession)
import isotope from 'vueisotope'
import sort from 'vuejs-sort';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VuePersianDatetimePicker from 'vue-persian-datetime-picker';
Vue.component('date-picker',VuePersianDatetimePicker );

Vue.component('sort', require('vuejs-sort'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
     components: {
    VPaginator: VuePaginator
  },
    data:{
    	name:"",
        categorys:[],
        select:[],
        categoryname:"",
        select1:[],
        selectgroup:[],
        namegroup:"",
        selectattribute:[],
        nameattribute:"",
        nameattributeitem:"",
        selectattributeitem:[],
        size:"",
        sizeid:[],
        groups:[],
        ProductPrice:"",
        ProductDesc:"",
        ProductName:"",
        size_id:"",
        attribute_id:"",
        attributeitem_id:"",
        brand_id:"",
        discount_id:"",
        category_id:"",
        brandName:"",
        brandcountry:"",
        date:"",
        date1:"",
        valuediscount:"",
        namediscount:"",
        codediscount:"",
        fname:"",
        lname:"",
        roule:"",
        email:"",
        password:"",
        imageuser:"",
        showstatus:[],
        fname1:"",
        lname1:"",
        role1:"",
        email1:"",
        userupdate:[],
        ProductDiscount:"",
        attributeitem2:[],
        size2:[],
        attribute2:[],
        brandcategory:"",
        nameslide:"",
        textslide:"",
        brandslide:"",
        categoryslide:"",
        bannercategory:"",
        products:[],
        pagination:{

            total:0,
            perpage:2,
            from:1,
            to:0,
            current_page:1

        },
        offset:4,
        productsID:[],
        productitem:[],
        textcomment:"",
        subjectcomment:"",
        commentsize:"",
        commentstatus:"",
      list:[
            {name:"John", id:25}, 
            {name:"Joao", id: 7},
            {name:"Albert", id: 12}, 
            {name:"Jean", id: 100}],
        items:[],
        shop:[],
        cartId:[],
         verified: false,
         mobile:"",
         fname2:"",
         address:"",
         zipcode:"",
         codecity:"",
         phone:"",
         product_id_order:[],
         noticomments:[],
         notiorders:[],
        selected: null,
      


         
    },   

    computed: {
 productss: function() {
    
            return _.orderBy(this.products, 'price','desc');
            console.log(_.orderBy(this.products, 'price','desc'));
        }
        },
    created:function(){

    },
        mounted(){
            this.getorders();
            this.getcommentnoti();
             this.fetchcart();
             this.fetchcomment();
           this.fetchproduct(); 
          this.approvedusers();
           this.fetchproductitem(); 
      
    
     },

    methods:{

     orderBy: function(sorKey) {
            this.sortKey = sorKey
            this.sortSettings[sorKey] = !this.sortSettings[sorKey]
            this.desc = this.sortSettings[sorKey]
            
        },

        /******************getcommentnoti******************/


    getcommentnoti:function(){



             axios.get('/admin/getcomment').then(response=>{

                this.noticomments=response.data;
              console.log(response.data);


            });
     setTimeout(this.getcommentnoti,2000);

    },

 getorders:function(){



             axios.get('/admin/getorders').then(response=>{

                this.notiorders=response.data;
             


            });
     setTimeout(this.getorders,2000);

    },
/**********addlist************************/


    deletelist:function(id){


       axios.post('/deletelist',{

                        id:id
                      
                     
                    }).then(response=>{        


                   $(".listcart").css("display","none");
     
          

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });

    },


addlist:function(id){


var size= $(".size_list").val(); 
axios.post('/addlist',{

                        id:id,
                        size:size
                     
                    }).then(response=>{        


                        if (response.data == 'no') {


              swal("محصول مورد نظر در لیست موجود می باشد . ");
        

                        }else{
                                 swal("محصول مورد نظر به لیست خرید اضافه شد . ");
                                 $(".fa-heart-o").css("color" ,"red");

                        }
                    
     
          

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });

},

/*********************************/

DeleteAddress:function(id){

alert(id);
axios.post('/deleteaddress',{

                        id:id
                     
                    }).then(response=>{        

       
          swal("آدرس با موفقیت حذف شد . ");
          location.reload();
          

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });


},





updatestatus:function(id){

axios.post('/updatestatus',{

                        id:id
                     
                    }).then(response=>{        

     
          

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });

},



/**************address****************/
Addaddress:function(){


var city =$(".city").val();
var province =$(".province").val();


     axios.post('/Addaddress',{

                        city:city,
                        province:province,
                        codecity:this.codecity,
                        fname:this.fname2,
                        zipcode:this.zipcode,
                        phone:this.phone,
                        mobile:this.mobile,
                         address:this.address





                     
                    }).then(response=>{        

    
          swal("آدرس با موفقیت اضافه شد . ");
          location.reload();

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });
},




/**************addcart*******/

    fetchcart:function(){

            axios.get('/getcart/'+this.cartId).then(response=>{


               
              this.shop=response.data;


            });

                setTimeout(this.fetchcart,2000);
        },
/***************************************/
addcart:function(id){
this.cartId=id;

     axios.post('/addcart',{

                        id:id
                     
                    }).then(response=>{        

                        response.data.count+=1;
             
  this.items.push(response.data);
          

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });
},


/****************************/

/*************************/

        //getapproved
        fetchcomment:function(){

            axios.get('/admin/comment').then(response=>{


               
                this.commentstatus=response.data;


            });

                setTimeout(this.fetchcomment,2000);
        },

//sendapproved

        approvedcomment:function(id){

            axios.post('/admin/approvedcomment',{

                        id:id
                     
                    }).then(response=>{                

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });



        },

        deletecomment:function(id){
              axios.post('/admin/deletecomment',{

                        id:id
                     
                    }).then(response=>{                


                            swal("نظر حذف شد . ");
                            location.reload();


                    },response=>{

                        this.error=1;
                        console.log('error');
                    });
 
        },





/***********addcomment**********/



addcomment:function(id){
var commentsize=$('.custom-size').val();


 axios.post('/addcomment',{

                        id:id,
                        text:this.textcomment,
                        subject:this.subjectcomment,
                        size:commentsize

                        



                    }).then(response=>{



                        
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

},







/***************************/







        fetchproductitem:function(){

             axios.get('/productitem').then(response=>{

                this.productitem=response.data;
              


            });
                             

        },

        filters:function(){

         var $pruducts=$('.image-box'),
    $variants=$('.pruduct-box'),
    $filters=$("#filterss input[type='checkbox']"),
    pruduct_filter=new Pruduct_FilterLevel2($pruducts,$variants,$filters);
      pruduct_filter.init();

  
        },

      

        fetchproduct:function(page_url)
        {

            let vm=this;
            page_url= page_url || '/product';
            axios.get(page_url).then(response=>{

                vm.products=response.data.data.data;
                vm.pagination=response.data.data;



            });


        },


        productimage:function(id){

                 axios.post('/productimage',{

                       
                        id:id
                        



                    }).then(response=>{


                        $("#product"+id+"").html('<img src="/imageproduct/'+response.data+'" class="alternate-image">')
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });
        },


        deleteimage:function(imageID){

             
              axios.post('/admin/deleteimage',{

                       
                        imageID:imageID
                        



                    }).then(response=>{



                        swal("عکس مورد نظر حذف شد. ");
                        location.reload();
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

        } ,




//updatesize
        updatesize:function(){

            var id=$("#productID").val();
            var size= $("#size_id ").val(); 
                  axios.post('/admin/updatesize',{

                        id:id,
                        sizeid:size
                        



                    }).then(response=>{



                        swal("ویرایش انجام شد  ");
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

        },

        //updateattributetype

        updateattributetype:function(){

            var id=$("#productID").val();
            var attribute=$("#attribute_id").val();

              axios.post('/admin/updateattributetype',{

                        id:id,
                        attributeid:attribute
                        



                    }).then(response=>{



                        swal("ویرایش انجام شد  ");
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



        },
        updatevalueattributeitem:function(){

            var id=$("#productID").val();
            var attributeitem=$("#attributeitem_id").val();

             axios.post('/admin/updatevalueattributeitem',{

                        id:id,
                        attributeitemid:attributeitem
                        



                    }).then(response=>{



                        swal("ویرایش انجام شد  ");
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });
        },

        updatevaluebrand:function(){
            var id=$("#productID").val();

            var brand=$("#brand_id").val();
             axios.post('/admin/updatevaluebrand',{

                        id:id,
                        brandid:brand
                        



                    }).then(response=>{



                        swal("ویرایش انجام شد  ");
                  
                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

        },



        //EditProduct

      EditProduct:function(id){

         axios.post('/admin/Editproduct',{

                        id:id
                        



                    }).then(response=>{


                        var data=response.data;

                        $.each(data,function(index,val){


                            $("#ProductName").val(val.name);
                            $("#ProductDesc").val(val.desc);
                            $("#ProductPrice").val(val.price);
                            $("#category_id").val(val.category_id);
                            $("#size_id option:selected").html(val.size); 
                            $("#productID").val(val.id);


                            $("#attribute_id option:selected").html(val.name2);
                            $("#attributeitem_id option:selected").html(val.name1);

                        });

                       
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


      },



//deleteproduct
        deleteproduct:function(id){


                 axios.post('/admin/deleteproduct',{

                        id:id
                        



                    }).then(response=>{



                        swal("حذف انجام شد! ");
                  
                        location.reload();
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



        },


        update:function(){
   var image1=$("#imageuser2").val();
   var fname1=$("#fname1").val();
   var lname1=$("#lname1").val();
   var email1=$("#email1").val();
   var roule=$("#roule").val();
 var id=$("#id").val();

               axios.post('/admin/updateuser',{

                        fname1:fname1,
                        lname1:lname1,
                        roule1:roule,
                        email1:email1,
                        image1:image1,
                        id:id



                    }).then(response=>{



                        swal("با موفقیت ویرایش شد !");
                  
                        location.reload();
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


        },


        edituser:function(id){
           

            axios.post('/admin/updateuser/'+id).then(response=>{  

                    $("#name").val(response.data.name);
                    $("#lname1").val(response.data.lname);
                    $("#email1").val(response.data.email);
                    $("#id").val(response.data.id);

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });

        },

        //deleteuser
        deleteuser:function(id){

            axios.post('/admin/deleteuser/'+id).then(response=>{  


                            swal("کاربر مورد نظر حذف شد!");

                            location.reload();

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });


        },



        //getapproved
        approvedusers:function(){

            axios.get('/admin/getusers').then(response=>{


               
                this.showstatus=response.data;


            });

                setTimeout(this.approvedusers,2000);
        },

//sendapproved

        approved:function(id){

            axios.post('/admin/approved',{

                        id:id
                     
                    }).then(response=>{                

                    },response=>{

                        this.error=1;
                        console.log('error');
                    });



        },


        adduser:function(){

                var image=$("#imageuser").val();

               axios.post('/admin/adduser',{

                        fname:this.fname,
                        lname:this.lname,
                        roule:this.roule,
                        email:this.email,
                        password:this.password,
                        image:image


                    }).then(response=>{

                
                        swal("با موفقیت اضافه شد!");
                  

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


        },


        //deletediscount
        deletediscount:function(id){

                  axios.post('/admin/discountdelete/'+id).then(response=>{

                
                        swal("حذف شد!");
                  
                        location.reload();
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


        },



        discountadd:function(){

             axios.post('/admin/brandsave',{

                        value:this.valuediscount,
                        name:this.namediscount,
                        date:this.date,
                        date1:this.date1,
                        code:this.codediscount,
                        productId:this.ProductDiscount


                    }).then(response=>{

                
                        swal("با موفقیت اضافه شد!", response.data.name);
                  

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


        },



        deletebrand:function(id){

              axios.post('/admin/deletebrand/'+id).then(response=>{

                
                        swal("خذف شد!");
                  
                        location.reload();
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



        },


//savebrand
        savebrand:function(){

            var image=$("#url").val();
            alert(image);
                 axios.post('/admin/savebrand',{

                        brandcountry:this.brandcountry,
                        brandName:this.brandName,
                        image:image,
                        categoryid:this.brandcategory


                    }).then(response=>{

                
                        swal("با موفقیت اضافه شد!", response.data.name);
                  

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });




        },




// AddProduct
            AddProduct:function(){

                 axios.post('/admin/addproduct',{

                        price:this.ProductPrice,
                        desc:this.ProductDesc,
                        name:this.ProductName,
                        category:this.category_id


                    }).then(response=>{

                
                        swal("با موفقیت اضافه شد!", response.data.name);
                  

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



            },






        addsize1:function(){


 axios.post('/admin/size',{

                        id:this.sizeid,
                        name:this.size


                    }).then(response=>{

                     this.size2.push({'size':response.data.size,'id':response.data.id})
                        swal("با موفقیت اضافه شد!");


                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



        },





attributeitem:function(){



 axios.post('/admin/attributeitem',{

                        id:this.selectattributeitem,
                        name:this.nameattributeitem


                    }).then(response=>{


this.attributeitem2.push({'name':response.data.name,'id':response.data.id});
  swal("با موفقیت اضافه شد!");

  
                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


},





//addatribute
addattribute:function(){




 axios.post('/admin/attribute',{

                        id:this.selectattribute,
                        name:this.nameattribute


                    }).then(response=>{


                        this.attribute2.push({'name':response.data.name,'id':response.data.id})
swal("با موفقیت اضافه شد!");


                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });




},






//addgroup
addgroup:function(){
 axios.post('/admin/attributegroup',{

                        id:this.selectgroup,
                        name:this.namegroup


                    }).then(response=>{

                    swal("با موفقیت اضافه شد!"); 
this.groups.push({'name':response.data.name,'id':response.data.id})
     console.log(response.data.name);


                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


},





    
//size
        addsize:function(){

 var id=$("#productID").val();
  var size= $("#size_id ").val(); 

                 axios.post('/admin/addsize',{


                        sizeid:this.size_id,
                        id:id,
                        size:size

                 


                    }).then(response=>{

                     swal("با موفقیت اضافه شد!");
                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });






        var btn=$('#mybutton')
                btn.button('loading')
                setTimeout(function(){
                    btn.button('reset')
                },3000)

        },

            addattributetype:function(){

                            var id=$("#productID").val(); 
                      var attribute=$("#attribute_id").val();

                 axios.post('/admin/addattribute',{

                        attributeid:this.attribute_id,
                        id:id,
                        attribute:attribute

               


                    }).then(response=>{

                     swal("با موفقیت اضافه شد!");
                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



            var btn=$('#mybutton1')
                    btn.button('loading')
                    setTimeout(function(){
                        btn.button('reset')
                    },3000)

            },


            addvalueattributeitem:function(){

 var id=$("#productID").val();
  var attributeitem=$("#attributeitem_id").val();

                 axios.post('/admin/addattributeitem',{

                        attributeitemid:this.attributeitem_id,
                        id:id,
                        attributeitem:attributeitem

                 


                    }).then(response=>{
                        swal("با موفقیت اضافه شد!");
                     
                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });


            var btn=$('#mybutton2')
                    btn.button('loading')
                    setTimeout(function(){
                        btn.button('reset')
                    },3000)

            },







            addvaluebrand:function(){

var id=$("#productID").val();
 var brand=$("#brand_id").val();


                 axios.post('/admin/addbrand',{

                        brandid:this.brand_id,
                        id:id,
                        brand:brand
                 


                    }).then(response=>{
swal("با موفقیت اضافه شد!");
                     
                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

            var btn=$('#mybutton3')
                    btn.button('loading')
                    setTimeout(function(){
                        btn.button('reset')
                    },3000)

            },

            addvaluecategory:function(){


                 axios.post('/admin/addcategory',{

                        categoryid:this.category_id
                 


                    }).then(response=>{
swal("با موفقیت اضافه شد!");
                     
                   //   location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });



            var btn=$('#mybutton5')
                    btn.button('loading')
                    setTimeout(function(){
                        btn.button('reset')
                    },3000)

            },


          




deletecategory:function(){

    axios.post('/admin/delete',{

                        id:this.select1



                    }).then(response=>{

                      swal('حذف انجام شد ','حذف!!!');

                      location.reload();

                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

},


//subject

category:function(){

        axios.post('/admin/category',{

                        id:this.select,
                         name:this.categoryname




                    }).then(response=>{

                         location.reload();
                      
                           this.categorys.push({'name':response.data.name,'id':response.data.id});
                    },response=>{

                        this.error=1;
                        console.log('erro');
                    });

}



    }
});
