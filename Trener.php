<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!--Navbar-->
	<header>	
	<div class="navbar">
		<nav>
			<ul>				
				<li class="leftnav"><a href="">Nyheter</a></li>
				<li class="leftnav"><a href="Timeplan.php">Timeplan</a></li>
				
				<div class="logo"><a href="indexH.html"><img src="src/Logo.jpg" alt="logo"></a></div>
				
				<div class="rightnav">
				 <div class="dropdown">
				  <button class="dropbtn" onclick="myFunction()">Om oss
					<i class="fa fa-caret-down"></i>
				  </button>
				  <div class="dropdown-content" id="myDropdown">
					<a href="Trener.php">Trenere</a>
					<a href="OmStiler.html">Om stiler</a>
					<a href="#">Grunnlegger</a>
					<a href="#">Partier</a>
				  </div>
				  </div>
				</div>
				<li class="rightnav"><a href="">Konkuranser</a></li>
			</ul>
		</nav>
		
	</div>
		
	</header>
	
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