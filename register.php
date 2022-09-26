<link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title"><strong>Sign up</strong></h3>
      
     </div>
  
  <div class="panel-body">
   <form role="form" method = "Post" action = "register_proc.php">
  
            <div class="row">
    			<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1" required>
					</div>
				</div>
                <div class="col-xs-12 col-sm-4 col-md-4">
    				<div class="form-group">
                        <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name" tabindex="2" required>
					</div>
				</div>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Gender</label>
            </div>
                <select class="custom-select" id="inputGroupSelect01" required name = "gender">
                    <option selected value = "" hidden disabled >Choose...</option>
                    <option >Male</option>
                    <option >Female</option>
                </select>
            </div>
			
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4" required>
            </div>
            <div class="form-group">
				<input type="text" name="username" id="username" class="form-control " placeholder="Username" tabindex="4" required>
			</div>
			
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5" required>
            </div>
		
                                    
                                    
                                    
        <button type="submit" class="btn btn-success">Register</button>
  
  
  
 
    </form>
</div>
</div>
