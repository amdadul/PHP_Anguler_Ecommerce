<?php
$pageName = "home";


if(isset($_GET['p']))
{
	$pageName = $_GET['p'];	
}
else if(isset($_GET['c']))
{
	$pageName = $_GET['c'];	
}

else
{
	if(stristr($_SERVER['HTTP_USER_AGENT'], "Mobile"))
	{
		$pageName = "mhome";
	}
	else
	{
	$pageName = "home";
	}	
}

if(!isset($_SESSION['type']))
{
	$_SESSION['id'] = "";
	$_SESSION['name'] = "";
	$_SESSION['image'] = "";
	$_SESSION['type'] = "";
	$_SESSION['chart'] = [];
	$_SESSION['price']="";
}



include_once("Model/user.php");
$usr = new user();

include_once("Model/activeuser.php");
$ausr = new activeuser();

include_once("Model/blockuser.php");
$busr = new blockuser();

include_once('Model/loginhistory.php');
$lh = new loginhistory();

$eemail="";
$epassword="";

if(isset($_POST['Login']))
{
	$usr->email = $_POST['email'];
	$usr->password = $_POST['password'];
	
	$er=0;
	$e="";
	$re="";
	if($usr->email == "")
	{
		$er++;
		$eemail = "Required";
	}
	
	if($usr->password == "")
	{
		$er++;
		$epassword = "Required";
	}
	
	if($er == 0)
	{
		
		if($usr->Login())
		{
			$_SESSION['id'] = $usr->id;
			$ausr->userId =$_SESSION['id'];
			$busr->userId =$_SESSION['id'];
			$lh->userId = $_SESSION['id'];
			$lh->dateTime = date("Y-m-d h:i:s");
			$lh->ip = $_SERVER['REMOTE_ADDR'];
			if(!$busr->Blogin())
					{
					$_SESSION['id'] = $usr->id;
					$_SESSION['name'] = $usr->name;
					$_SESSION['image'] = $usr->image;
					$_SESSION['type'] = $usr->type;
					$lh->Insert();
					}
					else
					{
						print '<script type="text/javascript">			
						var confirmResult = confirm(\'You Are Block To :'.$busr->blockTo.' \')	
						</script>';
					}
			
		}
		else
		{
			return $e;
		}
	}
	
}



if(isset($_POST['Recover']))
{
	$usr->email = $_POST['email'];
	$er=0;
	$e="";
	if($usr->email == "")
	{
		$er++;
		$eemail = "Required";
	}
	
	
	
	if($er == 0)
	{
		
		if($usr->Recover())
		{
		
		
			$to = $usr->email;
			$uri ="www.motionview.com.bd/?c=password&user=".$usr->id;
			$subject = "Password Recovery || Motion view Account";
			$txt = "You need to set new password <br> click the link and Set your new password  <br><a href=".$uri."> Set Your New Password </a><br> Thank you for being with us";
			$headers = "From: Motion View <support@motionview.com.bd>\r\n";
			$headers .= "Reply-To: support@motionview.com.bd\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			
			mail($to,$subject,$txt,$headers);
		
		
		
				
			print '<script type="text/javascript">			
				var confirmResult = confirm(\'We sent a link in your email \n Click this link and set new password \')	
				</script>';
			
		}
		else
		{
			print '<script type="text/javascript">			
				var confirmResult = confirm(\'Email not Registered !! \nPlease Enter valid Email \')	
				</script>';
			return $re;
		}
	}
	
}



if($pageName == "logout")
{
	$_SESSION['id'] = "";
	$_SESSION['name'] = "";
	$_SESSION['image'] = "";
	$_SESSION['type'] = "";
	$_SESSION['chart'] = array();
	$_SESSION['price']="";
}


function In_Chart($cid)
{
	if(is_array($_SESSION['chart']) and count($_SESSION['chart']))
	{
		if(in_array($cid, $_SESSION['chart']))
		{
			return true;
		}
	}
	return false;
}

if(isset($_GET["idc"]))
{
	$ar=0;
	if(!isset($_POST["qty"]))
	{
		$_POST["qty"] =1;
	}
	foreach($_SESSION["chart"] as $v)
	{
		if($v['id'] == $_GET["idc"])
		{
			$ar++;
		}
	}
	if($ar==0){
	array_push($_SESSION["chart"], array("id" => $_GET["idc"], "qty" => $_POST["qty"], "color" => $_POST["color"]));
	}
	//$_SESSION["chart"][$i]['id'] = $_GET["chart"];
//$_SESSION["chart"][$i]['qty'] = 1;

}
function Items()
{
	$a= $_SESSION["chart"];
	return count($a);
}

$busr = new blockuser();
$unb = $busr->Selectdl();
$dat = date("Y-m-d");
$cdat = explode('-',$dat);
foreach($unb as $k)
	{
		$tdat = $k["blockTo"];
		$ddat = explode('-',$tdat);
		if($dat >= $tdat)
		{
		
		
			$busr->id = $k["id"];
			$busr->Delete();
		}
	}

?>