<?php
    require_once 'conn.php';
   if($_GET['task_id']<="1"){
        $task_id = $_GET['task_id'];
 
        $conn->query("DELETE FROM `task` WHERE `task_id` = $task_id") or die(mysqli_errno($conn));
        header("location: index.php");
    }
?>

