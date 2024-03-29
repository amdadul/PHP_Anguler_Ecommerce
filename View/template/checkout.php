<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Checkout</a></li>
			
		</ul>
		<form>
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			  <h2 class="title">Checkout</h2>
			  <div class="so-onepagecheckout ">
			  	
				<div class="col-left col-sm-3">
					<div ng-if="check() == false" >
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
					</div>
					  <div class="panel-body">
							<div class="radio">
							  <label>
								<input type="radio" value="returning"  ng-click="account('old')" name="account">
								Returning Customer</label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" checked="checked"  ng-click="account('guest')" value="guest" name="account">
								Guest Checkout</label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" value="retailer"  ng-click="account('Retailer')" name="account">
								Retailer Customer</label>
							</div>
					  </div>
				  </div>


				  	<div ng-if="old == true" >
				  	<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Returning Customer</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
							  <div class="customer-login">
									<div class="well">
										
										<p><strong>Login with Email and Password</strong></p>
										<div class="form-group required">
										<div class="form-group">
											<label class="control-label" for="input-email">E-Mail Address</label>
											<input type="text" name="email"  ng-model="emailc" ng-value="" id="input-email" class="form-control" />
										</div>
									</div>
									<div class="form-group required">
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password"  ng-model="passwordc" name="password" ng-value="" id="input-password" class="form-control" />
										</div>
									</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<button ng-click="loginc(emailc,passwordc)"  class="btn btn-default pull-right" >Log-In </button>
									</div>
								</div>
							</fieldset>
						  </div>
				  </div>
				</div>
				<div ng-if="retailer == true" >
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Retailer Customer</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
							  <div class="customer-login">
									<div class="well">
										
										<p><strong>Login with ABL Username and Password</strong></p>
										<div class="form-group required">
										<div class="form-group">
											<label class="control-label" for="input-email">Username</label>
											<input type="text" name="user"  ng-model="user" class="form-control" />
										</div>
									</div>
									<div class="form-group required">
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password"  ng-model="passwordr" name="passwordr" class="form-control" />
										</div>
									</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<button ng-click="loginvr(user,passwordr)"  class="btn btn-default pull-right" >Log-In </button>
									</div>
								</div>
							</fieldset>
						  </div>
				  </div>
				</div>
				<div ng-if="guest == true" >
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
							  <div class="form-group required">
								<label for="input-payment-firstname" class="control-label">First Name</label>
								<input type="text" style="{{errfname}}" class="form-control" ng-model="form.fname" id="input-payment-firstname" placeholder="First Name"  name="fname" required="required">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-lastname" class="control-label">Last Name</label>
								<input type="text" style="{{errlname}}" class="form-control" ng-Model="form.lname" id="input-payment-lastname" placeholder="Last Name" name="lname">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-email" class="control-label">E-Mail</label>
								<input type="text" style="{{erraemail}}" class="form-control" ng-model="form.aemail" id="input-payment-email" placeholder="E-Mail" ng-value="" name="email">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-telephone" class="control-label">Phone</label>
								<input type="text" style="{{errphone}}" class="form-control" id="input-payment-telephone" ng-model="form.phone" placeholder="Phone Number" ng-value="" name="phone">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-fax" class="control-label">Password</label>
								<input style="{{errapassword}}" type="password" class="form-control" id="input-payment-fax" ng-model="form.apassword" ng-value="" name="password">
							  </div>
							</fieldset>
						  </div>
				  </div>
				</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-book"></i> Delivery Address</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="address" class="required">
							  <div class="form-group">
								<label for="input-payment-company" class="control-label">Company</label>
								<input type="text" class="form-control"  ng-model="form.company" id="input-payment-company" placeholder="Company" value="" name="company">
							  </div>
							  
							  <div class="form-group required">
								<label for="input-payment-address-2" class="control-label">Address</label>
								<input type="text" class="form-control"  style="{{erraddress}}"  ng-model="form.address" id="input-payment-address-2" placeholder="Delivery Address" value="" name="daddress">
							  </div>
							   <div class="form-group required">
								<label for="input-payment-country" class="control-label">Country</label>
								<select class="form-control"  style="{{errcountry}}" ng-model="form.country" id="input-payment-country" name="country_id">
								  <option value=""> --- Please Select --- </option>
								  <option value="1">Bangladesh</option>
								</select>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-city" class="control-label">City</label>
								<input type="text" class="form-control" style="{{errcity}}"  ng-model="form.city" id="input-payment-city" placeholder="City" value="" name="city">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-postcode" class="control-label">Post Code</label>
								<input type="text" class="form-control" style="{{errpostcode}}"  ng-model="form.postcode" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
							  </div>
							 
							  <div class="form-group required">
								<label for="input-payment-zone" class="control-label">Region / State</label>
								<select class="form-control"  style="{{errstate}}" ng-model="form.state" id="input-payment-zone" name="zone_id">
								  <option value=""> --- Please Select --- </option>
								  <option value="1">Barishal</option>
								   <option value="2">Chattogram</option>
								  <option value="3">Comilla</option>
								  <option value="4">Dhaka</option>
								  <option value="5">Khulna</option>
								  <option value="6">Mymensingh</option>
								  <option value="7">Rajshahi</option>
								  <option value="8">Rangpur</option>
								  <option value="9">Sylhet</option>
								</select>
							  </div>
							  <div class="checkbox">
								<label>
								  <input type="checkbox" checked="checked" value="1"  ng-model="form.sma" name="shipping_address">
								  My delivery and billing addresses are the same.</label>
							  </div>
							</fieldset>
						  </div>
				  </div>
				
			</div>
				<div class="col-right col-sm-9">
				  <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default no-padding">
							<div class="col-sm-6 checkout-shipping-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
								</div>
								<div class="panel-body ">
									<p>Please select the preferred shipping method to use on this order.</p>
									<div class="radio">
									  <label>
										<input type="radio" checked="checked" ng-click="free()" name="Shipping">
										Free Shipping - ৳ 0.00 (within 5 day)</label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" ng-click="quick()" name="Shipping">
										Quick Shipping Rate - ৳ 50 /- (within 48 hours)</label>
									</div>
									
								</div>
							</div>
							<div class="col-sm-6  checkout-payment-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
								</div>
								<div class="panel-body">
									<p>Please select the preferred payment method to use on this order.</p>
									<div class="radio">
									  <label title="Service is Not Available in This Order">
										<input type="radio" disabled='disabled'  name="Delivery">Cash On Delivery </label>
									</div>

									<!-- <div class="radio">
									  <label>
										<input type="radio"  ng-click="wallet()"  name="Delivery">Wallet Payment</label>
									</div> -->
									
									<div class="radio">
									  <label>
										<input type="radio" checked="checked" ng-click="ssl()" name="Delivery">Cradit Card / Debit Card / Mobile Banking</label>
									</div>
								</div>
							</div>
						</div>
						
						
							
						</div>
					
					
					
					<!-- <div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
						</div>
						  <div class="panel-body row">
							<div class="col-sm-6 ">
							<div class="input-group">
							  <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
							  <span class="input-group-btn">
							  <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
							  </span></div>
							</div>
							
							<div class="col-sm-6">
							<div class="input-group">
							  <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
							  <span class="input-group-btn">
							  <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
							  </span> </div>
							</div>
						  </div>
					  </div>
					</div> -->
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
						</div>
						<label>Refarence : </label>
						<input type="text" name="refarence"  ng-model="form.ref" placeholder="If Any RIN Number" class="form">
						  <div class="panel-body">
							<div class="table-responsive">
								<div ng-if="cart != ''">
							  <table class="table table-bordered">
								<thead>
								 <tr>

									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left">Quantity</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Total</td>
								  </tr>
								</thead>
								<tbody>
								 <tr ng-repeat="item in cart">	<td class="text-center"><a href="product.html"><img width="60px" src="upload/productImage/{{item.image}}" class="img-thumbnail" /></a></td>
									<td class="text-left"><a href="#!quickview/{{item.id}}">{{item.name}}</a></td>
									<td class="text-left" style="max-width: 100px;">
                                        		<div class="input-group spinner">
											    <input type="text" class="form-control" ng-model="pq" ng-value="item.qty">
											    <div class="input-group-btn-vertical">
											      <button class="btn btn-default btn1" type="button" ng-click="plus(item.id)"><i class="fa fa-caret-up"></i></button>
											      <button class="btn btn-default btn1" type="button" ng-click="minus(item.id)"><i class="fa fa-caret-down"></i></button>
											    </div>
											     <a ng-click="remove(item)" title="Remove" class="btn btn-warning btn1"><i class="fa fa-times-circle"></i></a>
											  </div>
                       					
										</td>
									<td class="text-right">{{item.price}}</td>
									<td class="text-right">{{item.qty * item.price }}</td>
									</tr>
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="4"><strong>Sub-Total: </strong></td>
									<td class="text-right">{{ tp() }} /-</td>
								  </tr>
								  <tr> 
									<td class="text-right" colspan="4"><strong>Shipping Cost:</strong></td>
									<td class="text-right">{{sp}} /-</td>
								  </tr>
								  
								  <tr>
									<td class="text-right" colspan="4"><strong>Total:</strong></td>
									<td class="text-right">{{fp()}} /-</td>
								  </tr>
								</tfoot>
							  </table>
							  </div>
							  	<div ng-else>
							  		<h3>No data in Cart</h3>
							  	</div>
		
							</div>
						  </div>
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
						</div>
						  <div class="panel-body">
							<textarea rows="4" class="form-control"  ng-model="form.comment" id="confirm_comment" name="comments"></textarea>
							<br>
							<label class="control-label" for="confirm_agree">
							  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
							  <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
							<div class="buttons">
							  <div class="pull-right">
								<input type="button" class="btn btn-primary" ng-click="confirm()" id="button-confirm" value="Confirm Order">
							  </div>
							</div>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<!--Middle Part End -->
			
		</div>
	</form>
	</div>
	<!-- //Main Container -->
	<div ng-include="'View/template/footer.php'"></div>