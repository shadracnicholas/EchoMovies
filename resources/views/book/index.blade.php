@extends('partials/master')
@section('stylesheet')
<link  href="{{Route('home')}}/public/assets/pages/css/movie-book.css" rel="stylesheet" type="text/css" media="all">
@endsection
@section('content')
<div class="content">
	<!---728x90 -->
	<h1>Movie Ticket Booking Widget</h1>
	<!---728x90-->
	<div class="main">
		<h2>Multiplex Theatre Showing Screen 1</h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Movie </li>
					<li>Time</li>
					<li>Tickets</li>
					<li>Seats</li>
					<li>Total</li>
				</ul>
				<ul class="book-right">
					<li>: {{$movie->movie_title}}</li>
					: <select>
						@for($i=1; $i<=5; $i++)
							<option value="{{$schedule["schdule_day_time_$i"]}}">{{ $schedule["schdule_day_time_$i"] }}</option>
						@endfor	
					</select>
					<li>: April 3, 21:00</li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>$</i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>


				<button class="checkout-button">Book Now</button>
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
		</div>
	</div> 	<!-- /.Main -->
@section('javascript')
<script type="text/javascript" src="{{Route('home')}}/public/assets/pages/js/seatframe.js"></script>
@endsection
@endsection
