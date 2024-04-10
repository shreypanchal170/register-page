<?php
    require_once 'conn.php';
    if(ISSET($_POST['add'])){
        if($_POST['task'] != ""){
            $task = $_POST['task'];
            $conn->query("INSERT INTO `task` (task, status) VALUES ('$task','Not Done')");
            header('location:index.php');
        }
    }
?>