 <h2>Register</h2>
<?php
  foreach($error_msg as $err){
    print "<b>" . $err . "</b><br>";
  }
?>

<form name="register" action="register.php" method="get">
  
  <input type="hidden" name="action" value="register" required>
  
  <label for="name">Name</label>
  <input type="text" name="name" placeholder="name" value="<?= $name ?>" required>
 
  <label for="email">Email</label>
  <input type="email" name="email" placeholder="email" value="<?= $email ?>" pattern=".{5,10}" title="5 to 50 characters" required>

  <label for="password">Password</label>
  <input type="password" name="password" placeholder="password" value="<?= $password ?>" pattern=".{5,10}" title="5 to 50 characters" required>
 
 <label for="password_match">Password</label>
 <input type="password_match" name="password_match" placeholder="password_match" value="<?= $password_match ?>" pattern=".{5,10}" title="5 to 50 characters" required>
  

  <input type="submit" value="Register" class="button">

</form>
