
<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div  ng-init="search()">
		<div ng-init="search_p()"></div>
		<div ng-init="cat()">
			



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
	
		<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#!home"><i class="fa fa-home"></i></a></li>
			<li><a href="#!search">Search</a></li>
		</ul>
		
		<div class="row">
			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3" id="column-left">
				<div class="module menu-category titleLine">
	<h3 class="modtitle">Categories</h3>
	<div class="modcontent">
		<div class="box-category">
			<ul id="cat_accordion" class="list-group" ng-repeat="cat in xcat">
		
		<li class="hadchild"><a href="#!shop/{{cat}}" class="cutom-parent">{{cat}}</a><span class="button-view  fa fa-circle"></span>
				</li>
			</ul>
				<!-- <li class="hadchild"><a href="category.html" class="cutom-parent" >Smartphone & Tablets</a>   <span class="button-view  fa fa-plus-square-o"></span>
					<ul style="display: block;">
						<li><a href="category.html">Men's Watches</a></li>
						<li><a href="category.html">Women's Watches</a></li>
						<li><a href="category.html">Kids' Watches</a></li>
						<li><a href="category.html">Accessories</a></li>
					</ul>
				</li>
				<li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a>   <span class="button-view  fa fa-plus-square-o"></span>
					<ul style="display: none;">
						<li><a href="category.html">Cycling</a></li>
						<li><a href="category.html">Running</a></li>
						<li><a href="category.html">Swimming</a></li>
						<li><a href="category.html">Football</a></li>
						<li><a href="category.html">Golf</a></li>
						<li><a href="category.html">Windsurfing</a></li>
					</ul>
				</li>
				<li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a>   <span class="button-view  fa fa-plus-square-o"></span>
					<ul style="display: none;">
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
					</ul>
				</li>
				<li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a>  <span class="button-view  fa fa-plus-square-o"></span>
					<ul style="display: none;">
						<li><a href="category.html">Men's Watches</a></li>
						<li><a href="category.html">Women's Watches</a></li>
						<li><a href="category.html">Kids' Watches</a></li>
						<li><a href="category.html">Accessories</a></li>
					</ul>
				</li>
				<li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a>    <span class="button-view  fa fa-plus-square-o"></span>
					<ul style="display: none;">
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
						<li><a href="category.html">Sub Categories</a></li>
					</ul>
				</li>
				<li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a>  <span class="dcjq-icon"></span></li>
				<li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a>    <span class="dcjq-icon"></span></li>
				<li class=""><a href="category.html" class="cutom-parent">Sports</a>  <span class="dcjq-icon"></span></li>
				<li class=""><a href="category.html" class="cutom-parent">Home &amp; Garden</a><span class="dcjq-icon"></span></li>
				<li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a>  <span class="dcjq-icon"></span></li>
			</ul> -->
		</div>
		
		
	</div>

<div class="module latest-product titleLine">
				
				<div class="modcontent ">
				
				
					<fieldset>
						<legend>Price</legend>
						<div class="range">
							Range :
							<span class="min_val">৳ 188.73</span> - 
							<span class="max_val">৳ 335.15</span>
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



				
			</aside>
			<!--Left Part End -->
			
			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="products-category">
					<!-- Filters -->
					<div class="product-filter filters-panel">
						<div class="row">
							<div class="col-md-2 visible-lg">
								<div class="view-mode">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
							</div>
							<div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
								<div class="form-group short-by">
									<label class="control-label" for="input-sort">Sort By:</label>
									<select id="input-sort" class="form-control"
									onchange="location = this.value;">
										<option value="" selected="selected">Default</option>
										<option value="">Name (A - Z)</option>
										<option value="">Name (Z - A)</option>
										<option value="">Price (Low &gt; High)</option>
										<option value="">Price (High &gt; Low)</option>
										<option value="">Rating (Highest)</option>
										<option value="">Rating (Lowest)</option>
										<option value="">Model (A - Z)</option>
										<option value="">Model (Z - A)</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control" ng-model="limit" ng-change="pps()">
										<option value="9" selected="selected">9</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="75">75</option>
										<option value="100">100</option>
									</select>
								</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination" ng-if="lid <= 6">
									<li ng-repeat="n in tlp" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(n)" > <span>{{n+1}}</span></a>
									</li>
									<li ng-repeat-end" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(lid-1)" > <span>>>|</span></a>
									</li>
								</ul>
								<ul class="pagination" ng-if="lid >= 7">
									<li ng-repeat="n in tlp" ng-if="n < 3" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(n)" > <span>{{n+1}}</span></a>
									</li>
									<li>
										<a> <span> ....... </span></a>
										
									</li>
									<li ng-repeat="n in tlp" ng-if="n == active && n >= 3 && n!=(lid-1)" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(n)"> <span>{{n+1}}</span></a>
										
									</li>
									<li class="{{(lid-1) == active ? 'active':''}}">
										<a ng-click="pgs(lid-1)"> <span>{{lid}}</span></a>
									</li>
									<li >
										<a ng-click="pgs(n=n+1)" > <span>>|</span></a>
									</li>
									
								</ul>
						</div>
					</div>
					<!-- //end Filters -->
					<!--changed listings-->
					<div class="products-list row grid" >
						

    





	<div class="product-layout col-md-4 col-sm-6 col-xs-12 " ng-repeat="pd in sproduct">
		<div class="product-item-container" style="height: 450px;">
			<div class="left-block">
				<div class="product-image-container second_img " >
				
					<img src="upload/productImage/{{pd.xitemcode}}.jpg" alt="{{pd.xdesc}}" height="100%" class="img-responsive" />
					
				</div>
				<span class="label label-sale">Sale</span>
				<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#!quickview/{{pd.xitemid}}">  Quickview</a>
			</div>
			
			
			<div class="right-block">
				<div class="caption">
					<h4><a href="#!quickview/{{pd.xitemid}}">{{pd.name}}</a><br>Code : {{pd.xitemcode}}<br>Item Source : {{pd.xsource=='OSP'?'Retail':pd.xsource}}</h4>		
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
						<!-- <span class="price-old">$ {{pd.sprice}}</span>  -->
						<span class="price-new">৳ {{pd.xmrp}}</span>		 
						<!-- <span class="label label-percent">-10%</span>  -->   
					</div>
					<div class="description item-desc hidden">
						<p> {{pd.description}}</p>
					</div>
				</div>
				
				  <div class="button-group">
					<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" ng-click="add(pd.xitemid,1,pd.xdesc,pd.xitemcode+'.jpg',pd.xmrp,pd.xstdprice,pd.xitemcode,pd.xsource,pd.xdp)" onclick="openNav()"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
					<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add(\'42\');"><i class="fa fa-heart"></i></button>
					<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add(\'42\');"><i class="fa fa-exchange"></i></button>
				  </div>
			</div><!-- right block -->

		</div>
	</div><div class="clearfix visible-xs-block"></div>
	
	
	

		</div>
						<!--// End Changed listings-->
					<!-- Filters -->
					<div class="product-filter product-filter-bottom filters-panel" >
						<div class="row">
							<div class="col-md-2 hidden-sm hidden-xs">
							</div>
						   <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
								<div class="form-group" style="margin: 7px 10px">Showing {{startfrom}} to {{(startfrom-0)+(parpage-0)}} of {{np}} ({{totalPage}} Pages )</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination" ng-if="lid <= 6">
									<li ng-repeat="n in tlp" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(n)" > <span>{{n+1}}</span></a>
									</li>
									<li ng-repeat-end" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(lid-1)" > <span>>>|</span></a>
									</li>
								</ul>
								<ul class="pagination" ng-if="lid >= 7">
									<li ng-repeat="n in tlp" ng-if="n < 3" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(n)" > <span>{{n+1}}</span></a>
									</li>
									<li>
										<a> <span> ....... </span></a>
										
									</li>
									<li ng-repeat="n in tlp" ng-if="n == active && n >= 3 && n!=(lid-1)" class="{{n == active ? 'active':''}}">
										<a ng-click="pgs(n)"> <span>{{n+1}}</span></a>
										
									</li>
									<li class="{{(lid-1) == active ? 'active':''}}">
										<a ng-click="pgs(lid-1)"> <span>{{lid}}</span></a>
									</li>
									<li >
										<a ng-click="pgs(n=n+1)" > <span>>|</span></a>
									</li>
									
								</ul>
						</div>
									
						 </div>
					</div>
					<!-- //end Filters -->
					
				</div>
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<?php

function findImage($id)
{
	$pi = new productImage();
	$pi->productId = $id;
	$a =$pi->Select();
	if(count($a) > 0)
	{
		if(file_exists('../../upload/productImage/'.$a[0]["image"]))
		{			
			print '<img src="upload/productImage/'.$a[0]["image"].'" class="img-responsive" width="100%" height="100%" title="'.count($a).' More Images"/>';
		}
		
		else
		{
			print '<img src="View/template/image/noimage.jpg" alt="No Image" title="No Image"/>';
		}
		
	}
	else
	{
		
		print '<img src="View/template/image/noimage.jpg" alt="No Image" title="No Image"/>';
		
	}
}

function findImage2($id)
{
	$pi = new productImage();
	$pi->productId = $id;
	$a =$pi->Select();
	if(count($a) > 0)
	{
		if(file_exists('../../upload/productImage/'.$a[0]["image"]))
		{			
			return $a[0]['image'];
		}
		
		else
		{
			return 'noimage.jpg';
		}
		
	}
	else
	{
		
		return 'noimage.jpg';
		
	}
}

function likeComments($id)
{
	$pl = new productlike();	
	$pr = new productreview();
	
	$pl->productId = $id;	
	$pr->productId = $id;
	
	
	$al =$pl->Select();	
	$ar =$pr->Select();
	$url ="?c=home";
	
	if(isset($_GET['ctg']))
		$url .="&ctg=".$_GET['ctg'];
		
	if($_SESSION['type']=="" || Is_Dislike($id))
	{
		print '<a href="#" title="'.View_Like($id).'" >'.count($al).'</a>  ';
		print '<a href="'.$url."&pid=".$id.'" class="glyphicon glyphicon-thumbs-up"></a>';
	}
	else
	{
		if(Is_like($id))
		{
			print '<a href="#" title="'.View_Like($id).'" >'.count($al).'</a>  ';
			print '<button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-up"></span>
        </button>';
		}
		else
		{
			print '<a href="#" title="'.View_Like($id).'" >'.count($al).'</a> ';
			print '<a href="'.$url."&pid=".$id.'" class="glyphicon glyphicon-thumbs-up"></a>';
		}
	}
	
	
	//dislike($id);
	//rating($id);
	print ' <a href="?c=product_profile&pid='.$id.'" class="glyphicon glyphicon-comment pull-right"> '.count($ar).' </a>  ';
}

function Comments($id)
{
	$pr = new productreview();
	$pr->productId = $id;
	$ar =$pr->Select();
	return count($ar);
}


function dislike($id)
{
	
	$pdl = new productdislike();
		
	$pdl->productId = $id;
		
	$adl =$pdl->Select();
	
	$url ="?c=home";
	
	if(isset($_GET['ctg']))
		$url .="&ctg=".$_GET['ctg'];
		
	if($_SESSION['type']=="" || Is_like($id))
	{
		print 'DisLike';
	}
	else
	{
		if(Is_DisLike($id))
		{
			print 'DisLiked';
		}
		else
		{
			print '<a href="'.$url."&pdid=".$id.'">DisLike</a>';
		}
	}
	print ' : <a href="#" title="'.View_DisLike($id).'" >'.count($adl).'</a>  ';
	
	
}

function rating($id)
{
	
	$prt = new productrating();
		
	$prt->productId = $id;
		
	$art =$prt->Select();
	
	$url ="?c=home";
	
	if(isset($_GET['ctg']))
		$url .="&ctg=".$_GET['ctg'];
		
	if($_SESSION['type']=="" || Is_Rating($id))
	{
		print 'Rating';
	}
	else
	{		
			print '<a href="?c=product_profile&pid='.$id.'">Rate</a>';
		
	}
	
	print ' : <a href="#" >'. View_Rating($id).'</a> | ';
	
	
}


function Is_Like($id)
{
	$pl = new productlike();
	$pl->productId = $id;
	
	$s=$pl->Select();
	foreach($s as $l)
	if($l['userId']==$_SESSION['id'])
		return true;
		
	return false;
	
}

function View_Like($id)
{
	$pl = new productlike();
	$pl->productId = $id;
	$lu = "";
	$s=$pl->Select();
	foreach($s as $l)
	{
		$lu .= $l['user']."\n";
	}
	return $lu;
}

function Is_DisLike($id)
{
	$pdl = new productdislike();
	$pdl->productId = $id;
	
	$d=$pdl->Select();
	foreach($d as $dl)
	if($dl['userId']==$_SESSION['id'])
		return true;
		
	return false;
	
}

function View_DisLike($id)
{
	$pdl = new productdislike();
	$pdl->productId = $id;
	$dlu = "";
	$d=$pdl->Select();
	foreach($d as $dl)
	{
		$dlu .= $dl['user']."\n";
	}
	return $dlu;
	
}

function Is_Rating($id)
{
	$prt = new productrating();
	$prt->productId = $id;
	
	$d=$prt->Select();
	foreach($d as $rt)
	if($rt['userId']==$_SESSION['id'])
		return true;
		
	return false;
	
}

function View_Rating($id)
{
	$prt = new productrating();
	$prt->productId = $id;
	$vtotal=0;
	$d=$prt->Select();
	foreach($d as $rt){
	$vrt =$rt['ratings'];
	$vtotal += $vrt;
	}
	$dv = count($d);
	if($vtotal==0)
		return  '0';
		
	return  $vtotal/$dv.'';
}

?>
</div>	
	<div ng-include="'View/template/footer.php'"></div>

