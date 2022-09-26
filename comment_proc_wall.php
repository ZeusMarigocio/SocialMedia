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
    header("Location:home.php");



?>