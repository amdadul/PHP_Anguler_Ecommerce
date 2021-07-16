
<?php
session_start();
include_once('Model/base.php');
include_once('Controller/htmlHelper.php');
$html = new htmlHelper();
date_default_timezone_set("Asia/Dhaka");
include_once("Controller/header.php");

if(isset($_GET['p']))
{
	include_once("Controller/adminLayout.php");
}
else
{
	if(stristr($_SERVER['HTTP_USER_AGENT'], "Mobile"))
	{
		/*include_once("Controller/clientLayoutm.php");*/
		include_once("Controller/clientLayout.php");
	}
	else{
		include_once("Controller/clientLayout.php");
	}
}

?>
