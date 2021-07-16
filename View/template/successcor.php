<div ng-include="'View/template/head.php'"></div>
<div  ng-init="cat()">
    
   
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container" ng-init="docnum()">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Payment Success</a></li>
		</ul>
		<div id="content" class="col-sm-12">
			  <h2 class="title">Payment Success</h2>
			  <div class="so-onepagecheckout " >
			<input type="hidden" name="reqnum" ng-model="form.reqnum">		
			  </div>
			  	
	</div>
		
		<?php
                  session_start();
                                    include("../../Model/SSLCommerz.php");
                                    
                                   $sslc = new SSLCommerz();
                                     
                                    $tran_id = $_SESSION['payment_values']['tran_id'];
                                    $amount = $_SESSION['payment_values']['amount'];
                                    $currency = $_SESSION['payment_values']['currency'];

                                    $validation = $sslc->orderValidate($tran_id, $amount, $currency, $_POST);

                                    if ($validation == TRUE) {
                                        echo "<h2 style='color: green; text-align: center;'>Congratulations! Your Transaction is Successful.</h2>";
                                    
                                    
                                    print '<div ng-if="fp() == '.$_POST['currency_amount'].'"><div class="row" ng-init="confirmcorssl()"></div></div>';
                                    print '<div ng-if="fp() != '.$_POST['currency_amount'].'"><h1>Your payment amount Is Not Equal to Total Amount of Order !!!
                                    <br>Please Pay full Amount to Post Order</h1></div>';
                                    
                                    }
                                    else {
                                        echo "<h2 style='color: #ff0000; text-align: center'>Payment was not valid. Please contact with the merchant.</h2>";
                                    }
                                    
                                    unset($_SESSION['payment_values']);
                                        ?>
		
	
			<!--Middle Part Start-->
			
</div>
</div>
</div>
	<!-- //Main Container -->
	<div ng-include="'View/template/footer.php'"></div>