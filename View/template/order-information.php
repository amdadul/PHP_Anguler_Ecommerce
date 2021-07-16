<div ng-include="'View/template/head.php'"></div>

	<div class="main-container container" >
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order Infomation</a></li>
		</ul>
		
		<div class="row" ng-init="orderdetails()">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<div align="center" media="print"><h1>Amarbazar Ltd</h1><p>Kashfia Plaza(5th floor)<br>35/C Naya Paltan<br>Dhaka-1000</p></div>
				<h2 class="title">Order Information</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Order Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Order ID:</b> {{od.onumber}}
								<br>
								<b>Date Added:</b> {{od.date}}</td>
							<td style="width: 50%;" class="text-left"> <b>Payment Method:</b> {{od.payment}}
								<br>
								<b>Shipping Method:</b><span ng-if="od.dcharge !=0"> Quick Shipping</span> <span ng-if="od.dcharge == 0"> Free Shipping</span> </td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Payment Address</td>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{od.daddress}}</td>
							<td class="text-left">{{od.daddress}}</td>
						</tr>
					</tbody>
				</table>
				<div class="table-responsive" ng-init="odetails()">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left">Product Name</td>
								<td class="text-left">Color</td>
								<td class="text-right">Quantity</td>
								<td class="text-right">Price</td>
								<td class="text-right">Total</td>
								
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="odt in odl">
								<td class="text-left">{{odt.product}}</td>
								<td class="text-left">{{odt.color}}</td>
								<td class="text-right">{{odt.qty}}</td>
								<td class="text-right">৳ {{odt.price}}</td>
								<td class="text-right">৳ {{odt.price*odt.qty}}</td>
								
							</tr>

						</tbody>
						<tfoot>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Sub-Total</b>
								</td>
								<td class="text-right">৳ {{odt}}</td>
								
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Shipping Rate</b>
								</td>
								<td class="text-right">৳ {{od.dcharge}}</td>
								
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">৳ {{od.total}}</td>
								
							</tr>
						</tfoot>
					</table>
				</div>
				<h3>Order History</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Date Added</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{od.date}}</td>
							<td class="text-left">{{od.ostatus}}</td>
						</tr>
						
					</tbody>
				</table>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" ng-click="printDiv('content')">Save to PDF</a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="login.html">Login</a>
		</li>
		<li><a href="register.html">Register</a>
		</li>
		<li><a href="#">Forgotten Password</a>
		</li>
		<li><a href="#">My Account</a>
		</li>
		<li><a href="#">Address Books</a>
		</li>
		<li><a href="wishlist.html">Wish List</a>
		</li>
		<li><a href="#">Order History</a>
		</li>
		<li><a href="#">Downloads</a>
		</li>
		<li><a href="#">Reward Points</a>
		</li>
		<li><a href="#">Returns</a>
		</li>
		<li><a href="#">Transactions</a>
		</li>
		<li><a href="#">Newsletter</a>
		</li>
		<li><a href="#">Recurring payments</a>
		</li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->


	<!-- Footer Container -->
	<div ng-include="'View/template/footer.php'"></div>