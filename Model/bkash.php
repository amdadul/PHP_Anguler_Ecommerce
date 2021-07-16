

<?php
include_once('header.php');


    $id = $_GET["trxid"];
 $url = "https://www.bkashcluster.com:9081/dreamwave/merchant/trxcheck/sendmsg?user=AMARBAZARLTD&pass=Am@rb@2arl1d&msisdn=01639000888&trxid=".$id;


$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$transaction= curl_exec($curl);
curl_close($curl);

$transaction = simplexml_load_string($transaction);
$txnst = $transaction->transaction->trxStatus[0];
$txnid = $transaction->transaction->trxId[0];
$service = $transaction->transaction->service[0];
$phone = $transaction->transaction->sender[0];
$amount = (int)$transaction->transaction->amount[0];
$counter = $transaction->transaction->counter[0];

$json_response = (array());
    

    if($txnst=='0000')
    {
        $row_array['message'] = 'Payment Successful';
        $row_array['trxst'] = $txnst;
        $row_array['trxid'] = $txnid;
        $row_array['service'] = $service;
        $row_array['phone'] = $phone;
        $row_array['amount'] = $amount;
    	 array_push($json_response,$row_array);    
    echo json_encode($json_response); 
    }
    else if($txnst=='0010' || $txnst=='0011')
    {
        $row_array['message'] = 'Transaction is pending, please try again later.';
         $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
     else if($txnst=='4001')
    {
        $row_array['message'] ='Transaction Invalid, please try again later.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
     else if($txnst=='0100')
    {
        $row_array['message'] = 'Transaction ID is valid but transaction has been reversed.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
    else if($txnst=='0111')
    {
        $row_array['message'] = 'Transaction is failed.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
    else if($txnst=='1001')
    {
        $row_array['message'] = 'Invalid MSISDN input. Try with correct mobile no.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
   
    else if($txnst=='1002')
    {
        $row_array['message'] = 'Invalid transaction ID.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
     else if($txnst=='1003')
    {
        $row_array['message'] = 'Authorization Error, please contact site admin.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
     else if($txnst=='1004')
    {
        $row_array['message'] = 'Transaction ID not found.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
     else if($txnst=='9999')
    {
        $row_array['message'] = 'System error, could not process request. Please contact site admin.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }
    else
    {
        $row_array['message'] = 'System error, could not process request. Please contact site admin.';
        $row_array['trxst'] = $txnst;
         array_push($json_response,$row_array);    
         echo json_encode($json_response);
    }


?>


