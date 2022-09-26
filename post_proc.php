<?php
    session_start();
    include  "perfect_function.php";

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
    }
    

    $post = $_POST['post'];
    $date = $_SESSION['date'];
    $table = "posts";

    $data = array(
        'post' => $post,
        'date' => $date,
        'user_id' => $id
    );
    insert($data,$table);
    header("Location:home.php");


