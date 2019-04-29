
<?php
	include 'config.php';

?>


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