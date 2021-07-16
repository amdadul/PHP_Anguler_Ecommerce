 




<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div  ng-init="ctgproduct()">
			<div  ng-init="allctgproduct()">



	
			<div class="main-container container">	
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order History</a></li>
		</ul>
		<div class="row">
			<div class="col-sm-7">
										
										<input type="text" class="form-control col-sm-5" id="order-id" ng-model="odnumber" name="order-id" placeholder="Order ID (Found your order confirmation email)">
									</div>
									<div class="col-sm-3">
										<button class="btn btn-primary" ng-click="searchOrder()">Track</button>
									</div>
		</div>
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				
				<h2 class="title">Order History</h2>
				<div class="table-responsive" >
					<table class="table table-bordered table-hover" ng-if="od != undefine">
						<thead>
							<tr>
								<td class="text-center">Order ID</td>
								<td class="text-center">User Name</td>
								<td class="text-center">Delivery Address</td>
								<td class="text-center">Phone Number</td>
								<td class="text-center">Status</td>
								<td class="text-center">Date Added</td>
								<td class="text-right">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left"><a href="#!orderdetails/{{od.id}}">{{od.onumber}}</a>
								</td>
								<td class="text-center">{{od.user}}</td>
								<td class="text-center">{{od.daddress}}</td>
								<td class="text-center">{{od.pnumber}}</td>
								<td class="text-center">{{od.ostatus}}</td>
								<td class="text-center">{{od.date}}</td>
								<td class="text-right">{{od.total}}</td>
								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="#!orderdetails/{{od.id}}" data-original-title="View"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
					<div ng-if="od == undefine" align="center"> <h2>No Data to View </h2><span>Enter Order id then Click to Track<br>Thanks for Being with us</span></div>
				</div>

			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
<div class="list-group">
	<?php 
include_once('../../Model/productImage.php');
include_once('../../Model/productlike.php');
include_once('../../Model/productdislike.php');
include_once('../../Model/productreview.php');
include_once('../../Model/productrating.php');
include_once('../../Model/product.php');
$p = new product();



$new = $p->Select();
?>
	
				<div class="module menu-category titleLine">
	<h3 class="modtitle">Categories</h3>
	<div class="modcontent">
		<div class="box-category">
			<?php LoadMenu();?> 

				<?php

function LoadMenu($chld = 0)
{
	$a = [];
	include_once("../../Model/category.php");
	$ctg = new category();
		
	if($chld==0)
	{        
		$a = $ctg->SelectParent();		
	}
	else
	{
		$a= $ctg->SelectChild($chld);
	}
	if(count($a)>0)
	{
		print '<ul id="cat_accordion" class="list-group">';
		
		foreach($a as $v)
			{
				
				print '<li class="hadchild"><a href="#!shop/'.$v['id'].'" class="cutom-parent">'.$v['name'].'</a><span class="button-view  fa fa-plus-square-o"></span>';
				
				LoadMenu($v['id']);
				print '</li>';
			}
			
		print '</ul>';
	}
}

?>
				
		</div>
		
		
	</div>

<div class="module latest-product titleLine">
				
				<div class="modcontent ">
				
				
					<fieldset>
						<legend>Price</legend>
						<div class="range">
							Range :
							<span class="min_val">$188.73</span> - 
							<span class="max_val">$335.15</span>
							<input type="hidden" name="" class="min_value" value="188.73">
							<input type="hidden" name="" class="max_value" value="335.15">
						</div>
						<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
							<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
							<span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
							<span class="ui-slider-handle ui-state-highlight ui-corner-all" ></span>
						</div>
					</fieldset>
				

			</div>

</div>



				<div class="module latest-product titleLine">
   <h3 class="modtitle">Latest Product</h3>
   <div class="modcontent ">
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="View/image/demo/shop/product/m1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Sunt Molup</a></h4>
					
					 <div class="price">
						<span class="price-new">$100.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				  
			   </div>
			</div>
		</div>
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="View/image/demo/shop/product/m2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Et Spare</a></h4>
					
					 <div class="price">
						<span class="price-new">$99.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				  
			   </div>
			</div>
		</div>
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="View/image/demo/shop/product/18.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Cisi Chicken</a></h4>
					
					 <div class="price">
						<span class="price-new">$59.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				  
			   </div>
			</div>
		</div>
		<div class="product-latest-item transition">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="View/image/demo/shop/product/9.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height:82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Kevin Labor</a></h4>
					 <div class="price">
						<span class="price-new">$245.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				 
			   </div>
			</div>
		 </div>
		
		
   </div>
   
</div>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<div ng-include="'View/template/footer.php'"></div>

