<?php
    session_start();

    include "perfect_function.php";
    
    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
    }
    else{
        header("location:index.php");
    }
    if (isset($_SESSION['date'])){
        $date = $_SESSION['date'];
    }
    
    $friend_id = $_GET['id'];

 

    $query = "Delete from friends where user_id = '$id' and friend_id = '$friend_id' ";
    custom_query($query);

    $query2 = "Delete from friends where friend_id = '$id' and user_id = '$friend_id' ";
    custom_query($query2);
  
    header("Location:profile_friend.php?id=".$friend_id);



?>