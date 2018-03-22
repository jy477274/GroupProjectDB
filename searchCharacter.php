
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
        <section id="filename">
            <div class="contatiner">
                <h2>Character Search</h2>
            </div>
        </section>
    <form method="POST" action="">
      <fieldset>


      <!-- Clan Input -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="SearchOption">Search By</label>
        </div>

        <select class="custom-select" name="SearchOption" id="SearchOption" onchange="funOption()">
          <option selected value = null>Choose...</option>
          <option value=CharacterName>Character Name</option>
          <option value=User>User</option>

        </select>
      </div><br>

      <!-- Search input -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="Input">Search</span>
        </div>
        <input type="text" name="Input" class="form-control">
      </div><br>

      </div><br>





      <!-- Submit Button -->
    <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
    <form method="post">

      <input type="submit" name="Search" id="Search" value="Search" class="btn btn-primary" /><br/>

    </form>
    <?php
    if (isset($_POST['Search'])){
      $output = NULL;
      //connect to db
      $mysql = NEW MySQLi("localhost","root","Ryanwilbur1","csgamez");

      //only allows letters
      $value = $mysql->real_escape_string($_POST['SearchOption']);
      $Input = $mysql->real_escape_string($_POST['Input']);

      if ($value == "CharacterName") {
        $query = "call csgamez.searchCharactersByName('$Input');";

      }
      elseif ($value == "User") {
        $query = "call csgamez.searchCharactersByUser('$Input');";

      }
      else{
        echo "Please select search option!";
        die;
      }
      $queryResult = $mysql->query($query);

      if($queryResult->num_rows > 0){
        while($rows=$queryResult->fetch_assoc()){
          $UserInfo_Username = $rows['UserInfo_Username'];
          $UserCharacter_Name = $rows['UserCharacter_Name'];
          $CharType_Name = $rows['CharType_Name'];
          $Stats_HP = $rows['Stats_HP'];
          $Stats_Strength = $rows['Stats_Strength'];
          $Stats_Stamina = $rows['Stats_Stamina'];
          $Stats_Lvl = $rows['Stats_Lvl'];

          $output .= "Username: $UserInfo_Username<br />
            Character Name: $UserCharacter_Name<br />
            Character Type: $CharType_Name<br />
            HP Level: $Stats_HP<br />
            Strength Level: $Stats_Strength<br />
            Stamina Level: $Stats_Stamina<br />
            Total Level: $Stats_Stamina<br />
             <br />";
        }
      }
      else{
        $output =  "No Results";
      }

      echo $output;
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
