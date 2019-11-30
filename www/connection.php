<?php
    $conn = mysqli_connect("db","user","test","myDb");

    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
     }
?>