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
        "user_id" => $id,
        "friend_id" => $friend_id
  
        
    );

    

    $data2 = array(
        "friend_id" => $id,
        "user_id" => $friend_id
  
        
    );
    $table = 'friends';
    insert($data, $table);
    insert($data2, $table);

    $query = "Update friend_request set status = '0' where requestor_id = '$friend_id' and requested_id = '$id' ";
    $custom = custom_query($query);
  
    header("Location:friend_request.php");



?>