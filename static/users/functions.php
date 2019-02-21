<?php

include "db.php";


    
  function createRows() {   
     if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password']; 
          /*Prior success echo to /users/ was done here*/
          
          /* Escape */
          $username = mysqli_real_escape_string($connection, $username);
          $password = mysqli_real_escape_string($connection, $password);
          /*H&Salts*/
          $hashFormat = "$2y$10$";
          $salt = "iusesomecrazystrings22";
          $hashF_and_salt = $hashFormat.$salt;
          /*declare H&Salts*/
          $password = crypt($password, $hashF_and_salt);
        
      $query = "INSERT INTO users(username,password) ";
      $query .= "VALUES ('$username', '$password')";
      
      $result = mysqli_query($connection, $query);
      
      if(!result){
          die('Query FAILED'. mysqli_error());
      } else {
        echo "<div class='div-block-24'><p class='paragraph'>"."Nice to meet you <b>".$username."!</b><br>Your account was successfully made!</p></div>";
      }
    }
  }
  
  function readRows(){
    global $connection;
              // Create connection
      $IP = "0.0.0.0";
      $C9_USER = "charlesderek";
      $connection =mysqli_connect($IP, $C9_USER, "", "loginapp");
          if($connection){
              echo "<div class='div-block-24'><h1 class='heading-2'>Hello!</h1>"."<p class='paragraph-small'>"."Nice to meet you <b>".$username."!</b><br>You have successfully connected to the MySQL Database!<br></div>";
          } else {
              die("<div class='div-block-24'><h1 class='heading-2'>Oops! The Database connection has seemed to fail.</h1>"."<p class='paragraph-small'>"."<p>Something went wrong while sending your request. Please Try again in a few minutes. If the issue continues to occur <a href='mailto:Contact@mrginnovations.com?subject=Hello%20MRGI%20Team!%20&body=Hello%20MRGI%20USA%20Support%20Team!%20I%20seem%20to%20be%20having%20trouble%20with%20my%20connection%20(with%20error%20code%20%23DB1732).%20Please%20fix%20the%20issue%20so%20i%20can%20login!%20Thank%20you%20very%20much,%20and%20have%20a%20great%20day!'>please let us know!</a></p>"."<br><br></div>");
          }
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);   
          if(!result){
              die('Query FAILED'. mysqli_error());
          }
          while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            echo "<br>";
          }
  }
  
  
  function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!result){
    die('Query FAILED'. mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        
        echo "<option value='$id'>$id</option>";
    }
  }
  
function UpdateTable() {
if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }else {
        echo "<div class='div-block-24'><p class='paragraph'>Record Successfully Update!</p></div>";
    }
}
}
 
function deleteRows() {
    if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }else {
        echo "<div class='div-block-24'><h1 class='heading-2'>User ".$id." was successfully destroyed</h1>"."<p class='paragraph-small'><br>..from the MySQL Database!<br></div>";
    }
}
}
  
  
?>
