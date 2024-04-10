<?php
    $conn = new mysqli("localhost", "root", "", "myset");
 
    if(!$conn){
        die("Error: Cannot connect to the database");
    }
?>