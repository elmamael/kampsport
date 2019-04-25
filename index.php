<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<!--Navbar-->
	<?php
	
		include 'navbar.php';
	
	?>
	<!--Navbar end-->
	
	<!--<nav>
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
	-->
	
	<div class="bakgrunnsbildediv">
		<div class="Velkommen">
		<h1>Velkommen til DH</h1>
		<h2>Arnis Eskrima Kali</h2>
		<a href="#YTvideo"><img src="src/arrowsWhite.png" alt="arrows"></a>
		</div>
	</div>
	
	
	
	<div class="iframe-container" id="YTvideo">
		<iframe src="https://www.youtube.com/embed/h4WiCcdiaOc" allowfullscreen></iframe> 
	</div>
	
	<!--Wrapper end -->
	
	
	<!--Nyheter-->
	
	<?php
		include 'database.php';
	
		$sql = "SELECT * FROM Nyhet";
	?>
	
	
	<!--Nyheter end -->
	
	
	
	<!-- Gallery -->
	<div class="Gallerioverskrift">
	<h1>Bildegalleri: Se hva vi driver med!</h1>
	</div>


	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Rekke.jpg">
		  <img src="src/Rekke.jpg" alt="Rekke" width="600" height="400">
		</a>
		<div class="desc">Form: Team med litt spesielle drakter :p </div>
	  </div>
	</div>

	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Utstyr.png">
		  <img src="src/Utstyr.png" alt="Utstyr" width="600" height="400">
		</a>
		<div class="desc">Add a description of the image here</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Fight.jpg">
		  <img src="src/Fight.jpg" alt="Fight" width="600" height="400">
		</a>
		<div class="desc">Add a description of the image here</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Drakt.jpg">
		  <img src="src/Drakt.jpg" alt="Drakt" width="600" height="400">
		</a>
		<div class="desc">Add a description of the image here</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/DoubleStick.jpg">
		  <img src="src/DoubleStick.jpg" alt="DoubleStick" width="600" height="400">
		</a>
		<div class="desc">Add a description of the image here</div>
	  </div>
	</div>
	

	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Ake.jpg">
		  <img src="src/Ake.jpg" alt="Ake" width="600" height="400">
		</a>
		<div class="desc">Add a description of the image here</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Haia.jpg">
		  <img src="src/Haia.jpg" alt="Haia" width="600" height="400">
		</a>
		<div class="desc">Form: traditional double weapon </div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/PaddedStick.jpg">
		  <img src="src/PaddedStick.jpg" alt="PaddedStick" width="600" height="400">
		</a>
		<div class="desc">Padded stick</div>
	  </div>
	</div>

	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/PaddedKnife.jpg">
		  <img src="src/PaddedKnife.jpg" alt="PaddedKnife" width="600" height="400">
		</a>
		<div class="desc">Padded knife</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Landslag.jpg">
		  <img src="src/Landslag.jpg" alt="Landslag" width="600" height="400">
		</a>
		<div class="desc">Landslaget</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Pinnekamp.jpg">
		  <img src="src/Pinnekamp.jpg" alt="Pinnekamp" width="600" height="400">
		</a>
		<div class="desc">Action</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Fokus.jpg">
		  <img src="src/Fokus.jpg" alt="Fokus" width="600" height="400">
		</a>
		<div class="desc">Det gjelder å ha fokus!</div>
	  </div>
	</div>
	
	
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Fint.jpg">
		  <img src="src/Fint.jpg" alt="Fint" width="600" height="400">
		</a>
		<div class="desc"></div>
	  </div>
	</div>
	
	
	<div class="clearfix"></div>

	<div style="padding:6px;">
	 
	</div>
	
	
	<!-- Gallery end -->
	
	<!-- Footer -->
	
	<?php
		include 'footer.php';
	?>
	
	<!--Footer end -->
	
</body>
</html>
