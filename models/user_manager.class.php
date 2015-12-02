<?php 

class UserManager extends Manager{
	
  public function getUser($arg){
    
    if(!is_numeric($arg)) return FALSE;

      $db = new Db();
    
      $id = $db -> quote($arg);
      
      $results = $db -> select("SELECT * from users where id = $id limit 1");
      
      foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
        // get the category number
        $userCat = $user->getCategory();
        // get the category name based on the category number in the game table
        $resultCat = $db -> select("SELECT name from category where id = $userCat");
         // this will reset the setCategory
        $user->setCategory($resultCat[0]['name']);

      }
      
      return $user;
    
  }
  // public function getAllUsers(){
  public function getAllPlants(){
    
      $db = new Db();
      $users = array();
     // $categories = array();
          
     // $results = $db -> select("SELECT * from users");
      $results = $db -> select("SELECT * from plant");
      
    foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
        // get the category number
        $userCat = $user->getCategory();
        // get the category name based on the category number in the game table
        $resultCat = $db -> select("SELECT name from category where id = $userCat");
        
        //var_dump($resultCat);
        //exit;

        // get the category name from the category table
        // this will reset the setCategory
        $user->setCategory($resultCat[0]['name']);
        $users[] = $user;

      }
            
      return $users;
      
  }
  public function save($user){
    
    // if (!$user) {
    //   echo "No User.";
    // } else {

        if ($user->getID()) {
          $this->_update($user);
        } else {
          $this->_add($user);
          //exit(header("Location: user.php"));
         // header('Location: user.php');
        }
    // }
  }

  
  private function _add($user){
    $db = new Db();
    
    $name = $db -> quote($user->getName());
    //$mail = $db -> quote($user->getMail());
    //$pass = $db -> quote($user->getPassword());
   // $created = time();
    
    //$results = $db -> query("insert into users (name, pass, mail, created) values ($name, $pass, $mail, $created);");
    $results = $db -> query("insert into users (name) values ($name);");

  }
  
  private function _update($user){
    $db = new Db();
    
    $uid = $db -> quote($user->getID());
    $name = $db -> quote($user->getName());
    //$mail = $db -> quote($user->getMail());
    
    // if($user->getPassword()){
    //   $pass = $db -> quote($user->getPassword());
    // } else {
    //   $pass = '';
    // }

    // if(!empty($pass)){
    //   $results = $db -> query("update users set name=$name, pass=$pass, mail=$mail where uid = $uid;");  
    // } else {
    //   $results = $db -> query("update users set name=$name, mail=$mail where uid = $uid;");
    // }

  }
  
  public function delete($arg){
    
    if(!is_numeric($arg)) return FALSE;
    
      $db = new Db();
    
      $uid = $db -> quote($arg);
      $results = $db -> query("DELETE from users where id = $id");
  }
  
}

