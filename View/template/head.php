

<div ng-init="show()">
	<div ng-init="cbal()">
	
	<!-- Header Container  -->
	<header  class="variantleft type_6">
		
		<!-- Header Top -->
		<div class="header-top compact-hidden">
			<div class="container">
				<div class="row">
					<div class="header-top-left form-inline col-sm-4 col-xs-12 compact-hidden">
						<div class="form-group languages-block ">
							<form action="#" method="post" enctype="multipart/form-data" id="bt-language">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<img src="View/image/demo/flags/gb.png" alt="English" title="English">
									<span class="">English</span>
									<span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><img class="image_flag" src="View/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
									<li> <a href="#"> <img class="image_flag" src="View/image/demo/flags/lb.png" alt="Bangla" title="Bangla" /> Bangla </a> </li>
								</ul>
							</form>
						</div>
					</div>
					<div class="header-top-right collapsed-block text-right  col-sm-8 col-xs-12 compact-hidden">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " data-toggle="collapse" data-target="#TabBlock"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock">
							<ul class="top-link list-inline">
								<li ng-if="auth.rin != undefined" class="account" id="my_account"><a title="Balance" class="btn btn-xs dropdown-toggle" > <i class="fa fa-money" ></i> {{balance | number : 2}} /-</a></li>
								<li ng-if="auth.rin != undefined" class="account" id="my_account"><a href="#!c_cus" title="Create Customer" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> Create Customer </a></li>
								<li ng-if="check() == true" class="account" id="my_account"><a href="#!myacc" title="My Account" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> My Account </a></li>
								<li ng-if="auth.rin == undefined" class="checkout"><a href="#!checkout" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>
								<li class="signin" ng-if="check() == false"><a href="#!signin" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign In</a></li>
								<li class="signin" ng-if="check() == true"><a ng-click="logout()" class="top-link-checkout" title="logout"><i class="fa fa-unlock" ></i> Sign Out</a></li>
								<li class="signin" ng-if="check() == true"><a  href="#!bin" class="top-link-checkout" title="{{auth.name}}"><i class="fa fa-user" ></i> {{auth.name}}</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Header Top -->

<div id="mySidenav" class="sidenav" >

    
    <div class="sidenav_header">

        <p class="header header_right"><i class="fa fa-cart-plus" aria-hidden="true"></i>Order List (৳ <span class="carttotal">{{ tp() }}</span>)</p>
        <a class="btn btn-danger" onclick="closeNav()" style="margin-left: 100px;">X</a>
    </div>
    <div class="sidernav_body">
        <p>Items</p><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-caret-right" aria-hidden="true" ></i></a>
                    <div class="">
                <div class="w100 miniCartTable scroll-pane">
                	<div ng-if="cart != ''">
                    <table class="table">
                    	
                    	<thead>
                    		<tr>
                    			<td>Image</td>
                    			<td>Product Name<br>Price</td>
                    			<td>Quantity </td>
                    			<td>Sub Total</td>
                    		</tr>
                    	</thead>
                        <tbody>

                        	<div class="table-responsive">
								
							  
								 <tr ng-repeat="item in cart">	<td class="text-center"><a href="product.html"><img width="60px" src="upload/productImage/{{item.image}}" class="img-thumbnail" /></a></td>
									<td ng-if="auth.rin == undefined" class="text-left" style="max-width: 100px;"><a href="#!quickview/{{item.id}}">{{item.name}}</a><br> <b>৳ {{item.price}}/-</b></td>
									
									<td ng-if="auth.rin != undefined" class="text-left" style="max-width: 100px;"><a href="#!quickview/{{item.id}}">{{item.name}}</a><br> 
									<b ng-if="retstk == 'true' || retstk == 'corporate'">৳ {{item.price}}/-</b>
									<b ng-if="retstk == 'false'">৳ {{item.rprice}}/-</b>
									</td>
									<td class="text-center">
								

                                        	<div class="input-group spinner">
											    <input type="text" class="form-control" ng-model="pq" ng-value="item.qty">
											    <div class="input-group-btn-vertical">
											      <button class="btn btn-default btn1" type="button" ng-click="plus(item.id)"><i class="fa fa-caret-up"></i></button>
											      <button class="btn btn-default btn1" type="button" ng-click="minus(item.id)"><i class="fa fa-caret-down"></i></button>
											    </div>
											     <a ng-click="remove(item)" title="Remove" class="btn btn-warning btn1"><i class="fa fa-times-circle"></i></a>
											  </div>
										    
                                       
										
										</td>
									
									<td ng-if="auth.rin == undefined" class="text-right"><strong>৳ {{item.qty * item.price }} /- </strong></td>
									<td ng-if="auth.rin != undefined" class="text-right"><strong ng-if="retstk == 'true' || retstk == 'corporate'">৳ {{item.qty * item.price }} /- </strong><strong ng-if="retstk == 'false'">৳ {{item.qty * item.rprice }} /- </strong></td>
									</tr>
								
							  </div>
                         </tbody>
                    </table>
                    </div>
                    <div ng-if="cart == '' || cart == undefined ">
							  		<h3 align="center">No data in Cart</h3>
							  	</div>
                </div>
                <div class="miniCartFooter text-center">
                    <h3 class="subtotal"> Total: <span class="carttotal numbers">{{ tp() }}</span> TK </h3>
                    <div ng-if="auth.rin == undefined">
                   		 <a href="#!checkout" class="btn btn-outline-success"> NEXT STEP</a>
               		</div>
               		<div ng-if="auth.rin != undefined">
	                    <a ng-if="retstk == 'true'" href="#!checkoutr" class="btn btn-outline-success"> Retailer Sale Order</a>
	                    <a ng-if="retstk == 'false'" href="#!checkoutreq" class="btn btn-outline-success">Requisition</a>
	                    <a ng-if="retstk == 'false'" ng-click="ldc()" class="btn btn-outline-success">LDC Requisition</a>
	                    <a ng-if="retstk == 'corporate'" href="#!checkoutcor" class="btn btn-outline-success">Corporate Order</a>
                	</div>
                </div>
            </div>
            </div>
</div>
<div class="open-cart" onclick="openNav()">
    <p class="ani">View Order<i class="fa fa-cart-plus" aria-hidden="true"></i></p>
    <p>৳<span class="carttotal">{{ tp() }}</span></p>
</div> 

   
		<!-- Header center -->
		<div class="header-center">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
						<a href="#!home"><img src="View/image/demo/logo.webp" title="Amarbazar LTD" alt="Amarbazar LTD "></a>
					</div>
					<!-- //end Logo -->	
					<!-- Search -->
					<div id="sosearchpro" class="col-md-5 col-sm-7 search-pro">
						
							<div id="search0" class="search input-group">
								<div class="select_category" >
									<!-- <select style="padding: 5px 10px;" class="" id="input-limit">
										 <option value="0">All Categories</option>
										<option value="78">Apparel</option>
										<option value="77">Cables &amp; Connectors</option>
										<option value="82">Cameras &amp; Photo</option>
										<option value="80">Flashlights &amp; Lamps</option>
										<option value="81">Mobile Accessories</option>
										<option value="79">Video Games</option>
										<option value="20">Jewelry &amp; Watches</option>
										<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
										<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
										<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option> 
									</select> -->
								</div>
								<a href="#!search">
								<input class="autosearch-input form-control" style=" " type="text" value="" size="50" autocomplete="off" ng-model="form.search" ng-change="search()" placeholder="Enter keywords to search..." name="search">
							</a>
								<span class="input-group-btn">
								<button ng-click="search()" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<input type="hidden" name="route" value="product/search">
						
					</div>
					<!-- //Search -->
					
					<!-- Main Menu -->
					<div class="phone-contact col-md-2  hidden-md hidden-sm hidden-xs">
							<div class="inner-info">
								<strong>Call us Now:</strong><br>
								<span>Toll free:  02-9353212</span>
							</div>
					</div>
					<!-- //Main Menu -->

					<!-- Shopping Cart -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 shopping_cart pull-right">
						<!--cart-->
						<div id="cart" class="btn-group btn-shopping-cart">
							<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
								<div class="shopcart" onclick="openNav()">
									<span class="handle pull-left"></span>
									<span class="title" >Shopping Cart</span>
									<p class="text-shopping-cart cart-total-full">{{cart.length}} </p>
								</div>
							</a>

							
						</div>
						<!--//cart-->
					</div>
					<!-- //Shopping Cart -->
				</div>

			</div>
		</div>
		<!-- //Header center -->

		<!-- Header Bottom -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<!-- Sidebar menu -->
					<div class="megamenu-hori col-md-2 col-sm-6 col-xs-12 "></div>
					<!-- Main menu -->
				 <div class="megamenu-hori col-md-10 col-sm-6 col-xs-12 ">
						
						<div class="responsive so-megamenu">
								<nav class="navbar-default">
									<div class="container-megamenu  horizontal">
									
										<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												<a class="navbar-brand" href="">menu</a>
										</div>
										
										<div class="collapse navbar-collapse" id="myNavbar">
											<div class="megamenu-pattern">
													<ul class="nav navbar-nav megamenu">
														<li class="home hover">
															<a href="#!home">Home</b></a>
														</li>
														
														
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!shop/all" class="clearfix">
																<strong>ABL Products</strong>
																<span class="label"></span></b>
															</a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!trackorder" class="clearfix">
																<strong>Track your Order</strong></b>
															</a>
														</li>
														<li ng-if="auth.rin != undefined || auth != ''" class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!sale" class="clearfix">
																<strong>Retail Sales</strong></b>
															</a>
														</li>
														<li ng-if="auth.rin != undefined || auth != ''" class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!csale" class="clearfix">
																<strong>Corporate Sales</strong></b>
															</a>
														</li>

														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="http://37.34.252.0/amarbazarltd/loginmem/index/100" class="clearfix">
																<strong>Retailer Login</strong></b>
															</a>
														</li>
														<li ng-if="auth.rin != undefined || auth != ''" class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!bin" class="clearfix">
																<strong>BIN Status</strong></b>
															</a>
														</li>
													</ul>
													
												</div>
										</div>
										</div>
									</div>
										</nav>
									</div>
						</div> 




						 <!-- <div class="megamenu-hori col-md-10 col-sm-6 col-xs-12 ">
						<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle" data-target="#myNavbar">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
											Menu	
										</div>
										
										<div class="megamenu-wrapper" id="myNavbar">
											
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<a href="#!home">Home</b></a>
														</li>
														
														
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!shop/all" class="clearfix">
																<strong>ABL Products</strong>
																<span class="label"></span></b>
															</a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!trackorder" class="clearfix">
																<strong>Track your Order</strong></b>
															</a>
														</li>
														<li ng-if="auth.rin != undefined || auth != ''" class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!sale" class="clearfix">
																<strong>Retail Sales</strong></b>
															</a>
														</li>
														<li ng-if="auth.rin != undefined || auth != ''" class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!csale" class="clearfix">
																<strong>Corporate Sales</strong></b>
															</a>
														</li>

														<li ng-if="auth.rin != undefined || auth != ''" class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="http://37.34.252.0/amarbazarltd/loginmem/index/100" class="clearfix">
																<strong>Business Oparetion</strong></b>
															</a>
														</li>
													</ul>
													
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>  -->
					<!-- //end Main menu -->
					
				</div>
			</div>

		</div>


	<!-- Navbar switcher -->
	<!-- //end Navbar switcher -->
	</header>