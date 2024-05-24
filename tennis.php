<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="7">
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
        <div class="tennis1">
        <label class="tennis">Tennis</label>
        </div>
        <label id="foot">Rules of tennis: </label>
        <p class="rules">
            Tennis is a racquet sport played in sets and games. The aim is to hit the ball over the net 
            
            and land it in the opponent's court. A point is awarded for each successful shot,
            
            and the winner is the first to win six games with a minimum lead of two,
            
            or a tiebreaker if the score is tied at 6-6. The server must serve the ball into the 
            
            opponent's service box, and players cannot touch the net or interfere with the opponent's shot.
            
            Good sportsmanship and respect are emphasized. 
               </p>
        <br>
    </div>
    <div>
        <label class="famous1">most famous players on it: </label>
        <P class="famous">
            Roger Federer (Switzerland) , 
            Rafael Nadal (Spain) , 
            Novak Djokovic (Serbia) , 
            Serena Williams (USA) , 
            Steffi Graf (Germany) , 
            Martina Navratilova (Czech Republic/USA) , 
            Bjorn Borg (Sweden) , 
            Pete Sampras (USA) , 
            Chris Evert (USA) , 
            Margaret Court (Australia)<wbr>  
        </P>
    </div>
    <div class="image">
        <img src="./image/tennis1 (2).jpg"  style="width: 720px; height: 400px;" >
        <img src="./image/tennis2.jpg " style="width: 720px; height: 400px;" >
        <img src="./image/tennis3.webp " style="width:720px; height: 400px;">
        <img src="./image/tennis4.jpg" style="width: 720px; height: 400px;">
        <video controls autoplay loop>
            <source src="./image/tennis video.mp4" type="video/mb4">
            <source src="./image/tennis video.mp4" type="video/ogg">
            Your browser does not support vedio tag
        </video>
    </div>
    <style>
        
.tennis1{
        background-color:rgb(125, 125, 141) ;
        margin: 0%;
        padding: 0%;
    }
.tennis {
        font-size: 60px;
        margin-left: 630px;
        color: rgb(0, 0, 0);
    }
.rules{
        width: auto;
        height: auto;
        font-size: 22px;
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
        width: 710px;
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