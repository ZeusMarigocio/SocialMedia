<?php

    session_start();
    include  "perfect_function.php";
    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
       
    }else{
        header("Location:login.php");
    }
 $query = "Select * from users where user_id = '$id'";

 $custom = custom_query($query);
 foreach($custom as $key => $row){
     $firstname = $row['Firstname'];
     $middlename = $row['Middlename'];
     $lastname = $row['Lastname'];
     $email = $row['email'];
     $username = $row['username'];
     $password = $row['password'];
     $gender = $row['Gender'];

 };
?>

<link rel='stylesheet' type='text/css' media='screen' href='style3.css'>

<form id="register" method="POST" action="editproc.php?id=<?=$id?>">
    <div  class="input-group container" style = "width: 50%; margin:20px auto 0 auto;">
                <input type="text" class="input-field" name="first_name" value = "<?=$firstname?>"  required>
                <input type="text" class="input-field" name="middle_name"  value = "<?=$middlename?>"  required>
                <input type="text" class="input-field" name="last_name"  value = "<?=$lastname?>"  required>
                <input type="text" class="input-field"  name="gender" value = "<?=$gender?>"  required>                
                <input type="email" class="input-field"  name="email" value = "<?=$email?>"  required> 
                <input type="text" class="input-field"  name="username" value = "<?=$username?>"  required>
                <input type="password" class="input-field"  name="password" value = "<?=$password?>" required>
                <button type="submit" class="submit-btn"> Register </button>
    </div>
</form>
