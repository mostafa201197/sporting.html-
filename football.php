<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
</head>
<body>
<nav>
		<ul>
			<li><a href="sporting.php">Home</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="log in.php" target ="_blank">log out </a></li>
		</ul>
	</nav>
    <div>
    <div class="football1">
    <label class="football">football</label>
    </div>
    <label id="foot">Rules of Football: </label>
    <p class="rules">
        Football (Soccer): Football, or soccer, is played with two teams of eleven players each.<wbr>
         The objective is to score goals by kicking the ball into the opponent's goalpost <wbr>
         without using hands or arms, except by the goalkeeper within their penalty area.<wbr>
          The game is played in two halves, each lasting 45 minutes. Offside, fouls,<wbr>  
          and penalties are some of the rules enforced by the referee.
    </p>
    <br>
</div>
<div>
    <label class="famous1">most famous players on it: </label>
    <P class="famous">
        Lionel Messi , Cristiano Ronaldo , Neymar Jr. , Mohamed Salah , Kylian Mbappe , Harry Kane , Sergio Ramos 
        , Robert Lewandowski , Andres Iniesta , Luka Modric , Zlatan Ibrahimovic , Ronaldinho , Thierry Henry 
        , David Beckham , Xavi Hernandez , Paulo Dybala , Antoine Griezmann , Eden Hazard , Manuel Neuer
        are some of the most famous football players of all time.<wbr>  
    </P>
</div>
<div class="image">
    <img src="./image/cr7.jpg"  style="width: 740px; height: 400px;" >
    <img src="./image/mbappe.jpg " style="width: 740px; height: 400px;" >
    <img src="./image/messi.jpg " style="width:740px; height: 400px;">
    <img src="./image/zlatan.webp" style="width: 740px; height: 400px;">
    <video controls autoplay loop>
        <source src="./image/messi skills.mp4" type="video/mb4">
        <source src="./image/messi skills.mp4" type="video/ogg">
        Your browser does not support vedio tag
    </video>
</div>
<style>
    
.football1{
    background-color:rgb(125, 125, 141) ;
    margin: 0%;
    padding: 0%;
}
.football {
    font-size: 60px;
    margin-left: 630px;
    color: rgb(0, 0, 0);
}
.rules{
    width: auto;
    height: auto;
    font-size: 20px;
    font-style:inherit;
}
.famous1 {
font-size: 30px;
color: blue;

}
.famous {
    font-size: 20px;
    width: auto;
    height: auto;
    font-style:inherit;
}
video{
    width: 740px;
    height: 400px;
    margin-left: 350px;
}
#foot{
    font-size: 30px;
    color: blue;
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
