<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Softaox | Delete Data from MySQL Database Using AngularJS with PHP</title> 
<!-- Bootstrap --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
</head>  
<body>  
<div class="container">
	<h3 align="center">Delete Data from MySQL Database Using AngularJS with PHP</h3>
	<div ng-app="sa_delete" ng-controller="controller" ng-init="show_data()">
		<table class="table table-bordered">
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Email ID</th>
				<th>Age</th>
				<th>Delete</th>
			</tr>
			<tr ng-repeat="x in names">
				<td>{{x.ID}}</td>
				<td>{{x.Name}}</td>
				<td>{{x.Description}}</td>
				<td>{{x.CategoryID}}</td>
				<td align="center">
					<button ng-click="delete_data(x.id )"class="btn btn-danger">X</button>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- Script -->

<script>
    var app = angular.module("sa_delete", []);
    app.controller("controller", function($scope, $http) {
        $scope.show_data = function() {
            $http.get("model/category.php")
                .success(function(data) {
                    $scope.names = data;
                });
        }
        $scope.delete_data = function(id) {
            if (confirm("Are you sure you want to delete?")) {
                $http.post("delete.php", {
                        'id': id
                    })
                    .success(function(data) {
                        alert(data);
                        $scope.show_data();
                    });
            } else {
                return false;
            }
        }
    });
</script>
</body>  
</html>  