<?php
include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<body>
	<form action="log in.php" method="post">
		<h2>Login</h2>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"   required>
		<input type="submit" value="Login">
	</form>
	<br>
	<a href="sign up.php">sign up</a>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
			background-image: url("./image/login.jpg");
			background-size: cover;
		}
		a {
			text-decoration: dotted;
			box-shadow: 5px 5px 5px white ;
			font-size: 35px;
			margin-left: 47%;
			color: rgb(255, 255, 255);
			


		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #888;
			width: 400px;
			margin: 0 auto;
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
		
	</style>
<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validate(filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS));
    $password = validate(filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS));

    if (empty($username)) {
        echo "Please enter a username";
    } elseif (empty($password)) {
        echo "Please enter a password";
    } else {
        
        $query = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
		try{
			$conn = mysqli_connect($db_server,
								   $db_user,
								   $db_pass,
								   $db_name );
	   
	   }
	   catch(mysqli_sql_exception){
		   echo "could't connceted <br>" ;
	   }
		$result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // User exists, redirect to the "sporting.php" page
            header("location: sporting.php");
            exit();
        } else {
            echo "Incorrect username or password";
        }
    }
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);
?>

</body>
</html>