<?php
// define variables and set to empty values
$username = "";
$password = "";
$error = NULL;

function testInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function checkUsernameAndPassword($user,$pass){
    require 'connection.php';
    $user = testInput($user);
    $pass = testInput($pass);
    $query = "SELECT id from Person WHERE username LIKE '$user' AND password LIKE '$pass'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        return true;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $error = "Email is required";
  }else{
      $username = $_POST["username"];
  }

  if (empty($_POST["password"])) {
    $error = "Password is required";
  }else{
      $password = $_POST["password"];
  }

  if(is_null($error)){
    $result = checkUsernameAndPassword($username,$password);
    echo $result;
  }else{
    echo $error;
  }
}
?>