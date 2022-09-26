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
    
    $comment = $_POST['comment'];
    $post_id = $_GET['id'];

    $data = array(
        "comment" => $comment,
        "date" => $date,
        "post_id"=> $post_id,
        "user_id"=> $id
    );
    $table = 'comments';
    insert($data, $table);
    $query = "Select user_id from posts where post_id = '$post_id'";
    $custom = custom_query($query);
    foreach ($custom as $key => $row){
        $user_id = $row['user_id'];
    }
    header("Location:profile_friend.php?id=".$user_id);



?>