<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!-- Navbar -->
	<?php
		include 'navbar.php';
	?>
	<!--Navbar end-->
	
	<h1>Se når vi trener!</h1>
	<!-- Timeplan -->
	<div class="Timeplan">
	
		<table>
			<tr>
				<th colspan="6" id="OverskriftTimeplan">Timeplan</th>
			</tr>
			
			<tr>
			<th>Hours</th>
			<div id="Dager">
			<th>Man</th>
			<th>Tir</th>
			<th>Ons</th>
			<th>Tor</th>
			<th>Fre</th>
			</div>
			</tr>
			
			
			<tr>
			<td>18.00 - 21.00</td>
			<td id="man">Trener: Danny</td>
			<td></td>
			<td id="ons">Trener: Siva</td>
			<td></td>
			<td id="fre">Trener: Danny</td>
			</tr>	
		
		</table>
		
		<p>Les om våre trenere <a href="Trener.php"> her!</a></p>
		
	</div>
	
	
	
	<!-- Footer -->
	
	<?php
		include 'footer.php';
	?>
	
	<!--Footer end -->
	


</body>
</html>