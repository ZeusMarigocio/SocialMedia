<?php
   
    include "header3.php";

    
    $query = "Select Firstname, Photo, Middlename, Lastname from users where user_id = '$id'";
    $custom = custom_query($query);
    foreach($custom as $key => $row){
        $photo = $row['Photo'];
        $Firstname = $row['Firstname'];
        $Middlename = $row['Middlename'];
        $Lastname = $row['Lastname'];
    }


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

	
		
	</div>
    <div class="navbar navbar navbar-default navbar-fixed-top container" style = "width:20%;margin:60px 0 0 1510px; overflow-y: scroll;  position: fixed;
    
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
    
		
    <div class="container" style = "width:70%;margin:60px auto 0 auto;border-radius:10px;background-color:#2F4F4F" >
    <br>
        <div class="panel panel-info">
			<div class="panel-heading">
				<div class="media">
					<h1>Friend Request</h1>
                   
                </div>
            </div>
        <br>
      
    
        <?php 
        $postquery = "Select requestor_id, Photo, requested_id,Firstname, Middlename, Lastname from friend_request join users on friend_request.requestor_id = users.user_id where  friend_request.requested_id  = '$id' and status = '1'";
        $custompost  = custom_query($postquery);
        
        foreach ($custompost as $key =>$row){
          $Fullname = $row['Firstname']." ".$row['Middlename']." ".$row['Lastname'];
           $requestor_id = $row['requestor_id'];
           $photo = $row['Photo'];
           $requested_id= $row['requested_id'];
         
        ?>
            
          
 

      
		

        
        
           


    
  



    
    
    <div class="container-fluid">
        <div class="card" style= "margin-left:0px;padding:20px;background-color:white;">
       
            <h1><?php if ($photo != ""){ echo '<img src="user_pics/'.$photo.'" style="width:100px;vertical-align: text-top;">';} 
            else{ echo '<img src="user_pics/default.jpg"style="width:100px;vertical-align: text-top;">';} ?> 
              <?=$Fullname?> </h1>
            <a href="friend_accept_proc.php?id=<?=$requestor_id?>" class = 'btn btn-primary'> Acccept</a>     
               <a href="friend_ignore_proc.php?id=<?=$requestor_id?>" class="btn btn-warning">Ignore</a>

           
            
            
                
                <hr>
              
                <br>
            
            
            

                
                
            
            
        </div>
    </div>
      

    
        
               
               
          
           
            
            


    <br>
    <br>
    
  



       
    

    <?php }?>

</div>






