<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index">Production</a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li @if($pagetype=="index")

							class="active"
							@else
							class="hvr-sweep-to-bottom"
							@endif>
							<a href="index">Home</a></li>
							
							<li @if($pagetype=="services")

							class="active"
							@else
							class="hvr-sweep-to-bottom"
							@endif>
							<a href="services" class="hvr-sweep-to-bottom">Services</a></li>

							<li @if($pagetype=="portfolio")

							class="active"
							@else
							class="hvr-sweep-to-bottom"
							@endif>
                            <a href="portfolio" class="hvr-sweep-to-bottom">Portfolio</a></li>
	
							<li @if($pagetype=="short-codes")

							class="active"
							@else
							class="hvr-sweep-to-bottom"
							@endif>
							<a href="short-codes" class="hvr-sweep-to-bottom">Short Codes</a></li>
	
							<li @if($pagetype=="mail")

							class="active"
							@else
							class="hvr-sweep-to-bottom"
							@endif>
							<a href="mail" class="hvr-sweep-to-bottom">Mail Us</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header -->