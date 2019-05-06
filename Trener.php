<?php
	include 'Languages/config.php';
	include 'header.php';
?>



<body>
	
	<!--Navbar-->
	
	<nav>
	  <label for="mob-dropChecked" id="mob-btn"></label>    
	  <input type="checkbox" id="mob-dropChecked" role="button">
	  <ul>
		  <li><a href=""><?php echo $lang['about'] ?></a>
			  <ul class="dropdownconent">
				<li><a class="active" href="Trener.php"><?php echo $lang['teachers'] ?></a></li>
				<li><a href="#"><?php echo $lang['founder'] ?></a></li>
				<li><a href="#"><?php echo $lang['levels'] ?></a></li>
			  </ul>
		  </li>
		  <li><a href="Timeplan.php"><?php echo $lang['schedule'] ?></a></li>
		  <a href="index.php"><img id="logo" src="src/Logo.jpg" alt=""></a>
		  <li><a href="OmStiler.php"><?php echo $lang['styles'] ?></a></li>
		 
		  <li>
			  <div class="lang">
				<a href="index.php?lang=en"><img src="src/en.jpg"> </a> | 
				<a href="index.php?lang=no"><img src="src/no.png"></a>
			  </div>
		  </li>  
	  </ul>    
	</nav>
	
	<!--Navbar end-->
	
	<h1>Trenere</h1>
	
	
	
	<!-- Footer -->
	
	<?php
		include 'footer.php';
	?>
	
	<!--Footer end -->
	
	
	
</body>
</html>