<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!--Navbar-->
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
	
	<h1>Trenere</h1>
	
	
	
	<!--Navbar-->
	
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
	
</body>
</html>