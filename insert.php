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

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $number=$_POST['number'];
    $email = $_POST['email'];


  if ($firstname == ""  or $number=='' ) {
    echo '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>please enter the values which are mandatory..!</strong>
  </div>';
  }  else {

    $conn = mysqli_connect("localhost", "root", "", "contact_book");
    if (!$conn) {
      die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> sorry we have some technical issues. sorry for the inconvienience
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
    }
    session_start();
    $username=$_SESSION['username'];
    $sql = "INSERT INTO `$username` (`firstname`, `lastname`, `number`, `email`) VALUES ('$firstname', '$lastname', '$number', '$email');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<div class="alert alert-success alert-dismissible fade show">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>success!</strong> contact added succesfully !
    </div>';
    }
    else {
      echo '<div class="alert alert-danger alert-dismissible fade show">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>this number or username already exists..!</strong>
  </div>';
    }
  }
}
?>
<div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;">

    <form action="/dbms_project/insert.php" method="POST" class="form-group col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">
                <h2>firstname<span style="color:red">*</span></h2>
            </label>
            <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">
                <h2>lastname</h2>
            </label>
            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" />
        </div>

        <div class="mb-3">
            <label for="phonenumber" class="form-label">
                <h2>number<span style="color:red">*</span></h2>
            </label>
            <input type="tel" name="number" class="form-control" id="phonenumber" aria-describedby="emailHelp" />
        </div>


        <div class="mb-3">
            <label for="email" class="form-label">
                <h2>email</h2>
            </label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text"></div>
        </div>




        <button type="submit" class="btn btn-primary">submit</button>
        <div>
    </form>
    </div>
</body>

</html>