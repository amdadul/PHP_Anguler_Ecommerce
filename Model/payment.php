<!DOCTYPE html>
<title>Payment Page</title>
<h1>SSLCOMMERZ Integration Payment Page</h1>
    <style>
        .payOptions{ overflow: hidden}
        .payOptions li{list-style-type: none; float: left;}
        .row-last > *{margin-top:0 !important}
    </style>
<?php
session_start();
include("SSLCommerz.php");
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST["cus_address"];
$phone = $_POST['mobile'];
$transaction_amount = $_POST['tp'];
$tid = $_POST['TI'];

if ($_SERVER['SERVER_NAME'] == "localhost") {
                        $server_name = 'http://localhost:3333/ssl/';
                    } else {
                        $server_name = 'http://amarbazarltd.com/';
                    }

$post_data = array();
                    $post_data['total_amount'] = $_POST['tp'];
                    $post_data['currency'] = "BDT";
                    $post_data['tran_id'] = $tid;
                    $post_data['success_url'] = $_POST['SU'];
                    $post_data['fail_url'] = $server_name . "fail.php";
                    $post_data['cancel_url'] = $server_name . "cancel.php";

                    # CUSTOMER INFORMATION
                    $post_data['cus_name'] = $_POST['name'];
                    $post_data['cus_email'] = $_POST["email"];
                    $post_data['cus_country'] = "Bangladesh";
                    $post_data['cus_phone'] = $_POST['mobile'];


                    $_SESSION['payment_values'] = array();

                    $_SESSION['payment_values']['tran_id'] = $post_data['tran_id'];
                    $_SESSION['payment_values']['amount'] = $post_data['total_amount'];
                    $_SESSION['payment_values']['currency'] = $post_data['currency'];

                    # SSLCommerz(STORE ID,STORE PASSWORD, SANDBOX MODE)
                    # Ex. SSLCommerz(STORE ID,STORE PASSWORD, 1), 1= Means to check in Sandbox and 0=Means to Check in Live
                    $sslc = new SSLCommerz();

                    # initiate(Transaction Data , Whether redirect or Display in Page)
                   // $payment_options = $sslc->initiate($post_data, true);// display in page
                    $payment_options = $sslc->initiate($post_data, false);// redirect page

                    if (!is_array($payment_options)) {
                        print_r($payment_options);
                        $payment_options = array();
                    }


                    echo '<h3>Card Payment</h3>';
                    echo "<ul class='payOptions'>";

                    if (array_key_exists("cards", $payment_options) && !empty($payment_options['cards'])) {
                        foreach ($payment_options['cards'] as $row) {
                            echo '<li>' . $row['link'] . '</li>';
                        }
                    }
                    echo "</ul>";
                    echo '<h3>Mobile Payment</h3>';
                    echo "<ul class='payOptions'>";
                    if (array_key_exists("mobile", $payment_options) && !empty($payment_options['mobile'])) {
                        foreach ($payment_options['mobile'] as $row) {
                            echo '<li>' . $row['link'] . '</li>';
                        }
                    }
                    echo "</ul>";
                    echo '<h3>Internet Banking</h3>';
                    echo "<ul class='payOptions'>";
                    if (array_key_exists("internet", $payment_options) && !empty($payment_options['internet'])) {
                        foreach ($payment_options['internet'] as $row) {
                            echo '<li>' . $row['link'] . '</li>';
                        }
                    }
                    echo "</ul>";
                    echo '<h3>Other Options</h3>';
                    echo "<ul class='payOptions'>";
                    if (array_key_exists("others", $payment_options) && !empty($payment_options['others'])) {
                        foreach ($payment_options['others'] as $row) {
                            echo '<li>' . $row['link'] . '</li>';
                        }
                    }
                    echo "</ul>";
?>