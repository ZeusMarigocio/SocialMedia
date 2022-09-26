<?php
 session_start();
 include "perfect_function.php";
 
 
 if (isset($_SESSION['id'])){
     $id = $_SESSION['id'];
     echo $id;
 }else{
     header("location:index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vibe Rate</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="assets/vibe.png">


</head>
<body>


<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
			<ul class="nav navbar-nav">
				<li class="">
					<a href="home.php"><span class="glyphicon glyphicon-home"></span> HOME </a>
				</li>
				<li class="">
					<a href="home_photo.php"><span class="glyphicon glyphicon-camera"></span> PHOTOS </a>
				</li>
				<li class="active">
					<a href="Profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a>
				</li>
				<li>
					<a href="friend_request.php"><span class="glyphicon glyphicon-ok"></span> Request</a>
				</li>
			</ul>
			<div class="navbar-form navbar-right">
				<form action = "search.php" method = "POST">
				<div class="form-group has-feedback">
					<input type="text" class="form-control-nav" id="search" aria-describedby="search1" name = "search" required autocomplete="off">
					<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
				</div>

				<button class="btn btn-primary" type="submit" aria-label="Left Align">
					<span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Search
				</button>
				</form>
			</div>
		</div>
	</div>
</div>