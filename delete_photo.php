<?php
include "perfect_function.php";

$table_name = "users";

//get user ID from URL
$id = $_GET['id'];
$query = "Select photo from users where id = '$id'";
$custom = custom_query($query);

foreach ($custom as $key => $row){
    $photo = $row['photo'];
}

$query2 = "UPDATE users set photo = null where id ='$id'";
custom_query($query2);


$file = $photo;
$file = $_SERVER['DOCUMENT_ROOT'].'/project_neo/user_pics/'.$file;
unlink($file);
header("Location: profile.php");
?>