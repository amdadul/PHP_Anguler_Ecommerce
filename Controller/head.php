<div ng-init="show()">
	
	<!-- Header Container  -->
	<header  class="variantleft type_6">
		
		<!-- Header Top -->
		<div class="header-top compact-hidden">
			<div class="container">
				<div class="row">
					<div class="header-top-left form-inline col-sm-5 col-xs-12 compact-hidden">
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
					<div class="header-top-right collapsed-block text-right  col-sm-7 col-xs-12 compact-hidden">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock-1">
							<ul class="top-link list-inline">
								<li class="account" id="my_account"><a href="#!myacc" title="My Account" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> My Account </a></li>
								<li class="wishlist"><a href="#!wishlist" class="top-link-wishlist" title="wishlist"><i class="fa fa-heart" ></i> My Wish List</a></li>
								<li class="checkout"><a href="#!checkout" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>
								<li class="signin"><a href="#!signin" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign In</a></li>
								<li class="signin"><a href="http://37.34.252.0/amarbazarltd/login/index/100" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Retailer Login</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Header Top -->



   
		<!-- Header center -->
		<div class="header-center">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
						<a href="index.html"><img src="View/image/demo/logo.webp" title="Amarbazar LTD" alt="Amarbazar LTD "></a>
					</div>
					<!-- //end Logo -->	
					<!-- Search -->
					<div id="sosearchpro" class="col-md-5 col-sm-7 search-pro">
						<form method="GET" action="#">
							<div id="search0" class="search input-group">
								<div class="select_category filter_type icon-select">
									<select class="no-border" name="category_id">
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
									</select>
								</div>

								<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
								<span class="input-group-btn">
								<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<input type="hidden" name="route" value="product/search">
						</form>
					</div>
					<!-- //Search -->
					
					<!-- Main Menu -->
					<div class="phone-contact col-md-2  hidden-md hidden-sm hidden-xs">
							<div class="inner-info">
								<strong>Call us Now:</strong><br>
								<span>Toll free:  021-222502</span>
							</div>
					</div>
					<!-- //Main Menu -->

					<!-- Shopping Cart -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 shopping_cart pull-right">
						<!--cart-->
						<div id="cart" class="btn-group btn-shopping-cart">
							<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
								<div class="shopcart">
									<span class="handle pull-left"></span>
									<span class="title">Shopping Cart</span>
									<p class="text-shopping-cart cart-total-full">{{cart.length}} </p>
								</div>
							</a>

							<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
								<li>
									<table class="table table-striped">
										<tbody>
											<tr ng-repeat="item in cart" >
												<div>{{product(item.id)}}</div>
                										 <td>{{pro}}</td>
         												 <td><input type="submit" name="submit" value="X" ng-click="remove(item)"></td>      										
											</tr>
											
										</tbody>
									</table>
								</li>
								<li>
									
								</li>
							</ul>
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
					<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12  ">
						<div class="responsive so-megamenu ">
							<div class="so-vertical-menu no-gutter compact-hidden">
								<nav class="navbar-default">
									<div class="container-megamenu vertical">
										<div id="menuHeading">
											<div class="megamenuToogle-wrapper">
												<div class="megamenuToogle-pattern">
													<div class="container">
														<div>
															<span></span>
															<span></span>
															<span></span>
														</div>
														All Categories							
													</div>
												</div>
											</div>
										</div>
										<div class="navbar-header">
											<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
											
											</button>
											All Categories		
										</div>
										<div class="vertical-wrapper" style="display: none;">
											<span id="remove-verticalmenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu">
														<li class="item-vertical style1 with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<img src="View/image/theme/icons/9.png" alt="icon">
																<span>Automotive &amp; Motocrycle</span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Apparel</a>
																								<ul>
																									<li><a href="#">Accessories for Tablet PC</a></li>
																									<li><a href="#">Accessories for i Pad</a></li>
																									<li><a href="#">Accessories for iPhone</a></li>
																									<li><a href="#">Bags, Holiday Supplies</a></li>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Cables &amp; Connectors</a>
																								<ul>
																									<li><a href="#">Cameras &amp; Photo</a></li>
																									<li><a href="#">Electronics</a></li>
																									<li><a href="#">Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Camping &amp; Hiking</a>
																								<ul>
																									<li><a href="#">Earings</a></li>
																									<li><a href="#">Shaving &amp; Hair Removal</a></li>
																									<li><a href="#">Salon &amp; Spa Equipment</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#">Sports &amp; Outdoors</a></li>
																									<li><a href="#">Bath &amp; Body</a></li>
																									<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Bags, Holiday Supplies</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '18_46.html';">Battereries &amp; Chargers</a></li>
																									<li><a href="#" onclick="window.location = '24_64.html';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '18_45.html';">Headphones, Headsets</a></li>
																									<li><a href="#" onclick="window.location = '18_30.html';">Home Audio</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<img src="View/image/theme/icons/10.png" alt="icon">
																<span>Electronic</span>
																
															</a>
														</li>
														<li class="item-vertical with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<span class="label"></span>
																<img src="View/image/theme/icons/3.png" alt="icon">
																<span>Sports &amp; Outdoors</span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" data-subwidth="60" style="width: 540px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '81.html';" class="main-menu">Mobile Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '33_63.html';">Gadgets &amp; Auto Parts</a></li>
																									<li><a href="#" onclick="window.location = '24_64.html';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '17.html';">Bags, Holiday Supplies</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '18_46.html';" class="main-menu">Battereries &amp; Chargers</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '25_28.html';">Outdoor &amp; Traveling</a></li>
																									<li><a href="#" onclick="window.location = '80.html';">Flashlights &amp; Lamps</a></li>
																									<li><a href="#" onclick="window.location = '24_66.html';">Fragrances</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = 'View/25_31.html';" class="main-menu">Fishing</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '57_73.html';">FPV System &amp; Parts</a></li>
																									<li><a href="#" onclick="window.location = '18.html';">Electronics</a></li>
																									<li><a href="#" onclick="window.location = '20_76.html';">Earings</a></li>
																									<li><a href="#" onclick="window.location = '33_60.html';">More Car Accessories</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="row banner">
																				<a href="#">
																					<img src="View/image/demo/cms/menu_bg2.jpg" alt="banner1">
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/2.png" alt="icon">
																	<span>Health &amp; Beauty</span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-md-12">
																				<div class="row">
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Car Alarms and Security</a>
																									<ul>
																										<li><a href="#">Car Audio &amp; Speakers</a></li>
																										<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#">Headphones, Headsets</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="View/24.html" onclick="window.location = '24.html';" class="main-menu">Health &amp; Beauty</a>
																									<ul>
																										<li>
																											<a href="#">Home Audio</a>
																										</li>
																										<li>
																											<a href="#">Helicopters &amp; Parts</a>
																										</li>
																										<li>
																											<a href="#">Outdoor &amp; Traveling</a>
																										</li>
																										<li>
																											<a href="#">Toys &amp; Hobbies</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Electronics</a>
																									<ul>
																										<li>
																											<a href="#">Earings</a>
																										</li>
																										<li>
																											<a href="#">Salon &amp; Spa Equipment</a>
																										</li>
																										<li>
																											<a href="#">Shaving &amp; Hair Removal</a>
																										</li>
																										<li>
																											<a href="#">Smartphone &amp; Tablets</a>
																										</li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																									<ul>
																										<li>
																											<a href="#">Flashlights &amp; Lamps</a>
																										</li>
																										<li>
																											<a href="#">Fragrances</a>
																										</li>
																										<li>
																											<a href="#">Fishing</a>
																										</li>
																										<li>
																											<a href="#">FPV System &amp; Parts</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">More Car Accessories</a>
																									<ul>
																										<li>
																											<a href="#">Lighter &amp; Cigar Supplies</a>
																										</li>
																										<li>
																											<a href="#">Mp3 Players &amp; Accessories</a>
																										</li>
																										<li>
																											<a href="#">Men Watches</a>
																										</li>
																										<li>
																											<a href="#">Mobile Accessories</a>
																										</li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																									<ul>
																										<li>
																											<a href="#">Gift &amp; Lifestyle Gadgets</a>
																										</li>
																										<li>
																											<a href="#">Gift for Man</a>
																										</li>
																										<li>
																											<a href="#">Gift for Woman</a>
																										</li>
																										<li>
																											<a href="#">Gift for Woman</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical css-menu with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	
																	<img src="View/image/theme/icons/2.png" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="row">
																					<div class="col-sm-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Headphones, Headsets</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Home Audio</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Health &amp; Beauty</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/11.png" alt="icon">
																	<span>Flashlights &amp; Lamps</span>
																	
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/4.png" alt="icon">
																	<span>Camera &amp; Photo</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/5.png" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/7.png" alt="icon">
																	<span>Outdoor &amp; Traveling Supplies</span>
																</a>
															</li>
															<li class="item-vertical" style="display: none;">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/6.png" alt="icon">
																	<span>Health &amp; Beauty</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/8.png" alt="icon">
																	<span>Toys &amp; Hobbies </span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/12.png" alt="icon">
																	<span>Jewelry &amp; Watches</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/13.png" alt="icon">
																	<span>Bags, Holiday Supplies</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="View/image/theme/icons/13.png" alt="icon">
																	<span>More Car Accessories</span>
																</a>
															</li>
															<li class="loadmore">
																<i class="fa fa-plus-square-o"></i>
																<span class="more-view">More Categories</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
							</div>
						</div>

					</div>
					
					<!-- Main menu -->
					<div class="megamenu-hori col-md-9 col-sm-6 col-xs-12 ">
						<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
											Navigation		
										</div>
										
										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<a href="#!">Home</b></a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Features</strong></b>
															</a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Pages</strong></b>
															</a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#!shop" class="clearfix">
																<strong>ABL Products</strong>
																<span class="label"></span></b>
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
					<!-- //end Main menu -->
					
				</div>
			</div>

		</div>


	<!-- Navbar switcher -->
	<!-- //end Navbar switcher -->
	</header>