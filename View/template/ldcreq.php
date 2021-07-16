<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container" ng-init="reqnum()">
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
			  	
				
				<div class="col-right col-sm-12">
				  <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default no-padding">
							
							<div class="col-sm-6  checkout-payment-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
								</div>
								<div class="panel-body">
									<p>Please select the preferred payment method to use on this order.</p>

									<div class="radio" ng-if="cbal() != true">
									  <label>
										<input type="radio"  ng-click="wallet()"  name="Delivery" >Wallet Payment</label>
									</div>

									<div class="radio" ng-if="cbal() == true">
									  <label title="In sufficient balance in your wallet !">
										<input type="radio" disabled='disabled' ng-click="wallet()"  name="Delivery" >Wallet Payment</label>
									</div>
									
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
                                        		<div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-number" ng-click="minus(item.id)"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{item.qty}}" min="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-info btn-number" ng-click="plus(item.id)" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                     <span class="input-group-btn">
                                        <a ng-click="remove(item)" title="Remove" class="btn btn-warning"><i class="fa fa-times-circle"></i></a>
                                    </span>

                                
                       					 </div>
                       					
										</td>
									<td ng-if="auth.rin == undefined" class="text-right">{{item.price}}</td>
									<td ng-if="auth.rin != undefined" class="text-right">
										<span ng-if="retstk == true">{{item.price}}</span>
										<span ng-if="retstk != true">{{item.rprice}}</span>
									</td>
									<td ng-if="auth.rin == undefined" class="text-right">{{item.qty * item.price }}</td>
									<td ng-if="auth.rin != undefined" class="text-right">
										<span ng-if="retstk == true">{{item.qty * item.price }}</span>
										<span ng-if="retstk != true">{{item.qty * item.rprice }}</span>
									</td>
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
							  	<div ng-if="cart == ''">
							  		<h3>No data in Cart</h3>
							  	</div>
		
							</div>
						  </div>
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Enter Address</h4>
						</div>
						  <div class="panel-body">
							<textarea rows="4" class="form-control" style="{{errcom}}"  ng-model="form.comment" id="confirm_comment" name="comments"></textarea>
							<input type="hidden" ng-model="form.reqnum"  name="">
							<br>
							<label class="control-label" for="confirm_agree">
							  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
							  <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
							<div class="buttons">
							  <div class="pull-right">
								<input type="button" class="btn btn-primary" ng-click="confirmreq()" id="button-confirm" value="Confirm Order">
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