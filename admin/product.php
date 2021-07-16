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
  <div  ng-init="show_data()">  
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
          <label>Search:<input type="search" ng-model="search" ng-change="show_data()" ></label>
         
        </div>
    </div>
  
   <div class="row">
    <div class="col-sm-12">









      <table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" padding-left="5px" role="grid" aria-describedby="table_info" style="width: 100%;">
      <thead>
        <tr role="row">
          <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >Serial</th>
        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >Name </th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">SKU</th>     
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Point</th> 
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">MRP</th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Source</th>
          <th style="width:125px;" class="sorting_disabled" rowspan="1" colspan="1">Options</th>

        </tr>
      </thead>
          <tbody>
                 <tr ng-repeat="item in Items | filter : filterText">
                 <td>{{item.id}}</td>
          <td>{{item.name}}</td>
          <td>{{item.sku}}</td>
         <td>{{item.point}}</td>
          <td>{{item.mrp}}</td>
           <td>{{item.itemsource}}</td>
            
              <td>  
           
              <div class="btn-group" >
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Action<span class="caret"></span></a>
                  <ul class="dropdown-menu ">                  
                  <li> <a  ng-click="updateData(item.id, item.name, item.description, item.cid)" target="_blank" > <i class="glyphicon glyphicon-pencil"></i> Edit</a> </li>
                    <li> <a ng-click="deleteData(item.id)" target="_blank"> <i class="glyphicon glyphicon-pencil"></i> Delete</a> </li> 
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
 $scope.show_data = function() { if($scope.search =='')
{
            $http({
  method: 'get',
  url: 'model/loadProduct.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.Items = response.data;
 });
      
}
else
{
  $http({
  method: 'get',
  url: 'model/searchProduct.php?search='+$scope.search
 }).then(function successCallback(response) {
  // Store response data
  $scope.Items = response.data;
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
