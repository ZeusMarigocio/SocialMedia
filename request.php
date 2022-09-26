<?php
    session_start();
    include "header.php";

    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        echo $id;
    }
    
    $query = "Select Firstname, Middlename, Lastname from users where user_id = '$id'";
    $custom = custom_query($query);
    foreach($custom as $key => $row){
        $photo = $row['photo'];
        $Firstname = $row['Firstname'];
        $Middlename = $row['Middlename'];
        $Lastname = $row['Lastname'];
    }


?>


<div class = "container" style="margin:0 auto;width:80%;">
	<div class="navbar navbar navbar-default navbar-fixed-top container" style = "width:20%;margin:60px 0 0 20px;" >

		
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="#"><img class="img-responsive" alt="" src="user_pics/default.jpg"></a>
					<div class="row">
						<div class="col-xs-12">
							<h4 align=center>
								<b><?=$Firstname. " ". $Middlename. " ". $Lastname?> </b>
								
							</h4>
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
					<h2><b>Friends</b></h2>
					<div class="row">
						<div class="col-xs-12">
							<h4 align=center>
                            
								<p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 1</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 2</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 3</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 4</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 5</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 6</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 7</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
                                <p><span> <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64"></span>Friend 8</p>
								
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
        //$postquery = "Select id,post, date, Firstname, Middlename, Lastname from users join posts on users.user_id = posts.user_id where  posts.user_id  = '3' order by date DESC";
        //$custompost  = custom_query($postquery);
        
        //foreach ($custompost as $key =>$row){
           // $Fullname = $row['Firstname']." ".$row['Middlename']." ".$row['Lastname'];
            //$post_id = $row['post_id'];
            //$post = $row['post'];
            //$date = $row['date'];
        ?>
            
          
 

      
		

        
        
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
                        </a>
                        <br>
                        <div class="media-body">
                            <h4 class="media-heading"><b>Not Friend 1</b><br><span> <button> Accept </button> <button> Decline </button></span></h4> 
                            
                            
                           
                        
                        
                            
                            
                        </div>
                    </div>
                    <hr>
                    <div class = "media">
                        <div class = "media-body">
                            <h4> Comments </h4>
                        </div>
                    
                    </div>
                    
                    

                <div>
            </div>
            </div>
          
       
        

               
			

    
			
				
				

			


		
	</div>
</div>






