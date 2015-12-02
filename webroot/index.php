<?php

	require_once('../lib/db.interface.php');
	require_once('../lib/db.class.php');
	require_once('../models/user.class.php');
	require_once('../models/manager.abstract.php');
	require_once('../models/user_manager.class.php'); 
    require_once('../lib/db_session_store.php');
	// session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <title>ORM/MVC - Plant Spotting</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body>
    <h2>Plant Spotting</h2>
    <?php

      $action = isset($_GET["action"])?$_GET["action"]:'';
      $name = isset($_GET["name"])?$_GET["name"]:'';
      $email = isset($_GET["email"])?$_GET["email"]:'';
      $password = isset($_GET["password"])?$_GET["password"]:'';
      $password_match = isset($_GET["password_match"])?$_GET["password_match"]:'';
      $error_msg = array();
      
      switch ($action) {
        case 'logout':
          session_destroy();
          include('../views/logout.php');
          break;        
          
        case 'login':
          $userManager = new UserManager();
          $user = $userManager->authenticate($username, $password);
          /*
          if($action == 'login' && strlen($username) < 3){
            $error_msg[] = "Username too short";
            include('../views/login.php');
            break;
          }
          */
          if($user){
            include('../views/login_success.php');
            $_SESSION['current_user'] = $user;
          }else{
            $error_msg[] = 'Username or Password incorrect.';
            include('../views/register.php');
          }
          break;                  
            
        default:
          include('../views/register.php');
          break;
      }
    ?>
</body>
</html>
