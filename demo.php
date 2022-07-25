<?php


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $conn = mysqli_connect("localhost", "root", "", "contact_book");
    $sql="create table a$username (firstname varchar(20),lastname varchar(20),number varchar(20),email varchar(40));";
    $result = mysqli_query($conn, $sql);
    echo'<div>succesflly created</div>';
}
?>
<html>
<form action="/dbms_project/demo.php" method="POST" class="form-group col-md-6">
      <div class="mb-3">
        <label for="username" class="form-label">
          <h2>username<span style="color:brown">*</span> </h2>
        </label>
        <input type="text" name="username"placeholder="enter your username here" class="form-control" id="username" aria-describedby="emailHelp" />
      </div>
      <button type="submit" class="btn btn-primary">REGISTER</button>
</form>

</html>