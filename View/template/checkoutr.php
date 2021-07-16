<div ng-include="'View/template/head.php'"></div>
<div  ng-init="cat()">
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container" ng-init="docnumber()">
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
					
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> CIN Search </h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
								<div class="form-group required">
								<label for="input-payment-firstname" class="control-label">Mobile Number:</label> 
								<input type="text" style="{{errsin}}" class="form-control" ng-model="form.mobile" id="input-payment-firstname" placeholder="Mobile Number"  name="mobile" required="required">
							  </div>
							  <div class="form-group required">
								<button ng-click="cin_search()" class="btn btn-primary">Search</button>
							  </div>
							  <div ng-if="cstcin != undefined">
							  	<b ng-repeat="cus in cust">CIN NO : {{cus.xcus}}<br>
							  		Name : {{cus.xorg}}<br></b>
							  </div>
							</fieldset>
						  </div>
				  </div>


				  	
				
				
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
								<div class="form-group required">
								<label for="input-payment-firstname" class="control-label">CIN NO:</label>
								<input type="text" style="{{errcin}}" class="form-control" ng-model="form.cin" id="input-payment-firstname" placeholder="CIN Number" ng-change="cuscheck()" name="cin" required="required">
							  </div>
							  <input type="hidden" ng-model="form.odnum" value="" name="odn" ng-value="">
							  <div class="form-group required">
								<label for="input-payment-firstname" class="control-label">Name</label>
								<input type="text" style="{{errname}}" class="form-control" ng-model="form.name" id="input-payment-firstname" placeholder="Name" value="" name="fname" required="required">
							  </div>

							  <div class="form-group required">
								<label for="input-payment-firstname" class="control-label">Ref RIN</label>
								<input type="text" style="{{errrfrin}}" class="form-control" ng-model="form.rfrin" id="input-payment-firstname" placeholder="Referance RIN" value="" ng-value="" ng-change="rincheck()" name="rfrin" required="required">
							  </div>

							  <div class="form-group required">
								<label for="input-payment-firstname" class="control-label">Ref Holder Name</label>
								<input type="text" style="{{errrfrin}}" class="form-control" ng-model="form.rfname" id="input-payment-firstname" placeholder="RIN Holder Name" value="" ng-value="" name="rfrin" required="required">
							  </div>
							  
							</fieldset>
						  </div>
				  </div>
				
				  

				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-book"></i> Delivery Address</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="address" class="required">

								<div class="form-group required">
								<label for="input-payment-address-2" class="control-label">Receiver Name</label>
								<input type="text" class="form-control"  style="{{erroaddress}}"  ng-model="form.recname" id="input-payment-address-2" placeholder="Receiver Name" value="" name="oaddress" /> 
							  </div>

							  <div class="form-group required">
								<label for="input-payment-telephone" class="control-label">Receiver Mobile Number</label>
								<input type="text" style="{{errmobile}}" class="form-control" id="input-payment-telephone" ng-model="form.omobile" placeholder="Mobile Number" ng-value="" name="phone">
							  </div>


							  
							  <div class="form-group required">
								<label for="input-payment-address-2" class="control-label">Receiver Address</label>
								<textarea class="form-control"  style="{{erroaddress}}"  ng-model="form.oaddress" id="input-payment-address-2" placeholder="Delivery Address" value="" name="oaddress"> </textarea>
							  </div>
							</fieldset>
						  </div>
				  </div>
				
			</div>
				<div class="col-right col-sm-9">
				  <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default no-padding">
							
							<div class="col-sm-12  checkout-payment-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
								</div>
								<div class="panel-body">
									<p>Please select the preferred payment method to use on this order.</p>
									<div class="radio">
									  <label title="Service is Not Available in This Order">
										<input type="radio" checked="checked"  name="Delivery">Cash On Delivery </label>
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
						  <div class="panel-body">
							<div class="table-responsive">
								<div ng-if="cart != ''">
							  <table class="table table-bordered">
								<thead>
								 <tr>

									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left">Quantity</td>
									<td class="text-left">Business Volume</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Total</td>
								  </tr>
								</thead>
								<tbody>
								 <tr ng-repeat="item in cart">	<td class="text-center"><a href="product.html"><img width="60px" src="upload/productImage/{{item.image}}" class="img-thumbnail" /></a></td>
									<td class="text-left"><a href="#!quickview/{{item.id}}">{{item.name}}</a></td>
									<td class="text-left" style="max-width: 100px;">
                                        		<div class="input-group spinner">
											    <input type="text" class="form-control" min="1" max="100" ng-model="pq" ng-value="item.qty">
											    <div class="input-group-btn-vertical">
											      <button class="btn btn-default btn1" type="button" ng-click="plus(item.id)"><i class="fa fa-caret-up"></i></button>
											      <button class="btn btn-default btn1" type="button" ng-click="minus(item.id)"><i class="fa fa-caret-down"></i></button>
											    </div>
											     <a ng-click="remove(item)" title="Remove" class="btn btn-warning btn1"><i class="fa fa-times-circle"></i></a>
											  </div>
                       					
										</td>
										<td class="text-right">{{item.qty * item.bv}}</td>
									<td class="text-right">{{item.price}}</td>
									<td class="text-right">{{item.qty * item.price }}</td>
									</tr>
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="3"><strong>Sub-Total: </strong></td>
									<td class="text-right">{{ tpoint() }} BV</td>
									<td class="text-right" colspan="2">{{ tp() }} /-</td>
								  </tr>
								  <tr> 
									<td class="text-right" colspan="3"><strong>Shipping Cost:</strong></td>
									<td class="text-right" colspan="3">{{sp}} /-</td>
								  </tr>
								  
								  <tr>
									<td class="text-right" colspan="3"><strong>Total:</strong></td>
									<td class="text-right" colspan="3">{{fp()}} /-</td>
								  </tr>
								</tfoot>
							  </table>
							  </div>
							  	<div ng-if="cart == ''">
							  		<h3>No data in Cart</h3>
							  	</div>
		
							</div>
						  </div>
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="panel ">
							<div class="buttons">
							  <div class="pull-right">
								<input type="button" class="btn btn-primary" ng-click="confirmr()" id="button-confirm" value="Confirm Order">
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