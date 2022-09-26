<?php
    session_start();
    include "perfect_function.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo "Inputed password: ".$password;
    //echo "<br> <br>";
    $table_name = "users";
    $password2 = _get_pword_from_username($username,$table_name);
    //echo "Password from DB: ".$password2;
    //echo"<br>";
    
    $user_id =  _get_id_from_username($username, $table_name) ;

   
        if ($password ==$password2){
        
            $_SESSION['username'] = $_POST['username'];
           
            $_SESSION['id'] = $user_id;

            echo $_SESSION['id'];
           
       
            
         header("Location:home.php");
       
        }else{
            $_SESSION['alert-msg'] = 2;
         header("Location:login.php");
        }

?>