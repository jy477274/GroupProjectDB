<?php

  //create connection to MySQL database **CHANGE**
  //include 'testsql/pdo.php';
//  $pdo = new PDO($dsn, $user, $pass, $opt);


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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <head/>
    <style>
        header{
            background:  #3b5998;
            color: #ffffff;
            padding-left: 0px;
            padding-bottom: 30px;
            min-height: 70px;
            border-bottom: #8b9dc3 3px soli
            width; 100%;
            text-align: left;
        }
            body{
                front 15px/1.5 Arial, Helvetica,sans-serif;
                padding-top: 0px;
                padding-left: 0px;

                background-color: #dfe3ee;

            }
            footer{
                position:absolute;
                bottom: 0;
                width: 100%;
                hight:60px;
                padding:20px;
                margin-top: 20px;
                color: #ffffff;
                background-color:#3b5998;
                border-top:  #8b9dc3 3px solid;
                text-align: center;
            }
            .container{

            }
            h1{
                margin: 0 auto;
                text-align: left;
                text-align: start;
                padding-top: 20px;
                padding-bottom: 20px;
            }
            h2{
                padding-top: 70px;
            }
        }
    </style>

    <!-- Title -->
    <body>
        <header>
            <div class="container">
                    <div id="branding">
                            <h1>DalCS Gamez</h1>
                            <form method="POST" action="index.php">
                                <fieldset>
                                    <button type="submit" class="btn btn-primary">Back</button>
                                </fieldset>
                            </form>

                    </div>
            </div>
        </header>

        <!-- sub title -->
        <section id="filename">
            <div class="contatiner">
                <h2>Character Search</h2>
            </div>
        </section>
    <form method="POST" action="UserEntryForm.php">
      <fieldset>


      <!-- Clan Input -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="SearchOption">Search By</label>
        </div>

        <select class="custom-select" name="SearchOption" id="SearchOption">
          <option selected value = null>Choose...</option>
          <option value=characterName>Character Name</option>
          <option value=LastName>Character Type</option>
          <option value=Weapon>Weapon</option>
          <option value=Armour>Armour</option>
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
      $SearchBy = $_POST['SearchOption'];
      $Input =$_POST['Input'];




      echo "Created : $FName,$LName,$Username,$Password,$Email,$ClanSelect";

      $query = "call csgamez.createNewUser('$FName','$LName','$Username','$Password','$Email','$ClanSelect');";
      $sth = $pdo->prepare($query);

      $sth->execute();
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- footer -->
    <footer>
        <p>Made with love by Jayden Macdonald, Ryan Wilbur, Dorukhan Calışkan, and Dylan Roberts</p>
    </footer>
  </body>
</html>
