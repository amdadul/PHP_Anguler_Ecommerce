
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<!--Theme of Amarbazar Ltd-->
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Online E-commerce Company</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!--techno another theme css-->

	<!--techno another-->
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
	<!-- Theme CSS
	============================================ -->
   	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/header6.css" rel="stylesheet">
	<link href="css/footer3.css" rel="stylesheet">
	<link id="color_scheme" href="css/home6.css" rel="stylesheet">
	
	<link href="css/responsive.css" rel="stylesheet">
	

</head>

<body class="common-home res layout-home6" ng-controller="MainCntl as main">


    <div id="wrapper" class="wrapper-full banners-effect-7">
	
	
	
	<!-- Header Container  -->
	<header id="header" class="variantleft type_6">
		
		<!-- Header Top -->
		<div class="header-top compact-hidden">
			<div class="container">
				<div class="row">
					<div class="header-top-left form-inline col-sm-5 col-xs-12 compact-hidden">
						<div class="form-group languages-block ">
							<form action="#" method="post" enctype="multipart/form-data" id="bt-language">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<img src="image/demo/flags/gb.png" alt="English" title="English">
									<span class="">English</span>
									<span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><img class="image_flag" src="image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
									<li> <a href="#"> <img class="image_flag" src="image/demo/flags/lb.png" alt="Bangla" title="Bangla" /> Bangla </a> </li>
								</ul>
							</form>
						</div>
					</div>
					<div class="header-top-right collapsed-block text-right  col-sm-7 col-xs-12 compact-hidden">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock-1">
							<ul class="top-link list-inline">
								<li class="account" id="my_account"><a href="my-account.html" title="My Account" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> My Account </a></li>
								<li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="wishlist"><i class="fa fa-heart" ></i> My Wish List</a></li>
								<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>
								<li class="signin"><a href="login.html" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign In</a></li>
								
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
						<a href="index.html"><img src="image/demo/logos/logo.png" title="Your Store" alt="Your Store"></a>
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
									<p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p>
								</div>
							</a>

							<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
								<li>
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="text-center" style="width:70px">
													<a href="product.html"> <img src="image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
												</td>
												<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
												<td class="text-center"> x1 </td>
												<td class="text-center"> $1,202.00 </td>
												<td class="text-right">
													<a href="product.html" class="fa fa-edit"></a>
												</td>
												<td class="text-right">
													<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
												</td>
											</tr>
											<tr>
												<td class="text-center" style="width:70px">
													<a href="product.html"> <img src="image/demo/shop/product/resize/3.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
												</td>
												<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
												<td class="text-center"> x1 </td>
												<td class="text-center"> $60.00 </td>
												<td class="text-right">
													<a href="product.html" class="fa fa-edit"></a>
												</td>
												<td class="text-right">
													<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<li>
									<div>
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="text-left"><strong>Sub-Total</strong>
													</td>
													<td class="text-right">$1,060.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Eco Tax (-2.00)</strong>
													</td>
													<td class="text-right">$2.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>VAT (20%)</strong>
													</td>
													<td class="text-right">$200.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Total</strong>
													</td>
													<td class="text-right">$1,262.00</td>
												</tr>
											</tbody>
										</table>
										<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
									</div>
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
																<img src="image/theme/icons/9.png" alt="icon">
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
																<img src="image/theme/icons/10.png" alt="icon">
																<span>Electronic</span>
																
															</a>
														</li>
														<li class="item-vertical with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<span class="label"></span>
																<img src="image/theme/icons/3.png" alt="icon">
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
																								<a href="#" onclick="window.location = '25_31.html';" class="main-menu">Fishing</a>
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
																					<img src="image/demo/cms/menu_bg2.jpg" alt="banner1">
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
																	<img src="image/theme/icons/2.png" alt="icon">
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
																									<a href="24.html" onclick="window.location = '24.html';" class="main-menu">Health &amp; Beauty</a>
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
																	
																	<img src="image/theme/icons/2.png" alt="icon">
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
																	<img src="image/theme/icons/11.png" alt="icon">
																	<span>Flashlights &amp; Lamps</span>
																	
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/4.png" alt="icon">
																	<span>Camera &amp; Photo</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/5.png" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/7.png" alt="icon">
																	<span>Outdoor &amp; Traveling Supplies</span>
																</a>
															</li>
															<li class="item-vertical" style="display: none;">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/6.png" alt="icon">
																	<span>Health &amp; Beauty</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/8.png" alt="icon">
																	<span>Toys &amp; Hobbies </span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/12.png" alt="icon">
																	<span>Jewelry &amp; Watches</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/13.png" alt="icon">
																	<span>Bags, Holiday Supplies</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/13.png" alt="icon">
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
															<a href="index.php">Home</b></a>
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
															<a href="#!text" class="clearfix">
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