<?php
	require 'header.php';
?>

<body>
	<!--Navbar-->
	
	<nav>
	  <label for="mob-dropChecked" id="mob-btn"></label>    
	  <input type="checkbox" id="mob-dropChecked" role="button">
	  <ul>
		  <li><a href=""><?php echo $lang['about'] ?></a>
			  <ul class="dropdownconent">
				<li><a href="Trener.php"><?php echo $lang['teachers'] ?></a></li>
				<li><a href="#"><?php echo $lang['founder'] ?></a></li>
				<li><a href="#"><?php echo $lang['levels'] ?></a></li>
			  </ul>
		  </li>
		  <li><a href="Timeplan.php"><?php echo $lang['schedule'] ?></a></li>
		  
		  </li><a href="index.php"><img id="logo" src="src/Logo.jpg" alt=""></a></li>
		  
		  
		  <li><a href="OmStiler.html"><?php echo $lang['styles'] ?></a></li>
		 
		  
		  <div class="lang">
			<a href="index.php?lang=en"><img src="src/en.jpg"> </a> | 
			<a href="index.php?lang=no"><img src="src/no.png"></a>
		  </div>
		  
	  </ul>    
	</nav>
	
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
