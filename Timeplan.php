
<?php
	include 'Languages/config.php';
	include 'header.php';

?>



<body>
	
	<!-- Navbar -->
	
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
	
	<h1><?php echo $lang['whenwetrain'] ?></h1>

	<!-- Timeplan -->
	<div class="Timeplan">
	
		<table>
			<tr>
				<th colspan="6" id="OverskriftTimeplan"><?php echo $lang['schedule'] ?></th>
			</tr>
			
			<tr>
			<th><?php echo $lang['hours'] ?></th>
			<div id="Dager">
			<th><?php echo $lang['mon'] ?></th>
			<th><?php echo $lang['tue'] ?></th>
			<th><?php echo $lang['wed'] ?></th>
			<th><?php echo $lang['thu'] ?></th>
			<th><?php echo $lang['fri'] ?></th>
			</div>
			</tr>
			
			
			<tr>
			<td>18.00 - 21.00</td>
			<td id="man"><?php echo $lang['danny'] ?></td>
			<td></td>
			<td id="ons"><?php echo $lang['siva'] ?></td>
			<td></td>
			<td id="fre"><?php echo $lang['danny'] ?></td>
			</tr>	
		
		</table>
		
		<p><?php echo $lang['readteachers'] ?> <a href="Trener.php"> <?php echo $lang['here'] ?>!</a></p>
		
	</div>
	
	
	
	<!-- Footer -->
	
	<?php
		include 'footer.php';
	?>
	
	<!--Footer end -->
	


</body>
</html>