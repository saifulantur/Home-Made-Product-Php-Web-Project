<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css1/style.css">

    <title>Home Made Products</title>

  <style>

  </style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-----------------------------------Nav var started -------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <a href="login.php" style="margin-left: 20px;"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log In</button></a>
</nav>

<!---------------------------------------------------------Nav var end----------------------------------------------------------->
<div class="container" >
<div class="row">
<?php
  include 'connection.php';

$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       echo'<div class="column">';
       echo '<a href="test.html"> <img src=img/'.$row["image"].' style="width:350px; height:350px;"></a>';
         
       echo '<div id="heading">';
       echo '<h4 >'.$row["title"].'</h4>';
       echo '</div>';
       echo '<div id="price">';
       echo '<h6> Price: '.$row["amount"].'</h6>';
       echo '<h6> Contact: '.$row["phone"].'</h6>';
       echo '</div>';
       echo'<div id="details">';
       echo '<p>'.$row["details"].'</p>';
       echo '</div>';
       echo '</div>';
    
    }
} else {
    echo "0 results";
}
$conn->close();

?>

  </div>
</div>
  </body>
</html>
