<div ng-include="'View/template/head.php'"></div>
<div align="center" style="height: 300px;">
	<h1>Bkash payment</h1>
	<h1><b>Payment {{ fp() }} taka To 01639 000 888<br> Enter <i>Trxn No</i> here</b></h1>
<form class="form-group" style="padding-bottom: 200px; padding-top:30px; width:400px;">
    <label> Trxn No : </label>
	<input class="form-control" type="text" name="trxid" ng-model="form.trxid" placeholder="Trxn No">
	<button class="btn btn-success" ng-click="b_pay()">Submit</button>
</form>
<div>
<div ng-include="'View/template/footer.php'"></div>