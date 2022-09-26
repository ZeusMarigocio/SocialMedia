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

    $data = array(
        "requestor_id" => $id,
        "requested_id" => $friend_id,
        "status" => 1
        
    );
    $table = 'friend_request';
    insert($data, $table);
  
    header("Location:profile_friend.php?id=".$friend_id);



?>