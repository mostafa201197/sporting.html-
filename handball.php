<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<nav>
		<ul>
			<li><a href="sporting.php">Home</a></li>
			<!-- <li><a href="teams.php">Teams</a></li> -->
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="log in.php" target ="_blank">log out</a></li>
		</ul>
	</nav>
    <div>
        <div class="handball1">
        <label >Handball</label>
        </div>
        <label id="hand">Rules of Volleyball: </label>
        <p class="rules">
            Handball is played between two teams of seven players on a rectangular 
            
            court with a goal at each end ,  The game starts with a throw-off, 
            
            and players may dribble and pass the ball to score a goal ,  
            
            The goalkeeper is the only player allowed to use their feet
            
            and legs to touch the ball while it's inside the penalty area,
            
            and fouls such as touching the ball with feet, hitting or
            
            pushing an opponent, or grabbing the ball out of another player's
            
            hands result in free throws or penalty throws ,  A game of handball consists of two 30-minute halves,
            
            with a halftime break in between , 
        </p>
        <br>
    </div>
    <div>
        <label class="famous1">most famous players on it: </label>
        <P class="famous">
        Nikola Karabatic - French handball player who has won numerous titles including four Olympic medals and four World Championships , 

Thierry Omeyer - Former French goalkeeper who won two Olympic gold medals and five World Championships , 

Magnus Wislander - Swedish handball player who won Olympic gold, three World Championships, and two European Championships , 

Talant Dujshebaev - Former Soviet and Spanish handball player who has won two Olympic medals, one World Championship and two European Championships , 

Rafael Capote - Cuban handball player who has been named the IHF World Player of the Year , 

Mikkel Hansen - Danish handball player who has won Olympic gold, two World Championships, and three European Championships , 

Arpad Sterbik - Serbian goalkeeper who has won Olympic gold and two World Championships , 


        </P>
    </div>
    <div class="image">
        <img src="./image/handball1.jpg"  style="width: 745px; height: 400px;" >
        <img src="./image/handball2.webp " style="width: 745px; height: 400px;" >
        <img src="./image/handball3.jpg " style="width:745px; height: 400px;">
        <img src="./image/handball4.jpg" style="width: 745px; height: 400px;">
        <video controls autoplay loop>
            <source src="./image/handball video.mp4" type="video/mb4">
            <source src="./image/handball video.mp4" type="video/ogg">
            Your browser does not support vedio tag
        </video>
    </div>
    <style>
.handball1{
    background-color: rgb(125, 125, 141);
    font-size: 70px;
    text-align: center;
    color: rgb(0, 0, 0);
}
#hand {
    font-size: 30px;
    color: blue;

}
.rules{
    font-size: 20px;
    width: auto;
    height: auto;
    text-decoration: dotted;
}
.famous1 {
    font-size: 30px;
    color: blue;
}
.famous{
    font-size: 20px;
    width: auto;
    height: auto;
    text-decoration: dotted;
}
video{
    width: 710px;
    height: 400px;
    margin-left: 420px;

}
nav {
	background-color:rgb(125 ,  125 ,  141) ;
	color: #fff;
	padding: 10px;
	text-align: center;
    margin-top: -10px;
    
    
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: inline-block;
}

nav li {
	display: inline-block;
	margin: 0 10px;
    font-size: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
}

    </style>
</body>
</html>