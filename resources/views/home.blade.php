
<?php

use App\image_product;

?>

@extends('layouts.indexLayouts')

@section('content')



    <section id="content" >
        
        <div class="container-large" id="app1">
            
            <div class="col-lg-12">
                

                <div class="col-lg-9">

                <section style="margin-top: 17px;">
                    
                    <span class="title">
                        
                        <h3>عنوان کالا</h3>


                    </span>
                    <span class="sort">
                        
            
            <div class="box">
                

                <label class="right" style="margin-top: 53px;">مرتب سازی بر اساس : </label>
                <select class="right">
                    

                    <option data-display="محبوب ترین ها">محبوب ترین ها</option>
                    <option value="1">محبوب ترین ها</option>
                    <option value="2">جدید ترین ها</option>
                    <option value="3">پرقروش ترین ها</option>


                </select>

            </div>



                <div class="pagination" id="paginationup">
                    <button class="btn btn-default" @click="fetchproduct(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"  >صفحه قبل</button>
                    

                    <span>

                        <span>صفحه</span>
                        <span>@{{pagination.current_page}}</span>

                        <span>از</span>
                        <span>@{{pagination.last_page}}</span>  


                </span>

                    <button class="btn btn-default" @click="fetchproduct(pagination.next_page_url)" :disabled="!pagination.next_page_url"  >صفحه بعد</button>

                </div>


                    </span>


                    <div class="content " style="margin-top: 140px;">


                    <ul class="" >

                    

                        @foreach($submenus as  $submenu)

                        @if($submenu->parent_id == $id)

                        @foreach($productbrand as $productbrands)


                        @foreach($brand as $brands)

                        @if($brands->id == $productbrands->brand_id)

                            



                        <div  v-for="product in products" class="col-lg-4 resultblock image-box"  style="height: 510px;" v-if="product.category_id == {{$submenu->id}} && product.id == {{$productbrands->product_id}}"  data-tag="{{$brands->name}}" >


                        @foreach($attributeitem as   $attributeitems)

                                        @if($productbrands->product_id == $attributeitems->product_id)
                                        
                                        {!! getattributeitems($attributeitems->attributeitem_id)!!}

                                        @endif
                                        @endforeach


                                
                        
                            <li v-on:mouseover="productimage(product.id)" >
                                
                                    @foreach($discount as $discounts)

            
        

                
                

                    
                <p v-if="product.id == {{$discounts->product_id}}">

                <span class="discount">
                    
                    <span class="discount1">{{$discounts->value}}%</span>



                </span>
                
                {!! getprice($discounts->product_id,$discounts->id) !!}
                </p>

            
                
                @endforeach

                
                                    





                    <p :id="'product'+product.id"></p>
            
        

                    
                <img :src="'/imageproduct/'+ product.image" class="animated fadeIn">





                            </li >  

                            <span class="magnifier">
                                

                                <a href="#"  data-toggle="modal" :data-target="'#product1'+product.id">
                                    

                                    <img src="/img/magnifier.png">


                                </a>


                            </span>

        
                        <span class="brand " > {{$brands->name}}   </span>          
                                        

                        
                

                
                <span class="productname" >@{{product.name}}</span>
                <span class="price">@{{product.price}}تومان</span>  



            <div class="sizelist">
                            @foreach($size as $sizes)

                                        
                                        <p v-if="product.id == {{$sizes->product_id}}">
                                        @foreach(getsizeproduct($sizes->size_id) as $sizess)


                                    <a href="#">{{$sizess->size}}</a>



                                        @endforeach
                                        </p>
                                        @endforeach
            
                </div>
                    

        


                        </div>
     


  


                            @endif
@endforeach
        @endforeach

                        @endif
                    
                        @endforeach



                        </ul>



                            <div class="pagination" id="paginationdown">
                    <button class="btn btn-default" @click="fetchproduct(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"  >صفحه قبل</button>
                    

                    <span>

                        <span>صفحه</span>
                        <span>@{{pagination.current_page}}</span>

                        <span>از</span>
                        <span>@{{pagination.last_page}}</span>  


                </span>

                    <button class="btn btn-default" @click="fetchproduct(pagination.next_page_url)" :disabled="!pagination.next_page_url"  >صفحه بعد</button>

                </div>


                    </div>

        </section>

            </div>


                <div class="col-lg-3">


                <aside>


                        <span class="category" style="margin-top: 134%;
position: absolute;">
                        


 <div  class="accordion-body " id="filterss" style="height: 0px;">
                            <div class="accordion-inner filter-attributes" >
                             
                                <a><input type="checkbox" name="pruduct"   @click="filters" value="15">15</a>
                                  <a><input type="checkbox" name="pruduct"   @click="filters" value="16">16</a>
                                  <a><input type="checkbox" name="pruduct"   @click="filters" value="17">17</a>

                            </div>
                        </div>







         <div id='filterss' class='sections'>


      <div class='filter-attributes'>

            @foreach($attributes as $attributess)
<h5>بر اساس {{$attributess->name2}}</h5>
    @foreach(getattributeitem() as $item)

    @if($item->attribut_id == $attributess->id)


      <div class="filterblock">

        
              <input  type="checkbox" name="pruduct" @click="filters"  value="{{$item->name1}}" >
            <label for="check1">{{$item->name1}}</label>
        </div>


        @endif
@endforeach
@endforeach
      
      </div>
      </div>    
















    
    



                        </span>



                        <span class="category">
                            

            

                
                

                
                

<div id="filters">





    @foreach($brand as $brands)


        <div class="filterblock">
              <input id="check1" type="checkbox" name="check" value="{{$brands->name}}" class="category1">
            <label for="check1">{{$brands->name}}</label>
        </div>
        
@endforeach
 
    </div>



    
    



                        </span>

        
                </aside>

                </div>

@include('product')
                


            </div>



        </div>



    </section>





@endsection