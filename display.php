<!doctype html>
<html lang="en">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CONTACT_BOOK</title>
  </head>
  <body style="background-color: aquamarine;">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a  href="#"><h1 style="color: rgb(74, 163, 127);">CONTACT_BOOK</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insert.php">Insert</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="contact_us.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="about.html">About</a>
                <a class="dropdown-item" href="contact_us.php">contact_us</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="feedback.php">feedback</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">LOGOUT</a>
            </li>
          </ul>
          
        </div>
      </nav>
      <br>
    <div>      
        <strong ><h2 style="color: rgb(79, 163, 127);">ALL CONTACTS IN UR CONTACT_BOOK<h1></strong>
    </div>
    <br>
    <br><br>
    
<?php
  $conn=mysqli_connect("localhost","root","","contact_book");
  session_start();
  $username=$_SESSION['username'];
  
  if (!$conn) {
    die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> sorry we have some technical issues. sorry for the inconvienience
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
  }
  else{
  $sql="SELECT * FROM `gangadhar123` WHERE 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "<table style='width:50%'><tr><th>NAME</th><th>number</th><th>email</th></tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["firstname"].".".$row["lastname"]."</td><td>". $row["number"]."</td><td>". $row["email"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
mysqli_close($conn);}
?>
</body>

</html>
