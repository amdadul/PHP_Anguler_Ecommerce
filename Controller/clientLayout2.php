<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="theme-color" content="#ef2c1a">
<!-- jQuery core, needed if not already present! -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<link rel="icon" href="images/logo.png" type="image/gif" >

<!-- AJAX-ZOOM core, needed! -->
<link href="../axZm/axZm.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../axZm/jquery.axZm.js"></script>

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
     


 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



<!-- Include mousewheel script, optional -->
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.mousewheel.min.js"></script>

<!-- Include thumbSlider JS & CSS, optional -->
<link rel="stylesheet" type="text/css" href="../axZm/extensions/axZmThumbSlider/skins/default/jquery.axZm.thumbSlider.css" />
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.axZm.thumbSlider.js"></script>

<!-- Include mouseOverZoomTiles JS & CSS, needed! -->
<link rel="stylesheet" type="text/css" href="../axZm/extensions/jquery.axZm.mouseOverZoomTiles.css" />
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.mouseOverZoomTiles.js"></script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{1836001726691749}',
      cookie     : true,
      xfbml      : true,
      version    : '{v2.11}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
</script>


<script>
var finished_rendering = function() {
  console.log("finished rendering plugins");
  var spinner = document.getElementById("spinner");
  spinner.removeAttribute("style");
  spinner.removeChild(spinner.childNodes[0]);
}
FB.Event.subscribe('xfbml.render', finished_rendering);
</script>

 <link href="view/css/css/bootstrap-theme.min.css" rel="stylesheet">
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<link rel="stylesheet" media="all" href="css/adminMenu.css" type="text/css" /><style type="text/css">._css3m{display:none}</style><link rel="stylesheet" type="text/css" href="css/products.css">
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link rel="stylesheet" type="text/css" href="shared/main.css">
<link rel="stylesheet" type="text/css" href="css/comment.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }
    
   

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	
	 ul.nav li a:visited {
    color: #fff !important;
	background-color: #ff5500;
}

ul.nav li a:hover, ul.nav li a:active {
    color: #fff !important;
	background-color: #e24916;
}

footer{
background-color: rgb(229, 229, 224);
}

footer a{
	text-decoration:none;
	color:black;
}

footer a:hover{
	text-decoration:none;
	color:blue;
}


 title{
        background-color: red;
    }
    
    
    .card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.cart{
            
            background-color:#9c9c9c;
            text-align:center;
            margin-top:-10px;
            color:#fff;
            }
            
            .cart a{
   		text-decoration:none;
            color:#fff;
            }

ul.nav li.active a {
    color: #fff !important;
	background-color: #ff5500;
}

.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    background-color: #ff5500;
    border-color: #337ab7;
}

.navbar-brand { 
  width: 150px;
  height: 50px;
 
  background-size: 50px;  
}

.nav-tabs {
  display: inline-block;
  border-bottom: none;
  padding-top: 15px;
  font-weight: bold;
}
.nav-tabs > li > a, 
.nav-tabs > li > a:hover, 
.nav-tabs > li > a:focus, 
.nav-tabs > li.active > a, 
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  border: none;
  border-radius: 0;
  background-color: #ce3f02;
  color:black;
}
body { 
    padding-top: 50px; 
}

.nav-list {  }
.nav-list > li { 
  padding: 20px 15px 15px;
  
}
.nav-list > li:last-child {  }
.nav-list > li > a:hover { text-decoration: none; }
.nav-list > li > a > span {
  display: block;
  font-weight: bold;
  color: #000000;
  text-transform: uppercase;
}

.mega-dropdown { position: static !important; }
.mega-dropdown-menu {

  padding: 20px 15px 15px;
  text-align: center;
  width: 100%;
}

.navbar-custom {
    background-color: #ff5500;
}
/* change the brand and text color */
.navbar-custom .navbar-brand,
.navbar-custom .navbar-text {
    color: rgba(255,255,255,.8);
}
/* change the link color */
.navbar-custom .navbar-nav .nav-link {
    color: rgba(255,255,255,.5);
}
/* change the color of active or hovered links */
.navbar-custom .nav-item.active .nav-link,
.navbar-custom .nav-item:hover .nav-link {
    color: #fff;
}

.icon-bar {
  color: black;
  border-color: black;
  background-color: black;
}

.navbar >a {
    color: #fff;
    text-decoration: none;
}

.nav>li>a {
   color: #fff;
}
.mega-dropdown>a{background-color: #ff5500;}


   #anim_3 {
  -webkit-animation: KEYFRAME-NAME 0.5s;
  -moz-animation:    KEYFRAME-NAME 0.5s;
  -o-animation:      KEYFRAME-NAME 0.5s;
  animation:         KEYFRAME-NAME 0.5s;
  
}

 #anim_4 {
  -webkit-animation: KEYFRAME-NAME2 0.7s;
  -moz-animation:    KEYFRAME-NAME2 0.7s;
  -o-animation:      KEYFRAME-NAME2 0.7s;
  animation:         KEYFRAME-NAME2 0.7s;
  
}

#anim_5 {
  -webkit-animation: KEYFRAME-NAME3 0.9s;
  -moz-animation:    KEYFRAME-NAME3 0.9s;
  -o-animation:      KEYFRAME-NAME3 0.9s;
  animation:         KEYFRAME-NAME3 0.9s;
   
}

#anim_6 {
  -webkit-animation: KEYFRAME-NAME4 1.1s;
  -moz-animation:    KEYFRAME-NAME4 1.1s;
  -o-animation:      KEYFRAME-NAME4 1.1s;
  animation:         KEYFRAME-NAME4 1.1s;
}

#anim_7 {
  -webkit-animation: KEYFRAME-NAME5 1.3s;
  -moz-animation:    KEYFRAME-NAME5 1.3s;
  -o-animation:      KEYFRAME-NAME5 1.3s;
  animation:         KEYFRAME-NAME5 1.3s;
}

#anim_8 {
  -webkit-animation: KEYFRAME-NAME6 1.5s;
  -moz-animation:    KEYFRAME-NAME6 1.5s;
  -o-animation:      KEYFRAME-NAME6 1.5s;
  animation:         KEYFRAME-NAME6 1.5s;
}

#anim_9 {
  -webkit-animation: KEYFRAME-NAME7 1.7s;
  -moz-animation:    KEYFRAME-NAME7 1.7s;
  -o-animation:      KEYFRAME-NAME7 1.7s;
  animation:         KEYFRAME-NAME7 1.7s;
}

#anim_10 {
  -webkit-animation: KEYFRAME-NAME8 1.9s;
  -moz-animation:    KEYFRAME-NAME8 1.9s;
  -o-animation:      KEYFRAME-NAME8 1.9s;
  animation:         KEYFRAME-NAME8 1.9s;
}
#anim_11 {
  -webkit-animation: KEYFRAME-NAME9 2.1s;
  -moz-animation:    KEYFRAME-NAME9 2.1s;
  -o-animation:      KEYFRAME-NAME9 2.1s;
  animation:         KEYFRAME-NAME9 2.1s;
}

#anim_12 {
  -webkit-animation: KEYFRAME-NAME10 0.9s;
  -moz-animation:    KEYFRAME-NAME10 0.9s;
  -o-animation:      KEYFRAME-NAME10 0.9s;
  animation:         KEYFRAME-NAME10 0.9s;
}

#anim_13 {
  -webkit-animation: KEYFRAME-NAME11 1.1s;
  -moz-animation:    KEYFRAME-NAME11 1.1s;
  -o-animation:      KEYFRAME-NAME11 1.1s;
  animation:         KEYFRAME-NAME11 1.1s;
}

#anim_14 {
  -webkit-animation: KEYFRAME-NAME12 1.3s;
  -moz-animation:    KEYFRAME-NAME12 1.3s;
  -o-animation:      KEYFRAME-NAME12 1.3s;
  animation:         KEYFRAME-NAME12 1.3s;
}

#anim_15 {
  -webkit-animation: KEYFRAME-NAME13 1.5s;
  -moz-animation:    KEYFRAME-NAME13 1.5s;
  -o-animation:      KEYFRAME-NAME13 1.5s;
  animation:         KEYFRAME-NAME13 1.5s;
}



@-webkit-keyframes KEYFRAME-NAME {
  0%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
     25%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME {
 0%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
    25%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME {
 0%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
      25%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME {
  0%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
     25%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}


@-webkit-keyframes KEYFRAME-NAME2 {
  0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME2 {
 0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME2 {
 0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME2 {
  0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}


@-webkit-keyframes KEYFRAME-NAME3 {
  0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME3 {
 0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME3 {
 0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME3 {
  0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}


@-webkit-keyframes KEYFRAME-NAME4 {
  0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
     40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME4 {
 0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
     40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME4 {
 0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
     40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME4 {
  0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
     40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME5 {
  0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
      45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME5 {
 0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
     45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME5 {
 0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
    45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME5 {
  0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
     45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME6 {
  0%   { opacity: 0; 
 -ms-transform: translateX(450px); /* IE 9 */
    -webkit-transform: translateX(450px); /* Safari */
    transform: translateX(450px);}
     50%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME6 {
 0%   { opacity: 0; 
 -ms-transform: translateX(450px); /* IE 9 */
    -webkit-transform: translateX(450px); /* Safari */
    transform: translateX(450px);}
     50%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME6 {
 0%   { opacity: 0; 
 -ms-transform: translateX(450px); /* IE 9 */
    -webkit-transform: translateX(450px); /* Safari */
    transform: translateX(450px);}
     50%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME6 {
  0%   { opacity: 0; 
 -ms-transform: translateX(450px); /* IE 9 */
    -webkit-transform: translateX(450px); /* Safari */
    transform: translateX(450px);}
     50%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME7 {
  0%   { opacity: 0; 
 -ms-transform: translateX(500px); /* IE 9 */
    -webkit-transform: translateX(500px); /* Safari */
    transform: translateX(500px);}
     55%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME7 {
 0%   { opacity: 0; 
 -ms-transform: translateX(500px); /* IE 9 */
    -webkit-transform: translateX(500px); /* Safari */
    transform: translateX(500px);}
     55%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME7 {
 0%   { opacity: 0; 
 -ms-transform: translateX(500px); /* IE 9 */
    -webkit-transform: translateX(500px); /* Safari */
    transform: translateX(500px);}
     55%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME7 {
  0%   { opacity: 0; 
 -ms-transform: translateX(500px); /* IE 9 */
    -webkit-transform: translateX(500px); /* Safari */
    transform: translateX(500px);}
     55%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME8 {
  0%   { opacity: 0; 
 -ms-transform: translateX(550px); /* IE 9 */
    -webkit-transform: translateX(550px); /* Safari */
    transform: translateX(550px);}
     60%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME8 {
 0%   { opacity: 0; 
 -ms-transform: translateX(550px); /* IE 9 */
    -webkit-transform: translateX(550px); /* Safari */
    transform: translateX(550px);}
     60%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME8 {
 0%   { opacity: 0; 
 -ms-transform: translateX(550px); /* IE 9 */
    -webkit-transform: translateX(550px); /* Safari */
    transform: translateX(550px);}
     60%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME8 {
  0%   { opacity: 0; 
 -ms-transform: translateX(550px); /* IE 9 */
    -webkit-transform: translateX(550px); /* Safari */
    transform: translateX(550px);}
     60%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}


@-webkit-keyframes KEYFRAME-NAME9 {
  0%   { opacity: 0; 
 -ms-transform: translateX(600px); /* IE 9 */
    -webkit-transform: translateX(600px); /* Safari */
    transform: translateX(600px);}
     65%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME9 {
 0%   { opacity: 0; 
 -ms-transform: translateX(600px); /* IE 9 */
    -webkit-transform: translateX(600px); /* Safari */
    transform: translateX(600px);}
     65%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME9 {
 0%   { opacity: 0; 
 -ms-transform: translateX(600px); /* IE 9 */
    -webkit-transform: translateX(600px); /* Safari */
    transform: translateX(600px);}
     65%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME9 {
  0%   { opacity: 0; 
 -ms-transform: translateX(600px); /* IE 9 */
    -webkit-transform: translateX(600px); /* Safari */
    transform: translateX(600px);}
     65%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME10 {
  0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME10 {
 0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME10 {
 0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME10 {
  0%   { opacity: 0; 
 -ms-transform: translateX(250px); /* IE 9 */
    -webkit-transform: translateX(250px); /* Safari */
    transform: translateX(250px);}
     30%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME11 {
  0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME11 {
 0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME11 {
0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
     35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME11 {
 0%   { opacity: 0; 
 -ms-transform: translateX(300px); /* IE 9 */
    -webkit-transform: translateX(300px); /* Safari */
    transform: translateX(300px);}
    35%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME12 {
  0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
     40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME12 {
 0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
     40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME12 {
 0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
    40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME12 {
  0%   { opacity: 0; 
 -ms-transform: translateX(350px); /* IE 9 */
    -webkit-transform: translateX(350px); /* Safari */
    transform: translateX(350px);}
    40%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes KEYFRAME-NAME13 {
 0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
    45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
 -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-moz-keyframes KEYFRAME-NAME13 {
 0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
    45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@-o-keyframes KEYFRAME-NAME13 {
 0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
    
    45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
    
  100% { opacity: 1;
  -ms-transform: translateX( 0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}
@keyframes KEYFRAME-NAME13 {
 0%   { opacity: 0; 
 -ms-transform: translateX(400px); /* IE 9 */
    -webkit-transform: translateX(400px); /* Safari */
    transform: translateX(400px);}
    
     45%   { opacity: 0; 
 -ms-transform: translateX(200px); /* IE 9 */
    -webkit-transform: translateX(200px); /* Safari */
    transform: translateX(200px);}
    
  100% { opacity: 1;
  -ms-transform: translateX(0px); /* IE 9 */
    -webkit-transform: translateX(0px); /* Safari */
    transform: translateX(0px);}
}

@-webkit-keyframes anim {
    100% { left: 0; }
}

@keyframes anim {
    100% { left: 0; }
}

.bg-price{
           
	color: #ff5500;
	 border-radius: 10px;
    border: 2px solid #73AD21;
    padding: 2px; 
            }



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
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

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
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

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

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




  </style>
  <script type="text/javascript">
  
  
  
  
  function sub_2() {
            var gt2 = document.getElementById('qty2').value;
            
			if (gt2 == "")
			{
				gt2=1;
				gt2 += 1;
			}
			else{
				gt2 += 1;
			}
            
            if (!isNaN(gt2)) {
                document.getElementById('sub_total_2').value = gt2;
            }
			
			
        }
  

		$(document).ready( () => {
  $('.minus-button').click( (e) => {
    
    // change this to whatever minimum you'd like
    const minValue = 1

    const currentInput = $(e.currentTarget).parent().prev()[0];

    let minusInputValue = $(currentInput).html();

    if (minusInputValue > minValue) {
      minusInputValue --;
      $($(e.currentTarget).next()).removeAttr('disabled');
      $(currentInput).html(minusInputValue);

      if (minusInputValue <= minValue) {
        $(e.currentTarget).attr('disabled', 'disabled');
      }
    }
  });

  $('.plus-button').click( (e) => {
      
    const maxValue = 10

    const currentInput = $(e.currentTarget).parent().prev()[0];

    let plusInputValue = $(currentInput).html();

    if (plusInputValue < maxValue) {
      plusInputValue ++;
      $($(e.currentTarget).prev()[0]).removeAttr('disabled');
      $(currentInput).html(plusInputValue);

      if (plusInputValue >= maxValue) {
        $(e.currentTarget).attr('disabled', 'disabled');
      }
    }
  });
});









jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});


  </script>
  <meta name="copyright" content="Motion View" />
  <meta name="coverage" content="Worldwide" />
	<meta name="distribution" content="Global" />
	<meta name="robots" content="index,follow" />
	<meta name="fb:page_id" content="355426248186271" />
<meta name="og:email" content="motionview22@gmail.com"/>
<meta name="og:phone_number" content="+8801715785650"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script>

$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});


$(document).ready(function(){
    $(".dropdown").click( 
               
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        }
    );
});



</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<body>



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="View/images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Email Address" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="Login" value="Login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<div id="id02" class="modal">
  
  <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>
    <div class="container animate">

  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar" align="center">
    <li class="active">Account Setup</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
 
    <script  src="view/js/index.js"></script>

    </div>
</div>





<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=1836001726691749';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <!-- Brand and toggle get grouped for better mobile display -->
 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="font-weight: bold; font-size:26px; width:200px; "  href="?c=home">Motion View</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav">
            <li><a href="?c=home">Home</a></li>
            
    		<li class="dropdown mega-dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products</a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active">
                           <?php LoadMenu();?> 
                          </div>
                          
                          
                          
                        </div>
                    </div>
                    <!-- Nav tabs -->
                                       
				</div>				
			</li>
			
			<li><a href="?c=orders">My Orders</a></li>
			<li><a href="?c=contact">Contact Us</a></li>
			<?php
			if($_SESSION['type']!="")
   			{
			print '<li><a href="?c=download">Download</a></li>';
			}
			?>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" action="?c=search">
            
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" value="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        
        </form>
        <ul class="nav navbar-nav navbar-right">
            <?php
	print '<li><a class="glyphicon glyphicon-shopping-cart gi-5x" aria-hidden="true" href="?c=chart" > '.Items().' item</a></li>';
   if($_SESSION['type']=="")
   {
	   print' <li><a onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Login</a></li>
	   <li><a href="?c=register">SIGN-UP</a></li> 
    ';
   }
   else
   {
	   
	   print'<li><a href="?c=logout">LOG-OUT</a></li> 
	   <li><a href="?c=profile&uid='.$_SESSION["id"].'">'.strtoupper($_SESSION["name"]).'</a></li> 
    ';
	
	if($_SESSION['type']=="SA" || $_SESSION['type']=="A")
		{
			print '<li><a href="?p=home">ADMIN LAYOUT</a></li>';
		}
   }
    
   ?> 
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        
    
   
</nav>

<?php

function LoadMenu($chld = 0)
{
	$a = [];
	include_once("Model/category.php");
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
		print '<ul class="nav-list list-inline">';
		
		foreach($a as $v)
			{
				
				print '<li id="anim_'.$v['id'].'"><a href="?c=product&ctg='.$v['id'].'"><img src="img/0'.$v['id'].'.jpg" width="80px"; height="80px";><span>'.$v['name'].'</span></a>';
				
				LoadMenu($v['id']);
				print '</li>';
			}
			
		print '</ul>';
	}
}

?>
<!--<div class="menu"> -->
        <?php //include("shared/clientMenu.php");?>
    <!--</div> -->
<?php
if(!isset($_GET['c']) ||$_GET['c']=="home")
{
	print '
 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Orientation: 2,
                $Align: 0,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/
            /*remove responsive code if you don"t want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1100);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1100px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url(\'img/loading.gif\') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1100px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/1st.jpg" />
                <div u="thumb">Mi Notebook Air</div>
            </div>
            <div>
                <img data-u="image" src="img/2nd.jpg" />
                <div u="thumb">Amazfit SmartWatch</div>
            </div>
            <div>
                <img data-u="image" src="img/3rd.jpg" />
                <div u="thumb">Mi Powerbank</div>
            </div>
            <div>
                <img data-u="image" src="img/4th.jpg" />
                <div u="thumb">Mi Bluetooth Speaker</div>
            </div>
            <div>
                <img data-u="image" src="img/5th.jpg" />
                <div u="thumb">Mi In Ear Earphone</div>
            </div>
            <div>
                <img data-u="image" src="img/6th.jpg" />
                <div u="thumb">Xiaomi IP Camera</div>
            </div>
            <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slideshow</a>
        </div>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:1100px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:1100px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	';
}
	?>

	
    
    <div class="container" >    
  
    <?php
		include('controller/controller.php');
    ?>
    
	</div>
	 <!--<a style="color:ffffff;" href="https://www.facebook.com/nurnobi.khondoker">Developd By MD.Amdadul Haque</a>-->
	<!-- Footer -->
 <footer>
 <div class="container" > 
 <div class="col-sm-12">
 <div class="row">
 <div class="col-md-3 col-sm-6 col-xs-6">
 <b>GET TO KNOW US</b><br><br>
 <a href="?c=about">About Us</a><br>
<a href="?c=#">Privacy Policy</a><br>
<a href="?c=#">Cookie Policy</a><br>
<a href="?c=#">Warranty Policy</a><br>
<a href="?c=#">Why Shop with Us</a><br>
<a href="?c=#">FAQ</a><br>
<a href="?c=#">Returns and Replacement</a><br>
<a href="?c=#">Terms & Conditions</a>
 </div>
 <div class="col-md-3 col-sm-6 col-xs-6">
 <b>LET US HELP YOU</b><br><br>
 <a href="?c=#">Your Account</a><br>
<a href="?c=#">Your Orders</a><br>
<a href="?c=#">Guest RMA</a><br>
<a href="?c=#">Fastpick</a><br>
<a href="?c=#">Click & Collect</a><br>
<a href="?c=#">How to Place an Order</a><br>
<a href="?c=#">Track Your Order</a><br><br><br><br><br>
 </div>
 <div class="col-md-3 col-sm-6 col-xs-6">
 <b>GET IN TOUCH WITH US</b><br><br>
 <a href="?c=contact">Contact Us</a><br>
<a href="?c=#">MotionView Blog</a><br><br>
<b>PAYMENT METHODS</b><br><br>
<img src="img/bkash.png" alt="Bkash" height="50" width="50"/>&nbsp<img style="margin-top: 7px;" src="img/rocket.png" height="40" width="40" alt="Rocket"/><br>
 </div>
 <div class="col-md-3 col-sm-6 col-xs-6">
 <b>MOTIONVIEW.COM.BD</b><br><br>
 
 <p><i class="fa fa-map-marker fa-1x" style="line-height:100%;color:#339966"></i> Shop #56, Block #D, Level #5 Bashundhara City Shopping Mall</p>
 <p><i class="fa fa-phone-square fa-1x" style="line-height:2%;color:#339966"></i> 01710612900</p>
                <br />
                <p><i class="fa fa-envelope fa-1x" style="line-height:2%;color:#339966"></i> support@motionview.com.bd</p>
   
                
                
    
 </div>
 </div> </div> </div><br><br>
 <div class="row">
 
 <div class="fb-like" data-href="https://facebook.com/motionview.bd" data-layout="standard" data-action="like" data-width="350" data-adapt-container-width="true" data-show-faces="true" data-share="true"></div>
 <div class="col-md-6 col-sm-6 col-xs-6" align="center">
 <div>Copyright &copy; <a href="https://www.motionview.com.bd/">Motion View</a> <?php print date('Y')."&nbsp &nbsp Total visit :".$view; ?></p></div>
 </div>
  <div class="col-md-6 col-sm-6 col-xs-6" align="center">
 <p>FOLLOW US : <a style="text-decoration:none;" href="https://facebook.com/motionview.bd" target="_blank"><i class="fa fa-facebook-square" style="font-size:30px;color:red"></i>&nbsp &nbsp</a><a style="text-decoration:none;" href="#"><i class="fa fa-twitter-square" style="font-size:30px;color:red"></i>&nbsp &nbsp</a><a style="text-decoration:none;" href="https://www.youtube.com/channel/UCMbWd_s6_zGbCfoaTjWSa_g/" target="_blank"><i class="fa fa-youtube-square" style="font-size:30px;color:red"></i>&nbsp &nbsp</a><a style="text-decoration:none;" href="#"><i class="fa fa-google-plus-square" style="font-size:30px;color:red"></i>&nbsp &nbsp</a></p>
 </div>
 
 </div>
 </footer>
 
 </div>


	
 
</body>
</html>