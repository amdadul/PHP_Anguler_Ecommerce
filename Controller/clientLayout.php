
<!DOCTYPE html>
<html lang="en">

<!--Theme of Amarbazar Ltd-->
<head>

    <style type="text/css">
    #wrapper{box-shadow:none;}
    #wrapper > *:not(.main-container){display: none;}
    
    .product-info .product-view,.left-content-product,.box-info-product{margin:0;}
    .left-content-product .content-product-right .box-info-product .cart input{padding:12px 16px;}

    .left-content-product .content-product-right .box-info-product .add-to-links{ width: auto;  float: none; margin-top: 0px; clear:none; }
    .add-to-links ul li{margin:0;}

    .spinner {
  width: 90px;
}
.spinner input {
  text-align: center;
}
.btn1{clear: both; overflow: hidden; float: right;}
.input-group-btn-vertical {
  position: relative;
  white-space: nowrap;
  width: 1%;
  vertical-align: middle;
  display: table-cell;
}
.input-group-btn-vertical > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
  padding: 8px;
  margin-left: -1px;
  position: relative;
  border-radius: 0;
}
.input-group-btn-vertical > .btn:first-child {
  /*border-top-right-radius: 4px;*/
}
.input-group-btn-vertical > .btn:last-child {
  margin-top: -2px;
  /*border-bottom-right-radius: 4px;*/
}
.input-group-btn-vertical i{
  position: absolute;
  top: 0;
  left: 4px;
}
</style>


<style>

        /* these styles are for the demo, but are not required for the plugin */
        .zoom {
            display:inline-block;
            position: relative;
        }
        
        /* magnifying glass icon */
        .zoom:after {
            content:'';
            display:block; 
            width:33px; 
            height:33px; 
            position:absolute; 
            top:0;
            right:0;
            background:url(icon.png);
        }

        .zoom img {
            display: block;
        }

        .zoom img::selection { background-color: transparent; }

        #ex2 img:hover { cursor: url(Libs/grab.cur), default; }
        #ex2 img:active { cursor: url(Libs/grabbed.cur), default; }
    </style>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src='Libs/jquery.zoom.js'></script>
    <script>
        $(document).ready(function(){
            $('#ex1').zoom();
            $('#ex2').zoom({ on:'grab' });
            $('#ex3').zoom({ on:'click' });          
            $('#ex4').zoom({ on:'toggle' });
        });
    </script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css"/>

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
/*.action a {
  display:inline-block;
  padding:5px 10px; 
  background:#f30;
  color:#fff;
  text-decoration:none;
}
.action a:hover{
  background:#000;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    width: 80%;
}

span.psw {
    float: right;
    padding-top: 16px;
}


.modal {
    display: none; 
    position: fixed; 
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 50%; 
}


.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}*/

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }
}


@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}



.fling-minislide {width:100%; height:0px; padding-bottom: 50%; overflow:hidden; position:relative; }
.fling-minislide img{ position:absolute; animation:fling-minislide 20s infinite; opacity:0; width: 100%; height: auto;}

@keyframes fling-minislide {25%{opacity:1;} 40%{opacity:0;}} 
.fling-minislide img:nth-child(4){animation-delay:0s;}
.fling-minislide img:nth-child(3){animation-delay:5s;}
.fling-minislide img:nth-child(2){animation-delay:10s;}
.fling-minislide img:nth-child(1){animation-delay:15s;}
	</style>

 <style>
    /*
    search menu
    */
    .navbar-form .input-group > #srch-term {
        background-position: 2px 6px !important;
        background-repeat: no-repeat;
        background-size: 22px 22px !important;
        width: 350px !important;
    }

    /* Tablet Layout: 768px. */
    @media only screen and (min-width: 768px) and (max-width: 991px) { 
        .navbar-form .input-group > #srch-term {
            width: 240px !important;
        }
    }

    /* Mobile Layout: 320px. */
    @media only screen and (max-width: 767px) {  
        .navbar-form .input-group > #srch-term {
            width: 100%!important;
        }
    }





    /* car menu css*/
    .cart_msgbox div{
      background: #fff none repeat scroll 0 0;
      border: 0 none;
      color: #333;
      font-size: 22px;
      margin: 240px auto;
      padding: 40px 10px;
      text-align: center;
      width: 20%;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 12px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    }
    .cart_success {
        display: none;
    }
    .sidenav {
        background-color: #fff;
        border-left: 2px solid #f10000;
        height: 100%;
        padding-top: 0;
        position: fixed;
        right: -3px;
        top: 0;
        transition: all 0.5s ease 0s;
        width: 0px;
        z-index: 9999;
    }
    span.cart_log {
        position: absolute;
        right: 0;
        top: 45%;
    }
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }

    .sidenav .closebtn {
        background: #E80101 none repeat scroll 0 0;
        border-radius: 70px 0 0 70px;
        display: none;
        font-size: 36px;
        left: -21px;
        padding: 4px 0 4px 6px;
        position: absolute;
        top: 37%;
        color: #fff;
    }
    .sidenav .closebtn:hover{
        color: #fff!important;
    }
    .open-cart {
        cursor: pointer;
        height: 100px;
        position: fixed;
        right: 0;
        text-align: center;
        top: 35%;
        transition: all 0.3s ease 0s;
        width: 65px;
        z-index: 999;
    }
    .open-cart:hover{
        opacity: 1;
    }
    .open-cart p {
        margin: 0;
        padding: 5px 0;
    }
    .open-cart p:first-child {
        background: #e20001 none repeat scroll 0 0;
        border-radius: 7px;
        color: #fff;
        font-size: 12px;
        font-weight: 900;
    }
    .open-cart p:first-child i {
        font-size: 35px;
    }
    .open-cart p:last-child {
        background: #d6d5d4 none repeat scroll 0 0;
        font-size: 15px;
        font-weight: 600;
    }   
    .open_cart_item {
        margin-right: 6px;
    }
    .amount{
        margin-left: 6px;
    }


    /* side nav header*/
    .sidenav_header {
        background: #eee none repeat scroll 0 0;
        padding: 6px 15px;
    }
    .sidenav_header p {
        display: inline-block;
    }
    .sidenav_header p:last-child {
        font-size: 17px;        
        vertical-align: sub;
    }

    .sidenav_header p.header i {
        font-size: 30px;
        margin-right: 10px;
        vertical-align: middle;
    }
    .sidenav_header p.header {
        color: red;
        font-weight: 600;
    }
    .sidenav_header p {
        margin: 0;
    }

    /* side nav body*/
    .sidernav_body ul {
        padding: 0 10px;
    }
    .sidernav_body > p {
        background: #ddd none repeat scroll 0 0;
        padding: 15px;        
    }
    .sidernav_body .up_down {
        line-height: 12px;
        vertical-align: super;
    }
    .sidernav_body .up_down i {
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.3s ease 0s;
        font-size: 18px;
    }
    .sidernav_body .up_down i:hover {
        opacity: 1;
    }
    .sidernav_body .img {
        height: 40px;
        overflow: hidden;
        width: 40px;
        vertical-align: super;
    }
    .sidernav_body .img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .sidernav_body .content p {
        line-height: 17px;
        margin: 0;
        font-size: 11px;
    }
    .sidernav_body .content {
        vertical-align: calc(10px);
    }
    .sidernav_body .content p:first-child{}
    .sidernav_body .content p:last-child{}

    .sidernav_body .money {
        vertical-align: calc(21px);
    }
    .money p {
        font-size: 14px;
    }
    .sidernav_body .xclose {
        cursor: pointer;
        font-weight: bold;
        opacity: 0.5;
        transition: all 0.3s ease 0s;
        vertical-align: calc(21px);
    }
    .sidernav_body .xclose:hover {
        opacity: 1;
    }
    .sidernav_body .order {
        bottom: 5%;
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
    }
    .cart_item {
        margin-right: 6px;
    }
    .sticky {
        position: fixed;
        width: 100%;
        left: 0;
        top: 0;
        z-index: 999;
        border-top: 0;
        border-radius: 0!important;
    }
    .remove_from_cart {
        background: #fa7163 none repeat scroll 0 0;
        color: #fff;
        display: block;
        font-size: 18px;
        height: 21px;
        text-align: center;
        width: 20px;
        font-weight: normal;
        line-height: 19px;
    }
    .remove_from_cart .glyphicon {
        font-size: 12px;
    }
    .miniCartFooter.text-right a {
        background: #fa7163 none repeat scroll 0 0;
    }
    .miniCartFooter.text-right a:hover{background:#707070;}
    /*.w100 .btn.btn-lg {
        background: #fa7163 !important;
        margin-top: 10px;
    }
    .w100 .btn.btn-lg:hover{
        background: #707070 !important;
        color: #fff;
    }
    .to_red {
        background: #fa7163 !important;        
    }
    .pull-right .btn.btn-primary.btn-small {
        background: #fa7163 none repeat scroll 0 0!important;
    }
    .pull-right .btn.btn-primary.btn-small:hover{
        background: #707070!important;
        color: #fff!important;
    }*/
    .megamenu .dropdown.megamenu-80width .dropdown-menu {
        left: 14px;
    }
    .checkbox.login-remember {
        padding-left: 21px;
    }
    /* cart new css */
    .miniCartProductThumb img {
        height: 100%;
        width: 100%;
    }
    .miniCartProduct {
        border-bottom: 1px solid #eee;
    }
    .miniCartDescription > h4 {
        font-size: 14px !important;
        padding-bottom: 0 !important;
        text-transform: capitalize;
    }
    .sidenav a:hover, .offcanvas a:focus {
        color: #454545 !important;
    }
    .miniCartFooter {
        background: #ecf0f1 none repeat scroll 0 0;
        bottom: 10px;
        padding: 10px;
        position: absolute;
        width: 100%;
    }
    .miniCartFooter.text-center a {
        background: #db2325 none repeat scroll 0 0 !important;
        color:#fff;
        font-weight: bold;
        
 
    }
    .sidernav_body > p {
        background: #ededed none repeat scroll 0 0 !important;
        border-top: 1px solid #ccc;
        font-size: 22px !important;
        padding: 15px;
    }
    .sidenav_header {
        background: #ddd none repeat scroll 0 0 !important;
        padding: 6px 15px;
    }
    .sidenav .closebtn i {
        font-size: 24px;
        padding: 2px 2px;
    }
    .open-cart p:last-child {
        background: #696362 none repeat scroll 0 0;
        border-radius: 7px;
        color: #fff;
        font-size: 15px;
    }
    .miniCartFooter .subtotal {
        background: #db2325 none repeat scroll 0 0 !important;
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 15px;
        padding: 4px;
        text-transform: capitalize;
    } 
    .miniCartFooter {
        padding: 0 !important;
    }  
    /*.miniCartFooter .btn:last-child {
        margin-bottom: 15px;
    }   */
    .sidenav_header p.header {
        color: #333;
        font-size: 16px;
        font-weight: 600;
    }
    .miniCartFooter.text-center a {      padding: 10px 20px;
                                         font-size: 13px;
    }
    @media screen and (max-width: 766px) {
        .dropdown-header, .miniCartProduct, .miniCartProduct .price, .miniCartProduct .size, .miniCartProduct a, .miniCartProduct p {
            color: inherit;
        }
        .remove_from_cart {
            color: #fff!important;
        }
    }
    .ani{
        animation: move 6s infinite forwards;
    }
    @keyframes move{
        0% { transform: translateY(0px);}
        50% { transform: translateY(0px);}
        75% { transform: translateY(-50px);}
        100% { transform: translateY(0px);}
    }
    #puss-canvas {
        transition: margin-left .5s;
    }
    .container{
        transition: margin-right .5s; 
    }

    /* product hover css*/
    .product:hover .imageHover a {
        transform: scale(1.2,1.2);
    }
    .product .description {
        overflow: hidden;
    }
    .product .description h4 {
        float: left;
        width: 65%;
    }
    .description > span {
        float: right;
        opacity: 0;
        transition: opacity 1s;
    }
    .description > span > a {
        background: #ef0000 none repeat scroll 0 0;
    }
    .description span a {
        padding: 7px 15px!important;
        transition: all .3s ease;
    }
    .product:hover .description > span {
        opacity: 1;
    }
    /*.btn{
        transition: .3s all ease !important;
    }
    .btn:hover{
        -webkit-box-shadow: -100px 0 0 #E20001 inset;
    }*/
    #change_btn_color:hover{
        -webkit-box-shadow: -150px 0 0 #E20001 inset;
    }

    #checkout_btn:hover{
        -webkit-box-shadow: -150px 0 0 #E20001 inset;
    }
    .btn-default:hover{
        -webkit-box-shadow: -150px 0 0 #E20001 inset;
    }
    .remove_from_compare:hover{
        -webkit-box-shadow: -200px 0 0 #E20001 inset;
    }
    .compare_link:hover{
        color: #E20001;
    }
    .product .price {
        height: 70px;
    }
    .save_money {
        color: #000!important;
        font-weight: 700;
    }
    .save_money span {
        color: #7A8387 ;
    }
    .product_price_s_color {
        color: #707070;
        font-size: 14px;
        vertical-align: text-bottom;
    }
    .price.single_font del {
        font-size: 13px;
        font-weight: normal !important;
    }

    /* for lg button */
    /*.btn.btn-lg {
        padding: 10px 17px!important;
    }*/
    .price.single_font {
        margin-right: -3px !important;
    }
    .add-to-compare:hover i {
        color: red;
    }

    /* css for zoom plugin*/
    .piclist li img {
      border: 1px solid #ccc;
      float: left;
      height: 90px;
      width: 90px;
    }
    .picZoomer{
    position: relative;
}
.picZoomer-pic-wp{
    position: relative;
    overflow: hidden;
}
.picZoomer-pic-wp:hover .picZoomer-cursor{
    display: block;
}
.picZoomer-zoom-pic{
    position: absolute;
    top: 0;
    left: 0;
}
.picZoomer-pic{
    width: 100%;
    height: 100%;
}
.picZoomer-zoom-wp{
    display: none;
    position: absolute;
    z-index: 111;
    overflow: hidden;
}
.picZoomer-cursor{
    display: none;
    cursor: none;
    width: 100px;
    height: 100px;
    position: absolute;
    top: 0;
    left: 0;
    border: 1px solid #eee;
    background-color: rgba(255,255,255,.5);
}
.picZoomCursor-ico{
    width: 23px;
    height: 23px;
    position: absolute;
    top: 40px;
    left: 40px;
    background: url(../images/zoom-ico.html) left top no-repeat;
}
    /* custom style */
    .picZoomer-zoom-wp{
        border: 1px solid #ccc;
    }









</style>
<style type="text/css">
	#wrapper{box-shadow:none;}
	#wrapper > *:not(.main-container){display: none;}
	
	
	.product-info .product-view,.left-content-product,.box-info-product{margin:0;}
	.left-content-product .content-product-right .box-info-product .cart input{padding:12px 16px;}

	.left-content-product .content-product-right .box-info-product .add-to-links{ width: auto;  float: none; margin-top: 0px; clear:none; }
	.add-to-links ul li{margin:0;}
	
</style> 














    
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
    <link rel="shortcut icon" href="View/image/logo.jpg">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://htmldemo.magikthemes.com/ecommerce/accent-html-template/black/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://code.jquery.com/ui/1.12.1/jquery-ui.min.js'></script> -->

<!-- <script type="text/javascript" src="http://htmldemo.magikthemes.com/ecommerce/accent-html-template/black/js/jquery.min.js"></script>  -->
 <!--  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.carousel.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://htmldemo.magikthemes.com/ecommerce/accent-html-template/black/css/revslider.css" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular-cookies.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>


<!-- <script type="text/javascript" src="libs/jquery.min.js"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="libs/angular.min.js"></script>
<script src="libs/angular-route.js"></script>
<script src="libs/angular-cookies.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>






<link rel='stylesheet' property='stylesheet'  href='View/css/themecss/cpanel.css' type='text/css' media='all' />


<!-- <script type="text/javascript" src="View/js/themejs/libs.js"></script>
<script type="text/javascript" src="View/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="View/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="View/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="View/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="View/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="View/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="View/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="View/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="View/js/minicolors/jquery.miniColors.min.js"></script>


<script type="text/javascript" src="View/js/bootstrap.min.js"></script>

<script type="text/javascript" src="View/js/themejs/application.js"></script>
<script type="text/javascript" src="View/js/themejs/homepage.js"></script>
<script type="text/javascript" src="View/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="View/js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="View/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="View/js/themejs/pathLoader.js"></script>	
<script type="text/javascript" src="View/js/themejs/cpanel.js"></script>
<script type="text/javascript" src="View/js/minicolors/jquery.miniColors.min.js"></script>
<script type="text/javascript" src="View/scripts/app.js"></script>

 

 -->









<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<!--techno another theme css
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
	<!--techno another-->
    <!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" href="View/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="View/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="View/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
	<link href="View/css/themecss/lib.css" rel="stylesheet">
	 <link href="View/js/owl-carousel/owl.carousel.css" rel="stylesheet" />
	<link href="View/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="View/js/minicolors/miniColors.css" rel="stylesheet">
	<link href="View/css/themecss/so-newletter-popup.css" rel=stylesheet>
	<!-- Theme CSS
	============================================ -->
   	<link href="View/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="View/css/themecss/so-categories.css" rel="stylesheet">
	<link href="View/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="View/css/header6.css" rel="stylesheet">
	<link href="View/css/footer3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	<link href="View/css/responsive.css" rel="stylesheet" />
	<link id="color_scheme" href="View/css/home6.css" rel="stylesheet">
	<link id="color_scheme" href="View/css/theme.css" rel="stylesheet">
	<link href="View/css/responsive.css" rel="stylesheet">
	

</head>

<body class="common-home res layout-home6" ng-app="myApp" >

<div ng-controller="main">
<div ng-init="show()">
 <div style="padding-bottom: 10px;"></div> 

<div ng-view ></div>

</div>

	<!-- Footer Container -->

<script type="text/javascript">
var app = angular.module("myApp", ["ngRoute","ngCookies"]);

app.config(['$routeProvider','$locationProvider','$qProvider',function($routeProvider,$locationProvider,$qProvider) {
	//$locationProvider.html5Mode(true);
	//$locationProvider.html5Mode(true).hashPrefix('!');
    $qProvider.errorOnUnhandledRejections(false);

    $routeProvider
    .when("/", {
        templateUrl : "View/template/home.php",
        controller : "main"
    })
    .when("/home", {
        templateUrl : "View/template/home.php",
        controller : "main"
    })
    .when("/about", {
        templateUrl : "View/template/about-us.php",
        controller : "main"
    })
    .when("/search", {
        templateUrl : "View/template/search.php",
        controller : "main"
    })
    .when("/shop/:ctg", {
        templateUrl : "View/template/shop.php",
        controller : "main"
    })
    .when("/signin", {
        templateUrl : "View/template/login.php",
        controller : "main"
    })
    .when("/payment_req", {
        templateUrl : "View/template/payment_req.php",
        controller : "main"
    })
    .when("/payment_cor", {
        templateUrl : "View/template/payment_cor.php",
        controller : "main"
    })
    .when("/payment", {
        templateUrl : "View/template/payment.php",
        controller : "main"
    })
    .when("/successreq/:rnum", {
        templateUrl : "View/template/successreq.php",
        controller : "main"
    })
    .when("/bkashreq/:rnum", {
        templateUrl : "View/template/bkashreq.php",
        controller : "main"
    })
    .when("/successcor/:cnum", {
        templateUrl : "View/template/successcor.php",
        controller : "main"
    })
    .when("/sale", {
        templateUrl : "View/template/sale.php",
        controller : "main"
    })

    .when("/product", {
        templateUrl : "View/template/product_list.php",
        controller : "main"
    })

    .when("/csale", {
        templateUrl : "View/template/corporate_sale.php",
        controller : "main"
    })
    .when("/trackorder", {
        templateUrl : "View/template/track.php",
        controller : "main"
    })
    .when("/bin", {
        templateUrl : "View/template/binstatus.php",
        controller : "main"
    })
    .when("/quickview/:id", {
        templateUrl : "View/template/quickview.php",
        controller : "main"
    })

    .when("/brand/:sup", {
        templateUrl : "View/template/brand.php",
        controller : "main"
    })
    .when("/bv/:bv", {
        templateUrl : "View/template/bv.php",
        controller : "main"
    })
    .when("/contact", {
        templateUrl : "View/template/contact.php",
        controller : "main"
    })
    .when("/fail", {
        templateUrl : "View/template/fail.php",
        controller : "main"
    })
    .when("/cancel", {
        templateUrl : "View/template/cancel.php",
        controller : "main"
    })
    .when("/c_cus", {
        templateUrl : "View/template/create_customer.php",
        controller : "main"
    })
.when("/orderdetails/:odid", {
        templateUrl : "View/template/order-information.php",
        controller : "main"
    })

     .when("/myacc", {
        templateUrl : "View/template/myaccount.php",
        controller : "main"
    })

     .when("/invoice", {
        templateUrl : "View/template/invoice_list.php",
        controller : "main"
    })

     .when("/invoice_det/:invnum", {
        templateUrl : "View/template/invoice_det.php",
        controller : "main"
    })
     .when("/wishlist", {
        templateUrl : "View/template/wishlist.php",
        controller : "main"
    })
     .when("/register", {
        templateUrl : "View/register.php",
        controller : "main"
    })
     .when("/checkout", {
        templateUrl : "View/template/checkout.php",
        controller : "main"
    })
     .when("/checkoutr", {
        templateUrl : "View/template/checkoutr.php",
        controller : "main"
    })

     .when("/checkoutcor", {
        templateUrl : "View/template/checkoutcor.php",
        controller : "main"
    })
     .when("/checkoutreq", {
        templateUrl : "View/template/checkoutreq.php",
        controller : "main"
    })

     .when("/ldcreq", {
        templateUrl : "View/template/ldcreq.php",
        controller : "main"
    })
     .when("/orderhis", {
        templateUrl : "View/template/orderhistory.php",
        controller : "main"
    })
      .when("/notice", {
        templateUrl : "View/template/notice.php",
        controller : "main"
    })

    .when("/return", {
        templateUrl : "View/template/return.php",
        controller : "main"
    })
    .otherwise({redirectTo: "/home"});
}]);


app.controller('main',[ '$scope','$cookies','$http','$location','$routeParams',function( $scope,$cookies,$http,$location,$routeParams){
$scope.form ={};
$scope.data ={};
$scope.ch =[];
$scope.au =[];
$scope.cmt =[];
$scope.cor = [];
$scope.pq =1;
$scope.wp = '';

if($cookies.get('cmt') != undefined || $cookies.get('cmt') != '')
{
     $scope.cmnt = $cookies.get('cmt');
}
else
{
    $scope.cmnt = '';
}

if($cookies.get('name') != undefined || $cookies.get('name') != '')
{
     $scope.name = $cookies.get('name');
}
else
{
    $scope.name = '';
}

if($cookies.get('mn') != undefined || $cookies.get('mn') != '')
{
     $scope.mn = $cookies.get('mn');
}
else
{
    $scope.mn = '';
}

if($cookies.get('em') != undefined || $cookies.get('em') != '')
{
     $scope.em = $cookies.get('em');
}
else
{
    $scope.em = '';
}

if($cookies.get('ck') != undefined)
{
     $scope.retstk = $cookies.get('ck');
}
else
{
    $scope.retstk = 'false';
}

if($scope.outl == undefined)
{
    $scope.outl =[];
}
else
{

}



if($scope.count == undefined)
{
    $scope.c =$cookies.getObject('chart');
    angular.forEach($scope.c, function(value, key) {
                            
                              $scope.ct = value.count;
                                         
                        });
    if($scope.ct == undefined || $scope.ct == '')
    {
    $scope.count = 0;
    }
    else
    {
        $scope.count = $scope.ct;
    }
}
$scope.ckbal = false;
$scope.cbal = function(){

    $scope.fp();

    if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;

            $http({
  method: 'get',
  url: 'http://37.34.252.0/api/balance.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&rin='+$scope.rin
 }).then(function successCallback(response) {
   $scope.balance = response.data[0].balance;
              });
        }
        
    
    if( $scope.total > $scope.balance)
    {
       return $scope.ckbal = true;  
    }
    else
    {
       return $scope.ckbal = false; 
    }
}


//$scope.customer = 'rcust';
$scope.rcust = true;
$scope.ocust = false;
$scope.ctgid = 'Toiletries';
 $scope.sp = 0;
 $scope.old = false;
 $scope.guest = true;
 $scope.retailer = false;
 $scope.payment = "Online Payment";
 $scope.aut = $cookies.getObject('auth');
 if($cookies.getObject('auth') == undefined || $cookies.getObject('auth') == '')
 {
 	var index = '';
 	$scope.auth = $scope.aut;
 }
 else
 {
 	var index = 0;
 	$scope.auth = $scope.aut[index];

 }

$scope.check = function()
{
	if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined || $cookies.getObject('auth') == [] || $cookies.getObject('auth') == 0 )
	{
		return false;
	}
	else
	{
		return true;
	}
}


if($cookies.getObject('chart') == "" || $cookies.getObject('chart') == null || $cookies.getObject('chart') == undefined )
  {
    $scope.ch =[];
    $cookies.putObject('chart',$scope.ch); 
  }
  else
  {
    $scope.ch = $cookies.getObject('chart');
  }


    

  if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined )
  {
  	$scope.au =[];
    $cookies.putObject('auth',$scope.au); 
  }
 
if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
{
    $scope.rin = '';
}
else
{
    
    $scope.rin = $scope.auth.rin;
}

if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
{
    $scope.bin = '';
}
else
{
    
    $scope.bin = $scope.auth.bin;
}

 
  $scope.tp = function()
           {
            if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
            {

            }
        else{

            if($scope.auth.rin != undefined){

                if($cookies.get('ck') != undefined)
                    {
                         $scope.retstk = $cookies.get('ck');
                    }
                    else
                    {
                        $scope.retstk = 'false';
                    }

                if($scope.retstk == 'true' || $scope.retstk == 'corporate')
                {
                   	$scope.total =0;
                       angular.forEach($scope.cart, function(value, key) {
                        $scope.price = value.qty * value.price;
                        $scope.total += $scope.price;            
                         });
                    return $scope.total;
                }
               if($scope.retstk == 'false')
                {
                $scope.total =0;
               angular.forEach($scope.cart, function(value, key) {
                $scope.price = value.qty * value.rprice;
                $scope.total += $scope.price;            
                 });
                    return $scope.total;
                }
            
            }
            else
            {
            $scope.total =0;
    angular.forEach($scope.cart, function(value, key) {
            $scope.price = value.qty * value.price;
            $scope.total += $scope.price;            
        });
    return $scope.total;
            }
        }
        if($scope.auth == '')
        {
            $scope.total =0;
    angular.forEach($scope.cart, function(value, key) {
            $scope.price = value.qty * value.price;
            $scope.total += $scope.price;            
        });
    return $scope.total;
        }
}


$scope.tpoint = function()
           {
            
                    $scope.totalbv =0;
                       angular.forEach($scope.cart, function(value, key) {
                        $scope.bv = (value.qty-0) * (value.bv-0);
                        $scope.totalbv += $scope.bv;            
                         });
                    return $scope.totalbv;
                }

$scope.tpbv = function()
           {
            
                    $scope.totalbv =0;
                       angular.forEach($scope.cart, function(value, key) {
                        $scope.bv = (value.qty-0) * (value.bv-0);
                        $scope.totalbv += $scope.bv;            
                         });
                    return $scope.totalbv;
                }


$scope.fp = function()
           {
           		return $scope.tp() + $scope.sp;
			}


$scope.fprice= $scope.fp();
$scope.remove = function(item) {
 $scope.index = 0; 
  $scope.index = $scope.cart.indexOf(item);
       $scope.ch.splice($scope.index, 1);
       $cookies.putObject('chart',$scope.ch);
        $scope.show();
        $scope.cbal();
        
}

$scope.plus = function(item) {
	$scope.index = item;
 for(i in $scope.ch) {
if($scope.ch[i].id == $scope.index)
{ 
	$scope.ch[i].qty = $scope.ch[i].qty +1;
	 $cookies.putObject('chart',$scope.ch);
}
}
  $scope.show();
}

$scope.minus = function(item) {
	$scope.index = item;
 for(i in $scope.ch) {
 	if($scope.ch[i].qty > 1){
if($scope.ch[i].id == $scope.index)
{ 
	$scope.ch[i].qty = $scope.ch[i].qty - 1;
	 $cookies.putObject('chart',$scope.ch);
}

 $scope.show();
}
}
}

$scope.qty = function() {
	return $scope.pq;
}

$scope.pluss = function() {
	return $scope.pq += 1;
	$scope.qty();

}

$scope.minuss = function() {
if($scope.pq > 1){
	return $scope.pq -=1;
	$scope.qty();
}
}

$scope.clear = function()
{
  $scope.cl = [];
  $cookies.putObject('chart',$scope.cl);
  //alert("Cart Clear");
   $scope.show();   
}

$scope.show = function()
{
	return	$scope.cart = $cookies.getObject('chart');
}

$scope.al = function()
{
  alert($scope.ch.length);
}

	$scope.free = function()
	{
		return $scope.sp = 0;
	}

$scope.quick = function()
	{
		return $scope.sp = 50;
	}
	
  $scope.add2 =function(id){
$scope.id = id;
 alert($scope.id);
}

$scope.product = function(id) 
{
	$scope.id =id;
	$scope.pro = "product is = " +$scope.id;
}

if($scope.limit == undefined)
{
	$scope.parpage = 9;
	$scope.limit ='9';
}

$scope.pp = function()
{
	$scope.parpage = $scope.limit;
	$scope.allctgproduct();
	$scope.ctgproduct();
}
$scope.ppbv = function()
{
    $scope.parpage = $scope.limit;
    $scope.bv_p();
    $scope.bv();
}
$scope.ppre = function()
{
    $scope.parpage = $scope.limit;
    $scope.retproduct_p();
    $scope.retproduct();
}
$scope.pps = function()
{
	$scope.parpage = $scope.limit;
	$scope.search_p();
	$scope.search();
}

$scope.ppb = function()
{
	$scope.parpage = $scope.limit;
	$scope.allbrandproduct();
	$scope.brand();
}
if($scope.page == undefined)
{
	$scope.page =0;
}

$scope.allctgproduct = function()
{
	$scope.ctg = $routeParams.ctg;
    if($scope.ctg == "all")
    {
	$http({
  method: 'get',
  url: 'http://37.34.252.0/api/item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8'
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}
else
{
    $http({
  method: 'get',
  url: '37.34.252.0/api/item_p.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&ctg='+$scope.ctg
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}
}

$scope.allbrandproduct = function()
{
	$scope.brand = $routeParams.sup;
	$http({
  method: 'get',
  url: 'http://37.34.252.0/api/bitem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&xsup='+$scope.brand
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}

$scope.brand = function()
{
	$scope.startfrom = $scope.parpage*$scope.page;
$scope.ofset = $scope.startfrom;
	$scope.bnd = $routeParams.sup;

	$http({
  method: 'get',
  url: 'http://37.34.252.0/api/bitem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&xsup='+$scope.bnd+'&lim='+$scope.parpage+'&ofset='+$scope.ofset
 }).then(function successCallback(response) {
 $scope.bproduct = response.data;
 });
}

$scope.brandName = function()
{
	$scope.id = $routeParams.id;
	$http({
  method: 'get',
  url: 'Model/brandName.php?id='+$scope.id
 }).then(function successCallback(response) {
 $scope.bname = response.data['0'];
 });
}
 //alert($scope.totalPage);
$scope.ctgproduct = function()
{
	$scope.startfrom = $scope.parpage*$scope.page;
$scope.ofset = $scope.startfrom;
	$scope.ctg = $routeParams.ctg;

	$http({
  method: 'get',
  url: 'http://37.34.252.0/api/item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&lim='+$scope.parpage+'&ofset='+$scope.ofset+'&ctg='+$scope.ctg
 }).then(function successCallback(response) {
 $scope.product = response.data;
 });
}

$scope.corporate = function()
{
    $scope.startfrom = $scope.parpage*$scope.page;
$scope.ofset = $scope.startfrom;

    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/citem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&lim='+$scope.parpage+'&ofset='+$scope.ofset
 }).then(function successCallback(response) {
 $scope.cproduct = response.data;
 });
}


$scope.allproduct = function()
{

    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/allitem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8'
 }).then(function successCallback(response) {
 $scope.allproduct = response.data;
 });
}


$scope.corporate_p = function()
{
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/citem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8'
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}


$scope.retproduct = function()
{
    $scope.startfrom = $scope.parpage*$scope.page;
$scope.ofset = $scope.startfrom;
if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
{
    $scope.rin = '';
}
else
{
    $scope.rin = $scope.auth.rin;
}
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/ritem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&lim='+$scope.parpage+'&ofset='+$scope.ofset+'&rin='+$scope.rin
 }).then(function successCallback(response) {
 $scope.reproduct = response.data;
 });
}

$scope.retproduct_p = function()
{
    if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
{
    $scope.rin = '';
}
else
{
    $scope.rin = $scope.auth.rin;
}

    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/ritem.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&rin='+$scope.rin
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}
$scope.i = 0;
$scope.outlate = function(item)
{
$scope.sup = item;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/outlate.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&sup='+$scope.sup
 }).then(function successCallback(response) {
 $scope.out = response.data;
 });
}

$scope.outlate1 = function(item)
{
$scope.sup = item;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/outlate.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&sup='+$scope.sup
 }).then(function successCallback(response) {
 $scope.out1 = response.data;
 });
}

$scope.outlate2 = function(item)
{
$scope.sup = item;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/outlate.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&sup='+$scope.sup
 }).then(function successCallback(response) {
 $scope.out2 = response.data;
 });
}

$scope.outlate3 = function(item)
{
$scope.sup = item;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/outlate.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&sup='+$scope.sup
 }).then(function successCallback(response) {
 $scope.out3 = response.data;
 });
}

$scope.outlate4 = function(item)
{
$scope.sup = item;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/outlate.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&sup='+$scope.sup
 }).then(function successCallback(response) {
 $scope.out4 = response.data;
 });
}

$scope.outlate5 = function(item)
{
$scope.sup = item;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/outlate.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&sup='+$scope.sup
 }).then(function successCallback(response) {
 $scope.out5 = response.data;
 });
}


$scope.odn ='';
$scope.searchOrder = function()
{
	$scope.odAddess='';
$scope.on = $scope.odnumber;
	$http({
  method: 'get',
  url: 'Model/searchOrder.php?on='+$scope.on
 }).then(function successCallback(response) {
 $scope.od = response.data['0'];
 $scope.odn =$scope.od.onumber;
 });
}

$scope.orderdetails = function()
{
$scope.on = $routeParams.odid;

	$http({
  method: 'get',
  url: 'Model/searchOrder.php?on='+$scope.on
 }).then(function successCallback(response) {
 $scope.od = response.data['0'];
 $scope.odn =$scope.od.onumber;
 });
}

$scope.odetails = function()
{
$scope.on = $routeParams.odid;
	$http({
  method: 'get',
  url: 'Model/odDetails.php?oid='+$scope.on
 }).then(function successCallback(response) {
 $scope.odl = response.data;
$scope.odt =0;
 angular.forEach($scope.odl, function(value, key) {
            $scope.odp = value.qty * value.price;
            $scope.odt += $scope.odp;            
        });
 });
}

$scope.printDiv = function(divName) {
	$scope.name = $scope.odn+'.pdf';
  html2canvas(document.getElementById(divName), {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500,
                    }]
                };
                pdfMake.createPdf(docDefinition).download($scope.name);
            }
        });
} 



$scope.rtproduct = function()
{
	$http({
  method: 'get',
  url: 'Model/rtpProduct.php?id='+$scope.id
 }).then(function successCallback(response) {
 $scope.rtp = response.data;
 });
}

$scope.active = 0;
$scope.pg = function(id)
{
	$scope.page =id;
	$scope.ctgproduct();
	$scope.active = id;
	
}



$scope.pgs = function(id)
{
	$scope.page =id;
	$scope.active = id;
	$scope.search();
    $scope.search_p();
}

$scope.pgbv = function(id)
{
    $scope.page =id;
    $scope.active = id;
    $scope.bv_p();
    $scope.bv();
    
}

$scope.pgre = function(id)
{
    $scope.page =id;
    $scope.active = id;
    $scope.retproduct();
    $scope.retproduct_p();
}


$scope.cust = function(cst)
{
     $scope.customer = cst;
     if($scope.customer === 'ocust')
     {
        $scope.ocust = true;
        $scope.rcust = false;
     }
     if($scope.customer === 'rcust')
     {
        $scope.rcust = true;
        $scope.ocust = false;
     }
}

$scope.pgb = function(id)
{
	$scope.page =id;
	$scope.brand();
	$scope.active = id;
}


$scope.quickview = function()
{
	$scope.id = $routeParams.id;
	$http({
  method: 'get',
  url: 'http://37.34.252.0/api/item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&id='+$scope.id
 }).then(function successCallback(response) {
 $scope.Items = response.data['0'];
 });
}

$scope.sitem = function(id)
{
    $scope.id = id;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&id='+$scope.id
 }).then(function successCallback(response) {
 $scope.citem = response.data['0'];
 });
}



$scope.cid = function()
	{
		$http({
  method: 'get',
  url: 'http://37.34.252.0/api/item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&id='+$scope.id
 }).then(function successCallback(response) {
 $scope.Items = response.data['0'];
 return $scope.ctgid = $scope.Items.xcat;
 });
	}

$scope.qvPicture = function()
{
	$scope.id = $routeParams.id;
	$http({
  method: 'get',
  url: 'Model/imageProduct.php?id='+$scope.id
 }).then(function successCallback(response) {
 $scope.pi = response.data;
  $scope.zoom = $scope.pi['0'].image;
 });
}


$scope.zoomimage = function(image)
{
	$scope.zoom = image;
}


$scope.ctPicture = function(id)
{
	$scope.id = id;
	$http({
  method: 'get',
  url: 'Model/imageProduct.php?id='+$scope.id
 }).then(function successCallback(response) {
$scope.pi = response.data['0'];
 });
}


$scope.subscribe = function()
{
    $http.post(  
                "Model/subscribe.php",  
                {'email':$scope.form.semail}  
           ).then(function successCallback(response) {
                $scope.message = response.data.message;
                alert($scope.message);
                $scope.form.semail = "";
              });

}


$scope.login = function(email,password)
{
	$scope.email=email; 
	$scope.password = password;
	$http.post(  
                "Model/login.php",  
                {'email':$scope.email, 'password':$scope.password}  
           ).then(function successCallback(response) {

                $scope.login = response.data;
                if( $scope.login.id != undefined )
 				 {
 				 	$scope.au.push({id:$scope.login.id, name:$scope.login.name, email:$scope.login.email, phone:$scope.login.phone, type:$scope.login.type, image:$scope.login.image , address:$scope.login.address });
               		 $cookies.putObject('auth',$scope.au); 
                 alert($scope.login.message);
                 $scope.aut = $cookies.getObject('auth');
                 var index =0;
                 $location.path('home');
                  return $scope.auth = $scope.aut[index];
                 }
                 else
                 {
                 	alert($scope.login.message);
                 }
              });
}


$scope.loginr = function(user,password)
{
    $scope.email=user; 
    $scope.password = password;
    $scope.usr = 'apiuser';
    $scope.psw = 'ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8';
    $http.post(  
                "http://37.34.252.0/api/login.php",  
                {'username':$scope.usr,'password':$scope.psw ,'user':$scope.email, 'passwordr':$scope.password}  
           ).then(function successCallback(response) {

                $scope.login = response.data['0'];
                
                if( $scope.login.bizid != undefined )
                 {
                    $scope.au.push({id:$scope.login.bizid, name:$scope.login.xfname,  phone:$scope.login.xmobile, rin:$scope.login.xrdin , address:$scope.login.xadd1, bin:$scope.login.bin, balance:$scope.login.balance,membertype:$scope.login.membertype});
                     $cookies.putObject('auth',$scope.au); 
                 alert($scope.login.message);

                 $scope.aut = $cookies.getObject('auth');
                 $scope.cbal();
                 var index =0;
                 $location.path('home');
                  return $scope.auth = $scope.aut[index];
                  
                 }
                 else
                 {
                    alert($scope.login.message);
                 }
              });
}


$scope.ldc = function()
{
    if($scope.auth.membertype !='LDC')
    {
        alert('Apply for LDC');
    }
    else
    {
        if($scope.tpoint() >= 2500)
        {
            $location.path('ldcreq');
        }
        else
        {
            alert('No Enough Order');
        }
    }
}


$scope.loginvr = function(user,password)
{
    $scope.email=user; 
    $scope.password = password;
    $scope.usr = 'apiuser';
    $scope.psw = 'ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8';
    $http.post(  
                "http://37.34.252.0/api/login.php",  
                {'username':$scope.usr,'password':$scope.psw ,'user':$scope.email, 'passwordr':$scope.password}  
           ).then(function successCallback(response) {

                $scope.login = response.data['0'];
                
                if( $scope.login.bizid != undefined )
                 {
                    $scope.au.push({id:$scope.login.bizid, name:$scope.login.xfname,  phone:$scope.login.xmobile, rin:$scope.login.xrdin , address:$scope.login.xadd1, bin:$scope.login.bin, balance:$scope.login.balance});
                     $cookies.putObject('auth',$scope.au); 
                 alert($scope.login.message);
                 $scope.aut = $cookies.getObject('auth');
                 $scope.cbal();
                 var index =0;
                 $location.path('checkoutreq');
                  return $scope.auth = $scope.aut[index];
                  
                 }
                 else
                 {
                    alert($scope.login.message);
                 }
              });
}


$scope.loginc = function(email,password)
{
	$scope.email=email; 
	$scope.password = password;
	//alert($scope.email + $scope.password);
	$http.post(  
                "Model/login.php",  
                {'email':$scope.email, 'password':$scope.password}  
           ).then(function successCallback(response) {
                $scope.login = response.data;
                if( $scope.login.id != undefined )
 				 {
 				 	$scope.au.push({id:$scope.login.id, name:$scope.login.name,email:$scope.login.email, phone:$scope.login.phone, type:$scope.login.type, image:$scope.login.image , address:$scope.login.address });
               		 $cookies.putObject('auth',$scope.au); 
                  alert($scope.login.message);
                 	$scope.aut = $cookies.getObject('auth');
                 	var index =0;
                  return $scope.auth = $scope.aut[index];
                 }
                 else
                 {
                 	alert($scope.login.message);
                 }
              });
}

$scope.account = function(type)
{

	$scope.type = type;
	if($scope.type === 'old')
	{
		$scope.guest = false;
		$scope.retailer = false;
		return $scope.old = true;
	}

	if($scope.type === 'guest')
	{
		$scope.old = false;
		$scope.retailer = false;
		return $scope.guest = true;
	}

	if($scope.type === 'Retailer')
	{
		$scope.old = false;
		 $scope.guest = false;
		return $scope.retailer = true;
	}
}

$scope.errfname = '';
$scope.errlname = '';
$scope.erraemail = '';
$scope.errapassword = '';
$scope.errphone = '';
$scope.erraddress = '';
$scope.errcountry ='';
$scope.errcity ='';
$scope.errpostcode ='';
$scope.errstate ='';
$scope.cstname ='';
$scope.cuscheck = function()
{
    $scope.cin = $scope.form.cin;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/check_cin.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&cin='+$scope.cin
 }).then(function successCallback(response) {
  $scope.cust = response.data[0];
  $scope.cstname = $scope.cust.xorg;
  $scope.form.name = $scope.cust.xorg;
  $scope.cin_search();
 });
    
}

$scope.rincheck = function()
{
    $scope.rin = $scope.form.rfrin;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/check_rin.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&rin='+$scope.rin
 }).then(function successCallback(response) {
  $scope.form.rfname = response.data[0].xorg;

 });
    
}


$scope.binst = function()
{
    

     if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            
            $scope.rin = $scope.auth.rin;
        }

    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/binst.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&rin='+$scope.rin
 }).then(function successCallback(response) {
  $scope.binst = response.data;

 });
    
}



$scope.cin_search = function()
{
    $scope.mobile = $scope.form.mobile;
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/check_cin.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&phone='+$scope.mobile
 }).then(function successCallback(response) {
  $scope.cust = response.data;
  $scope.cstcin = response.data;
  //alert("Your CIN : "+$scope.cstcin+" And Name : "+$scope.cstname)
 });
    
}



$scope.c_cus = function()
{
    
            if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            
            $scope.bin = $scope.auth.bin;
        }




        $scope.err = 0;
        

        if($scope.form.cname == '' || $scope.form.cname == undefined)
        {
             $scope.errcname = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
             $scope.errcname = 'background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.cemail == '' || $scope.form.cemail == undefined)
        {
             $scope.errcemail = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errcemail ='background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.cpassword == '' || $scope.form.cpassword == undefined)
        {
             $scope.errcpassword = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errcpassword ='background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.cconpassword == '' || $scope.form.cconpassword == undefined)
        {
             $scope.errcconpassword = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            if($scope.form.cconpassword == $scope.form.cpassword)
            {
            $scope.errcconpassword ='background-color: #bfe5bc;';
             $scope.err--;
            }
            else
            {
                $scope.errcconpassword = 'background-color: #f7dede;';
                $scope.err++;
                alert('Password not Match !!');
            }
        }

        if($scope.form.cmobile == '' || $scope.form.cmobile == undefined)
        {
             $scope.errcmobile = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errcmobile ='background-color: #bfe5bc;';
             $scope.err--;
        }
   

        if($scope.form.caddress == '' || $scope.form.caddress == undefined)
        {
             $scope.errcaddress = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errcaddress = 'background-color: #bfe5bc;';
            $scope.err--;
        }

        
            if($scope.err == -6 )
            {

                /*$http({
              method: 'get',
              url: 'Model/c_cus.php?xorg='+$scope.form.cname+'&password='+$scope.form.cpassword+'&xcusemail='+$scope.form.cemail+'&xmobile='+$scope.form.cmobile+'&xdeliveryadd='+$scope.form.caddress+'&xagent='+$scope.rin+'&bin='+$scope.bin
             }).then(function successCallback(response) {
              $scope.cus = response.data[0];
              console.log(response.data);
             });*/


             $http.post(  
                    "http://37.34.252.0/api/c_cus.php",  
                    {'xorg':$scope.form.cname,'password':$scope.form.cpassword,'xcusemail':$scope.form.cemail,'xmobile':$scope.form.cmobile,'xdeliveryadd':$scope.form.caddress,'xagent':$scope.rin,'bin':$scope.bin}  
               ).then(function successCallback(response) {
                    $scope.cus = response.data[0];
                    alert($scope.cus.message +' Your CIN : '+$scope.cus.xcus);  
                  });
            }
        
}








$scope.confirm = function()
{
	if($scope.old == true)
	{
		if($scope.check() == false)
		{
			alert("Please Login first");
		}
	}

	if($scope.check() == true)
		{
			$scope.guest = false;
		}

	if($scope.retailer == true)
	{
		if($scope.check() == false)
		{
			alert("Please Login first");
		}
	}

	if($scope.guest == true)
	{
		$scope.err = 0;
		
		if($scope.form.fname == '' || $scope.form.lname == '' || $scope.form.aemail == '' || $scope.form.apassword == '' || $scope.form.phone =='' || $scope.form.fname == undefined || $scope.form.lname == undefined || $scope.form.aemail == undefined || $scope.form.apassword == undefined || $scope.form.phone == undefined )
		{
			alert("Please fill Personal details required Field");
		}

		if($scope.form.fname == '' || $scope.form.fname == undefined)
		{
			 $scope.errfname = 'background-color: #f7dede;';
			 $scope.err++;
		}
		else
		{
			 $scope.errfname = 'background-color: #bfe5bc;';
			 $scope.err--;
		}

		if($scope.form.lname == '' || $scope.form.lname == undefined)
		{
			 $scope.errlname = 'background-color: #f7dede;';
			 $scope.err++;
		}
		else
		{
			$scope.errlname = 'background-color: #bfe5bc;';
			 $scope.err--;
		}

		if($scope.form.aemail == '' || $scope.form.aemail == undefined)
		{
			 $scope.erraemail = 'background-color: #f7dede;';
			 $scope.err++;
		}
		else
		{
			$scope.erraemail ='background-color: #bfe5bc;';
			 $scope.err--;
		}

		if($scope.form.apassword == '' || $scope.form.apassword == undefined)
		{
			 $scope.errapassword = 'background-color: #f7dede;';
			 $scope.err++;
		}
		else
		{
			$scope.errapassword ='background-color: #bfe5bc;';
			 $scope.err--;
		}

		if($scope.form.phone == '' || $scope.form.phone == undefined)
		{
			 $scope.errphone = 'background-color: #f7dede;';
			 $scope.err++;
		}
		else
		{
			$scope.errphone ='background-color: #bfe5bc;';
			 $scope.err--;
		}
	}
		$scope.errm =0;
		$scope.address ='Company: '+ $scope.form.company + ', Address: ' + $scope.form.address + ', City :'+ $scope.form.city + ', postcode:' + $scope.form.postcode + ', State: '+$scope.form.state + ', Country:' + $scope.form.country;

		if($scope.form.address == '' || $scope.form.address == undefined)
		{
			 $scope.erraddress = 'background-color: #f7dede;';
			 $scope.errm++;
		}
		else
		{
			$scope.erraddress = 'background-color: #bfe5bc;';
			$scope.errm--;
		}

		if($scope.form.country == '' || $scope.form.country == undefined)
		{
			 $scope.errcountry = 'background-color: #f7dede;';
			 $scope.errm++;
		}
		else
		{
			$scope.errcountry ='background-color: #bfe5bc;';
			$scope.errm--;
		}

		if($scope.form.city == '' || $scope.form.city == undefined)
		{
			 $scope.errcity = 'background-color: #f7dede;';
			 $scope.errm++;
		}
		else
		{
			$scope.errcity ='background-color: #bfe5bc;';
			$scope.errm--;
		}

		if($scope.form.postcode == '' || $scope.form.postcode == undefined)
		{
			 $scope.errpostcode = 'background-color: #f7dede;';
			 $scope.errm++;
		}
		else
		{
			$scope.errpostcode ='background-color: #bfe5bc;';
			$scope.errm--;
		}

		if($scope.form.state == '' || $scope.form.state == undefined)
		{
			 $scope.errstate = 'background-color: #f7dede;';
			 $scope.errm++;
		}
		else
		{
			$scope.errstate ='background-color: #bfe5bc;';
			$scope.errm--;
		}

				if($scope.form.phone == undefined || $scope.form.phone == '')
				{
					$scope.phone = $scope.auth.phone;
					
				}
				else
				{
					$scope.phone = $scope.form.phone;
				}
				
				if($scope.form.comment == undefined || $scope.form.comment == '')
				{
					$scope.comment = '';
				}
				else
				{
					$scope.comment = $scope.form.comment;
				}

				if($scope.form.ref == undefined || $scope.form.ref == '')
				{
					$scope.ref = '';
				}
				else
				{
					$scope.ref = $scope.form.ref;
				}

		if($scope.guest == true)
		{
			if($scope.err == -5 && $scope.errm == -5)
			{
                if($scope.payment == 'Wallet')
                {
				$http.post(  
	                "Model/reg.php",  
	                {'fname':$scope.form.fname,'lname':$scope.form.lname,'password':$scope.form.apassword,'email':$scope.form.aemail,'phone':$scope.form.phone,'company':$scope.form.company,'address':$scope.form.address,'country':$scope.form.country}  
	           ).then(function successCallback(response) {
	                $scope.user = response.data;
	                $scope.uid =  $scope.user.lastId;
	                $http.post(  
	                "Model/order.php",  
	                {'total':$scope.fp(),'ref':$scope.ref,'scost':$scope.sp,'address':$scope.address,'phone':$scope.phone,'payment':$scope.payment,'user':$scope.uid,'comment':$scope.comment}  
	           ).then(function successCallback(response) {
	                $scope.order = response.data;
	                angular.forEach($scope.cart, function(value, key) {
	                  		$scope.pid = value.id;
				            $scope.oprice = value.price;
				            $scope.oqty = value.qty;
				            $scope.color = ''; 
				                  $http.post(  
							                "Model/orderdetails.php",  
							                {'orderId':$scope.order.orderId,'pId':$scope.pid,'on':$scope.order.orderNumber,'price':$scope.oprice,'qty':$scope.oqty,'color':$scope.color}  
							           ).then(function successCallback(response) {
							                $scope.od = response.data;
							              });     
				        });
	                  alert($scope.order.message);
	              });   
	              });
           }
           else
           {
            $location.path('payment');
           }
			}
		}
	else
		{
			if($scope.check() == true)
				{
					$scope.uid = $scope.auth.id;
				}
		if($scope.errm == -5)
			{
				$http.post(  
	                "Model/order.php",  
	                {'total':$scope.fp(),'ref':$scope.ref,'scost':$scope.sp,'address':$scope.address,'phone':$scope.phone,'payment':$scope.payment,'user':$scope.uid,'comment':$scope.comment}  
	           ).then(function successCallback(response) {
	                $scope.order = response.data;
	                  angular.forEach($scope.cart, function(value, key) {
	                  		$scope.pid = value.id;
				            $scope.oprice = value.price;
				            $scope.oqty = value.qty;
				            $scope.color = ''; 
				                  $http.post(  
							                "Model/orderdetails.php",  
							                {'orderId':$scope.order.orderId,'pId':$scope.pid,'on':$scope.order.orderNumber,'price':$scope.oprice,'qty':$scope.oqty,'color':$scope.color}  
							           ).then(function successCallback(response) {
							                $scope.od = response.data;
							              });     
				        });
	                  alert($scope.order.message);
	              });
	       	}
		}
}

$scope.od = [];

$scope.docnumber = function(bin,rin)
{

   if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }


        $http({
  method: 'get',
  url: 'http://37.34.252.0/api/docnum.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&bin='+$scope.bin+'&rin='+$scope.rin
 }).then(function successCallback(response) {
   $scope.od = response.data[0];

   $scope.form.odnum = $scope.od.dn;
 });


}

$scope.confirmr = function(odn)
{
        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }

    
        $scope.err = 0;
        

        if($scope.form.cin == '' || $scope.form.cin == undefined)
        {
             $scope.errcin = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
             $scope.errcin = 'background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.name == '' || $scope.form.name == undefined)
        {
             $scope.errname = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errname = 'background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.rfrin == '' || $scope.form.rfrin == undefined)
        {
             $scope.errrfrin = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errrfrin ='background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.omobile == '' || $scope.form.omobile == undefined)
        {
             $scope.errmobile = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errmobile ='background-color: #bfe5bc;';
             $scope.err--;
        }

        if($scope.form.oaddress == '' || $scope.form.oaddress == undefined)
        {
             $scope.erroaddress = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.erroaddress ='background-color: #bfe5bc;';
             $scope.err--;
        }
            if($scope.err == -5)
            {
                
                $scope.row = 0;
                $scope.cus = $scope.form.cin;
                $scope.cusname = $scope.form.name;
                $scope.odnum = $scope.form.odnum;
                if($scope.odnum != '' || $scope.odnum != undefined)
                {
                angular.forEach($scope.cart, function(value, key) {
                            $scope.pid = value.id;
                            $scope.row += 1;
                            $scope.qty = value.qty;
                            
                            $http.post(  
                                            "http://37.34.252.0/api/r_order.php",  
                                            {'id':value.id,'bin':$scope.bin,'rin':$scope.rin,'xrow':$scope.row,'refrin':$scope.form.rfrin,'xcus':$scope.cus,'xcusdt':$scope.cusname,'xqty':$scope.qty,'odnum':$scope.odnum}  
                                       ).then(function successCallback(response) {
                                            $scope.od = response.data[0];
                                            
                                          });  

                        
                        });
                if($scope.od >0 || $scope.od !='')
                {
                    alert('Order Posted Successfully...');
                    $scope.ch =[];
                        $cookies.putObject('chart',$scope.ch);
                    $scope.path = 'invoice_det/'+$scope.odnum;
                    $location.path($scope.path);
                }
                else
                {
                    alert('Order can\'t  Posted ');
                }

                }

                
        }
    
        
}

//7zy#L33v930m

$scope.docnum = function()
{

   if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }


        $http({
  method: 'get',
  url: 'http://37.34.252.0/api/docnumber.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&bin='+$scope.bin+'&rin='+$scope.rin
 }).then(function successCallback(response) {
   $scope.od = response.data[0];

   $scope.form.odnum = $scope.od.dn;
 });


}



$scope.confirmcor = function(odn)
{
        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }

    
        $scope.err = 0;
        $scope.er = 0;
        
        
        $cookies.put('name',$scope.form.name); 
        $scope.name = $cookies.get('name');
        $cookies.put('mn',$scope.form.omobile); 
        $scope.mn = $cookies.get('mn');
        $cookies.put('em',$scope.form.email); 
        $scope.em = $cookies.get('em');
        
        
        $scope.c =$cookies.getObject('chart');
    angular.forEach($scope.c, function(value, key) {
                            
                              $scope.ct = value.count;

                              if($scope.ct == 1)
                              {
                                  if($scope.form.outlet1 == '' || $scope.form.outlet1 == undefined)
                                {
                                     $scope.er = 1;
                                }
                                else
                                {
                                    $cookies.put('ot1',$scope.form.outlet1);
                                }
                            }
                            else if($scope.ct == 2)
                              {
                                  if($scope.form.outlet2 == '' || $scope.form.outlet2 == undefined)
                                {
                                     $scope.er = 1;
                                }
                                else
                                {
                                    $cookies.put('ot2',$scope.form.outlet2);
                                }
                            }

                            else if($scope.ct == 3)
                              {
                                  if($scope.form.outlet3 == '' || $scope.form.outlet3 == undefined)
                                {
                                     $scope.er = 1;
                                }
                                else
                                {
                                    $cookies.put('ot3',$scope.form.outlet3);
                                }
                            }
                            else if($scope.ct == 4)
                              {
                                  if($scope.form.outlet4 == '' || $scope.form.outlet4 == undefined)
                                {
                                     $scope.er = 1;
                                }
                                else
                                {
                                    $cookies.put('ot4',$scope.form.outlet4);
                                }
                            }
                            else if($scope.ct == 5)
                              {
                                  if($scope.form.outlet5 == '' || $scope.form.outlet5 == undefined)
                                {
                                     $scope.er = 1;
                                }
                                else
                                {
                                    $cookies.put('ot5',$scope.form.outlet5);
                                }
                            }
                            else 
                              {
                                     $scope.er = 0;
                            }
                                         
                        });
    if($scope.er==1)
    {
        alert('Select Outlet');
    }
    else
    {



        if($scope.form.cin == '' || $scope.form.cin == undefined)
        {
             $scope.errcin = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
             $scope.errcin = 'background-color: #bfe5bc;';
             $cookies.put('cin',$scope.form.cin);
             $scope.err--;
        }

        if($scope.form.name == '' || $scope.form.name == undefined)
        {
             $scope.errname = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errname = 'background-color: #bfe5bc;';
            $cookies.put('name',$scope.form.name);
             $scope.err--;
        }

        if($scope.form.rfrin == '' || $scope.form.rfrin == undefined)
        {
             $scope.errrfrin = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errrfrin ='background-color: #bfe5bc;';
            $cookies.put('rfrin',$scope.form.rfrin);
             $scope.err--;
        }

        if($scope.form.omobile == '' || $scope.form.omobile == undefined)
        {
             $scope.errmobile = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.errmobile ='background-color: #bfe5bc;';
            $cookies.put('mobile',$scope.form.omobile);
             $scope.err--;
        }

        if($scope.form.oaddress == '' || $scope.form.oaddress == undefined)
        {
             $scope.erroaddress = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
            $scope.erroaddress ='background-color: #bfe5bc;';
             $scope.err--;
        }
            if($scope.err == -5)
            {



                if($scope.payment == 'Wallet')
                {

                $scope.row = 0;
                $scope.cus = $scope.form.cin;
                $scope.cusname = $scope.form.name;
                
                $scope.odnum = $scope.form.odnum;
                if($scope.odnum != '' || $scope.odnum != undefined)
                {
                angular.forEach($scope.cart, function(value, key) {
                            $scope.pid = value.id;
                            $scope.row += 1;
                            if(value.count ==1)
                            {
                                $scope.xsupdt = $scope.form.outlet1;
                            }
                            if(value.count ==2)
                            {
                                $scope.xsupdt = $scope.form.outlet2;
                            }
                            if(value.count ==3)
                            {
                                $scope.xsupdt = $scope.form.outlet3;
                            }
                            if(value.count ==4)
                            {
                                $scope.xsupdt = $scope.form.outlet4;
                            }
                            if(value.count ==5)
                            {
                                $scope.xsupdt = $scope.form.outlet5;
                            }
                            $scope.qty = value.qty;
                            
                            $http.post(  
                                            "http://37.34.252.0/api/c_order.php",  
                                            {'id':value.id,'bin':$scope.bin,'rin':$scope.rin,'xrow':$scope.row,'refrin':$scope.form.rfrin,'xcus':$scope.cus,'xcusdt':$scope.cusname,'xqty':$scope.qty,'odnum':$scope.odnum,'xsupdt':$scope.xsupdt,'xpay':$scope.payment}  
                                       ).then(function successCallback(response) {
                                            $scope.od = response.data[0];
                                            console.log($scope.od);
                                          });  

                        
                        });
                if($scope.od.id > 0 || $scope.od.id !='')
                {
                    alert('Order Posted Successfully...');
                    $scope.ch =[];
                        $cookies.putObject('chart',$scope.ch);
                    $scope.path = 'invoice_det/'+$scope.odnum;
                    $location.path($scope.path);
                }
                else
                {
                    alert('Order can\'t  Posted ');
                }

                }

                }
                else
                {
                    $location.path('payment_cor');
                   //alert("Online Payment Not available");
                }
        }
    
    }
}


$scope.confirmcorssl = function()
{

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }



                $scope.row = 0;
                $scope.cus = $cookies.get('cin');
                $scope.cusname = $cookies.get('name');
                $scope.rfrin = $cookies.get('rfrin');
                $scope.odnum = $routeParams.cnum;
                if($scope.odnum != '' || $scope.odnum != undefined)
                {
                angular.forEach($scope.cart, function(value, key) {
                            $scope.pid = value.id;
                            $scope.row += 1;
                            if(value.count ==1)
                            {
                                $scope.xsupdt = $cookies.get('ot1');
                            }
                            if(value.count ==2)
                            {
                                $scope.xsupdt = $cookies.get('ot2');
                            }
                            if(value.count ==3)
                            {
                                $scope.xsupdt = $cookies.get('ot3');
                            }
                            if(value.count ==4)
                            {
                                $scope.xsupdt = $cookies.get('ot4');
                            }
                            if(value.count ==5)
                            {
                                $scope.xsupdt = $cookies.get('ot5');
                            }
                            $scope.qty = value.qty;
                            
                            //alert(value.id+$scope.bin+$scope.rin+$scope.row+$scope.rfrin+$scope.cus+$scope.cusname+$scope.qty+$scope.odnum+$scope.xsupdt+$scope.payment);

                            $http.post(  
                                            "http://37.34.252.0/api/c_order.php",  
                                            {'id':value.id,'bin':$scope.bin,'rin':$scope.rin,'xrow':$scope.row,'refrin':$scope.rfrin,'xcus':$scope.cus,'xcusdt':$scope.cusname,'xqty':$scope.qty,'odnum':$scope.odnum,'xsupdt':$scope.xsupdt,'xpay':$scope.payment}  
                                       ).then(function successCallback(response) {
                                            $scope.od = response.data[0];
                                            console.log($scope.od);
                                          });  

                        
                        });
                if($scope.od = "" || $scope.od != undefined)
                {
                    alert('Order Posted Successfully...');
                    $scope.ch =[];
                        $cookies.putObject('chart',$scope.ch);
                    $scope.path = 'invoice_det/'+$scope.odnum;
                    $location.path($scope.path);
                }
                else
                {
                    alert('Order can\'t  Posted ');
                }

                }

        
}

$scope.reqnum = function(bin,rin)
{

   if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }


        $http({
  method: 'get',
  url: 'http://37.34.252.0/api/reqnum.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&bin='+$scope.bin+'&rin='+$scope.rin
 }).then(function successCallback(response) {
   $scope.req = response.data[0];

   $scope.form.reqnum = $scope.req.dn;

   
 });


}


$scope.confirmreq = function()
{
        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }

    
        $scope.err = 0;
        

        if($scope.form.comment == '' || $scope.form.comment == undefined)
        {
             $scope.errcom = 'background-color: #f7dede;';
             $scope.err++;
        }
        else
        {
             $scope.errcom = 'background-color: #bfe5bc;';
             $scope.err--;
        }
 
    

            //$scope.cmt.push({com:$scope.form.comment});
                 $cookies.put('cmt',$scope.form.comment); 
                 $scope.cmnt = $cookies.get('cmt');
                 $cookies.put('em',$scope.form.email); 
                 $scope.em = $cookies.get('em');
                 $scope.reqnum = $scope.form.reqnum;

                 
       
            if($scope.err == -1)
            {
                if($scope.payment == 'Wallet')
                {
                $scope.reqnum = $scope.form.reqnum;
                $scope.xnote = $scope.form.comment;


                $scope.usr = 'apiuser';
                $scope.psw = 'ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8';
                $http.post(  
                "http://37.34.252.0/api/req.php",  
                {'username':$scope.usr,'password':$scope.psw ,'rin':$scope.rin, 'bin':$scope.bin,'reqnum':$scope.reqnum,'xnote':$scope.xnote,'xpaymethod':$scope.payment}  
                    ).then(function successCallback(response) {
                     $scope.reqd = response.data['0'];
                     
                     if($scope.reqd.r == 1)
                     {
                        alert("Requisition Posted Successfully");
                        $scope.row = 0;


                        angular.forEach($scope.cart, function(value, key) {
                            $scope.row += 1;
                            $scope.qty = value.qty;
                            $scope.rate = value.rprice;
                            $scope.sku = value.xitemcode;
                            
                            $http.post(  
                                "http://37.34.252.0/api/reqdt.php",  
                                {'username':$scope.usr,'password':$scope.psw,'rin':$scope.rin,'reqnum':$scope.reqnum,'xrow':$scope.row,'xitemcode':$scope.sku,'xqty':$scope.qty,'rate':$scope.rate,'xpaymethod':$scope.payment}  
                                 ).then(function successCallback(response) {
                                            $scope.reqdet = response.data[0];
                                            
                                          });                          
                        });

                        $scope.ch =[];
                        $cookies.putObject('chart',$scope.ch);
                        $location.path('home');

                    }
                    else
                        {
                            alert("Requisition can't Posted");
                        }


                     });
               }
               else if($scope.payment == 'Bkash')
               {
                   
                   $scope.url = 'bkashreq/'+$scope.reqnum;
                $location.path($scope.url);
               }
               else
               {
                $location.path('payment_req');
               }
        }
    
        
}


$scope.confirmreqssl = function()
{
        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }

    
        $scope.err = 0;
    
        $scope.rnum = $routeParams.rnum;
        

        
            if($scope.err == 0)
            {
                
                $scope.reqnum = $routeParams.rnum;
                $scope.xnote = $scope.cmnt;


                $scope.usr = 'apiuser';
                $scope.psw = 'ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8';
                
                $http.post(  
                "http://37.34.252.0/api/req.php",  
                {'username':$scope.usr,'password':$scope.psw ,'rin':$scope.rin, 'bin':$scope.bin,'reqnum':$scope.reqnum,'xnote':$scope.xnote,'xpaymethod':$scope.payment}  
                    ).then(function successCallback(response) {
                     $scope.reqd = response.data['0'];
                     
                     if($scope.reqd.r == 1)
                     {
                        alert("Requisition Posted Successfully");
                        $scope.row = 0;


                        angular.forEach($scope.cart, function(value, key) {
                            $scope.row += 1;
                            $scope.qty = value.qty;
                            $scope.rate = value.rprice;
                            $scope.sku = value.xitemcode;
                            
                            $http.post(  
                                "http://37.34.252.0/api/reqdt.php",  
                                {'username':$scope.usr,'password':$scope.psw,'rin':$scope.rin,'reqnum':$scope.reqnum,'xrow':$scope.row,'xitemcode':$scope.sku,'xqty':$scope.qty,'rate':$scope.rate,'xpaymethod':$scope.payment}  
                                 ).then(function successCallback(response) {
                                            $scope.reqdet = response.data[0];
                                            
                                          });                          
                        });

                        $scope.ch =[];
                        $cookies.putObject('chart',$scope.ch);
                        $cookies.put('cmt',$scope.ch);
                        $location.path('home');

                    }
                    else
                        {
                            alert("Requisition can't Posted");
                        }


                     });
               
        }
    
        
}




$scope.b_pay = function() { 
    $scope.id = $scope.form.trxid;

  $http({
  method: 'get',
  url: 'Model/bkash.php?trxid='+$scope.id
 }).then(function successCallback(response) {
  $scope.bkash = response.data[0];
  if($scope.bkash.trxst[0] == '0000')
  {
        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

        if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.bin = '';
        }
        else
        {
            $scope.bin = $scope.auth.bin;
        }

    
        $scope.err = 0;
    
        $scope.rnum = $routeParams.rnum;
        

        
            if($scope.err == 0)
            {
                
                $scope.reqnum = $routeParams.rnum;
                $scope.xnote = $scope.cmnt;


                $scope.usr = 'apiuser';
                $scope.psw = 'ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8';
                
                $http.post(  
                "http://37.34.252.0/api/req.php",  
                {'username':$scope.usr,'password':$scope.psw ,'rin':$scope.rin, 'bin':$scope.bin,'reqnum':$scope.reqnum,'xnote':$scope.xnote,'xpaymethod':$scope.payment}  
                    ).then(function successCallback(response) {
                     $scope.reqd = response.data['0'];
                     
                     if($scope.reqd.r == 1)
                     {
                        alert("Requisition Posted Successfully");
                        $scope.row = 0;


                        angular.forEach($scope.cart, function(value, key) {
                            $scope.row += 1;
                            $scope.qty = value.qty;
                            $scope.rate = value.rprice;
                            $scope.sku = value.xitemcode;
                            
                            $http.post(  
                                "http://37.34.252.0/api/reqdt.php",  
                                {'username':$scope.usr,'password':$scope.psw,'rin':$scope.rin,'reqnum':$scope.reqnum,'xrow':$scope.row,'xitemcode':$scope.sku,'xqty':$scope.qty,'rate':$scope.rate,'xpaymethod':$scope.payment}  
                                 ).then(function successCallback(response) {
                                            $scope.reqdet = response.data[0];
                                            
                                          });                          
                        });

                        $scope.ch =[];
                        $cookies.putObject('chart',$scope.ch);
                        $cookies.put('cmt',$scope.ch);
                        $location.path('home');

                    }
                    else
                        {
                            alert("Requisition can't Posted");
                        }


                     });
               
        }
    }
    else
    {
        alert($scope.bkash.message);
    }
 });
}





$scope.wallet = function()
{
	$scope.purl= '#!wallet';
    $scope.cbal();
    
	return $scope.payment = "Wallet";
}

$scope.ssl = function()
{
	$scope.purl= '#!ssl';
	return $scope.payment = "Online payment";
}

$scope.bkash = function()
{
	$scope.purl= '#!bkash';
	return $scope.payment = "Bkash";
}

$scope.logout = function()
{
	$scope.au =[];
    $cookies.putObject('auth',$scope.au); 
    $scope.old = false;
    $scope.retailer = false;
    $scope.cbal();
    $scope.show();
    return $scope.guest = true;
}


$scope.bv = function() { 
$scope.bv = $routeParams.bv;
$scope.startfrom = $scope.parpage*$scope.page;
$scope.ofset = $scope.startfrom;
    
  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/bv.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&bv='+$scope.bv+'&lim='+$scope.parpage+'&ofset='+$scope.ofset
 }).then(function successCallback(response) {
  $scope.bv_p();
  $scope.bproduct = response.data;
 });
}


$scope.bv_p = function()
{
    $scope.bv = $routeParams.bv;
    
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/bv_p.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&bv='+$scope.bv
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
return $scope.lid;
}


$scope.search = function() { 

$scope.startfrom = $scope.parpage*$scope.page;
$scope.ofset = $scope.startfrom;
if( $scope.form.search == undefined || $scope.form.search =='' )
{
            $scope.q = '';
  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/search.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&lim='+$scope.parpage+'&ofset='+$scope.ofset
 }).then(function successCallback(response) {
  $scope.sproduct = response.data;
  $scope.search_p();
 });   
}
else
{
	$scope.q = $scope.form.search;
  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/search.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&q='+$scope.q+'&lim='+$scope.parpage+'&ofset='+$scope.ofset
 }).then(function successCallback(response) {
  $scope.search_p();
  $scope.sproduct = response.data;
 });
}
}

$scope.new_p = function() { 

  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/new_item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8'
 }).then(function successCallback(response) {
  $scope.nproduct = response.data;
 });
}

$scope.rel_p = function() { 

  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/rel_item.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&cat='+$scope.ctgid
 }).then(function successCallback(response) {
  $scope.rproduct = response.data;
 });
}

$scope.cat = function() { 

  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/category.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8'
 }).then(function successCallback(response) {
  $scope.xcat = response.data;
 });
}

$scope.invoice = function() { 
    if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/invoice_list.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&rin='+$scope.rin
 }).then(function successCallback(response) {
  $scope.invoice = response.data;
 });
}

$scope.tdis= 0;
$scope.tr = 0;
$scope.tbv = 0;




$scope.invoice_det = function() { 
    $scope.inv = $routeParams.invnum;

  $http({
  method: 'get',
  url: 'http://37.34.252.0/api/invoice_det.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&invnum='+$scope.inv
 }).then(function successCallback(response) {
  $scope.invoicedet = response.data;
  angular.forEach($scope.invoicedet, function(value, key) {
                            $scope.tdis += (value.xdisc-0);  
                            $scope.tr += (value.xqty * value.xsalesprice);
                            $scope.tbv += (value.xpoint-0);          
                        });
 });
}

$scope.search_p = function()
{
    $scope.q = $scope.form.search;
    if( $scope.form.search == undefined || $scope.form.search =='' )
{
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/search_page.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8'
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}
else
{
    $http({
  method: 'get',
  url: 'http://37.34.252.0/api/search_page.php?username=apiuser&password=ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8&q='+$scope.q
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
return $scope.lid;
}
}

$scope.allsrcproduct = function()
{
	$scope.qa = $scope.form.search;
	if( $scope.form.search == undefined || $scope.form.search =='' )
{
	$http({
  method: 'get',
  url: 'Model/allsrcProduct.php'
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
}
else
{
	$http({
  method: 'get',
  url: 'Model/allsrcProduct.php?q='+$scope.qa
 }).then(function successCallback(response) {
   $scope.np = response.data;
$scope.totalPage =  Math.ceil($scope.np/$scope.parpage);
$scope.tlp =[];
$scope.lid =0;
for (var i = 0; i < $scope.totalPage; i++) {
        $scope.tlp.push(i);
        $scope.lid+=1;
        }
 });
return $scope.lid;
}
}


$scope.add =function(id,qty,name,image,price,rprice,sku,source,point)
{
    $scope.source = source;

    if($cookies.getObject('auth') == "" || $cookies.getObject('auth') == null || $cookies.getObject('auth') == undefined)
        {
            $scope.rin = '';
        }
        else
        {
            $scope.rin = $scope.auth.rin;
        }

    if($scope.rin != '')
    {

    if($scope.source == 'OSP')
    {
	$scope.id = id;
	$scope.qty = qty;
    $scope.sku = sku;
	$scope.name = name;
	$scope.image = image;
	$scope.price = price;
    $scope.rprice = rprice;
    $scope.source = source;
    $scope.bv = point;

    if($cookies.get('ck') == 'true' || $cookies.get('ck') == 'corporate')
    {
       // $cookies.remove("chart");
       $scope.car = $cookies.getObject('chart');
       angular.forEach($scope.car, function (index, value) {
             $scope.remove(index-1);
             $scope.tp();
            $scope.fp();
        });
       
        //alert($cookies.getObject('chart'));
        if($cookies.getObject('chart') == '' || $cookies.getObject('chart').length <= 0)
        {
            $scope.rck = false;
        $cookies.put('ck',$scope.rck);
        $scope.add(id,qty,name,image,price,rprice,sku,source);
            $scope.show();
        }
        
    }
    else
    {

	$scope.duplicate = 0;
	angular.forEach($scope.cart, function(value, key) {
	                  		if ( value.id == id)
	                  		{
	                  			$scope.duplicate = 1;
	                  			$scope.plus(id);
	                  		}            
				        });
	if($scope.duplicate == 0)
	{
 $scope.ch.push({id:$scope.id, qty:$scope.qty, name:$scope.name, image:$scope.image , price:$scope.price, rprice:$scope.rprice, xitemcode:$scope.sku,source:$scope.source,bv:$scope.bv});
 $cookies.putObject('chart',$scope.ch); 
 $scope.cart = $cookies.getObject('chart');
 $scope.rck=false;
 $cookies.put('ck',$scope.rck); 
 $scope.cbal();
 $scope.show();
 $scope.tp();
 $scope.fp();
	}
	else
	{
		//alert("Already added to Cart");
	}
}
}
else
{
    alert('Only Retail Product');
}
}
else
{
    $scope.id = id;
    $scope.qty = qty;
    $scope.sku = sku;
    $scope.name = name;
    $scope.image = image;
    $scope.price = price;
    $scope.rprice = rprice;
    $scope.source = source;
    $scope.bv = point;
    $scope.duplicate = 0;
    angular.forEach($scope.cart, function(value, key) {
                            if ( value.id == id)
                            {
                                $scope.duplicate = 1;
                                $scope.plus(id);
                            }            
                        });
    if($scope.duplicate == 0)
    {
 $scope.ch.push({id:$scope.id, qty:$scope.qty, name:$scope.name, image:$scope.image , price:$scope.price, rprice:$scope.rprice, xitemcode:$scope.sku,source:$scope.source,bv:$scope.bv});
 $cookies.putObject('chart',$scope.ch); 
 $scope.cart = $cookies.getObject('chart');
 $scope.rck=false;
 $cookies.put('ck',$scope.rck); 
 $scope.cbal();
 $scope.show();
 $scope.tp();
 $scope.fp();
    }
    else
    {
        //alert("Already added to Cart");
    }
}
}

$scope.cle = function()
{
   return $cookies.remove("chart");
}
$scope.addr =function(id,qty,name,image,price,rprice,sku,point)
{
    $scope.id = id;
    $scope.sku = sku;
    $scope.qty = qty;
    $scope.name = name;
    $scope.image = image;
    $scope.price = price;
    $scope.rprice = rprice;
    $scope.bv = point;
    if($cookies.get('ck') == 'false' || $cookies.get('ck') == 'corporate')
    {
       // $cookies.remove("chart");
       $scope.car = $cookies.getObject('chart');
       angular.forEach($scope.car, function (index, value) {
             $scope.remove(index-1);
             $scope.tp();
            $scope.fp();
        });
       
        //alert($cookies.getObject('chart'));
        if($cookies.getObject('chart') == '' || $cookies.getObject('chart').length <= 0)
        {
            $scope.rck= true;
        $cookies.put('ck',$scope.rck);
        $scope.addr(id,qty,name,image,price,rprice,sku,point);
            $scope.show();
        }
        
    }
    else
    {
    
    $scope.duplicate = 0;
    angular.forEach($scope.cart, function(value, key) {
                            if ( value.id == id)
                            {
                                $scope.duplicate = 1;
                                $scope.plus(id);
                            }            
                        });
    if($scope.duplicate == 0)
    {
 $scope.ch.push({id:$scope.id, qty:$scope.qty, name:$scope.name, image:$scope.image , price:$scope.price, rprice:$scope.rprice, xitemcode:$scope.sku,bv:$scope.bv });
 $cookies.putObject('chart',$scope.ch); 
 $scope.cart = $cookies.getObject('chart');
 $scope.rck= true;
 $cookies.put('ck',$scope.rck);
 $scope.show();
 $scope.tp();
 $scope.fp();
    }
    else
    {
        //alert("Already added to Cart");
    }
}

}



$scope.addc =function(id,qty,name,image,price,sup,sku,point)
{
    
    $scope.id = id;
    $scope.sku = sku;
    $scope.qty = qty;
    $scope.name = name;
    $scope.image = image;
    $scope.price = price;
    $scope.sup = sup; 
    $scope.bv = point;
    if($cookies.get('ck') == 'false' || $cookies.get('ck') == 'true')
    {
       // $cookies.remove("chart");
       $scope.car = $cookies.getObject('chart');
       angular.forEach($scope.car, function (index, value) {
             $scope.remove(index);
        });
       
        //alert($cookies.getObject('chart'));
        if($cookies.getObject('chart') == '' || $cookies.getObject('chart').length <= 0)
        {
            $scope.rc= 'corporate';
            $cookies.put('ck',$scope.rc);
        $scope.addc(id,qty,name,image,price,sup,sku,point);
            $scope.show();
        }
        
    }
    else
    {
    $scope.duplicate = 0;
    angular.forEach($scope.cart, function(value, key) {
                            if ( value.id == id)
                            {
                                $scope.duplicate = 1;
                                $scope.plus(id);
                            }
                            if((value.count-0) >=5 )
                            {
                                alert('you added maximum number of cart');
                                $scope.duplicate = 1;
                            }            
                        });
    if($scope.duplicate == 0)
    {
        $scope.count +=1;
        $scope.outlet ='form.outlet'+$scope.count;
 $scope.ch.push({count:$scope.count,id:$scope.id, qty:$scope.qty, name:$scope.name, image:$scope.image , price:$scope.price, sup:$scope.sup, xitemcode:$scope.sku,bv:$scope.bv,outlet:$scope.outlet });
 $cookies.putObject('chart',$scope.ch); 
 $scope.cart = $cookies.getObject('chart');
 console.log($scope.cart);
 $scope.rc= 'corporate';
 $cookies.put('ck',$scope.rc);
 $scope.show();
 $scope.tp();
 $scope.fp();
    }
    else
    {
        //alert("Already added to Cart");
    }

}


}






}]);


</script> 

<script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
        document.getElementById("puss-canvas").style.marginLeft = "-400px";
        jQuery(".closebtn").show();  
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("puss-canvas").style.marginLeft = "0";
         jQuery(".closebtn").hide();
    }
    ;
</script> 
<script type="text/javascript">
var $typeheader = 'header-home6';
</script>

</body>
</html>
