<?php
    session_start();

    include "perfect_function.php";
    
    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
    }else{
        header("location:index.php");
    }
    if (isset($_SESSION['date'])){
        $date = $_SESSION['date'];
    }
    
    $friend_id = $_GET['id'];

 

    $query = "Delete from friend_request where requestor_id = '$id' and requested_id = '$friend_id' ";
    custom_query($query);
  
    header("Location:profile_friend.php?id=".$friend_id);



?>