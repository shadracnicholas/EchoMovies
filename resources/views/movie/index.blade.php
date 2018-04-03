@extends('partials/master')
@section('stylesheet')
<link  href="{{Route('home')}}/public/assets/pages/css/movie-details.css" rel="stylesheet" type="text/css" media="all">
@endsection
<!-- {{Route('home')}}/public/assets/movies_images/m-4.jpg -->
@section('content')
<div class="content">
	<!---728x90 -->
	<h1>Echo Movie Booking Application</h1>
	<!---728x90-->
	<div class="main movie-details-body">
		<h2>Movie Details</h2>
		<div class="row">
			<div class="col-md-12">
				<div class="movie-details">
					<div class="row">
						<div class="col-md-4">
							<img class="img-responsive" src="{{Route('home')}}/public/assets/{{$movie->movie_poster}}" alt="{{$movie->movie_title}}">
						</div>
						<div class="col-md-8">
							<!-- Rating -->
							<p class="rating pull-right">
								<i class="fa fa-star">{{$movie->movie_rating}}/</i>10
							</p>
							<!-- Title -->
							<h3 class="title">{{$movie->movie_title}}</h3>
							<!-- Description -->
							<p class="description">{{$movie->movie_description}}</p>
							<div class="details">
								<p><b>Director: </b> {{$movie->movie_director_name}}</p>
								<p><b>Stars: </b> {{$movie->movie_stars_name}}</p>
								<p><b>Details: </b> 
									<span class="time">{{$movie->movie_watch_time}} | </span> 
									<span class="category"> {{$movie->movie_category}} | </span> 
									<span class="released"> {{$movie->movie_released_date}}</span>
								</p>
							</div> <!-- /.Details -->
							<!-- Trailer -->
							<button type="button" class="btn btn-default " data-toggle="modal" data-target='#movieTrailer'>View Trailer</button>
							<!-- Movie Schedule -->
							<h3>Movie Schedule</h3>
							@if (count($schedules))
								<table class="table table-bordered table-responsive table-hover">
									<thead class="bg-primary">
										<tr class="text-center">
											<th>Day</th>
											<th>Date</th>
											<th>Screen Time 1</th>
											<th>Screen  Time 2</th>
											<th>Screen Time 3</th>
											<th>Screen Time 4</th>
											<th>Screen Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($schedules as $schedule)
											<tr class="text-center">
												<td>{{$schedule->schedule_day}}</td>
												<td>{{$schedule->schedule_date}}</td>
												<td>{{$schedule->schedule_day_time_1}}</td>
												<td>{{$schedule->schedule_day_time_2}}</td>
												<td>{{$schedule->schedule_day_time_3}}</td>
												<td>{{$schedule->schedule_day_time_4}}</td>
												<td>
													<a href="{{Route('home')}}/book/{{$movie->id}}/{{$schedule->id}}" class="btn btn-default">Book Now</a>
												</td>
											</tr>
										@endforeach
									@else
										<div class="alert alert-danger">
										 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										 	<p><strong>Sorry!</strong> No Schedule Available For This Movie.....</p>
										 </div> 
									</tbody>
								</table>
							@endif
						</div> <!-- /.Col-md-8 -->
					</div>	<!-- /.Row -->		
				</div> <!-- /.Trending Movies -->
			</div> <!-- /.Col-md-12 -->
		</div> <!-- /.Row -->
	</div> <!-- /.Main -->

<!-- /.Trailer Modal -->
<div class="modal fade" id="movieTrailer">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div class="modal-body">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" id="videoId" width="900" height="540" src="{{$movie->movie_trailer_url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
