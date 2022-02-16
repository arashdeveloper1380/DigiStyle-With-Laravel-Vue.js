@extends('layouts.indexLayouts')

@section('content')


<div class="checkout-steps">
                    
                    <div class="step active step1">

                    
                     <div class="step-badge" style="margin-right: 582px;"><i class="icon1 icon1-user1"></i><p style="color: #666; width: 133px;margin-right: -25px;">    ورود به دیجی استایل</p></div>

                      
                      <div style="background-color: #d1d1d1;height: 9px;margin-top:-102px;
                      margin-left:25px;width: 100%;"></div>     
                    </div>

 

                        <div class="step ">

                            
                     <div class="step-badge1" style="margin-right: 160px;float: right;"><i class="icon1 icon1-user"></i><p style="color: #666; width: 135px;margin-right: -25px;">  تکمیل حساب کاربری</p></div>

                      
                      <div style="background-color: #d1d1d1;height: 9px;margin-top:34px;margin-left: 125px;width: 103%;"></div> 



                    </div>

                </div>
      

                <div class="checkout-login" style="min-height: 200px;">
                    
<div class="col-lg-12">


<div class="col-lg-7" style="float: right;margin-right: 136px">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}" style="margin-top: -305px;">


                        {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"  style="margin-right: 36px;float: right;">آدرس ایمیل :</label>

                            <div class="col-md-4" style="position: absolute;margin-right: 206px;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="float: right;margin-right: 36px;">کلمه عبور :</label>

                            <div class="col-md-4" style="margin-right: 206px;position: absolute;">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                            <input type="submit" name="" value="ورود به دیجی استایل" class="shoping-cart"  style="margin-top: 71px !important; right:27% !important;line-height: 44px !important; background-color: #4ec3d5 !important;">
                            

                                                </form> 

                                            </div>




<div class="col-lg-5">
    

<div class="signup-left " style="float: left;margin-top: -317px;position: relative;margin-left: 128px;">
  


<div class="section-content" style="padding-top: 25px;padding-right: 50px;padding-bottom: 120px;">

                        <ul>
                            <li>سریع تر و ساده تر خرید کنید</li>
                            <li>به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید</li>
                            <li>لیست خرید بعدی خود را بسازید و آن را به اشتراک بگذارید</li>
                            <li>نظرات خود را با دیگران به اشتراک بگذارید</li>
                            <li>در جریان فروش های ویژه و قیمت روز محصولات قرار بگیرید</li>
                        </ul>

                        <div class="auth-section-footer clearfix">
                            <span>هنوز عضو دیجی استایل نشده اید؟!</span>
                            <a href="/Account/Register?ReturnUrl=/cart/shipping" class="dk-btn dk-btn-gray-border" style="border: 1px solid #0a0a0a;line-height: 31px;padding: 11px;">ثبت نام در دیجی استایل</a>
                        </div>

                    </div>


</div>


</div>



</div>
</div>
                </div>






@endsection
