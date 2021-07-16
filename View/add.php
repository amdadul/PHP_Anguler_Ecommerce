<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title>Webslesson Tutorial | AngularJS Tutorial with PHP - Insert Data into Mysql Database</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">AngularJS Tutorial with PHP - Insert Data into Mysql Database</h3>  
                <div ng-app="add" ng-controller="usercontroller">  
                     <label>Name</label>  
                     <input type="text" name="name" ng-model="name" class="form-control" />  
                     <br />  
                     <label>Email</label>  
                     <input type="text" name="email" ng-model="email" class="form-control" />  
                     <br />  
                    <label>password</label>  
                     <input type="password" name="password" ng-model="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="ADD"/>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("add",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "view/insert.php",  
                {'name':$scope.name, 'email':$scope.email,'password':$scope.password }  
           ).success(function(data){ 
               $scope.message = data.message;
                alert($scope.message);  
                $scope.name = null;  
                $scope.email = null;
               $scope.password = null;
           });  
      }  
 });  
 </script>  