<div ng-include="'View/template/head.php'"></div>
<div  ng-init="cat()">
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container" ng-init="reqnum()">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Payment Request</a></li>
		</ul>
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			  <h2 class="title">Payment Request</h2>
			  <div class="so-onepagecheckout ">
			      <h2>Name : {{ auth.name }}</h2>
			      <h2>Mobile no : {{ auth.phone }}</h2>
			      <h2>E-Mail Address : {{ em }}</h2>
			  		<h2>Total Amount : {{ fp() }}</h2>
			  		<h2>Transection NO : {{form.reqnum}}</h2>
			  		<h2>Address : {{ cmnt }}</h2>
			  		<h1>Are you Confirm to Pay this Amount</h1>
			  		<form method="POST" action="Model/payment.php">
			  			<input type="hidden" name="tp" value="{{ fp() }}">
			  			<input type="hidden" name="TI" value="{{ form.reqnum }}">
			  			<input type="hidden" name="name" value="{{ auth.name }}">
			  			<input type="hidden" name="mobile" value="{{ auth.phone }}">
			  			<input type="hidden" name="email" value="{{ em }}">
			  			<input type="hidden" name="SU" value="http://amarbazarltd.com/#!/successreq/{{form.reqnum}}">
			  			<input class="bnt bnt-success" type="submit" name="submit" value="Confirm">
			  		</form>
			  </div>
			  	
				
	</div>
</div>
</div>
</div>
	<!-- //Main Container -->
	<div ng-include="'View/template/footer.php'"></div>