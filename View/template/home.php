	<style type="text/css">
	.slick-next{
		background-color: red !important;
	}
	.slick-prev{
		background-color: red !important;
	}
	.input {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.col-centered {
    float: none;
    margin: 0 auto;
}

.carousel-control { 
    width: 8%;
    width: 0px;
}
.carousel-control.left,
.carousel-control.right { 
    margin-right: 40px;
    margin-left: 32px; 
    background-image: none;
    opacity: 1;
}
.carousel-control > a > span {
    color: white;
      font-size: 29px !important;
}

.carousel-col { 
    position: relative; 
    min-height: 1px; 
    padding: 5px; 
    float: left;
 }

 .active > div { display:none; }
 .active > div:first-child { display:block; }

/*xs*/
@media (max-width: 767px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
    .carousel-inner .next        { left:  50%; }
    .carousel-inner .prev            { left: -50%; }
  .carousel-col                { width: 50%; }
    .active > div:first-child + div { display:block; }
}

/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
    .carousel-inner .next        { left:  50%; }
    .carousel-inner .prev            { left: -50%; }
  .carousel-col                { width: 50%; }
    .active > div:first-child + div { display:block; }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
  .carousel-inner .active.left { left: -33%; }
  .carousel-inner .active.right { left: 33%; }
    .carousel-inner .next        { left:  33%; }
    .carousel-inner .prev            { left: -33%; }
  .carousel-col                { width: 33%; }
    .active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
}

/*lg*/
@media (min-width: 1200px) {
  .carousel-inner .active.left { left: -25%; }
  .carousel-inner .active.right{ left:  25%; }
    .carousel-inner .next        { left:  25%; }
    .carousel-inner .prev            { left: -25%; }
  .carousel-col                { width: 25%; }
    .active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
    .active > div:first-child + div + div + div { display:block; }
}

.block {
    width: 306px;
    height: 230px;
}
.sold_out {
    top: 2em;
    left: -4em;
    color: #fff;
    margin-left:15%; 
    margin-top:-80%;
    width: 80%;
    display: block;
    position:absolute;
    text-align: left;
    text-decoration: none;
    letter-spacing: .06em;
    background-color: rgb(107, 110, 114);
   padding: 4px;
    text-shadow: 0 0 0.75em #444;
    box-shadow: 0 0 0.5em rgb(107, 110, 114);
    font: bold 16px/1.2em Arial, Sans-Serif;
    -webkit-text-shadow: 0 0 0.75em #444;
    -webkit-box-shadow: 0 0 0.5em rgb(107, 110, 114);
    z-index:10;
}
.sold_out:before {
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    
    border: 2px rgb(72, 163, 19) dashed;
}

.action{
  display:block;
  margin:100px auto;
  width:100%;
  text-align:center;
}

	</style>


	<style type="text/css">
		.slider {
   
    width: 100%;
    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}
	</style>
	<div ng-include="'View/template/head.php'"></div>
	<div  ng-init="new_p()">

<?php 
include_once('../../Model/productImage.php');
include_once('../../Model/productlike.php');
include_once('../../Model/productdislike.php');
include_once('../../Model/productreview.php');
include_once('../../Model/productrating.php');
include_once('../../Model/product.php');

?>
<div  style="margin-left: 5%; margin-right: 5%; margin-bottom: 20px; max-height:500px; min-height:200px;">
	<div class="fling-minislide">
                 <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/pakage.jpg' />
                 
                <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/western-banner.jpg' />
                  
                <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/uniliver.jpg' />
                  
                 <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/Ifad-Banner.jpg' />
                  
                <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/Best-Electronics-Banner.jpg' />
                  
                <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/VISION-banner.jpg' />
                  
                 <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/Banner-Meghna-Group.jpg' />
                  
                <img style="max-height:500px; min-height:200px;" class="fullwidth" src='upload/banner/millennium-tea.jpg' />
	</div>         
</div>




<!--<div class="row" style="margin-left: 5%; margin-right: 5%;"  >

					
					<div class="titleLine">
						<h3 class="modtitle">New Arrivals</h3>
					</div>
						<div class="autoplay">
							<div ng-repeat="pd in nproduct" style=" margin-right: 5px;">
							<div class="products-list grid"  style="float: left; width: 100%;">
									<div class="product-layout">
										<div class="product-item-container">
											<div class="left-block">
												<div class="product-image-container second_img ">
													<img src="upload/productImage/{{pd.xitemcode}}.jpg"  class="img-responsive" />
													
												</div>
												
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
														<span class="price-new">৳{{pd.xmrp}}</span> 
																 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" ng-click="add(pd.xitemid,1,pd.xdesc,pd.xitemcode+'.jpg',pd.xmrp,pd.xstdprice,pd.xitemcode)" onclick="openNav()"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
												  </div>
											</div>
										</div>
									</div>

</div>
</div>
</div>
</div> -->
    


<!-- <div class="row" style="margin-left: 5%; margin-right: 5%;" >
        
<?php

    //include_once('http://37.34.252.0/api/new_item.php');
//$rows = file_get_contents('http://37.34.252.0/api/new_item.php', true);
   // $rows = $a;

    ?>
        <div class="module titleLine module--5x col-md-12">
							<h3 class="modtitle">New Arrival Products</h3>
       <div class="slider autoplay">
                        <?php
/*foreach($rows as $new)
	{
		print'<div class="products-list grid" style="overflow:hidden; margin:3px; height:420px;">
				<div class="product-layout" >
				<div class="product-item-container" style="overflow:hidden; height:400px;">
				<div class="left-block">
				<div class="product-image-container second_img ">';
                 print'<img src="upload/productImage/'.$new["xitemcode"].'.jpg" class="img-responsive" width="100%" height="100%"/>
                                </div>
																				
	<!--full quick view block-->
		<a class="quickview iframe-link visible-lg" href="#!quickview/'.$new["xitemid"].'/"  >Quickview</a>
			<!--end full quick view block-->
			</div>
				<div class="right-block">
					<div class="caption">
					<h4><a href="#!quickview/'.$new["xitemid"].'/">'.$new["xdesc"].'.</a><br> Code :'.$new["xitemcode"].'</h4>';
 
                              
 print'
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
					<span class="price-new">৳ '.$new["xmrp"].'</span>
																							
				</div>
																					
 ';*/
 
 /*add('.$new['xitemid'].',1,'.$new['xdesc'].','.$new['xitemcode'].'.jpg,'.$new['xmrp'].','.$new['xstdprice'].','.$new['xitemcode'].','.$new['xsource'].','.$new['xdp'].')*/

 /*print'</div>
		<div class="button-group" >
<button class="addToCart" type="button" ng-click="add('.$new['xitemid'].',1,\''.$new['xdesc'].'\',\''.$new['xitemcode'].'.jpg\','.$new['xmrp'].','.$new['xstdprice'].',\''.$new['xitemcode'].'\',\''.$new['xsource'].'\','.$new['xdp'].')" onclick="openNav()"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
		</div>
		</div><!-- right block -->
	</div>
	</div>	
</div>';
                       
 
	}

	print''; */

?> 
                    </div>
            </div>
	 </div>



</div>  -->
		<div class="row" style="margin-left: 5%; margin-right: 5%;" >

						<div class="col-md-6 col-sm-6 col-xs-12">
							<a href="#"><img src="View/image/demo/cms/home6/image-1.png" alt="banner1" style="width: 100%"></a>
						</div>


				
						<div class="col-md-6 col-sm-6 col-xs-12">
							<a href="#"><img src="View/image/combo-banner.png" alt="banner1" style="width: 100%"></a>
						</div>
	</div>

<div class="row" style="margin-left: 5%; margin-right: 5%;">
<div class="module titleLine module--5x col-md-12" >
							<h3 class="modtitle">OUR COLLECTIONS: BY PRODUCT CATEGORY</h3>
							
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/Furniture_02.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Furniture </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/Crockeries.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Coockeries </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/Fashion_color.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Fashion </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/Food_dolor.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Food </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/Health_color.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Health </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/TV_color.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Electronics </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/toileries.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Toiletries </div></a> </div> 
									</div>
									<div class="list-collections--item collection_0 col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="list-collections--box" style="position: relative; text-align: center; color: white;"><a href="#" style="color: white;"><img class="img thumbnail" src="upload/category/cleaning.png" /><div style="position: absolute; top: 80%; left: 50%; font-size: 30px; transform: translate(-50%, -50%);"> Cleaning </div></a> </div> 
									</div>
								
						</div>
</div>



<div class="row" style="margin-left: 5%; margin-right: 5%;">
	<div class="module titleLine module--5x col-md-12" >
							<h3 class="modtitle">OUR COLLECTIONS: BY BRAND/COMPANY</h3>
<div class="module ">
						<div class="modcontent clearfix col-md-12">
							<div class="yt-content-slider slider-brand--home6">
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Uniliver" href="#!brand/ULB"><img src="upload/logo/Uniliver.png" alt="Uniliver"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="General" href="#!brand/GEN"><img src="upload/logo/General.png" alt="General"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="ACI" href="#!brand/ACI"><img src="upload/logo/aci.png" alt="ACI"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="SONY" href="#!brand/SON"><img src="upload/logo/sony.png" alt="SONY"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Panasonic" href="#!brand/PAN"><img src="upload/logo/Panasonic.png" alt="Panasonic"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Nestle" href="#!brand/NSTL"><img src="upload/logo/Nestle.png" alt="Nestle"></a>
								</div>
								

								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Esquare" href="#!brand/"><img src="upload/logo/esquare.jpg" alt="Esquare"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Square" href="#!brand/STL"><img src="upload/logo/square.png" alt="Square"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Ifad" href="#!brand/IMF"><img src="upload/logo/Ifad.png" alt="Ifad"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Vision" href="#!brand/VSN"><img src="upload/logo/vision.jpg" alt="Vision"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Pran RFL" href="#!brand/PRN"><img src="upload/logo/pran_rfl.png" alt="Pran RFL"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Western" href="#!brand/WI"><img src="upload/logo/Western.png" alt="Western"></a>
								</div>
								


								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Best Electronics" href="#!brand/BEL"><img src="upload/logo/best-electronics.jpg" alt="Best Electronics"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Fresh" href="#!brand/MGI"><img src="upload/logo/fresh.jpg" alt="Fresh"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Nexus" href="#!brand/"><img src="upload/logo/NTH.jpg" alt="Nexus"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="City Group" href="#!brand/"><img src="upload/logo/city-group.jpg" alt="City Group"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Kent" href="#!brand/KNT"><img src="upload/logo/Kent.png" alt="Kent"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Abul khair Group" href="#!brand/MOE"><img src="upload/logo/Abul-khair-Group.png" alt="Abul khair Group"></a>
								</div>


								<div class="yt-content-slide col-md-2  col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Milennium Tea" href="#!brand/MTT"><img src="upload/logo/Milennium.png" alt="Milennium Tea"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Anco Laboratories" href="#!brand/"><img src="upload/logo/ALL-Logo.jpg" alt="Anco Laboratories"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Science Med" href="#!brand/"><img src="upload/logo/science-med.png" alt="Science Med"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Goldmark" href="#!brand/Goldmark"><img src="upload/logo/Goldmark-lo.png" alt="Goldmark"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Reckitt Benckiser" href="#!brand/RB"><img src="upload/logo/rekit.png" alt="Reckitt Benckiser"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Newzealand Dairy" href="#!brand/NZD"><img src="upload/logo/Newzealand-Dairy.jpg" alt="Newzealand Dairy"></a>
								</div>

								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Kolpolok Holidays" href="#!brand/"><img src="upload/logo/kh_logo.png" alt="Kolpolok Holidays"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Unique Consortium" href="#!brand/"><img src="upload/logo/UC.jpg" alt="Unique Consortium"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Dream Touch ICT" href="#!brand/DTI"><img src="upload/logo/Dream-Touch-Logo.jpg" alt="Dream Touch ICT"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Olympic" href="#!brand/"><img src="upload/logo/Olympic.jpg" alt="Olympic"></a>
								</div>
								<div class="yt-content-slide col-md-2  col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="Sajeeb Group" href="#!brand/"><img src="upload/logo/sajeeb-group-1.png" alt="Sajeeb Group"></a>
								</div>
								<div class="yt-content-slide col-md-2 col-lg-2 col-sm-4 col-xs-6" style="margin-bottom: 10px;">
									<a title="DEGITAL PUBLICATIONS" href="#!brand/DPL"><img src="upload/logo/DEGITAL-PUBLICATIONS.png" alt="DEGITAL PUBLICATIONS"></a>
								</div>
							</div>
							
							
						</div>
					</div> 
				</div>

</div>

		<div class="row" style="margin-left: 5%; margin-right: 5%;" ng-if="auth.rin != undefined">

			<div class="module titleLine module--5x col-md-12" >
							<h3 class="modtitle">OUR COLLECTIONS: BY BUSINESS VOLUME</h3>
			<div id="content-top" class="clearfix" >
				
					<div class="module customhtml ">
						<div class="modcontent clearfix">
							<div class="services-v1">
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 5px;">
									<div class="policy-inner"><span class="ico-policy"></span>
										<a href="#!bv/25"><h2>0.01 - 25 BV PRODUCTS</h2></a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 5px;">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#!bv/50"><h2>26 - 50 BV PRODUCTS</h2></a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 5px;">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#!bv/100"><h2>51 - 100 BV PRODUCTS</h2></a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#!bv/300"><h2>101 - 300 BV PRODUCTS</h2> </a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span>
										<a href="#!bv/500"><h2>301 - 500 BV PRODUCTS</h2></a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#!bv/700"><h2>501 - 700 BV PRODUCTS</h2></a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#!bv/1000"><h2>701 - 1000 BV PRODUCTS</h2></a>
									</div>
								</div>
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#!bv/4000"><h2>1001 - Above BV PRODUCTS</h2> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
						
			</div>
			</div>
					
					
					 
					
					
				</div> 
			
		


				<div class="row" style="margin-left: 5%; margin-right: 5%;">

			<div class="module titleLine module--5x col-md-12" >
<!--							<h3 class="modtitle">ADVERTISEMENTS</h3>-->
				<!--	<div class="col-md-8"><img src="upload/logo/p_adv.jpg"  style="width: 100%;"></div>-->

				<!--	<div class="col-md-4">
						<div style="margin-bottom: 10px;">
						<img src="upload/logo/rabindranath-thakur-esho-he-boishakh-41.jpg" >
						</div>
						<img src="upload/logo/mourning.jpg" >
					</div>-->
			</div>
				</div>








    





		
						
						
						<!-- <div class="module titleLine module--4x">
							<h3 class="modtitle">Hot Sale</h3>
							<div class="modcontent clearfix">
								<div class="so-basic-products products-list product-style__thumb1 grid row">
									
									<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
										<div class="product-item-container">
											<div class="left-block">
												<a href="#" class="product-image-container" title="Basem rame facmer chuma">
													<img src="View/image/demo/shop/product/resize/1_3_30.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												</a>
												
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="product.html">Qurem mazem numa dikam</a></h4>		
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
														<span class="price-new">$50.00</span> 
														<span class="price-old">$62.00</span>	
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
													<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
													<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
												  </div>
											</div>
										</div>
									</div>
									
									
									
									<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
										<div class="product-item-container">
											<div class="left-block">
												<a href="#" class="product-image-container" title="Basem rame facmer chuma">
													<img src="View/image/demo/shop/product/resize/4_3_29.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												</a>
												
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="product.html">Basem rima mase micam</a></h4>		
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
														</div>
													</div>
																		
													<div class="price">
														<span class="price-new">$56.00</span> 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
													<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
													<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
												  </div>
											</div>
										</div>
									</div>
									
									
								
									<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
										<div class="product-item-container">
											<div class="left-block">
												<a href="#" class="product-image-container" title="Basem rame facmer chuma">
													<img src="View/image/demo/shop/product/resize/4_3_52.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												</a>
												
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="product.html">Bazee Damase Duma Truma</a></h4>		
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														</div>
													</div>
																		
													<div class="price">
														<span class="price-new">$64.00</span> 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
													<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
													<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
												  </div>
											</div>
										</div>
									</div>
									
									<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
										<div class="product-item-container">
											<div class="left-block">
												<a href="#" class="product-image-container" title="Basem rame facmer chuma">
													<img src="View/image/demo/shop/product/resize/6_2_3.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												</a>
												
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="product.html">Bazem Dimae Duma Polam</a></h4>		
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
														<span class="price-new">$80.00</span> 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
													<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
													<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
												  </div>
											</div>
										</div>
									</div>
									
									<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
										<div class="product-item-container">
											<div class="left-block">
												<a href="#" class="product-image-container" title="Basem rame facmer chuma">
													<img src="View/image/demo/shop/product/resize/7_2.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												</a>
												
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="product.html">Basem rima mase micam</a></h4>		
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
														<span class="price-new">$54.00</span> 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
													<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
													<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
												  </div>
											</div>
										</div>
									</div>
									
									<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
										<div class="product-item-container">
											<div class="left-block">
												<a href="#" class="product-image-container" title="Basem rame facmer chuma">
													<img src="View/image/demo/shop/product/resize/7_3.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												</a>
												
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="product.html">Basem rima mase micam</a></h4>		
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
														<span class="price-new">$56.00</span> 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart" type="button" ng-click="clear()"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
													<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
													<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
												  </div>
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
						-->
						
					</div>
					
			</div>
		</div>
	</section>
	<!-- //Block Spotlight2  -->

<div class="container">
	<div class="row">
	<div class="alert alert-dismissible" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa "></i> News</strong> <marquee><p style="font-family: Impact; font-size: 16pt">Now Pay With Bkash. Make Your Purchase More Easy.</p></marquee>
</div>
	</div>
</div>

	 <!-- <script type="text/javascript" src="http://htmldemo.magikthemes.com/ecommerce/accent-html-template/black/js/jquery.min.js"></script> -->
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
 <script type='text/javascript'>
        $('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
        </script>   
	
<script type="text/javascript">
	var $typeheader = 'header-home6';



	$('.autoplay').slick({ 
  arrows: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
      {
      breakpoint: 3840,
      settings: {
        slidesToShow: 10,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 2560,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
      }
    },
      {
      breakpoint: 1600,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 1920,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
      }
    },
      {
      breakpoint: 1280,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>




<div ng-include="'View/template/footer.php'"></div>