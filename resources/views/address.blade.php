
<div class="modal fade" id="address1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
						

						<div class="modal-dialog" style="width:730px; height: 715px; ">
							
							<div class="modal-content" style="height: 70% ; border-radius:0px !important;  "   >
								
							
									<span style="width: 100%; background-color: #eeeeee; height: 45px; position: absolute;">
										<p  style="float: right; position: absolute; right: 5%;
top: 22%;
font-size: 16px;
color: #000;">افزودن آدرس</p>
								<button type="button"  class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute;top: 22%; left: 5%;">&times;</button>
								
</span>
									<table class="table-form">
										

										<tr>
											
											<td><label>نام و نام خانوادگی تحویل گیرنده</label></td>
											<td><input type="text"  class="form-control" name="fname2"  v-model="fname2"></td>
										</tr>
										<tr>
											
											<td><label style="margin-top: 112px;">شماره تماس ضرورری (تلفن همراه)</label></td>
											<td><input type="text"  class="form-control" name="mobile" style="margin-top: 112px;" v-model="mobile"></td>
										</tr>

										<tr>
											<td><label style="margin-top: 159px;">استان/شهر تحویل گیرنده</label></td>

											<td>
												
												<div class="boxs" style="right: 44%; margin-top: 159px;">
				

								
									<select class="province form-control ignore" >
										

										<option data-display="امتخاب کنید">انتخاب کنید</option>

									</select>



										<select class="city form-control ignore"  style="float: left;right: 188px;
margin-top: -36px;
position: absolute;">
										

										<option data-display="امتخاب کنید">امتخاب کنید</option>

									</select>
								</div>

											</td>

										</tr>



										<tr>
											
											<td><label style="margin-top: 238px;">آدرس پستی</label></td>

											<td><textarea tabindex="8"  name="customer_address"  v-model="address"  id="customer-address" class="form-control" placeholder="ادامه آدرس خود را بنویسید ..." style="margin-top: 238px; float: left; position: absolute; width: 348px; right: 44%;"></textarea ></td>

										</tr>


												<tr>
											
											<td><label style="margin-top: 333px;">کدپستی</label></td>

											<td><input  type="text" name=""  class="form-control" style="margin-top: 333px;" v-model="zipcode"></td>

										</tr>


										</tr>


												<tr>
											
											<td><label style="margin-top: 391px;">شماره تلفن ثابت تحویل گیرنده (اختیاری) </label></td>

											<td><input  type="text" name=""  class="form-control" style="margin-top: 391px; width: 213px !important; position: absolute;"  v-model="phone" ><input  type="text" name=""  class="form-control" style="margin-top:391px;  width: 116px !important; position: absolute;right: 547px; "
											 v-model="codecity"> </td>

										</tr>


										<tr>
											
			<td><a href="#" class="btn-pink" style="background-color: #666;color: #fff;position:absolute;float: left;top: 89%;right: 1%;padding: 9px;text-align: center;width: 102px;">انصراف</a></td>


											<td><a href="#" class="btn-pink"  style="
											background-color:#e54c7b !important;color: #fff;
position: absolute;
float: left;
top: 89%;
right: 68%;
padding: 9px;
text-align: center;
"    v-on:click="Addaddress">ثبت اطلاعات و بازگشت</a></td>

										</tr>


									</table>

</div>
</div>
</div>