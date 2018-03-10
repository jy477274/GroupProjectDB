<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <form>
      <fieldset>

        <label>Character Creation</label>

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
  </body>
</html>
