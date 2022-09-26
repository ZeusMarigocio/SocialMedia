<?php

    session_start();

    if (isset($_SESSION['alert-msg'])){
        if($_SESSION['alert-msg']==1){
            echo '<h1 align=center> You can now login </h1>';
            unset($_SESSION['alert-msg']);
        }
    }
    if (isset($_SESSION['id'])){
        header("Location:home.php");
    }

 ?>   
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Vibe-Rate Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style2.css'>
    <link rel="icon" href="assets/vibe.png">
</head>
<body>
    
      
   
    <div class="hero">
    <br>
    <p align=center>
    <img src = "assets/vibe.png" align=center>
    </p>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()"> Log In </button>
                <button type="button" class="toggle-btn" onclick="register()"> Register </button>
            </div>
            <div class="social-icons">
                
            </div>
            <form id="login" class="input-group" method="POST" action="login_proc.php">
                <input id="login-username" type="text" class="input-field" name="username" placeholder="Username" required>
                <input id="login-password" type="password" class="input-field" name="password" placeholder="Password" required>
                <button type="submit" class="submit-btn"> Login </button>
            </form>
            <form id="register" class="input-group" method="POST" action="register_proc.php">
                <input type="text" class="input-field" name="first_name" placeholder="First Name" required>
                <input type="text" class="input-field" name="middle_name" placeholder="Middle Name" required>
                <input type="text" class="input-field" name="last_name" placeholder="Last Name" required>
                <input type="text" class="input-field"  name="gender" placeholder="Gender" required>                
                <input type="email" class="input-field"  name="email" placeholder="Email" required> 
                <input type="text" class="input-field"  name="username" placeholder="Username" required>
                <input type="password" class="input-field"  name="password" placeholder="Password" required>
                <button type="submit" class="submit-btn"> Register </button>
            </form>
        </div>
    </div>
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    
    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    </script>
</body>
</html>