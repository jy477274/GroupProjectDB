<?php
include("backButton.php")

?>



<?php

  //create connection to MySQL database **CHANGE**


  //check connection
  if(mysqli_connect_errno()){
    //connection failed
    echo 'Failed to connect to MySQL '. mysqli_connect_errno();
  }

  //check for Submit
  $n = 100;
  if(isset($_POST['submit'])){
    //get form database
    $Input =$_POST['Input'];




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
    <h1>Search User</h1>
    <br>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
    <form method="POST"  >
      <fieldset>

      <!-- Clan Input -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="SearchOption">Search By</label>
        </div>

        <!-- search options -->
        <select class="custom-select" name="SearchOption" id="SearchOption" onchange="funOption()" >
          <option selected value = null>Choose...</option>
          <option id=FirstName value=FirstName>First Name</option>
          <option id=LastName value=LastName>Last Name</option>
          <option id=Username value=Username>Username</option>
          <option id=Clan value=Clan>Clan</option>
        </select>
      </div><br>

      <!--Clan Options -->
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="SearchOption">Clan Name</label>
          </div>
        <select class="custom-select" name="ClanSelect" id="ClanSelect">
          <option selected value = null>Choose...</option>
          <option value=Ziza>Ziza</option>
          <option value=MLG>MLG</option>
          <option value=42069360NS>42069360NS</option>
          <option value=H@v0cc>H@v0cc</option>
          <option value=Shakira>Shakira ( ͡° ͜ʖ ͡°)</option>
        </select>
      </div><br>

      <!-- Search input -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="Input">Search</span>
        </div>
        <input type="text" name="Input" class="form-control">
      </div><br>




      <!-- Submit Button -->
    <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
    <form method="post" action=''>

      <input type="submit" name="Search" id="Search" value="Search" class="btn btn-primary" /><br/>

    </form>
    <?php
    if (isset($_POST['Search'])){
      $value = $_POST['SearchOption'];
      $Input =$_POST['Input'];
      $Clanname =$_POST['ClanSelect'];

      if ($value == "FirstName") {
        $query = "call csgamez.searchUserByFirstName('$Input');";
        $sth = $pdo->prepare($query);
        $sth->execute();
      }
      elseif ($value == "LastName") {
        $query = "call csgamez.searchUserByLastName('$Input');";
        $sth = $pdo->prepare($query);
        $sth->execute();
      }
      elseif ($value == "Username") {
        $query = "call csgamez.searchUserByUsername('$Input');";
        $sth = $pdo->prepare($query);
        $sth->execute();
      }
      else{
        $query = "call csgamez.searchUsersByClan('$Clanname');";

        mysqli_query($pdo,$query);

        echo "<table border='1'>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        </tr>";

        while($row = mysqli_fetch_array($query))
        {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);

      }

    }
    ?>

    <script>
    function funOption() {
      var value = document.getElementById("SearchOption").value;


      if (value == "Clan") {
        document.getElementById("Input").style.display = "none";
        document.getElementById("ClanSelect").style.display = "block";
      }
      else{
        document.getElementById("Input").style.display = "block";
        document.getElementById("ClanSelect").style.display = "none";

      }

    }

    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<!--

function funOption() {
  var value = document.getElementById("SearchOption").value;
  var current_value = dropdown.options[dropdown.selectedIndex].value;

  document.getElementById("demo").innerHTML = 5+11;

  if (value === "Clan") {
      document.getElementById("Input").style.visibility="hidden";
      document.getElementById("ClanSelect").style.visibility="visible";
  }
  else {
      document.getElementById("Input").style.display = "none";
      document.getElementById("ClanSelect").style.display = "block";

  }
}

-->
