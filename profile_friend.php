<?php
    
    include "header.php";
?>
  
<?php

    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
       
    }else{
        header("location:index.php");
    }
    if (isset($_GET['id'])){
        if($_GET['id'] == $id){
            header("Location:profile.php");

        }
    }
    if(isset($_SESSION['accepted'])){
        if($_SESSION['accepted']==1){
            $msg = "Friend Accepted";
            echo friend_accept($msg);
            unset($_SESSION['accepted']);
        }
    }
    $friend_id = $_GET['id'];
   
    
    $query = "Select Firstname, Photo, Middlename, Lastname from users where user_id = '$friend_id'";
    $custom = custom_query($query);
    foreach($custom as $key => $row){
        $photo = $row['Photo'];
        $Firstname = $row['Firstname'];
        $Middlename = $row['Middlename'];
        $Lastname = $row['Lastname'];
    }
    date_default_timezone_set('Asia/Manila');
    $_SESSION['date'] = date('Y/m/d H:i:s');      	



?>


<div class = "container" style="margin:0 auto;width:80%;">
	<div class="navbar navbar navbar-default navbar-fixed-top container" style = "width:20%;margin:60px 0 0 20px;" >

		
			<div class="panel panel-default">
				<div class="panel-body">
					
					<div class="row">
						
                        <div align="center">
                            <?php
                      
                                if ($photo!=""){
                            ?>
                                <img src="user_pics/<?=$photo?>" width = "200" height="200" style="border-radius:10px;"> 
                                <br>
                               <br>
                            <?php } else{ ?>
                                <img src="user_pics/default.jpg" width = "200" height="200" style="border-radius:10px;"> <br>
                                <br>

                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-xs-12">
							<h4 align=center>
								<b><?=$Firstname. " ". $Middlename. " ". $Lastname?> </b>
								
							</h4>
                            <p align=center>
                            <?php
                            
                                $button = "Select friend_id from friends where user_id = '$id' and friend_id ='$friend_id'";
                                $button2 = "Select * from friend_request where requestor_id = '$id' and requested_id ='$friend_id' and status = '1'";
                                $button3 = "Select * from friend_request where requestor_id = '$friend_id' and requested_id ='$id' and status = '1'";
                                
                                $custom_button = custom_query($button);
                                $custom_button2 = custom_query($button2);
                                $custom_button3 = custom_query($button3);
                                $num = mysqli_num_rows($custom_button);
                                $num2 = mysqli_num_rows($custom_button2);
                                $num3 = mysqli_num_rows($custom_button3);
                                
                            
                              
                                if ($num == 0 && $num2==0  && $num3==0 ){
                                    echo '
                                        <a href="addfriend_proc.php?id='.$friend_id.'" class="btn btn-primary"> Add Friend </a>
                                        ';
                                }elseif ($num == 0 && $num2!=0  && $num3 ==0){
                                    echo '
                                        <a href="cancel_friendrequest_proc.php?id='.$friend_id.'" class="btn btn-warning"> Cancel Request </a>
                                        ';
                                }elseif ($num == 0 && $num2==0  && $num3!=0){
                                    echo 
                                        '<a href="friend_accept_proc2.php?id='.$friend_id.'" class = "btn btn-primary"> Accept  </a>'
                                        . '&nbsp;';
                                    echo  '<a href="friend_ignore_proc2.php?id='.$friend_id.'" class = "btn btn-warning"> Ignore </a>'
                                        . '&nbsp;';
                                }elseif ($num != 0 && $num2==0  && $num3==0  ){
                                    echo '
                                        <a href="unfriend_proc.php?id='.$friend_id.'" class="btn btn-danger"> Unfriend </a>
                                        ';

                                }
                            ?>
                            </p>
						</div>
						
					</div>
				</div>
			</div>

	
		
	</div>
    <div class="navbar navbar navbar-default navbar-fixed-top container" style = "width:20%;margin:60px 0 0 1510px; overflow-y: scroll;  position: fixed;
    
    overflow-y: scroll;
    top: 0;
    bottom: 0;" >

		
                <div class="panel panel-default">
                    <div class="panel-body">
                            <h2><b><?=$Firstname?> 's Friends </b></h2>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 align=center>
                                        <?php 
                                        $allfriends = "Select friend_id from friends where user_id = '$friend_id'";
                                        $allfriendscustom = custom_query($allfriends);
                                        
                                        $num5 = mysqli_num_rows($allfriendscustom);
                                        if ($num5 !=0){
                                            foreach($allfriendscustom as $key =>$row){
                                                $friend_id = $row['friend_id'];
                                                
                                                $friendsquery = "Select user_id, Firstname, Photo, Middlename, Lastname from users where user_id = '$friend_id'";
                                                $friends = custom_query($friendsquery);
                                                foreach($friends as $key => $row){
                                                    $photo = $row['Photo'];
                                                    $Friend_ID = $row['user_id'];
                                                    $Fullname  = $row['Firstname']. " ". $row['Middlename']. " ". $row['Lastname'];
                                            ?>
                                                <hr>  <p align="left">
                                                <?php
                                                        if ($photo!=""){
                                                        ?>
                                                            <img src="user_pics/<?=$photo?>"  width="42" height="42" align="top">
                                                        <?php
                                                        }else{?>
                                                                <img src="user_pics/default.jpg"  width="42" height="42" align="top">
        
                                                        <?php } 
                                                        if ($friend_id == $id) {?>
        
                                                    <a href ="profile.php"> <?=$Fullname?> </a> <br> <p align=center></p></p> 
        
        
        
        
        
        
                                            <?php  }else{ ?>
                                                <a href ="profile_friend.php?id=<?=$Friend_ID?>"> <?=$Fullname?> </a> <br> <p align=center></p></p> 
                                            <?php }
                                            

                                            }
                                        }
                                    }
                                        ?>

                                    
                                        
                                        
                            
                            
                                    </h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>

	
		
	</div>
    
		
    <div class="container" style = "width:70%;margin:60px auto 0 auto;border-radius:10px;background-color:#2F4F4F" >

        <div class="container-fluid">
			<div>

            </div>
        <br>
        </div>
        <hr>
    
        <?php 
        
       
     
        $friend_ID = $_GET['id'];
        
        $friendship = "Select * from friends where user_id = '$id' and friend_id = '$friend_ID' ";
        $customfriendship = custom_query($friendship);
        $numfriends = mysqli_num_rows($customfriendship );
        
        
        if ($numfriends !=0 ){
            foreach($customfriendship as $key => $row){
                $friend_id = $row['friend_id'];
                $postquery = "Select post_id,post, date, Photo, users.user_id, Firstname, Middlename, Lastname from users join posts on users.user_id = posts.user_id where  posts.user_id  = '$friend_id' order by date DESC";
                $custompost  = custom_query($postquery);
            
            foreach ($custompost as $key =>$row){
                $user_id = $row['user_id'];
                $Fullname = $row['Firstname']." ".$row['Middlename']." ".$row['Lastname'];
                $post_id = $row['post_id'];
                $post = $row['post'];
                $date = $row['date'];
                $photo = $row['Photo'];
            ?>
                
    
                <div class="container-fluid">
                    <div class="card" style= "margin-left:0px;padding:20px;background-color:white;">
                   
                        <h1><?php if ($photo != ""){ echo '<img src="user_pics/'.$photo.'" style="width:100px; height:100px; border-radius:10px; vertical-align: text-top;">';} else{ echo '<img src="user_pics/default.jpg"style="width:100px;vertical-align: text-top;">';} ?>   <?=$Fullname?> </h1>
                        <h5><?=time_elapsed_string($date)?> </h5>
                        <b> <h3 style = "font-size:20px;"><?=$post ?> </h3> </2> </B>
                        
                            
                            <hr>
                            <h3 class = "btn btn-info"> COMMENTS </h3>
                            <br><br>
                        
                        <div class = "card-body">
                            
                            
                            <?php $commentquery = "Select  comment, Firstname, users.user_id, Photo, Middlename,Lastname, date from comments join users on comments.user_id = users.user_id where post_id = '$post_id' order by date ASC";
                                    $customcomments = custom_query($commentquery);
                                    foreach($customcomments as $key =>$row){
                                        $user_id = $row['user_id'];
                                        $photo =$row['Photo'];
                                        $comment = $row['comment'];
                                        $commentator = $row['Firstname']." ". $row['Middlename']." ".$row['Lastname'];
                                        $datecomment  = $row['date'];
                                        if ($photo!=""){
                                            
                                            echo'<img style="border-radius: 25%;" src="user_pics/'.$photo.'"  width="42" height="42" align="top">';
                                           
                                            echo "<b>"."&nbsp; ".$commentator. "</b>". ": ". $comment."<br>";
                                            echo time_elapsed_string($datecomment)."<br>";
                                            echo "<hr>";
                                        
                                        }else{
                                            echo '<img src="user_pics/default.jpg"  width="42" height="42" align="top"> '; 
                                           
                                            echo "<b>".$commentator. "</b>". ": ". $comment."<br>";
                                            echo time_elapsed_string($datecomment)."<br>";
                                            echo "<hr>";
    
                                        } 
                                            
                            
                                        
                        } ?>
                            <form action =  "comment_proc_profile.php?id=<?=$post_id?>" method = "post">
                            <br>
                            <input type = "text" name = "comment" required autocomplete="off"> <button class = "btn btn-primary"> Add Comment  </button> 
                            
                            </form>
                        </div>
                        
                    </div>
                </div>
                  
                <br>
                <br>
      
    
        <?php }
            }
    
           
    } else{?>
    <h1 style="color:white;">Add Friend To View Post</h1>
    <h2></h2>
    <?php } ?>

        
        
	</div>
</div>







