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
				<div class="front">Select Screen Seat</div>
				<div id="legend"></div>
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Movie </li>
					<li>Time</li>
					<li>Date</li>
					<li>Seats</li>
					<li>Total</li>
				</ul>
				<ul class="book-right">
					<li>: {{$movie->movie_title}}</li>
					: <select>
						@for($i=1; $i<=4; $i++)
						<option value="{{$schedule["schedule_day_time_$i"]}}">{{$schedule["schedule_day_time_$i"]}}</option>
						@endfor	
					</select>
					<li>: {{ \Carbon\Carbon::parse($schedule["schedule_date"])->formatLocalized('%A, %d %B %Y') }}</li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>Rs: </i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>


				<button class="checkout-button">Book Now</button>
				
			</div>
			<div style="clear:both"></div>
		</div>
	</div> 	<!-- /.Main -->
@section('javascript')
<!-- <script type="text/javascript" src="{{Route('home')}}/public/assets/pages/js/seatframe.js"></script> -->
<script type="text/javascript">
		var price = {!! $schedule["movie_ticket_price"] !!}; //price
		$(document).ready(function() {
			var $cart        = $('#selected-seats'), //Sitting Area
				$counter = $('#counter'), //Votes
				$total      = $('#total'); //Total money
				
			var sc = $('#seat-map').seatCharts({
				map: [  //Seating chart
				'aaaaaaaaaa',
				'aaaaaaaaaa',
				'__________',
				'aaaaaaaaaa',
				'aaaaaaaaaa',
				'aaaaaaaaaa',
				'aaaaaaaaaa',
				'aaaaaaaaaa'
				],
				naming : {
					top : false,
					getLabel : function (character, row, column) {
						return column;
					}
				},
				legend : { //Definition legend
					node : $('#legend'),
					items : [
					[ 'a', 'available',   'Available' ],
					[ 'a', 'unavailable', 'Sold'],
					[ 'a', 'selected', 'Selected']
					]
				},
				click: function () { //Click event
					if (this.status() == 'available') { //optional seat
						$('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
						.attr('id', 'cart-item-'+this.settings.id)
						.data('seatId', this.settings.id)
						.appendTo($cart);

						$counter.text(sc.find('selected').length+1);
						$total.text(recalculateTotal(sc)+price);

						return 'selected';
					} else if (this.status() == 'selected') { //Checked
							//Update Number
							$counter.text(sc.find('selected').length-1);
							//update totalnum
							$total.text(recalculateTotal(sc)-price);

							//Delete reservation
							$('#cart-item-'+this.settings.id).remove();
							//optional
							return 'available';
					} else if (this.status() == 'unavailable') { //sold
						return 'unavailable';
					} else {
						return this.style();
					}
				}
			});
			//sold seat
			sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
		});
		//sum total money
		function recalculateTotal(sc) {
			var total = 0;
			sc.find('selected').each(function () {
				total += price;
			});
			return total;
		}

</script>
@endsection
@endsection
