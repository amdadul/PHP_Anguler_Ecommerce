<?php


ini_set("session.cookie_lifetime","36000");
ini_set('session.gc_maxlifetime', 6*60*60);


if(isset($_GET['p']))
{
	if(file_exists("admin/".$pageName.".php"))
	{
		if($pageName != "home")
		{
		print '<section class="content-header">'.ucwords(str_replace("_", " ", $pageName)).'</section><hr>';
		}
		if($_SESSION['type'] == "SA" || $_SESSION['type'] == "A")
		{
			
			include("admin/".$pageName.".php");
		}
		else
		{
			print '<p>you have to login with admin account  for view this content</p>';
			include_once("View/login.php");
		}
	}
	else
	{
		print '<span class="pageHead">Invalid Request</span><hr>';
		include("sicurity_warning.php");
	}
}



else if(isset($_GET['c']))
{
	if(file_exists("View/".$pageName.".php"))
	{
		if($pageName != "home" || $pageName != "mhome")
		{
		print '<hr>';
		}
		if($pageName == "login" and $_SESSION['type'] !="")
		{
			print '<span class="success">You Have been Loged in Successfully</span>';
			
			if($pageName != "logout" || $pageName != "login" ){
				
					if(isset($_GET['c']) && ($_SESSION['type']=="SA" || $_SESSION['type']=="A"))
					{
						header('location:?p='.$pageName);
						exit;
					}
					else
					{
						$uh = "?c=home";
						//header("location:?c=view_order&id=".$id);
						print "<script type='text/javascript'>
						window.onload = function () { top.location.href = '" . $uh . "'; };
							</script>";
					}
				
				}
				
		}
		else
		{
			include("View/".$pageName.".php");
		}
	}
	else
	{
		print '<span class="pageHead">Invalid Request</span><hr>';
		include("sicurity_warning.php");
	}
}

else
{
	if(file_exists("View/".$pageName.".php"))
	{
		if($pageName != "home" || $pageName != "mhome")
		{
		//print '<span class="pageHead">'.ucwords(str_replace("_", " ", $pageName)).'</span><hr>';
		}
		if($pageName == "login" and $_SESSION['type'] !="")
		{
			print '<span class="success">You Have been Loged in Successfully</span>';
		}
		else
		{
			include("View/".$pageName.".php");
		}
	}
	else
	{
		print '<span class="pageHead">Invalid Request</span><hr>';
		include("sicurity_warning.php");
	}
}
?>