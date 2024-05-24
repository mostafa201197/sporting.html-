<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        <div class="volleyball1">
        <label >Volleyball</label>
        </div>
        <label id="volley">Rules of Volleyball: </label>
        <p class="rules">
            Teams: A game of volleyball is played between two teams, each consisting of six players.

            Court: The game is played on a rectangular court, which is divided into two halves by a net.
            
            Serve: The game begins with a serve, which is made by one player from behind their team's boundary line.
            
            The ball must pass over the net and land in the opposing team's court.
            
            Rally: Once the ball is in play, the teams take turns hitting the ball over the net
            
            and trying to make it land in the opposing team's court. The rally continues until the
            
            ball hits the ground or a team makes a mistake.
            
            Scoring: A point is awarded to the team that wins a rally. The first team to reach
            
            25 points and have a two-point lead wins the set. A match is typically played as the best of five sets.
            
            Rotation: After each serve, the players rotate positions in a clockwise direction,
            
            so that each player takes a turn serving and playing in different positions on the court.
            
            Faults: A fault is called when a player commits a violation of the rules,
            
            such as touching the net, stepping over the centerline, or making contact with the ball more than three times on one side.
            
            Substitutions: Each team is allowed to make up to six substitutions per set,
            
            with the substituted player taking the place of the player they are replacing.
            
            Timeouts: Each team is allowed two timeouts per set, during which the coach can give instructions to the players.
            
            Libero: Each team is allowed to have one designated player, called the libero,
            
            who is allowed to replace any back-row player without counting as a substitution.
        </p>
        <br>
    </div>
    <div>
        <label class="famous1">most famous players on it: </label>
        <P class="famous">
     Setter - responsible for setting up the ball for attacks and managing the offense , 
    Outside hitter - attacks from the left side of the court and is usually the team's primary scorer , 
    Outside hitter - attacks from the right side of the court and provides a second scoring option , 
    Opposite hitter - attacks from the right side of the court, opposite the setter , 
    Middle blocker - plays at the net and blocks opposing attacks , 
    Middle blocker - provides a second blocking option and attacks from the center of the court , 
    Defensive specialist - specializes in passing and digging the ball on defense , 
    Defensive specialist - provides additional depth in the backcourt , 
    Libero - a specialized defensive player who can substitute for any back-row player and wear a different colored jersey , 
    Setter - provides a backup option for the starting setter , 
    Outside hitter - provides depth at the left-side attacking position , 
    Opposite hitter - provides depth at the right-side attacking position , 
    Middle blocker - provides depth at the middle blocking position , 
    Utility player - can play multiple positions and provides versatility off the bench , 
    Backup libero - provides depth and serves as a backup for the starting libero .

        </P>
    </div>
    <div class="image">
        <img src="./image/volleyball1.webp"  style="width: 745px; height: 400px;" >
        <img src="./image/volleyball2.jfif " style="width: 745px; height: 400px;" >
        <img src="./image/volleyball3.jpg " style="width:745px; height: 400px;">
        <img src="./image/volleyball4.jpg" style="width: 745px; height: 400px;">
        <video controls autoplay loop>
            <source src="./image/volleyball video.mp4" type="video/mb4">
            <source src="./image/volleyball video.mp4" type="video/ogg">
            Your browser does not support vedio tag
        </video>
    </div>
    <style>
 .volleyball1{
    background-color: rgb(125, 125, 141);
    font-size: 70px;
    text-align: center;
    color: rgb(0, 0, 0);
    margin: 0%;
    padding: 0%;
}
#volley {
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