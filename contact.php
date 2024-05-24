<?php
include("./database.php");

?>
<!DOCTYPE html>
<html>
<head>
 <title>Contact Us</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>

 <div class="container">
  <h1>Contact Us</h1>

  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="POST">
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" required>

   <label for="email">Email:</label>
   <input type="email" id="email" name="email" required>

   <label for="message">Message:</label>
   <textarea id="message" name="message"></textarea>

   <input type="submit"  name = "submit" value="Submit">
  </form>

 </div>

<style>
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

form label {
    display: block;
    margin-bottom: 10px;
}

form input[type=text],
form input[type=email],
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: none;
    background-color: #f2f2f2;
}

form textarea {
    height: 150px;
    resize: none;
}

input[type=submit] {
    background-color: #4CAF50;
    /* Green */
    color: white;
    padding: 12px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}</style>
<?php

if(isset($_POST["submit"])) {
 $name = $_POST["name"];
 $email = $_POST["email"];
 $message = $_POST["message"];
 
 
$sql = "INSERT INTO contact_us (user, email , message)
        VALUES ('$name','$email','$message')";

mysqli_query($conn , $sql);
echo"your message was sent ";



}
mysqli_close($conn);
?>

</body>
</html>