<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="sign up.php" method="POST">  
		<h2>Sign Up</h2>
        
		<label  class="user" for="username">username:</label>
		<input type="text" id="username" name="username" required>


		<label class="user"for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label class="user"for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<label class="user" for=" repeat password">confirm Password:</label>
		<input type="password" id="re_password" name="re_password" required>
		<input type="submit" value="Sign Up">
	</form>

    <style>
        body{
            background-image: url("./image/login.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #888;
			width: 400px;
	    	margin-top: 50px;
            margin-left: 550px;
    
		}
		input[type="text"], input[type="password"], input[type="email"] {
			padding: 10px;
			border-radius: 3px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
			width: 100%;
		}
		input[type="submit"] {
			background-color: blue;
			color: #fff;
			padding: 10px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
			width: 100%;
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		.user{
			font-size: 20px;
		}
    </style>
	 <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username)){
        echo"please enter a username";
        }
        elseif(empty($password)){
        echo"please enter a password";
        }
        else{
        $hash =password_hash($password , PASSWORD_DEFAULT); 
		
        $sql = "INSERT INTO users (user , password , email)
                VALUES ('$username','$hash','$email')";
			
		"SELECT user  FORM users WHERE username =$username ";
		header("location: sporting.php");
		
        try{
                mysqli_query($conn,$sql);
                echo"user is now registered";
            }
        catch(mysqli_sql_exception){
                echo"Invalid username or password";
            }
        
    	}
		
      
        
    }
    mysqli_close($conn);
    ?>
</body>
</html>
    