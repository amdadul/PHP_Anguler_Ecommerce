 




<div ng-include="'View/template/head.php'"></div>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div  ng-init="binst()">
			<!-- <div  ng-init="retproduct_p()"> -->



	
	
		<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#!home"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Bin Status</a></li>
		</ul>
		
		<div class="row">
			<!--Left Part Start -->
			
			<!--Left Part End -->
			
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				<div class="products-category">
					
					<!-- Filters -->
					<div class="product-filter filters-panel">
						<div class="row">
							<div class="col-md-2 visible-lg">
								<div class="view-mode">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
							</div>
							<div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
								<div class="form-group short-by">
									<label class="control-label" for="input-sort">Sort By:</label>
									<select id="input-sort" class="form-control"
									onchange="location = this.value;">
										<option value="" selected="selected">Default</option>
										<option value="">Name (A - Z)</option>
										<option value="">Name (Z - A)</option>
										<option value="">Price (Low &gt; High)</option>
										<option value="">Price (High &gt; Low)</option>
										<option value="">Rating (Highest)</option>
										<option value="">Rating (Lowest)</option>
										<option value="">Model (A - Z)</option>
										<option value="">Model (Z - A)</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control" ng-model="limit" ng-change="ppre()">
										<option value="9" selected="selected">9</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="75">75</option>
										<option value="100">100</option>
									</select>
								</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination" ng-if="lid <= 6">
									<li ng-repeat="n in tlp" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(n)" > <span>{{n+1}}</span></a>
									</li>
									<li ng-repeat-end" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(lid-1)" > <span>>>|</span></a>
									</li>
								</ul>
								<ul class="pagination" ng-if="lid >= 7">
									<li ng-repeat="n in tlp" ng-if="n < 3" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(n)" > <span>{{n+1}}</span></a>
									</li>
									<li>
										<a> <span> ....... </span></a>
										
									</li>
									<li ng-repeat="n in tlp" ng-if="n == active && n >= 3 && n!=(lid-1)" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(n)"> <span>{{n+1}}</span></a>
										
									</li>
									<li class="{{(lid-1) == active ? 'active':''}}">
										<a ng-click="pgre(lid-1)"> <span>{{lid}}</span></a>
									</li>
									<li >
										<a ng-click="pgre(n=n+1)" > <span>>|</span></a>
									</li>
									
								</ul>
						</div>
						</div>
					</div>
					<!-- //end Filters -->
					<!--changed listings-->

		<table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" padding-left="5px" role="grid" aria-describedby="table_info" style="width: 100%;">
      <thead><h1 align="center">BIN Matching Table : </h1>
        <tr role="row">
        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >BIN</th>
          <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >BIN Status</th>
        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" >Top Matching </th>
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Steps</th>  
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Team A Total BV</th>  
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Team B Total BV</th> 
          <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Team A Required BV</th>  
         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Team B Required BV</th>   
         

        </tr>
      </thead>
          <tbody>
                 <tr ng-repeat="bst in binst">
                 	
          <td>{{bst.bin}}</td>
          <td>{{bst.binstatus}}</td>
         <td>{{bst.topmatching}}</td>
          <td>{{bst.steps}}</td>
          <td>{{bst.ltp}}</td>
          <td>{{bst.rtp}}</td>
          <td>{{bst.left}}</td>
          <td>{{bst.right}}</td>
          

                </tr>
                 
                </tbody>
     
    </table>
	
	
	

		</div>
						<!--// End Changed listings-->
					<!-- Filters -->
					<div class="product-filter product-filter-bottom filters-panel" >
						<div class="row">
							<div class="col-md-2 hidden-sm hidden-xs">
							</div>
						   <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
								<div class="form-group" style="margin: 7px 10px">Showing {{startfrom}} to {{(startfrom-0)+(parpage-0)}} of {{np}} ({{totalPage}} Pages )</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination" ng-if="lid <= 6">
									<li ng-repeat="n in tlp" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(n)" > <span>{{n+1}}</span></a>
									</li>
									<li ng-repeat-end" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(lid-1)" > <span>>>|</span></a>
									</li>
								</ul>
								<ul class="pagination" ng-if="lid >= 7">
									<li ng-repeat="n in tlp" ng-if="n < 3" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(n)" > <span>{{n+1}}</span></a>
									</li>
									<li>
										<a> <span> ....... </span></a>
										
									</li>
									<li ng-repeat="n in tlp" ng-if="n == active && n >= 3 && n!=(lid-1)" class="{{n == active ? 'active':''}}">
										<a ng-click="pgre(n)"> <span>{{n+1}}</span></a>
										
									</li>
									<li class="{{(lid-1) == active ? 'active':''}}">
										<a ng-click="pgre(lid-1)"> <span>{{lid}}</span></a>
									</li>
									<li >
										<a ng-click="pgre(n=n+1)" > <span>>|</span></a>
									</li>
									
								</ul>
						</div>
									
						 </div>
					</div>
					<!-- //end Filters -->
					
				</div>
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>


</div>	
	<div ng-include="'View/template/footer.php'"></div>

