<!doctype html>
<html>
 <head>
  <title>Amarbazar ltd || Category</title>
  
   
 <style type="text/css">
   
#hide {
    width: 100%;
    padding: 50px 0;
    text-align: center;
   
    display: none;
}

.btn1{width:17%;
padding: 0px;
height: 30px;}

 </style>
 </head>
 <body ng-app='myapp'>
<div ng-controller="userCtrl">
  <div  ng-init="show_order()">  
 <div class="container">
  
  


 <div class="container-fluid">

<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
        <div class="col-sm-6">
          <div class="dataTables_length" id="table_length">
            <label>Show<select name="table_length" aria-controls="table" class="form-control input-sm">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select> entries</label>
        </div>
    </div>      
      <div class="col-sm-6" style="text-align: right;">
        <div id="table_filter" class="dataTables_filter">
          <label>Search:<input type="search" ng-model="search" ng-change="show_order()" ></label>
         
        </div>
    </div>
  
   <div class="row">
    <div class="col-sm-12">









      <table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" padding-left="5px" role="grid" aria-describedby="table_info" style="width: 100%;">
      <thead>
        <tr role="row">
          <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >Order ID</th>
        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >User Name </th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Delivery Address</th>     
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Phone Number</th> 
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Status</th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Date Added</th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Total</th>
          <th style="width:125px;" class="sorting_disabled" rowspan="1" colspan="1">Set Status</th>

        </tr>
      </thead>
          <tbody>
                 <tr ng-repeat="od in Items | filter : filterText">
                 <td><a href="?p=orderdetails&id={{od.id}}">{{od.onumber}}</a></td>
          <td>{{od.user}}</td>
          <td>{{od.daddress}}</td>
         <td>{{od.pnumber}}</td>
          <td>{{od.ostatus}}</td>
           <td>{{od.date}}</td>
            <td>{{od.total}} /-</td>
              <td>  
           
              <div class="btn-group" >
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Status<span class="caret"></span></a>
                  <ul class="dropdown-menu ">                  
                  <li> <a  ng-click="addStatus(od.id,1)" target="_blank" > <i class="glyphicon glyphicon-pencil"></i>Submitted</a> </li>
                    <li> <a ng-click="addStatus(od.id,2)" target="_blank"> <i class="glyphicon glyphicon-pencil"></i> On the way</a> </li> 
                    <li> <a  ng-click="addStatus(od.id,3)" target="_blank" > <i class="glyphicon glyphicon-pencil"></i> Delivered</a> </li>
                    <li> <a ng-click="addStatus(od.id,4)" target="_blank"> <i class="glyphicon glyphicon-pencil"></i> Finished</a> </li> 
                    <li> <a  ng-click="addStatus(od.id,5)" target="_blank" > <i class="glyphicon glyphicon-pencil"></i> Canceled</a> </li>
                    <li> <a ng-click="addStatus(od.id,6)" target="_blank"> <i class="glyphicon glyphicon-pencil"></i> Pending</a> </li> 
                  <td>  </td> 
                   
                  </ul>
            </div>
            <!--Edit-->
          </td>

                </tr>
                 
                </tbody>
     
    </table>
      
    </div>
  </div>
</div>

</div>





      
</div>

 <script>
var fetch = angular.module('myapp', ["ngRoute"]);

var myFunction = 'getData';



fetch.controller('userCtrl', ['$scope', '$http', function ($scope, $http) {
$scope.btnName = "Add";
$scope.search ='';
console.log($scope.search);
 $scope.show_order = function() { if($scope.search =='' || $scope.search == undefined)
{
            $http({
  method: 'get',
  url: 'model/loadOrder.php'
 }).then(function successCallback(response) {
  $scope.Items = response.data;
 });
      
}
else
{
  $http({
  method: 'get',
  url: 'model/searchOrder.php?on='+$scope.search
 }).then(function successCallback(response) {
  // Store response data
  $scope.Items = response.data;
 });
}
}


$scope.addStatus = function(oid,sid)
{
  if (confirm("Are you sure you want to Insert/Update Status?")) {  
           $http.post(  
                "model/insertOrderStatus.php",  
                {'orderId': oid, 'statusId': sid }  
           ).success(function(data) {
                $scope.message = data.message;
                alert($scope.message);  
                $scope.show_order();

                 });
         }
}




      $scope.deleteData = function(id){ if (confirm("Are you sure you want to delete?")) {  
           $http.post(  
                "model/insertCategory.php",  
                {'id': id, 'request_type':3 }  
           ).success(function(data) {
                $scope.message = data.message;
                alert($scope.message);  
                $scope.show_data();

                 });
         }
         else {
                return false;
            }
      }
}]);


    </script>
 </body>
</html>
