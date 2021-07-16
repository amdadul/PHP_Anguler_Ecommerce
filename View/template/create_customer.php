<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Create</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div class="col-sm-9" id="content">
				<p class="lead">Hello, <strong>Guest !</strong> - Fill with Correct information to Create account.</p>
				<form>
					<div class="row">
						<div class="col-sm-6">
							<fieldset id="personal-details">
								<legend>Personal Details</legend>
								<div class="form-group required">
									<label for="input-firstname" class="control-label">Name</label>
									<input type="text" class="form-control" style="{{errcname}}" id="input-firstname" ng-model="form.cname" placeholder="Name" value="" name="name">
								</div>
								<div class="form-group required">
									<label for="input-email" class="control-label">E-Mail</label>
									<input type="email" class="form-control" style="{{errcemail}}" id="input-email" ng-model="form.cemail" placeholder="E-Mail" value="" name="email">
								</div>
								<div class="form-group required">
									<label for="input-telephone" class="control-label">Mobile Number</label>
									<input type="tel" class="form-control" style="{{errcmobile}}" id="input-telephone" ng-model="form.cmobile" placeholder="Mobile Number" value="" name="telephone">
								</div>
								
							</fieldset>
							<br>
						</div>
						<div class="col-sm-6">
							<fieldset>
								<legend>Password</legend>
								<div class="form-group required">
									<label for="input-password"  class="control-label">Password</label>
									<input type="password" class="form-control" style="{{errcpassword}}" id="input-password" ng-model="form.cpassword" placeholder="Password" value="" name="new-password">
								</div>
								<div class="form-group required">
									<label for="input-confirm" class="control-label">Password Confirm</label>
									<input type="password" class="form-control" style="{{errcconpassword}}" id="input-confirm" ng-model="form.cconpassword" placeholder="Password Confirm" value="" name="new-confirm">
								</div>
							</fieldset>
							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<fieldset id="address">
								<legend> Address</legend>
								
								<div class="form-group required">
									<label for="input-address-1" class="control-label">Address</label>
									<textarea class="form-control" style="{{errcaddress}}" id="input-address" ng-model="form.caddress" placeholder="Address" value="" name="address"></textarea>
								</div>
								
							</fieldset>
						</div>
						
					</div>



					<div class="buttons clearfix">
						<div class="pull-right">
							<input type="submit" class="btn btn-md btn-primary" ng-click="c_cus()" value="Create Customer">
						</div>
					</div>
				</form>
			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
				<div class="list-group">
					<ul class="list-item">
						<li><a href="#!signin">Login</a>
						</li>
						<li><a href="#!register">Register</a>
						</li>
						<li><a href="#!myacc">My Account</a>
						</li>
						<li><a href="#!wishlist">Wish List</a>
						</li>
						<li><a href="#!orderhis">Order History</a>
						</li>
						<li><a href="#!return">Returns</a>
						</li>
					</ul>
				</div>
			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
	<div ng-include="'View/template/footer.php'"></div>