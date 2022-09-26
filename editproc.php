<?php
   
    session_start();
    include  "perfect_function.php";
    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        echo $id;
    }else{
        header("Location:login.php");
    }

    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $lnme = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $fname;
    echo $mname;
    echo $lnme;
    echo $gender;
    echo $email;
    echo $username;
    echo $password;

    $data = array(
        'Firstname' => $fname,
        'Middlename' => $mname,
        'Lastname' => $lnme,
        'Gender'=> $gender,
        'email' => $email,
        'username'=> $username,
        'password' => $password
    );
    $table = 'users';


    update($data, $id, $table);
    header("Location:profile.php");


?>


