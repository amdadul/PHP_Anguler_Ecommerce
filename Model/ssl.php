<?php

$post_data = array();
$post_data['store_id'] = "amarbazarltdlive";
$post_data['store_passwd'] = "amarbazarltdlive29019";
$post_data['total_amount'] = $_POST['tp'];
$post_data['currency'] = "BDT";
$post_data['tran_id'] = $_POST['TI'];
$post_data['success_url'] = $_POST['SU'];
$post_data['fail_url'] = "http://amarbazarltd.com/new_abl/#!/fail";
$post_data['cancel_url'] = "http://amarbazarltd.com/new_abl/#!/cancel";
# $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE
print 'Redirecting Please wait........';
# EMI INFO
$post_data['emi_option'] = "0";

# CUSTOMER INFORMATION
$post_data['cus_name'] = $_POST['name'];
$post_data['cus_email'] = $_POST['email'];
$post_data['cus_phone'] = $_POST['mobile'];

# REQUEST SEND TO SSLCOMMERZ
$direct_api_url = "https://securepay.sslcommerz.com/gwprocess/v3/api.php";

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $direct_api_url );
curl_setopt($handle, CURLOPT_TIMEOUT, 30);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($handle, CURLOPT_POST, 1 );
curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, true); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


$content = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle))) {
	curl_close( $handle);
	$sslcommerzResponse = $content;
} else {
	curl_close( $handle);
	echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
	exit;
}

# PARSE THE JSON RESPONSE
$sslcz = json_decode($sslcommerzResponse, true );

if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
	echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
	exit;
} 
else {
	echo "JSON Data parsing error!";
}




?>