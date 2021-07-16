  <section class="content" ng-app="myapp">
    <div class="row" ng-controller="userCtrl">
      <form enctype="multipart/form-data">
      <div class="col-md-9">
        <div class="row">
 <div class="form-group has-warning">
  <label class="control-label" for="inputWarning">Product Name : </label>
 <input class="form-control input-lg" id="inputWarning" ng-model="name" name="name" type="text" placeholder="Product Name">
 </div>
</div>
 <div class="row">
  <div class="col-md-3">
        <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"> SKU</label>
                  <input type="text" class="form-control" ng-model="sku" name="sku" id="inputWarning" placeholder="Enter SKU">
                 </div>
                </div>
 <div class="col-md-3">
<div class="form-group">
                  <label class="control-label" > Model :</label>
                  <input type="text" class="form-control" ng-model="model" name="model" id="" placeholder="model">
                 
                </div>
              </div>
<div class="col-md-3">
<div class="form-group">
                  <label class="control-label" > Point :</label>
                  <input type="text" class="form-control" ng-model="point" name="point" id="" placeholder="Business Volume">
                 
                </div>
              </div>
              <div class="col-md-3">
              <div class="form-group">
                  <label class="control-label" > Tags</label>
                  <input type="text" class="form-control" ng-model="tags" name="tags" id="" placeholder="Enter Tags for SEO">
                 </div>
                </div>
               </div>
               <div class="row">
  <div class="form-group">
                  <label>Short Description : </label>
                  <textarea class="form-control" rows="3" name="short_description" ng-model="short_description" placeholder="Enter Short Description"></textarea>
                </div>
  </div>
  

    <!-- Main content -->
   
      <div class="row">
        
          <div class="form-group">
             <label> Description : </label>
                <textarea  name="description" ng-model="description" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
            </div>
        </div>
      
          <!-- /.box -->

<div class="row">
   <div class="col-md-4">
<div class="form-group">
                  <label class="control-label" > Purchase Price :</label>
                  <input type="text" class="form-control" ng-model="pPrice" id="" placeholder="Purchase Price">
                 
                </div>
              </div>
<div class="col-md-4">
<div class="form-group">
                  <label class="control-label" > Standard Cost :</label>
                  <input type="text" class="form-control" ng-model="stCost" id="" placeholder="Standard Cost">
                 
                </div>
              </div>

<div class="col-md-4">
<div class="form-group">
                  <label class="control-label" > Corporate Price :</label>
                  <input type="text" class="form-control" ng-model="crPrice" id="" placeholder="Corporate Price">
                 
                </div>
              </div>
</div>
<div class="row">
  <div class="col-md-4">
<div class="form-group">
                  <label class="control-label" > Retailer Price :</label>
                  <input type="text" class="form-control" ng-model="rPrice" id="" placeholder="Retailer Price">
                 
                </div>
              </div>

<div class="col-md-4">
<div class="form-group">
                  <label class="control-label" > MRP :</label>
                  <input type="text" class="form-control" ng-model="mrp" id="" placeholder="MRP Price">
                 
                </div>
              </div>

<div class="col-md-4">
<div class="form-group">
                  <label class="control-label" > Sale Price :</label>
                  <input type="text" class="form-control" ng-model="sprice" id="" placeholder="Sale Price">
                 
                </div>
              </div>
</div>
        </div> 
<div class="col-md-3"><br>
 <div class="form-group">
                <label>Item Source :</label>
                <select name="itemsource" ng-model="itemsource" class="form-control" style="width: 100%;">
                  <option value="">Select Item Source</option>
                  <option value="ABL">ABL</option>
                  <option value="Corporate">Corporate</option>
                  <option value="OSP">OSP</option>

                </select>
              </div>
</div>

<div class="col-md-3" ng-init="show_Category()"><br>
 <div class="form-group">
                <label>Category :</label>
                <select name="categoryId" ng-model="categoryId" class="form-control" style="width: 100%;">
                  <option value="">Select Category</option>  
          <option ng-repeat="ct in category" value="{{ct.id}}">{{ct.name}}</option> 

                </select>
              </div>
</div>


<div class="col-md-3" ng-init="show_Brand()"><br>
 <div class="form-group">
                <label>Brand :</label>
                <select name="brandId" ng-model="brandId" class="form-control " style="width: 100%;">
                 <option value="">Select Brand</option>  
          <option ng-repeat="b in brand" value="{{b.id}}">{{b.name}}</option> 

                </select>
              </div>
</div>

<div class="col-md-3" ng-init="show_Size()"><br>
 <div class="form-group">
                <label>Size :</label>
                <select name="sizeId" ng-model="sizeId" class="form-control" style="width: 100%;">
                  <option value="">Select Size</option>  
                  <option ng-repeat="s in size" value="{{s.id}}">{{s.name}}</option> 

                </select>
              </div>
</div>

<div class="col-md-3" ng-init="show_Unit()"><br>
 <div class="form-group">
                <label>Purchase Unit :</label>
                <select name="pUnit" ng-model="pUnit" class="form-control" style="width: 100%;">
                  <option value="">Select Purchase Unit</option>  
                  <option ng-repeat="pu in unit" value="{{pu.id}}">{{pu.name}}</option> 

                </select>
              </div>
</div>


<div class="col-md-3" ng-init="show_Unit()"><br>
 <div class="form-group">
                <label>Selling Unit :</label>
                <select name="sUnit" ng-model="sUnit" class="form-control" style="width: 100%;">
                   <option value="">Select Selling Unit</option>  
                  <option ng-repeat="su in unit" value="{{su.id}}">{{su.name}}</option> 

                </select>
              </div>
</div>



<div class="col-md-3"><br>
 <div class="form-group">
                <label>Stock :</label>
                <select name="stock" ng-model="stock" class="form-control" style="width: 100%;">
                  <option value="">Select Stock</option>
                  <option value="1">In Stock</option>
                  <option value="0">Out of Stock</option>
                </select>
              </div>
</div>


<div class="col-md-3"><br>
<div class="form-group">
    <label class="col-md-4 control-label" for="color">Color</label>
    <div class="col-md-4">
        <select id="color" name="color" ng-model="color" class="form-control">
           <option value="">Select Color</option>
            <option value="red">red</option>
            <option value="white">white</option>
            <option value="black">black</option>
        </select>
    </div>
</div>
</div>


<div class="col-md-3"><br>
 <div class="form-group">
                <label>Product Image</label>
                  <input type="file" ng-model="myFile" class="form-control"  onchange="angular.element(this).scope().uploadedFile(this)" accept=".jpg,.png,.webp">

                  <p class="help-block">Select a Image for this Products</p>
              </div>
</div>

<div class="col-md-1"></div>
<div class="col-md-1"></div>
<div class="col-md-1">
 <div class="form-group">
                <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{ btnName }}"/> 
</div>



  </form></div>
</section>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->

<!-- FastClick -->

<!-- CK Editor -->
<script src="admin/bower_components/ckeditor/ckeditor.js"></script>

<script src="admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->

<!-- FastClick -->
<script src="admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Bootstrap WYSIHTML5 -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>


 <script>
var fetch = angular.module('myapp', ["ngRoute"]);

var myFunction = 'getData';

fetch.service('uploadFile', ['$http', function ($http) {
            this.uploadFiletoServer = function(file, uploadUrl, id){
                 var fd = new FormData();
                 fd.append('file', file);
                 fd.append('id', id);
                 $http.post(uploadUrl, fd, {
                     transformRequest: angular.identity,
                     headers: {'Content-Type': undefined,'Process-Data': false}
                 })
                 .success(function(data){
                    alert(data);
                 })
                 .error(function(){
                    alert("Error");
                 });
             }
         }]);



fetch.controller('userCtrl', ['$scope', '$http', 'uploadFile', function ($scope, $http, uploadFile) {
$scope.btnName = "Submit";

$scope.uploadedFile = function(element) {
            var reader = new FileReader();
            reader.onload = function(event) {
             $scope.$apply(function($scope) {
                $scope.files = element.files;
                 $scope.src = event.target.result  
             });
            }
            reader.readAsDataURL(element.files[0]);
          }

$scope.show_Category = function() {
            $http({
  method: 'get',
  url: 'model/loadCategory.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.category = response.data;
 });
      
}


$scope.show_Brand = function() {
            $http({
  method: 'get',
  url: 'model/loadBrand.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.brand = response.data;
 });
      
}


$scope.show_Size = function() {
            $http({
  method: 'get',
  url: 'model/loadSize.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.size = response.data;
 });
      
}



$scope.show_Unit = function() {
            $http({
  method: 'get',
  url: 'model/loadUnit.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.unit = response.data;
 });
      
}




$scope.insertData = function(){ 



      if($scope.btnName == "Submit"){
        //var inage = $scope.pImage;
           $http.post(  
                "model/insertProduct.php", 
                {'name':$scope.name, 'sku':$scope.sku, 'model':$scope.model,'point':$scope.point, 'tags':$scope.tags, 'short_description':$scope.short_description, 'description':$scope.description, 'pPrice':$scope.pPrice, 'stCost':$scope.stCost,'crPrice':$scope.crPrice, 'rPrice':$scope.rPrice, 'mrp':$scope.mrp,'sprice':$scope.sprice, 'itemsource':$scope.itemsource, 'sUnit':$scope.sUnit,'stock':$scope.stock, 'size':$scope.sizeId, 'pUnit':$scope.pUnit, 'category':$scope.categoryId,'brand':$scope.brandId, 'color':$scope.color, 'request_type':2 }  
           ).success(function(data) {
                $scope.message = data.message;
                $scope.lastId = data.lastId;

                if($scope.lastId != "")
                    {
                      $scope.myFile = $scope.files[0];
                                 var file = $scope.myFile; 
                                var url = "model/insertImage.php";
                                var id = $scope.lastId;
                                uploadFile.uploadFiletoServer(file, url, id);
                    }


                alert($scope.message);  
               
                $scope.name ="";
                $scope.sku ="";
                $scope.model="";
                $scope.point ="";
                 $scope.tags="";  
                 $scope.short_description =""; 
                 $scope.description="";
                 $scope.pPrice ="";
                 $scope.stCost ="";
                 $scope.crPrice ="";
                 $scope.rPrice ="";
                 $scope.mrp="";
                 $scope.sprice="";
                 $scope.itemsource="";
                 $scope.sUnit="";
                 $scope.stock="";
                 $scope.sizeId="";
                 $scope.pUnit="";
                 $scope.categoryId ="";
                 $scope.brandId="";
                 $scope.color="";


                 });
         }
         else
         {

            $scope.request_type = 4;  
             $http.post(  
                "model/insertProduct.php",  
                {'id':$scope.id, 'name':$scope.name, 'description':$scope.description, 'categoryId':$scope.categoryId,'request_type':$scope.request_type }  
           ).success(function(data) {
                $scope.message = data.message;
                alert($scope.message);  
                $scope.show_data();
                      $scope.id = "";  
                     $scope.name = "";  
                     $scope.description = "";
                     $scope.categoryId = "";
                     $scope.btnName = "Add";  

                 });

         }
      }   



      $scope.deleteData = function(id){ if (confirm("Are you sure you want to delete?")) {  
           $http.post(  
                "model/insertProduct.php",  
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



$scope.updateData = function(id, name, description, categoryId){  
           $scope.id = id;  
           $scope.name = name;  
           $scope.description = description;
           $scope.categoryId = categoryId;
           $scope.btnName = "Update";  
           



      }  



}]);


    </script>