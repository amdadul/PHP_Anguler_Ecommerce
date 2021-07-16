<!doctype html>
<html>
 <head>
  <title>Amarbazar ltd || Size</title>
  
   
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
	 <div class="row">
	 	 <div class="col-sm-4">
	 	 	<div class="form-group">
			  <label for="name">Name:</label> <span style="color:red">*</span>
			  	<input type="text" name="name" ng-model="name" class="form-control" id="name" placeholder="Size name" required="">
			</div>
	 </div>
	  <div class="col-sm-4">
	 	 	<div class="form-group">
			  <label for="desc">Description:</label>
			  	<input type="text" name="description" ng-model="description" class="form-control" id="desc" placeholder="Size description">
			</div>
	 </div>
	  
	
	<div class="col-sm-4">
	<div style="text-align: center;">
		<div class="form-group">
	<input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{ btnName }}"/> 
</div>
	</div>
</div>
</div>

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
          <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="table"></label>
        </div>
    </div>
  
   <div class="row">
    <div class="col-sm-12">
      <table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" padding-left="5px" role="grid" aria-describedby="table_info" style="width: 100%;">
      <thead>
        <tr role="row">
        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >Serial</th>
        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >Name</th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Description</th>     
         
          <th style="width:125px;" class="sorting_disabled" rowspan="1" colspan="1">Options</th>

        </tr>
      </thead>
          <tbody>
                 <tr ng-repeat="item in Items">
                 <td>{{item.id}}</td>
				  <td>{{item.name}}</td>
				  <td>{{item.description}}</td>
				 
              <td>  
           
              <div class="btn-group" >
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Action<span class="caret"></span></a>
                  <ul class="dropdown-menu ">                  
                  <li> <a  ng-click="updateData(item.id, item.name, item.description)" target="_blank" > <i class="glyphicon glyphicon-pencil"></i> Edit</a> </li>
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
$scope.show_data = function() {
            $http({
  method: 'get',
  url: 'model/loadSize.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.Items = response.data;
 });
      
}



$scope.insertData = function(){  
   if($scope.btnName == "Add"){
           $http.post(  
                "model/insertSize.php",  
                {'name':$scope.name, 'description':$scope.description,'request_type':2}  
           ).success(function(data) {
                $scope.message = data.message;
                alert($scope.message); 
                     $scope.name = "";  
                     $scope.description = ""; 
                $scope.show_data();

                 });
         }
         else
         {

            $scope.request_type = 4;  
             $http.post(  
                "model/insertSize.php",  
                {'id':$scope.id, 'name':$scope.name, 'description':$scope.description, 'request_type':$scope.request_type }  
           ).success(function(data) {
                $scope.message = data.message;
                alert($scope.message);  
                $scope.show_data();
                      $scope.id = "";  
                     $scope.name = "";  
                     $scope.description = "";
                     $scope.btnName = "Add";  

                 });

         }

      }   


       $scope.deleteData = function(id){ if (confirm("Are you sure you want to delete?")) {  
           $http.post(  
                "model/insertSize.php",  
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



$scope.updateData = function(id, name, description){  
           $scope.id = id;  
           $scope.name = name;  
           $scope.description = description;
           $scope.btnName = "Update";  
           



      }  




}]);


    </script>
 </body>
</html>
