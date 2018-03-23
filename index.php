<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
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
            padding-top: 20px;
        }
        h1{
            margin: 0 auto;
            text-align: left;
            text-align: start;
            padding-bottom: 20px;
        }
        h2{
            padding-top: 70px;
            padding-bottom: 20px;
        }
    </style>

    <!-- Title -->
		<body>
            <header>
                <div class="container">
                        <div id="branding">
                                <h1>DalCS Gamez Database</h1>
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
                    <h2>What Would You Like To Do?</h2>
                </div>
            </section>

		<!-- Create new user button -->
		<form method="POST" action="UserEntryForm.php">
      <fieldset>
      <button type="submit" class="btn btn-primary">Create New User</button>
      </fieldset>
    </form>

		<p></p>

		<!-- Lookup user button -->
		<form method="POST" action="searchUser.php">
      <fieldset>
      <button type="submit" class="btn btn-primary">Search User</button>
      </fieldset>
    </form>

		<p></p>

		<!-- Lookup user button -->
		<form method="POST" action="CharacterCreation.php">
      <fieldset>
      <button type="submit" class="btn btn-primary">Create New Character</button>
      </fieldset>
    </form>

		<p></p>

		<!-- Lookup user button -->
		<form method="POST" action="SearchCharacter.php">
      <fieldset>
      <button type="submit" class="btn btn-primary">Search Character</button>
      </fieldset>
    </form>

    <p></p>

  <!-- update user password button -->
  <form method="POST" action="UpdateUser.php">
    <fieldset>
    <button type="submit" class="btn btn-primary">Update User Password</button>
    </fieldset>
  </form>

  <p></p>

  <!-- update character name-->
  <form method="POST" action="UpdateCharacter.php">
    <fieldset>
    <button type="submit" class="btn btn-primary">Update Character Name</button>
    </fieldset>
  </form>

  <p></p>

  <!-- delete user -->
  <form method="POST" action="DeleteUser.php">
    <fieldset>
    <button type="submit" class="btn btn-primary">Delete User</button>
    </fieldset>
  </form>

  <p></p>

  <!-- delete character -->
  <form method="POST" action="DeleteCharacter.php">
    <fieldset>
    <button type="submit" class="btn btn-primary">Delete Character</button>
    </fieldset>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <!-- footer -->
  <footer>
      <p>Made with love by Jayden Macdonald, Ryan Wilbur, Dorukhan Calışkan, and Dylan Roberts</p>
  </footer>
</html>
