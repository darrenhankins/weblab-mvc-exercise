 <h2>New Plant</h2>
<?php
  foreach($error_msg as $err){
    print "<b>" . $err . "</b><br>";
  }
?>

<form name="new_plant" action="new_plant.php" method="get">
  
  <input type="hidden" name="action" value="new_plant" required>
  
  <label for="name">Name</label>
  <input type="text" name="name" placeholder="name" value="<?= $name ?>" required>
  
  <label for="location">Location</label>
  <input type="location" name="location" placeholder="location" value="<?= $location ?>" pattern=".{5,10}" title="5 to 50 characters" required>
  
  <input type="submit" value="Login" class="button">

</form>

// List plants for this user here
