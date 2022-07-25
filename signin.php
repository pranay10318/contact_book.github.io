<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=='' or $password=='' ){
      echo '<div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error!</strong> please enter the values which are mandatory
    </div>';
    }
    else{
    
$conn = mysqli_connect("localhost", "root", "","contact_book");
if (!$conn) {
    die( '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> sorry we have some technical issues..!
  </div>');
}
$sql="SELECT * FROM `user_register` WHERE username='$username' AND password='$password';";

$result=mysqli_query($conn,$sql);

if($result){
  $num=mysqli_num_rows($result);
if($num==1){
  echo '<div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>success!</strong> login done succesfully !
    </div>';
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['username']=$username;
  header("location:home.php");
}
else{
  echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>error!</strong> username doesn\'t exists!
</div>';
}

}
else{
  echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> "sorry we have some technical issues. sorry for the inconvienience"
</div>';
}


}
}
?>

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
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php">contact_us</a>
            </li>
          </ul>
          
        </div>
      </nav>
      <br>
    <section style="background-color:aquamarine;">
  <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;"><h1 style="color:black;"><strong>PLEASE ENTER YOUR CREDENTIALS</strong><h1></div>

    <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;">
    <form action="/dbms_project/signin.php" method="POST" class="form-group col-md-6">
      <div class="mb-3">
        <label for="username" class="form-label"><h2>username</h2></label>
        <input
          type="text"
          name="username"
          class="form-control"
          id="username"
          aria-describedby="emailHelp"
        />
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label" 
          ><h2>password</h2></label
        >
        <input
          type="text"
          name="password"
          class="form-control"
          id="password"
          aria-describedby="emailHelp"
        />
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />&emsp;
        <label class="form-check-label" for="exampleCheck1">remember me?</label>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>
      <div>
        new user <a href="signup.php"><strong>Register?</strong> </a>
      </div>
    </form>
</div>
    </section>
  </body>
</html>
