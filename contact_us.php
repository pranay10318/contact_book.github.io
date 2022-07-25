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
    align-items: center;"><h1 style="color:black;"><strong>contact us</strong><h1></div>

    <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;">
    <form action="/dbms_project/signin.php" method="POST" class="form-group col-md-6">
    <div class="mb-3">
        <label for="lastname" class="form-label">
          <h2>name<span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="lastname" placeholder="enter your lastname here"class="form-control" id="lastname" aria-describedby="emailHelp" />
      </div>


      <div class="mb-3">
        <label for="phone" class="form-label">
          <h2>phone<span style="color:brown">*</span></h2>
        </label>
        <input type="text" placeholder="enter your contact number here" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">
          <h2>email<span style="color:brown">*</span></h2>
        </label>
        <input type="email"placeholder="enter your email address here" name="email" class="form-control" id="email" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div>
      <label for="SUBJECT" class="form-label">
          <h2>subject</h2>
        </label><br>
    <textarea id="subject" name="subject" placeholder="FILL IT WITH YOUR VALUABLE WORDS" style="height:200px"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">SUBMIT</button>

      
    </form>
</div>
    </section>
  </body>
</html>
