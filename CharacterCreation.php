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
            padding-top: 20px;
        }
        h1{
            margin: 0 auto;
            text-align: left;
            text-align: start;
            padding-bottom: 20px;
        }
        h2{
            padding-top: 70px
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
                <h2>Character Creation</h2>
            </div>
        </section>
    <form>
      <fieldset>


        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="CharName">Character Name</span>
          </div>
          <input type="text" class="form-control">
        </div><br>

        <!-- Character Type -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="CharTypeSelect">Character Type</label>
          </div>
          <select class="custom-select" id="CharTypeSelect">
            <option selected>Choose...</option>
            <option value="Mage">Mage</option>
            <option value="Fighter">Fighter</option>
            <option value="Archer">Archer</option>
            <option value="Rogue">Rogue</option>
          </select><br>
        </div>

        <!-- Weapon -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="Weapon">Weapon</label>
          </div>
          <select class="custom-select" id="Weapon">
            <option selected>Choose...</option>
            <option value="Sword">Sword</option>
            <option value="Bow">Bow</option>
            <option value="Staff">Staff</option>
            <option value="Knives">Knives</option>
          </select><br>
        </div>

        <!-- Armour -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="Armour">Armour</label>
          </div>
          <select class="custom-select" id="Armour">
            <option selected>Choose...</option>
            <option value="Chain Mail">Chain Mail</option>
            <option value="Robe">Robe</option>
            <option value="Leather">Leather</option>
            <option value="Cloak">Cloak</option>
          </select><br>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </fieldset>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer>
        <p>Made with love by Jayden Macdonald, Ryan Wilbur, Dorukhan Calışkan, and Dylan Roberts</p>
    </footer>
  </body>
</html>
