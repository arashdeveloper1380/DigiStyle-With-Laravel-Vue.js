

<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
						

						<div class="modal-dialog" style="width:36%; height:600px; ">
							
							<div class="modal-content" style="height: 70% ; border-radius:0px !important;  "   >
								
							
									
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								

								
								<div id="signup-tab" class="">	

									<ul  class="nav nav-pills" style="width: 100%;margin-top: 21px;margin-right: 52px;">

												<li class="active" style="">

									        <a  href="#11a" data-toggle="tab">	ثبت نام در دیجی استایل</a>
												</li>

												<li>
													<a href="#22a" data-toggle="tab">
													ورود به دیجی استایل
									
												</a>
												</li>
												
											</ul>




												<div class="tab-content clearfix">
										  <div class="tab-pane active" id="11a">


												<div class="col-lg-12">
					 <form class="form-horizontal" method="POST" action="{{ route('register') }}" style="margin-top: 30px;">


                        {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"  style="margin-right: 36px;float: right;">آدرس ایمیل :</label>

                            <div class="col-md-7" style="position: absolute;margin-right: 206px;">
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

                            <div class="col-md-7" style="margin-right: 206px;position: absolute;">
                                <input id="password" type="password" class="form-control" name="password" required>

                               @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        	<input type="submit" name="" value="ثبت نام در دیجی استایل" class="shoping-cart"  style="margin-top: 71px !important; right: 46% !important;line-height: 44px !important;">
                        	

                        						</form>	


                        							<div style="margin-top: 67px;">

                        							<label style="font-size: 12px;color: #666;margin-right: 18px;">با حساب گوگل خود وارد شوید .</label>
                        						<a href="/auth/google" class="btn-gmail">
                        							

                        								<span>ورود با گوگل</span>
                        									<img src="/img/google.jpg" width="32px" height="32px">
                        						</a>
												    </div>




                        						</div>








										  </div>
										  
										  	<div class="tab-pane" id="22a">

										  		



										  		<div class="col-lg-12">
					<form class="form-horizontal" method="POST" action="{{ route('login') }}" style="margin-top: 30px;">


                        {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"  style="margin-right: 36px;float: right;">آدرس ایمیل :</label>

                            <div class="col-md-7" style="position: absolute;margin-right: 206px;">
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

                            <div class="col-md-7" style="margin-right: 206px;position: absolute;">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        	<input type="submit" name="" value="ورود به دیجی استایل" class="shoping-cart"  style="margin-top: 71px !important; right: 46% !important;line-height: 44px !important;">
                        	

                        						</form>	


                        							<div style="margin-top: 67px;">

                        							<label style="font-size: 12px;color: #666;margin-right: 18px;">با حساب گوگل خود وارد شوید .</label>
                        						<a href="/auth/google" class="btn-gmail">
                        							

                        								<span>ورود با گوگل</span>
                        									<img src="/img/google.jpg" width="32px" height="32px">
                        						</a>
												    </div>




                        						</div>





										  	</div>


										  </div>



										</div>



							</div>




				</div>
				

				</div>			