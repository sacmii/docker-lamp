<?php
$username = "";
$password = "";
$error = NULL;

function testInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function registerNewUser($user,$pass){
    require 'connection.php';
    $user = testInput($user);
    $pass = testInput($pass);
    $query = "INSERT INTO Person (username, password) VALUES ('$user','$pass')";
    if(mysqli_query($conn,$query)){
        return true;
    }else{
        return false;
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"])){
        $error = "Email is required";
    }else{
        $username = $_POST["username"];
    }

    if(empty($_POST["password"])){
        $error = "Password is required";
    }else{
        $password = $_POST["password"];
    }

    if(is_null($error)){
        $result = registerNewUser($username,$password);
        echo $result;
    }else{
        echo $error;
    }
}
?>