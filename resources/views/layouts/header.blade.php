	<nav class="navbar navbar-default navbar-static-top " id="">
		
			<div class="col-lg-12">
				

				<div class="amin-icon">

					<div class="top-left">
						
						<div class="col-lg-1">
							<ul>
							<li class="dropdown">
								
								<a href="#"  data-toggle="dropdown" class="dropdown-toggle">
									
									<i class="icon-user"></i>
								</a>

									<ul class="dropdown-menu" style="margin-top: 56px; text-align: right;">
										
										<li>{{Auth::user()->name}} {{Auth::user()->lname}}</li>

										<li><a href="/admin/showuser">مشاهده کاربران</a></li>
										<li><a href="/admin/user">ایجاد کاربر جدید</a></li>
										<li><a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           خروج
                                        </a></li>
									</ul>
							</li>
</ul>
						</div>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>



						<div class="col-lg-1">
							
							<li class="en-icon dropdown">
								
								<a href="#"  data-toggle="dropdown" class="dropdown-toggle">
									
									<i class="icon-envelope-alt"></i>
									<span class="danger-envelope">@{{noticomments.length}}</span>
								</a>

									<ul class="dropdown-menu" style="width: 320px;margin-top: 58%;">
										
										<li v-for=" noticomment in noticomments" style="position: relative; text-align: right; direction: rtl; border-bottom: 1px solid #ddd; min-height: 100px;">
											<a href="/admin/commentshow">


										<span>@{{noticomment.name}}</span>

										<span style="position: absolute; width: 77%; top: 36%; margin-right: 2px ; overflow: hidden; text-overflow: ellipsis; ">@{{noticomment.text}}</span>

										<span style="float: left; position: absolute; left: 2%; top: 0;">@{{noticomment.date}}</span>


										</a>
									</li>

									</ul>
							</li>

						</div>




<div class="col-lg-1">
							
							<li class="en-icon dropdown">
								
								<a href="#"  data-toggle="dropdown" class="dropdown-toggle">
									
									<i class="icon-tasks"></i>
									<span class="danger-envelope">@{{notiorders.length}}</span>
								</a>

									<ul class="dropdown-menu" style="width: 320px;margin-top: 58%;">
										
										<li v-for="notiorder in notiorders" style="min-height: 68px; border-bottom: 1px solid #ddd;">




										<span style="text-align: right;position: absolute;width: 100%;
										right: 0%; margin-top: 26px; margin-right: 15px; 

										">کاربری با نام  @{{notiorder.name}} یک خرید جدید انجام داد .</span>

										<span style="margin-top: -5px;">@{{notiorder.created_at }}</span>



									</li>

									</ul>
							</li>

						</div>



					</div>

					<!--endtop-left-->




					<div class="top-right">

						<div class="col-lg-1">
							

							<i class="icon-windows" id="sidebar"></i>

						</div>

					</div>




				</div>	


			</div>




	</nav>