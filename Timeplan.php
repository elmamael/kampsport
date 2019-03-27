<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!-- Navbar -->
	<nav>
	  <label for="mob-dropChecked" id="mob-btn"></label>    
	  <input type="checkbox" id="mob-dropChecked" role="button">
	  <ul>
		  <li><a href="OmStiler.html">Om stiler</a></li>
		  <li><a href="Timeplan.php">Timeplan</a></li>
		  <img id="logo" src="src/Logo.jpg" alt="">
		  <li><a href="">Konkurranser</a></li>
		  <li><a href="">Om oss</a>
			  <ul class="dropdownconent">
				<li><a href="Trener.php">Trenere</a></li>
				<li><a href="#">Grunnlegger</a></li>
				<li><a href="#">Partier</a></li>
			  </ul>
		  </li>
	  </ul>    
	</nav>
	
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
			
			<td rowspan="3">Dans</td>
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
	


</body>
</html>