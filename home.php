<!doctype html>
<html lang="en">
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
      
<form class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align-last: right;
    text-align:justify;
">
<?php
session_start();
$username=$_SESSION['username'];
echo $username."is username";

?>
<div class="mb-3">
    <strong>SEARCH IN CONTACTS: </strong> <a href="search.php"><span>SEARCH</span></a>
</div>
<div class="mb-3">
    <strong>INSERT INTO CONTACTS: </strong><a href="insert.php"><span>INSERT</span></a>
</div>
<div class="mb-3">
    <strong>DISPLAY ALL CONTACTS: </strong><a href="display.php"><span>DISPLAY_ALL</span></a>
</div>


</form>

</body>
</html>
