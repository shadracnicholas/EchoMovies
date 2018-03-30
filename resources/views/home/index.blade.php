@extends('partials/master')
@section('stylesheet')
<link  href="{{Route('home')}}/public/assets/pages/css/home.css" rel="stylesheet" type="text/css" media="all">
@endsection
@section('content')
<div class="content">
	<!---728x90 -->
	<h1>Echo Movie Booking Application</h1>
	<!---728x90-->
	<div class="main movies-schedule-body">
		<h2>Movies Schedule</h2>
		<div class="schedule-movies">
			<div class="row">
				<div class="col-md-12 trending-movies">
					<h3>Top Trending Movies:</h3>
					<div id="trending-movies-slider">
						<?php for($i=1; $i <= 8; $i++){ ?>
							<div class="item">
								<div class="media">
									<a href="movie/1/Logan-(2017)">
										<img class="media-object img-responsive" src="{{Route('home')}}/public/assets/movies_images/m-{{$i}}.jpg" alt="Image">
									</a>
									<div class="media-body text-center">
										<h4 class="media-heading">Movie Name Here</h4>
										<p><b>Rating:</b> ( 4.5 / 5 )</p>
									</div>
								</div> <!-- /.media -->
							</div> <!-- /.Item --> 
						<?php }; ?>
					</div> <!-- /.Slider -->
				</div> <!-- /.Trending Movies -->

				<!-- Latest Releaed Movies -->
				
				<div class="col-md-12 latest-movies">
					<h3>Latest Movies:</h3>
					<div id="latest-movies-slider">
						<?php for($i=1; $i <= 8; $i++){ ?>
							<div class="item">
								<div class="media">
									<a href="#">
										<img class="media-object img-responsive" src="{{Route('home')}}/public/assets/movies_images/m-{{$i}}.jpg" alt="Image">
									</a>
									<div class="media-body text-center">
										<h4 class="media-heading">Movie Name Here</h4>
										<p><b>Rating:</b> ( 4.5 / 5 )</p>
									</div>
								</div> <!-- /.media -->
							</div> <!-- /.Item --> 
						<?php }; ?>
					</div> <!-- /.Slider -->
				</div> <!-- /.Trending Movies -->

			</div> <!-- /.Row -->
		</div> <!-- Schedule-movies -->
	</div> <!-- /.Main -->
</div> <!-- /.Content -->

@endsection
