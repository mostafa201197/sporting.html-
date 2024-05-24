<?php
include("./database.php");

?>
<!DOCTYPE html>
<html>
<head>
 <title> feedback</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>

 <div class="container">
  <h1>feedback</h1>

  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="POST">
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" required>

   <label for="email">Email:</label>
   <input type="email" id="email" name="email" required>

   <label for="feedback"> your feedback:</label>
   <textarea id="feedback" name="feedback"></textarea>
   <label class="rate1">Your Rate:     <ul class="star-rating">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
<br>
   <input type="submit"  name = "submit" value="Submit">
  </form>

 </div>
 

<style>
.rate1{
    font-size: 25px;
}
.star-rating {
  display: inline-block;
  font-size: 0;
  width: 200px;
  height: 50px;
  margin: 0;
  padding: 0;
  list-style: none;
  cursor: pointer;
}

.star-rating li {
  display: inline-block;
}

.star-rating li:before {
  content: "\2605"; 
  font-size: 24px;
  color: #ccc;
  transition: color .2s;
}

.star-rating li:hover:before,
.star-rating li:hover ~ li:before,
.star-rating li.selected:before {
  color: #ffcc00;
}

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
 $feedback = $_POST["feedback"];
 
 
$sql = "INSERT INTO feed (user, email , feedback)
        VALUES ('$name','$email','$feedback')";

mysqli_query($conn , $sql);
echo"your feedback was sent ";

}
mysqli_close($conn);
?>

</body>
</html>