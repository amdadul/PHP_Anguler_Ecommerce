 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
                        $(document).ready(function () {
                            $("#demo1 .stars").click(function () {
                           
                                $.post('',{rate:$(this).val()},function(d){
                                    if(d>0)
                                    {
                                        alert('You already rated');
                                    }else{
                                        alert('Thanks For Rating');
                                    }
                                });
                                $(this).attr("checked");
                            });
                        });
                        
                        function bootstrap_equalizer() {
  $(".equalizer").each(function() {
    var heights = $(this).find(".watch").map(function() {
      return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".watch").height(maxHeight);
  });
}
                        
                    </script>

 <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
           
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


           
        </style>
        
       

<?php
print '<title>Motion View : Largest Online Shop in Bangladesh</title>';
include_once('Model/productImage.php');
include_once('Model/productlike.php');
include_once('Model/productdislike.php');
include_once('Model/productreview.php');
include_once('Model/productrating.php');
include_once('Model/product.php');

include_once('Model/visitor.php');

$visit = new visitor();

$visit->page = null;
	$visit->userip = $_SERVER["REMOTE_ADDR"];
	$check_ip = $visit->checkh();

if(mysqli_num_rows($check_ip)==0)
{

	if($visit->Inserth())
	{
	
	 
	}
	else
	{
	print $visit->error;
	}

}
else
{
	
	
}
$view = count($visit->Totalh());

if(isset($_GET["pid"]))
{
	$pl = new productlike();
	$pl->productId = $_GET['pid'];
	$pl->userId = $_SESSION['id'];
	$pl->dateTime = date("Y-m-d h:m:s");
	$pl->Insert();
}
print '';
if(isset($_GET["pdid"]))
{
	$pdl = new productdislike();
	$pdl->productId = $_GET['pdid'];
	$pdl->userId = $_SESSION['id'];
	$pdl->dateTime = date("Y-m-d h:m:s");
	$pdl->Insert();
}


$p = new product();

if(isset($_GET["ctg"]))
{
	$p->categoryId = $_GET["ctg"];
}

function star_5($id)
{
	if(View_Rating($id) ==5 && View_Rating($id) >4.5)
	{
		return 'checked="checked"';
	}
	else
	{
		return '';
	}
}

function star_45($id)
{
	if(View_Rating($id) >=4.1 && View_Rating($id) <= 4.5)
	{
		return 'checked="checked"';
	}
	else
	{
		return '';
	}
}

function star_4($id)
{
	if(View_Rating($id) ==4 && View_Rating($id) >3.5)
	{
		return 'checked="checked"';
	}
	else
	{
		return '';
	}
}

function star_35($id)
{
	if(View_Rating($id) >=3.1 && View_Rating($id) <= 3.5)
	{
		return 'checked="checked"';
	}
	else
	{
		return '';
	}
}

function star_3($id)
{
	if(View_Rating($id) ==3 && View_Rating($id) >2.5)
	{
		return 'checked="checked"';
	}
	else
	{
		return '';
	}
}

function star_25($id)
{
	if(View_Rating($id) >=2.1 && View_Rating($id) <= 2.5)
	{
		return 'checked="checked"';
	}
	else
	{
		return '';
	}
}

/*print' 
	<div class="fb-page col-sm-3" data-href="https://www.facebook.com/motionview.bd/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-		cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/motionview.bd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/motionview.bd/">Motion View</a></blockquote></div>
'; */


print ' <script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=355426248186271";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));
$(window).bind("load resize", function(){    
  var container_width = $(\'#container\').width();    
    $(\'#container\').html(\'<div class="fb-like-box" \' + 
    \'data-href="https://www.facebook.com/motionview.bd"\' +
    \' data-width="\' + container_width + \'" data-height="730" data-show-faces="false" \' +
    \'data-stream="true" data-header="true"></div>\');
    FB.XFBML.parse( );    
}); 
</script> ';


if(isset($_GET["submit"]))
{

$p->searchv = $_GET['q'];


$table = $p->search();
print '<div class="col-sm-12"><br>';
print' <div class="row">';

foreach($table as $row)
	{
		print'
		
		<div class="col-md-4 col-sm-6 col-xs-6 col-lg-6">
 <div class="thumbnail card-1">';
 print'<a href="?c=product_profile&pid='.$row["id"].'">';
		
		findImage($row["id"]);
		
		print '</a>';
		if($row["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 class="col-md-12" style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; min-width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right"> &#2547 '.($row["price"] 
				+ ($row["price"] * $row["vat"] / 100) 
				- ($row["price"] * $row["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$row["id"].'">'.$row["name"].'</a>
 </h4>
 
 <div class="ratings">
<p class="pull-right"><a href="?c=product_profile&pid='.$row["id"].'"> '.Comments($row['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 
 ';
	}
 print '</div>';
  print '</div>';
	
}
else
{



$note = $p->notebook();
print '<div class="col-sm-12"><br>';
print' <div class="row equalizer">';

foreach($note as $rown)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rown["id"].'">';
		
		findImage($rown["id"]);
		
		print '</a>';
		if($rown["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rown["price"] 
				+ ($rown["price"] * $rown["vat"] / 100) 
				- ($rown["price"] * $rown["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rown["id"].'">'.$rown["name"].'</a>
 </h4>
 
 <div class="ratings">
<p class="pull-right"><a href="?c=product_profile&pid='.$rown["id"].'"> '.Comments($rown['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 
 ';
	}
 print '</div>';


$watch = $p->watch();

print' <div class="row">';

foreach($watch as $roww)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6" >
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$roww["id"].'">';
		
		findImage($roww["id"]);
		
		print '</a>';
		if($roww["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($roww["price"] 
				+ ($roww["price"] * $roww["vat"] / 100) 
				- ($roww["price"] * $roww["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$roww["id"].'">'.$roww["name"].'</a>
 </h4>
 
 <div class="ratings">
<p class="pull-right"><a href="?c=product_profile&pid='.$roww["id"].'"> '.Comments($roww['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 
 ';
	}
 print '</div>';



$table = $p->earphone();

print' <div class="row">';

foreach($table as $row)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$row["id"].'">';
		
		findImage($row["id"]);
		
		print '</a>';
		if($row["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($row["price"] 
				+ ($row["price"] * $row["vat"] / 100) 
				- ($row["price"] * $row["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$row["id"].'">'.$row["name"].'</a>
 </h4>
 
 <div class="ratings">
<p class="pull-right"><a href="?c=product_profile&pid='.$row["id"].'"> '.Comments($row['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 
 ';
	}
 print '</div>';
	
$inear = $p->powerbank();

print' <div class="row">';

foreach($inear as $rowi)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowi["id"].'">';
		
		findImage($rowi["id"]);
		print '</a>';
		if($rowi["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowi["price"] 
				+ ($rowi["price"] * $rowi["vat"] / 100) 
				- ($rowi["price"] * $rowi["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowi["id"].'">'.$rowi["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowi["id"].'"> '.Comments($rowi['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	 $wifi = $p->wifi();

print' <div class="row">';

foreach($wifi as $rowi)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowi["id"].'">';
		
		findImage($rowi["id"]);
		print '</a>';
		if($rowi["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowi["price"] 
				+ ($rowi["price"] * $rowi["vat"] / 100) 
				- ($rowi["price"] * $rowi["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowi["id"].'">'.$rowi["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowi["id"].'"> '.Comments($rowi['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	  $speaker = $p->speaker();

print' <div class="row">';

foreach($speaker as $rows)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rows["id"].'">';
		
		findImage($rows["id"]);
		print '</a>';
		if($rows["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rows["price"] 
				+ ($rows["price"] * $rows["vat"] / 100) 
				- ($rows["price"] * $rows["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rows["id"].'">'.$rows["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rows["id"].'"> '.Comments($rows['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	  $ip = $p->camera();

print' <div class="row">';

foreach($ip as $rowip)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowip["id"].'">';
		
		findImage($rowip["id"]);
		print '</a>';
		if($rowip["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowip["price"] 
				+ ($rowip["price"] * $rowip["vat"] / 100) 
				- ($rowip["price"] * $rowip["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowip["id"].'">'.$rowip["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowip["id"].'"> '.Comments($rowip['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	 
	 
	
	 
	 
	 
	 
	 
	  $backpack = $p->backpack();

print' <div class="row">';

foreach($backpack as $rowb)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowb["id"].'">';
		
		findImage($rowb["id"]);
		print '</a>';
		if($rowb["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowb["price"] 
				+ ($rowb["price"] * $rowb["vat"] / 100) 
				- ($rowb["price"] * $rowb["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowb["id"].'">'.$rowb["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowb["id"].'"> '.Comments($rowb['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	 
	 
	  $yeelight = $p->yeelight();

print' <div class="row">';

foreach($yeelight as $rowy)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowy["id"].'">';
		
		findImage($rowy["id"]);
		print '</a>';
		if($rowy["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowy["price"] 
				+ ($rowy["price"] * $rowy["vat"] / 100) 
				- ($rowy["price"] * $rowy["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowy["id"].'">'.$rowy["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowy["id"].'"> '.Comments($rowy['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	 
	 
	 
	 
	  $charger = $p->charger();

print' <div class="row">';

foreach($charger as $rowc)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowc["id"].'">';
		
		findImage($rowc["id"]);
		print '</a>';
		if($rowc["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowc["price"] 
				+ ($rowc["price"] * $rowc["vat"] / 100) 
				- ($rowc["price"] * $rowc["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowc["id"].'">'.$rowc["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowc["id"].'"> '.Comments($rowc['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	 
	 
	 
	 
	  $other = $p->other();

print' <div class="row">';

foreach($other as $rowo)
	{
		print'
		
		<div class="col-md-3 col-sm-6 col-xs-6">
 <div class="thumbnail card-1" style="height:380px;">';
 print'<a href="?c=product_profile&pid='.$rowo["id"].'">';
		
		findImage($rowo["id"]);
		print '</a>';
		if($rowo["stock"] < 1)
		{			
		print '
          
		  <div class="carousel-caption">
              <h1 style="margin-left:-40px; margin-top:-150px; display:block; background-color:red; width:250px;">SOLD OUT</h1>
            </div>';
		}
 print'
 <div class="caption">
 <h4 class="pull-right bg-price"> &#2547 '.($rowo["price"] 
				+ ($rowo["price"] * $rowo["vat"] / 100) 
				- ($rowo["price"] * $rowo["discount"] / 100)).' /- </h4>
 <h4><a href="?c=product_profile&pid='.$rowo["id"].'">'.$rowo["name"].'</a>
 </h4>
 
 <div class="ratings">
 <p class="pull-right"><a href="?c=product_profile&pid='.$rowo["id"].'"> '.Comments($rowo['id']).' Reviews</a></p>
 <p>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 <span class="glyphicon glyphicon-star"></span>
 </p>
 </div>
 </div>
 </div>
 </div> 
 
 ';
	}
	
	 print '</div>';
	 
	 
	 
	 
	 
	 print '</div>';
	 
	 }
	
function findImage($id)
{
	$pi = new productImage();
	$pi->productId = $id;
	$a =$pi->Select();
	if(count($a) > 0)
	{
		if(file_exists('upload/productImage/'.$a[0]["id"].'_'.$a[0]["image"]))
		{			
			print '<img src="upload/productImage/'.$a[0]["id"].'_'.$a[0]["image"].'"  title="'.count($a).' More Images"/>';
		}
		
		else
		{
			print '<img src="images/noimage.jpg" alt="No Image" title="No Image"/>';
		}
		
	}
	else
	{
		
		print '<img src="images/noimage.jpg" alt="No Image" title="No Image"/>';
		
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