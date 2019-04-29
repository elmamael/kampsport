<?php
	include 'config.php';

?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="UTF-8">
<title><?php echo $lang['title'] ?></title>
</head>

<body>
	<!--Navbar-->
	<?php
	
		include 'navbar.php';
	
	?>
	<!--Navbar end-->
	
	
	
	<div class="bakgrunnsbildediv">
		<div class="Velkommen">
		<h1><?php echo $lang['welcome'] ?></h1>
		<h2><?php echo $lang['arnis'] ?></h2>
		<a href="#YTvideo"><img src="src/arrowsWhite.png" alt="arrows"></a>
		</div>
	</div>
	
	
	
	<div class="iframe-container" id="YTvideo">
		<iframe src="https://www.youtube.com/embed/h4WiCcdiaOc" allowfullscreen></iframe> 
	</div>
	
	<!--Wrapper end -->
	
	
	<!--Nyheter-->
	<h1><?php echo $lang['news'] ?> :</h1>
	<?php
		include 'database.php';
	
		$sql = "SELECT * FROM Nyhet";
		$resultat = $connection->query($sql);
	
		while($rad = $resultat->fetch_assoc()) {
			$overskrift = $rad["nyhet_navn"];
			$nyhet = $rad["nyhet_info"];
			
			
			echo("<h2>$overskrift</h2><br>");
			echo("<div class='text'>");
			echo("$nyhet");
			echo("</div>");
		}
	?>
	
	
	<!--Nyheter end -->
	
	
	
	<!-- Gallery -->
	<div class="Gallerioverskrift">
	<h1><?php echo $lang['gallery'] ?></h1>
	</div>


	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="src/Rekke.jpg">
		  <img src="src/Rekke.jpg" alt="Rekke" width="600" height="400">
		</a>
		<div class="desc"><?php echo $lang['costumes'] ?></div>
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
		<div class="desc"><?php echo $lang['teamnor'] ?></div>
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
		<div class="desc"><?php echo $lang['focus'] ?></div>
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
