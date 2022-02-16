             <?php

use App\product;


?>

<div id="cartshop">
 <table class="tabel  shopping-tabel" style="" border="1px">
          

          <thead>
            <tr>
              
              <th>مشخصات محصول</th>
              <th>تعداد</th>
              <th>قیمت</th>


            </tr>

          </thead>

          <tbody>


  @if(!empty(Session::get('cart')))


        <?php $price=0; ?>

        @foreach(Session::get('cart') as $key=>$value)

        <?php  $p=product::find($key);   ?>
            
            <tr>
              
              <td><img src="/imageproduct/{{$p->image}}" width="100px" height="100px" class="cart-image">
          <p>{{$p->name}}</p>
          <p>کد کالا : {{$p->id}}</p>
          {{$value}}
          </td>
              <td>


                <div class="number">
                  

                  <i class="icon icon-plus" id="icon-plus{{$p->id}}" onclick="addcart1('{{$p->id}}')" ></i>
                  <input type="text" name="countnumber" id="countnumber{{$p->id}}"  style="width: 57px;" value="{{$value}}" min="1" max="5" >
                   <i class="icon icon-minus"  id="icon-minus{{$p->id}}" onclick="deletecart1('{{$p->id}}')"></i>
                </div>




              </td>
              <td>

          <div class="main-price" style="">

                <p   style="margin-top:17px;position: absolute;margin-right: 20px;">قیمت واحد : </p>

                <p   style="float: right;top: 9px;margin-top: 17px;padding-right:199px;">{{$p->price}} تومان</p>

        </div>

        <div class="final-price">
          
                <p   style="margin-top:131px;position: absolute;margin-right: 41px;">قیمت نهایی : </p>

                <p   style="float: right;top: 9px;margin-top: 131px;padding-right:223px;">12000 تومان</p>


        </div>
                <span class="close_pain">
                  

                  <i class="icon icon-remove" style="position: absolute;top: 41%;cursor: pointer;font-size: 19px;color: #ddd;z-index: 1;left: 11px;"></i>

                </span>

              </td>

            </tr>






            @endforeach

            @endif
          </tbody>


        </table>
      </div>