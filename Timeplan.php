<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<!--
	<header>	
	<div class="navbar">
		<nav>
			<ul>				
				<li class="leftnav"><a href="Registrering.php">Registrering</a></li>
				<li class="leftnav"><a href="Timeplan.php">Timeplan</a></li>
				<li class="rightnav"><a href="">Konkuranser</a></li>
				<li class="rightnav"><a href="">Om oss</a></li>
			</ul>
		</nav>
		<div class="logo"><img src="src/Logo.jpg" alt="logo"></div>

	</div>
	</header> -->
	<!-- Timeplan -->
	<div class="Timeplan">
	<table>
		<tr>
			<th colspan="6" id="OverskriftTimeplan">Timeplan</th>
		</tr>
		
		<tr>
			<th rowspan="6">Hours</th>
			<div id="Dager">
			<th>Man</th>
			<th>Tir</th>
			<th>Ons</th>
			<th>Tor</th>
			<th>Fre</th>
			</div>
		</tr>
		
		<tr>
			<td rowspan="2">Arnis åpent<br> nivå</td>
			<td></td>
			<td rowspan="2"></td>
			<td rowspan="2">Musikk</td>
			<td></td>
		</tr>
		
		<tr>
			<td rowspan="3">Kali</td>
			<td rowspan="2">Dans</td>
		</tr>
		
		<tr>
			<td></td>
			
			<td rowspan="3">Lunch</td>
			<td></td>
		</tr>
		
		<tr>
			<td rowspan="2">Eskrima</td>
			<td rowspan="2">Musikk</td>
			<td rowspan="2"></td>
		</tr>
		
		<tr>
			<td></td>
		</tr>
	</table>
	</div>
	
	<!--Gammel

	<div class="timeline">
		<ul>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
			<li><span>17:30</span></li>
			<li><span>18:00</span></li>
		</ul>
	</div> <!-- .timeline -->
<!--
	<div class="events">
		<ul>
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">Abs Circuit</em>
						</a>
					</li>

					<li class="single-event" data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">Rowing Workout</em>
						</a>
					</li>

					<li class="single-event" data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">Yoga Level 1</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
					<li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">Rowing Workout</em>
						</a>
					</li>

					<li class="single-event" data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-4">
						<a href="#0">
							<em class="event-name">Restorative Yoga</em>
						</a>
					</li>

					<li class="single-event" data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">Abs Circuit</em>
						</a>
					</li>

					<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">Yoga Level 1</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
					<li class="single-event" data-start="09:00" data-end="10:15" data-content="event-restorative-yoga" data-event="event-4">
						<a href="#0">
							<em class="event-name">Restorative Yoga</em>
						</a>
					</li>

					<li class="single-event" data-start="10:45" data-end="11:45" data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">Yoga Level 1</em>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">Rowing Workout</em>
						</a>
					</li>

					<li class="single-event" data-start="13:45" data-end="15:00" data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">Yoga Level 1</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">Abs Circuit</em>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-4">
						<a href="#0">
							<em class="event-name">Restorative Yoga</em>
						</a>
					</li>

					<li class="single-event" data-start="15:30" data-end="16:30" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">Abs Circuit</em>
						</a>
					</li>

					<li class="single-event" data-start="17:00" data-end="18:30"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">Rowing Workout</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Friday</span></div>

				<ul>
					<li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">Rowing Workout</em>
						</a>
					</li>

					<li class="single-event" data-start="12:30" data-end="14:00" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">Abs Circuit</em>
						</a>
					</li>

					<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">Yoga Level 1</em>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="event-modal">
		<header class="header">
			<div class="content">
				<span class="event-date"></span>
				<h3 class="event-name"></h3>
			</div>

			<div class="header-bg"></div>
		</header>

		<div class="body">
			<div class="event-info"></div>
			<div class="body-bg"></div>
		</div>

		<a href="#0" class="close">Close</a>
	</div>

	<div class="cover-layer"></div>
</div> <!-- .cd-schedule -->

</body>
</html>