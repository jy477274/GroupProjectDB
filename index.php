
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
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
