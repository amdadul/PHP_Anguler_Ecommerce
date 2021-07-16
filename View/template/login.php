<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Login</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
								</div>
								<div class="bottom-form">
									<a href="#" class="btn btn-default pull-right">Continue</a>
								</div>
							</div>
							
							
								<div class="col-sm-6 customer-login">
									<div class="well">
										<label>
										<input type="radio" value="ocust" name="cust" ng-click="cust('ocust')"> Our Retailer</label><br>
										<label>
										<input type="radio" checked="checked"  ng-click="cust('rcust')" value="rcust" name="cust"> Our Customer</label>
										<div class="" ng-if="ocust == true">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Retailer of ABL</h2>
										<p><strong>I am a Retailer of ABL</strong></p>
										<div class="form-group">
											<label class="control-label" for="input-email">Username</label>
											<input type="text" name="user"  ng-model="user" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password"  ng-model="passwordr" name="passwordr" value="" id="input-password" class="form-control" />
										</div>
										<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<button ng-click="loginr(user,passwordr)"  class="btn btn-default pull-right" >Log-In </button>
									</div>
									</div>

									<div class="" ng-if="rcust == true">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Our Customer</h2>
										<p><strong>I am a customer</strong></p>
										<div class="form-group">
											<label class="control-label" for="input-email">E-Mail Address</label>
											<input type="text" name="email"  ng-model="email" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password"  ng-model="password" name="password" value="" id="input-password" class="form-control" />
										</div>
										<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<button ng-click="login(email,password)"  class="btn btn-default pull-right" >Log-In </button>
									</div>
									</div>
									</div>
									
								</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->
	<div ng-include="'View/template/footer.php'"></div>