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
    $response = NULL;
    $query = "SELECT * from Person WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>=1){
        while($row = mysqli_fetch_array($result)){
          return $row["username"];
        }
    }else{
      return $response;
    }
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
    if(empty($result)){
      echo "Failed"; 
    }else{
      echo "Successs".$result;
    }
  }else{
    echo "Error";
  }
}
?>