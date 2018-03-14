<?php
  //create connection to MySQL database **CHANGE**
  $conn = mysqli_connect('localhost', 'root', 'Ryanwilbur1', 'csgamez');

  //check connection
  if(mysqli_connect_errno()){
    //connection failed
    echo 'Failed to connect to MySQL '. mysqli_connect_errno();
  }

  //check for Submit
  $n = 100;
  if(isset($_POST['submit'])){
    //get form database
    $FName = mysqli_real_escape_string($conn, $_POST['First Name']);
    $LName = mysqli_real_escape_string($conn, $_POST['Last Name']);
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $ClanSelect = $_POST['ClanSelect'];

    $query = "INSERT INTO UserInfo(UserInfo_ID, UserInfo_FName, UserInfo_LName, UserInfo_Username, UserInfo_Pass, UserInfo_Email, Clan_ID)
    VALUES ($n++, '$FName', '$LName', '$Username', '$Password', '$Email', $ClanSelect)";

    if(mysqli_query($conn, $query)){
      header('Location: '.'http://localhost/PHP/CharacterCreation.php'.'');
    }
    else {
      echo 'ERROR: '.mysqli_error($conn);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
    <form method="POST" action="UserEntryForm.php">
      <fieldset>
        <!-- First Name -->
       <label>User Information</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="First Name">First Name</span>
          </div>
          <input type="text" name="First Name" class="form-control">
        </div><br>

      <!-- Last Name -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="Last Name">Last Name</span>
        </div>
        <input type="text" name="Last Name" class="form-control">
      </div><br>

      <!-- Username -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="Username">Username</span>
        </div>
        <input type="text" name"Username" class="form-control">
      </div><br>

      <!-- Password -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="Password">Password</span>
        </div>
        <input type="text" name"Password" class="form-control">
      </div><br>

      <!-- Email -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="Email">Email</span>
        </div>
        <input type="text" name="Email" class="form-control">
      </div><br>

      <!-- Clan Input -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="ClanSelect">Clan</label>
        </div>

        <select class="custom-select" name="ClanSelect" id="ClanSelect">
          <option selected value = null>Choose...</option>
          <option value=1>Ziza</option>
          <option value=2>MLG</option>
          <option value=3>42069360NS</option>
          <option value=4>H@v0cc</option>
          <option value=5>Shakira ( ͡° ͜ʖ ͡°)</option>
        </select>
      </div><br>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>

      </fieldset>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
