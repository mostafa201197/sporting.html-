<!DOCTYPE html>
<html>
<head>
	<title>Sporting Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/php" href="log in php.php">
</head>
<body>
   
	<header>
		<div class="logo">
			<img src="./image/logo.png" alt="Sporting Website Logo">
		</div>
		<!--  start search bar  -->
		<div class="search">
			<form action="search.php" method="GET">
				<input type="text"  id ="search" name="search" placeholder="Search...">
				<button type="submit">Search</button>
			</form>
		</div>
	</header>
	
	<nav>
		<ul>
			<li><a href="sporting.php">Home</a></li>
			<li><a href="Schedule.html">Schedule</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="feedback.php">feedback</a></li>
			<li><a href="log in.php">log out</a></li>
			<!-- <li><a href="log in.php">My account</a></li> -->
		</ul>
	</nav>
    
	
	<main>
		<h2>Welcome to our sporting website </h2>
		<p>Here you'll find information about our teams, the latest scores and schedule, and more.</p>
		<h3>Featured Sports</h3>
		<ul class="sports-list">
			<li class="Basketball" ><a href="./basketball.php" >  
				<img src="./image/basketball.webp" alt="Clickable image">
			</a> </li>

			<li class="Football"><a href="./football.php" >
				<img src="./image/football.jpg" alt="Clickable image">
			</a></li>

			<li class="Handball"><a href="./handball.php"> 
				<img src="./image/handball.jpg" alt="Clickable image">
			</a></li>

			<li class="Volleyball"><a href="./volleyball.php"> 
				<img src="./image/volleyball.jpg" alt="Clickable image">
			</a></li>

			<li class="Tennis"><a href="./tennis.php">
				<img src="./image/tennis.jpg" alt="Clickable image">
			</a></li>

			<li class="Golf"><a href="./Golf.php"> 
				<img src="./image/Golf.jpg" alt="Clickable image">
			</a></li>
		
		</ul>
		
	</main>
	
	<footer>
		<p>&copy; 2023 Sporting Website. All rights reserved.</p>
	</footer>
   
</body>
</html>
