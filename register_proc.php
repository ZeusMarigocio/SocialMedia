<?php
    session_start();
    include "perfect_function.php";



    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];

    $table = "users";


    $data = array(
        "email" => $email,
        "username" => $username,
        "password" => $password,
        "Firstname" => $firstname,
        "Middlename" => $middlename,
        "Lastname" => $lastname,
        "Gender" => $gender
    );

    insert($data,$table);
    $_SESSION['alert-msg'] =1;
    header("Location:login.php");
?>