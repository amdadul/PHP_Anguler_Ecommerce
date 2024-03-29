<style type="text/css">
	* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.HoverDiv {
  position: relative;
  overflow: hidden;
  
  width:400px;
  margin: 10px;
}

.HoverDiv img {
  max-width: 100%;
  text-align:center;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.HoverDiv:hover img {
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}

img {
    display: inline-block;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    transition: 0.3s;
  position:relative;
  z-index:1;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
   -webkit-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  transform: skewX(-20deg);
  -webkit-transform-origin:0 0;
  -ms-transform-origin:0 0;
  transform-origin:0 0;
}
</style>

 <div ng-include="'View/template/head.php'"></div> 


 	<div  ng-init="quickview()"> 
 		<div  ng-init="qvPicture()"> 


<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
			<li><a href="#">Bint Beef</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				
				<div class="product-view row">
					<div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">
							<div class="content-product-left  col-sm-7 col-xs-12 ">
								<div id="thumb-slider-vertical" class="thumb-vertical-outer">
									<span class="btn-more prev-thumb nt"><i class="fa fa-angle-up"></i></span>
									<span class="btn-more next-thumb nt"><i class="fa fa-angle-down"></i></span>
									<ul class="thumb-vertical">
										<li class="owl2-item" ng-repeat="p in pi">
											<a data-index="{{p.index}}" class="img thumbnail" data-image="upload/productImage/{{Items.xitemcode}}.jpg" title="{{Items.xdesc}}" >
												<img src="upload/productImage/{{Items.xitemcode}}.jpg" ng-click="zoomimage(p.image)" title="{{Items.xdesc}}" alt="{{Items.xdesc}}">
											</a>
										</li>
										
									</ul>
									
									
								</div>
								<div class="HoverDiv">
									<img   src="upload/productImage/{{Items.xitemcode}}.jpg" title="{{Items.xdesc}}" alt="{{Items.xdesc}}">
								</div>
								
							</div>
							
							<div class="content-product-right col-sm-5 col-xs-12">
								<div class="title-product">

									<h1>{{Items.xdesc}}</h1>
								</div>
								
								<div class="box-review form-group">
									<div class="ratings">
										<div class="rating-box">
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										</div>
									</div>

									<a class="reviews_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	| 
									<a class="write_review_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
								</div>

								<div class="box-review form-group">
									{{Items.sort_description}}
								</div>

								<div class="product-label form-group">
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<!-- <span class="price-new" itemprop="price">৳ {{Items.sprice}}</span> -->
										<span class="price-new">৳ {{Items.xmrp}}</span>
									</div>
									<div class="stock" ><span>Availability: </span><span ng-if="Items.zactive > 0"><span class="status-stock">In Stock </span></span><span ng-if="Items.zactive == 0"><span class="status-stockout">Out of Stock </span></span> </div>
								</div>

								<div class="product-box-desc">
									<div class="inner-box-desc">
										<div class="brand"><span>Category :</span><a href="#!shop/{{Items.xcat}}">{{Items.xcat}}</a>		</div>
										<div class="brand"><span>Brand:</span><a href="#!brand/{{Items.xbrand}}">{{Items.xbrand}}</a>		</div>
										<div class="model"><span>Product Code:</span> {{Items.xitemcode}}</div>
										<div class="reward" ><span>Business Volume:</span> {{Items.xdp}}</div>
										<!-- <div class="reward" ><span>Sale Unit : </span> {{Items.xunitsale}}</div>
										<div class="reward" ><span>Product Type : </span> {{Items.xsource}}</div> -->
									</div>
								</div>


								<div id="product">
									<h4>Available Options</h4>
									<!-- <div class="image_option_type form-group required">
										<label class="control-label">Colors</label>
										<ul class="product-options clearfix"id="input-option231">
											<li class="radio active">
												<label>
													<input class="image_radio" type="radio" name="option[231]" value="33"> 
													<img src="View/image/demo/colors/{{Items.color}}.jpg" data-original-title="{{Items.color}}" class="img-thumbnail icon icon-color" />				 <i class="fa fa-check"></i>
													<label> </label>
												</label>
											</li>
											
											<li class="selected-option">
											</li>
										</ul>
									</div> -->
									
									

									<div class="form-group box-info-product">
										<div class="option quantity">
											<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
												<label>Qty</label>
												<input class="form-control" type="text" name="quantity"
												value="1" ng-model="pq" ng-value="qty()">
												<span class="product_quantity_down" ng-click="minuss()">−</span>
												<span class="product_quantity_up" ng-click="pluss()">+</span>
											</div>
										</div>
										<div class="cart">
											<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" ng-click="add(Items.xitemid,pq,Items.xdesc,Items.xitemcode+'.jpg',Items.xmrp,Items.xstdprice,Items.xitemcode,Items.xsource)" onclick="openNav()" data-original-title="Add to Cart">
										</div>
										<div class="add-to-links wish_comp">
											<ul class="blank list-inline">
												<li class="wishlist">
													<a class="icon" data-toggle="tooltip" title=""
													onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
													</a>
												</li>
												<li class="compare">
													<a class="icon" data-toggle="tooltip" title=""
													onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
													</a>
												</li>
											</ul>
										</div>

									</div>

								</div>
								<!-- end box info product -->

							</div>
						</div>
					</div>
					
					<section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products">
						<div class="module col-sm-12 four-block">
							<div class="modcontent clearfix">
								<div class="policy-detail">
									<div class="banner-policy">
										<div class="policy policy1">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	90 day
											<br> money back </a>
										</div>
										<div class="policy policy2">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	In-store exchange </a>
										</div>
										<div class="policy policy3">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	lowest price guarantee </a>
										</div>
										<div class="policy policy4">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	shopping guarantee </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				<!-- Product Tabs -->
				<div class="producttab ">
	<div class="tabsslider  col-xs-12">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
		</ul>
		<div class="tab-content col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">
				<p>
					{{Items.xlongdesc}}
					</p>
				

				
			</div>
			<div id="tab-review" class="tab-pane fade">
				<form>
					<div id="review">
						<table class="table table-striped table-bordered">
							<tbody>
								<tr>
									<td style="width: 50%;"><strong>Super Administrator</strong></td>
									<td class="text-right">29/07/2015</td>
								</tr>
								<tr>
									<td colspan="2">
										<p>Best this product opencart</p>
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="text-right"></div>
					</div>
					<h2 id="review-title">Write a review</h2>
					<div class="contacts-form">
						<div class="form-group"> <span class="icon icon-user"></span>
							<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
						</div>
						<div class="form-group"> <span class="icon icon-bubbles-2"></span>
							<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
						</div> 
						<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>
						
						<div class="form-group">
						 <b>Rating</b> <span>Bad</span>&nbsp;
						<input type="radio" name="rating" value="1"> &nbsp;
						<input type="radio" name="rating"
						value="2"> &nbsp;
						<input type="radio" name="rating"
						value="3"> &nbsp;
						<input type="radio" name="rating"
						value="4"> &nbsp;
						<input type="radio" name="rating"
						value="5"> &nbsp;<span>Good</span>
						
						</div>
						<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
					</div>
				</form>
			</div>
			<div id="tab-4" class="tab-pane fade">
				<a href="#">Monitor</a>,
				<a href="#">Apple</a>				
			</div>
			<div id="tab-5" class="tab-pane fade">
				<p>Lorem ipsum dolor sit amet, consetetur
					sadipscing elitr, sed diam nonumy eirmod
					tempor invidunt ut labore et dolore
					magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo
					dolores et ea rebum. Stet clita kasd
					gubergren, no sea takimata sanctus est
					Lorem ipsum dolor sit amet. Lorem ipsum
					dolor sit amet, consetetur sadipscing
					elitr, sed diam nonumy eirmod tempor
					invidunt ut labore et dolore magna aliquyam
					erat, sed diam voluptua. </p>
				<p>At vero eos et accusam et justo duo dolores
					et ea rebum. Stet clita kasd gubergren,
					no sea takimata sanctus est Lorem ipsum
					dolor sit amet. Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr.</p>
				<p>Sed diam nonumy eirmod tempor invidunt
					ut labore et dolore magna aliquyam erat,
					sed diam voluptua. At vero eos et accusam
					et justo duo dolores et ea rebum. Stet
					clita kasd gubergren, no sea takimata
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
	</div>
</div>
				<!-- //Product Tabs -->
				
				<!-- Related Products -->
	
</div>
</div>

	<!-- <div class="row" data-ng-init="rtproduct()">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    New Arrival Products</h3>
            </div>
            <div class="col-md-3">
                
                
            </div>
        </div>
       <div class="slider autoplay">
	 <div ng-repeat="pd in rtp">
		<div class="product-layout col-md-4 col-sm-6 col-xs-12" >
			<div class="product-item-container" >
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="upload/productImage/{{pd.image}}"  title="Apple Cinema 30&quot;" class="img-responsive" />
					</div>
					
					<span class="label label-sale">Sale</span>
					
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#!quickview/{{pd.id}}">  Quickview</a>
					
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">{{pd.name}}</a></h4>		
						<div class="ratings">
							<div class="rating-box">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
							</div>
						</div>
											
						<div class="price">
							<span class="price-new">${{pd.sprice}}</span> 
							<span class="price-old">${{pd.mrp}}</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>{{pd.description}}</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div>

			</div>
		</div>
		</div> 
		</div>
		</div> -->



<div class="row" data-ng-init="rel_p()">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Related Products</h3>
            </div>
        </div>
        <div class="slider">
        <div class="products-list row grid" >
       
<div class="product-layout col-md-2 col-sm-3 col-xs-6" style="overflow:hidden; float: left;" ng-repeat="pd in rproduct">
		<div class="product-item-container" style="margin: 2%;" >
			<div class="left-block">
				<div class="product-image-container second_img " >
				
					<img src="upload/productImage/{{pd.xitemcode}}.jpg" alt="{{pd.xdesc}}" height="100%" class="img-responsive" />
					
				</div>
				<span class="label label-sale">Sale</span>
				<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#!quickview/{{pd.xitemid}}">  Quickview</a>
			</div>
			
			
			<div class="right-block">
				<div class="caption">
					<h4><a href="#!quickview/{{pd.xitemid}}">{{pd.xdesc}}</a></h4>		
					<div class="ratings">
						<div class="rating-box">
							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					</div>
										
					<div class="price">
						<span class="price-new">৳ {{pd.xmrp}}</span> 
						<!-- <span class="price-old">$ {{pd.mrp}}</span>	 -->	 
						<!-- <span class="label label-percent">-10%</span>  -->   
					</div>
					<div class="description item-desc hidden">
						<p> {{pd.description}}</p>
					</div>
				</div>
				
				  <div class="button-group">
					<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" ng-click="add(pd.id,1,pd.name,pd.image,pd.sprice)" onclick="openNav()"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
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
</div>
</div>
</div>

<script type="text/javascript">


	$('.autoplay').slick({
  arrows: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
<div ng-include="'View/template/footer.php'"></div> 



