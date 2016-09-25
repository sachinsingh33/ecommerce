@extends('pages.layout')
@section('content')
<!-- portfolio-bg -->
	<div class="portfolio-bg">
		<div class="container">
			<h2>Portfolio</h2>
		</div>
	</div>
<!-- //portfolio-bg -->
<!-- portfolio -->
	<div class="portfolio">
		<div class="container">
			<h3>Portfolio</h3>
			<p class="qui">Voluptate velit esse quam nihil</p>
			<div class="w3_portfolio_grids">
				<!-- Filter Controls - Simple Mode -->
				<div class="row">
					<!-- A basic setup of simple mode filter controls, all you have to do is use data-filter="all"
					for an unfiltered gallery and then the values of your categories to filter between them -->
					<ul class="simplefilter">
					
						<li class="active" data-filter="all">All</li>
						<li data-filter="1">Category- 1</li>
						<li data-filter="2">Category- 2</li>
						<li data-filter="3">Category- 3</li>
						<li data-filter="4">Category- 4</li>
						<li data-filter="5">Category- 5</li>
						
					</ul>
				</div>

				<div class="row">
					<!-- This is the set up of a basic gallery, your items must have the categories they belong to in a data-category
					attribute, which starts from the value 1 and goes up from there -->
					<div class="filtr-container">
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/3.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 5" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/4.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/4.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 4" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/5.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/5.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/7.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/7.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 4" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/8.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/8.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/9.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/9.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/10.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/10.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/11.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/11.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/12.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/12.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/4.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/4.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 5" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/5.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/5.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 4" data-sort=" ">
							<div class="gallery_grid">
								<a href="images/3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
									<img src="images/3.jpg" alt=" " class="img-responsive" /> 
									<div class="p-mask">
										<h4>Production</h4>
										<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
						<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
					</div>
				</div>
			</div>
					<!-- Include jQuery & Filterizr -->
					<script src="js/jquery.filterizr.js"></script>
					<script src="js/controls.js"></script>
					<script type="text/javascript">
						$(function() {
							//Initialize filterizr with default options
							$('.filtr-container').filterizr();
						});
					</script>
		</div>
	</div>
<!-- //portfolio -->
@stop