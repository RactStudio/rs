	<div class="container-fluid">

		<!-- Column Left --->
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					
				<!-- Left Sidebar -->
				<?php include 'menu-left.php';?>
				
		</div>

		<!-- Column Content --->
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="rs-content">
			
			<div style="margin-top:-15px;margin-bottom:20px;">
				<h1 class="rs-title text-center" style="font-size:180%;">RactStudio's Products Documentations</h1>
			</div>
						
			<!-- main content -->
			<div class="page jplist" id="ractstudio-docs">

				<!--<><><><><><><><><><><><><> MAIN CONTENT START <><><><><><><><><><><><><>-->

				<!-- jplist top panel -->
				<div class="jplist-panel">
					<div class="row panel panel-default">
						
						<div class="row">
							
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<div class="row rs-config-box">
							
							<!-- filter by title -->
							<div class="text-filter-box rs-search">

								<!--[if lt IE 10]>
								<div class="jplist-label">Filter by Title:</div>
								<![endif]-->

								<input data-path=".title" type="text" value="" class="form-control" placeholder="Search product by name..." data-control-type="textbox" data-control-name="title-filter" data-control-action="filter"/>
							</div>

							</div>
							</div>
							
							<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
							<div class="row rs-config-box">
							
							<!-- reset button -->
							<button
									type="button"
									class="btn btn-rs-primary"
									data-control-type="reset"
									data-control-name="reset"
									data-control-action="reset" style="min-width:100%;">
								Reset &nbsp;<i class="fa fa-share"></i>
							</button>

							</div>
							</div>
						
							<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
							<div class="row rs-config-box">
							
							<!-- back button button -->
							<button
									class="btn btn-rs-primary"
									type="button"
									data-control-type="back-button"
									data-control-name="back-button"
									data-control-action="back-button" style="min-width:100%;">
								<i class="fa fa-arrow-left"></i> Go Back
							</button>

							</div>
							</div>
							
						</div>
						<div class="row">
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="row rs-config-box">

								<!-- filter dropdown -->
								<div
										class="dropdown filter-dd"
										data-control-type="boot-filter-drop-down"
										data-control-name="category-filter"
										data-control-action="filter">

									<button
											class="btn btn-rs-download"
											type="button"
											data-toggle="dropdown"
											id="filter-dropdown-menu"
											aria-expanded="true" style="min-width:100%;">
										<span data-type="selected-text">Filter by category</span>
										<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" role="menu" aria-labelledby="filter-dropdown-menu" style="min-width:100%;">
									
										<li role="presentation">
											<a role="menuitem" tabindex="-0" href="#" data-path="default" data-default="true">Products by Category: All</a>
										</li>

										<li role="presentation" class="divider"></li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcshostingcart">Hosting Cart (whmcs order forms)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsajaxcart">Ajax Cart (whmcs order forms)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsmisccart">Misc. Cart (whmcs order forms)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsclientaraetemplates">Client Area Templates (whmcs)</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".wordpressthemes">WordPress Themes</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".wordpressplugins">WordPress Plugins</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".html5websitetemplates">Website Templates (html5)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".html5ecommercetemplates">Ecommerce Templates (html5)</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".otherproducts">Other Products</a>
										</li>
										
									</ul>
								</div>
							
								</div>
							</div>
									
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="row rs-config-box">

								<!-- sort dropdown -->
								<div
										class="dropdown sort-dd"
										data-control-type="boot-sort-drop-down"
										data-control-name="bootstrap-sort-dropdown"
										data-control-action="sort"
										data-datetime-format="{month}/{day}/{year}"
										data-control-deep-link="false">

									<button
											class="btn btn-rs-download"
											type="button"
											id="sort-dropdown-menu"
											data-toggle="dropdown"
											aria-expanded="true" style="min-width:100%;">
										<span data-type="selected-text">Sort by: None</span>
										<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" role="menu" aria-labelledby="sort-dropdown-menu" style="min-width:100%;">
									
										<li role="presentation">
											<a role="menuitem" tabindex="-0" href="#" data-path="default" data-order="asc" data-type="text" data-default="true">Sort by: None</a>
										</li>

										<li role="presentation" class="divider"></li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typewhmcs" data-order="asc" data-type="text">WHMCS Products</a>
										</li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typewordpress" data-order="asc" data-type="text">WordPress Products</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typehtml5" data-order="asc" data-type="text">HTML5 Products</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typehothers" data-order="asc" data-type="text">Other Products</a>
										</li>
										
										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".daterelease" data-order="asc" data-type="datetime">Release Date / asc</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".daterelease" data-order="desc" data-type="datetime">Release Date / desc</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".dateupdate" data-order="asc" data-type="datetime">Last Update / asc</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".dateupdate" data-order="desc" data-type="datetime">Last Update / desc</a>
										</li>
										
										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".title" data-order="asc" data-type="text">Product Title  / A-Z</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".title" data-order="desc" data-type="text">Product Title / Z-A</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".desc" data-order="asc" data-type="text">Product Description / A-Z</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".desc" data-order="desc" data-type="text">Product Description / Z-A</a>
										</li>
										
									</ul>

								</div>
							
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="row rs-config-box">
							
								<!-- items per page dropdown -->
								<div
										class="dropdown"
										data-control-type="boot-items-per-page-dropdown"
										data-control-name="paging"
										data-control-action="paging">

									<button
											class="btn btn-rs-download"
											type="button"
											data-toggle="dropdown"
											id="dropdown-menu-1"
											aria-expanded="true" style="min-width:100%;">
										<span data-type="selected-text">Products Per Page</span>
										<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-menu-1" style="min-width:100%;">

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="8">8 per page</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="16" data-default="true">16 per page</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="32">32 per page</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="all">View All Products</a>
										</li>
									</ul>
								</div>
								
							</div>
							</div>
							
						</div>
						<div class="row">

							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<strong>Page {current} of {pages}</strong>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="row rs-config-box">

								<!-- bootstrap pagination control -->
								<ul
										class="pagination jplist-pagination"
										data-control-type="boot-pagination"
										data-control-name="paging"
										data-control-action="paging"
										data-range="3"
										data-mode="google-like" style="min-width:300px;display:block;margin-left:auto;margin-right:auto;padding-left:20%;">
								</ul>
								
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box" style="margin-bottom:35px;">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<small>{start} - {end} of {all} items</small>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
						</div>
						
					</div>

				</div>

				<div class="list row">
					
					<!-- jplist Products List -->
					<?php include 'products-list.php';?>
					
				</div>
				
			   <!-- no results found -->
			   <div class="jplist-no-results text-center" style="margin:20px;color:rgba(255, 87, 34,0.8);font-size:2.0em;font-weight:400;">
				  <p>No results found</p>
			   </div>

				<!-- jplist top panel -->
				<div class="jplist-panel">
					<div class="row" style="padding:10px;">
						
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<strong>Page {current} of {pages}</strong>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="row rs-config-box">

								<!-- bootstrap pagination control -->
								<ul
										class="pagination jplist-pagination"
										data-control-type="boot-pagination"
										data-control-name="paging"
										data-control-action="paging"
										data-range="3"
										data-mode="google-like" style="min-width:300px;display:block;margin-left:auto;margin-right:auto;padding-left:20%;">
								</ul>
								
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box" style="margin-bottom:35px;">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<small>{start} - {end} of {all} items</small>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
					</div>

				</div>
				
				<!--<><><><><><><><><><><><><> MAIN CONTENT END <><><><><><><><><><><><><>-->

			</div>

			</div>
		</div>
			
		<!-- Column Right --->
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
				
				<!-- Right Sidebar -->
				<?php include 'menu-right.php';?>
				
		</div>

	</div>