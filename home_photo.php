<?php
    
    include "header1.php";

    
    
    $query = "Select Firstname, Photo, Middlename, Lastname from users where user_id = '$id'";
    $custom = custom_query($query);
    foreach($custom as $key => $row){
        $photo = $row ['Photo'];
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
						<div class="col-xs-12">
							<h4 align=center>
								<b><?=$Firstname. " ". $Middlename. " ". $Lastname?> </b>
								
							</h4>
						</div>
                        <div align="center">
                            <?php
                                if ($photo!=""){
                            ?>
                                <img src="user_pics/<?=$photo?>" width = "200" height="200" style="border-radius:10px;"> 
                                <br>
                                
                            <?php } else{ ?>
                                <img src="user_pics/default.jpg" width = "200" height="200" style="border-radius:10px;"> 
                                   
                            <?php
                            }
                            ?>
                        </div>
						
					</div>
				</div>
			</div>
            <a href="logout.php" class="btn btn-warning" style="margin: 0px 0px 0px 140px;">Logout</a>
            <p> <br> </p>
            <div class="navbar navbar navbar-default navbar-fixed-top container" style = "width:20%;margin:60px 0 40px 1510px; overflow-y: scroll;  position: fixed;
    
    overflow-y: scroll;
    top: 0;
    bottom: 0;" >

		
                  
            <div class="panel panel-default">
                            
            
                    <div class="panel-body">
                        <h2><b>Friends</b></h2>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 align=center>
                                    <?php 
                                     $allfriends = "Select friend_id from friends where user_id = '$id'";
                                     $allfriendscustom = custom_query($allfriends);
                                     
                                     $num5 = mysqli_num_rows($allfriendscustom);
                                     if ($num5 !=0){
                                         foreach($allfriendscustom as $key =>$row){
                                             $friend_id = $row['friend_id'];
                                            
                                             $friendsquery = "Select user_id, Firstname, Photo, Middlename, Lastname from users where user_id != '$id' and user_id = '$friend_id'";
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
     
                                                     <?php } ?>
     
                                                 <a href ="profile_friend.php?id=<?=$Friend_ID?>"> <?=$Fullname?> </a> <br> <p align=center></p></p> 
     
     
     
     
     
     
                                         <?php  }
                                        

                                         }
                                     }
                                     ?>

                                  
                                       
                                    
                        
                        
                                </h4>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
			

	
		
	        </div>

	
		
	</div>
		
    <div class="container" style = "width:70%;margin:60px auto 0 auto;border-radius:10px;background-color:#2F4F4F" >

        <div class="container-fluid">
			<div class="panel-heading">
				<div class="media" ><br>
					<a class="media-left" href="#fake">
                  
                    
						
					</a>
					<div class="media-body">
                    <form action = "user_uploadphoto2.php?id=<?=$id?>" method = "post">
						<div class="form-group has-feedback">
							<label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                            <h1 style="color:white;">Upload Photo</h1>
                            <?php 
                            date_default_timezone_set('Asia/Manila');
                            $_SESSION['date'] = date('Y/m/d H:i:s'); 
                           ?>	
                        </div>
                        <div class = "media-body">
                   
                                
                            <button class = "btn btn-primary" style = "width:150px; " > Upload </button> 
                            
                            </form>
                        </div>
					</div>
                </div>
             
            </div>
            
      
        </div>
        <hr>
        <br>
    
        <?php 
      
            
                $postquery = "Select * from photos as p  join users on p.user_id = users.user_id  where p.user_id = '$id' OR (p.user_id IN (SELECT friend_id FROM friends WHERE user_id  = '$id')) order by date DESC";
                $custompost  = custom_query($postquery);
              
                
                
                foreach ($custompost as $key =>$row){
                    
                    $photo_id = $row['photo_id'];
                    $photo = $row['Photo'];
                    $photo_post = $row['photo_post'];
                    $date = $row['date'];
                    $Fullname = $row['Firstname']." ".$row['Middlename']." ".$row['Lastname'];
              
                    
                  
                ?>

                    <div class="container-fluid">
                        <div class="card" style= "margin-left:0px;padding:20px;background-color:white;">
                       
                            <h1><?php if ($photo != ""){ echo '<img src="user_pics/'.$photo.'" style="width:100px;height:100px;border-radius:10px;vertical-align: text-top;">';} else{ echo '<img src="user_pics/default.jpg"style="width:100px;vertical-align: text-top;">';} ?>   <?=$Fullname?> </h1>
                            <h5><?=time_elapsed_string($date)?> </h5>
                            <b> <h3 style = "font-size:20px;"><img src = "user_pics/<?=$photo_post?>" style = "width:350px; height:250px;border:2px solid black;" > </h3> </2> </B>
                            
                            
                       
                            
                                
                                
                                
                                
                        </div>
                    </div>
             
        
         
                    <br>
                    <br>
                          
                    
        
            <?php }
            


        
        
     
            ?>

            
       
        
            
            
            
            <br>
            <br>
            
     
        

               
			

	</div>
</div>







