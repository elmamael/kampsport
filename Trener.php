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
	  <a href="">Nyheter</a>
	  <a href="">Timeplan</a>
	  <div> <img id="logo" src="src/Logo.jpg" alt=""></div>
	  <a href="">Konkurranser</a>
	  <div class="dropdown">
		 <button class="dropbtn">Om oss</button>
		<div class="dropdown-content">
			<a href="Trener.php">Trenere</a>
			<a href="OmStiler.html">Om stiler</a>
			<a href="#">Grunnlegger</a>
			<a href="#">Partier</a>
		</div>
	</div>
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