  <?php
  include("./database.php");
  ?>

  <?php
  $search = $_GET['search'];


  $sql = "SELECT * FROM search WHERE name like  '%$search%'";
  $result = mysqli_query($conn, $sql);

  // Redirect to the page for the matching sport, if found
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $url = $row['url'];
    header("Location: $url");
    exit();
  } else {
    // Display an error message if no matching sport was found
    echo "No results found for '$search'.";
  }
  mysqli_close($conn);

  ?>
