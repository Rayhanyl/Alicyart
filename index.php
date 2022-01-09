<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alicyart | Design</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<!-- Navbar -->
<div class="wrapper">
  	<nav>
  		<div class="container-flex">
  			<div class="brand">
  				<img class="img-thumbnail rounded-circle"src="assets/img/logo.png">
		  	   	<!-- <a href="" style="text-decoration:none;color:black; font-size:40px; color:white;">Alicyart</a> -->
		  	 </div>
		  	 <div class="burger">
		  	   	<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
		  	 </div>
		  	 <div class="bg-sidebar"></div>
		  	 <ul class="sidebar">
		  	   	<li><a href="#index.php" style="text-decoration:none; color:white;">Home</a></li>
		  	   	<li><a href="#Catalog.php" style="text-decoration:none; color:white;">Catalog</a></li>
		  	   	<li><a href="#Login.php" data-toggle="modal" data-target="#myLogin" style="text-decoration:none; color:white;">Login</a></li>
		  	 </ul>
  		</div>
  	</nav>
 </div>
<!-- Navbar -->
<!-- Content -->
<div class="container-fluid">
	<div class="jumbotron bg-light" style=" color: black;">
	  <p class="jmb-1" style="font-size:45px;"><b>Alicyart Studio's</b></h1>
	  <p class="jmb-2" style="font-size:16px;">
	  	<i>"Alicyart studio merupakan website yang  menyediakan <br>
	  		jasa design yang menarik, dengan harga yang terjangkau"</i>
	  </p>
	  	<div class="hr" style="background-color:green;"></div>
	  	<div class="hr" style="background-color:red;"></div>
	  	<div class="hr" style="background-color:yellow;"></div>
	  	<div class="hr" style="background-color:pink;"></div>
	  	<div class="hr" style="background-color:blue;"></div>
	</div>
	  <div>
        <p style="font-size:30px; font-weight:bold; text-align:center;">What They said about Alicyart Studio's...</p>
      </div>
	  <div class="container">
	  	<div class="content">
      		<div class="sub-content">
		      <div>
		        <p style="font-size:20px; font-weight:bold; text-align:center;">"Ini Contoh Testimoni Ya"</p>
		      </div>		
      			  <div class="d-flex justify-content-around mb-3">
				    <div class="p-2">
				    	<img src="assets/img/content.png" class="responsive" >
				    </div>
				    <div class="p-2">
				    	<img src="assets/img/content.png" class="responsive" >
					</div>
				    <div class="p-2 ">
				    	<img src="assets/img/content.png" class="responsive">
				    </div>
				  </div>
				    <div class="d-flex justify-content-around mb-3">
					    <div class="p-2">
					    <p style="font-size:14px;">-Freelance Designer at Alcyart Stuido's-</p>
					    <center>
						    <span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    </center>
					    </div>
					    <div class="p-2">
					    <p style="font-size:14px;">-Freelance Designer at Alcyart Stuido's-</p>
					    <center>
						    <span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    </center>
						</div>
					    <div class="p-2">
					    <p style="font-size:14px;">-Freelance Designer at Alcyart Stuido's-</p>
					    <center>
						    <span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    	<span class="fa fa-star checked"></span>
					    </center>
						</div>
					</div>
      		</div>
      	</div>
	  </div>    
</div>
<!-- Content -->
<!-- Footer -->
<div class="container-fluid">
	<div class="footer">
      <p>Alicyart Studio's </p>
    </div>
</div>  
<!-- Footer -->

														<!-- Modal Section -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- Modal Login -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="myLogin">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Alicyart Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form>
          	<div class="form-group">
          		<label>Email:</label>
          		<input class="form-control" type="email" name="email" placeholder="Enter Your Email...">
          	</div>
          	<div class="form-group">
          		<label>Password:</label>
          		<input class="form-control" type="password" name="password" placeholder="Enter Your Password...">
          	</div>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myRegis">Register</button>
        	<button type="button" class="btn btn-primary" >Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Login -->

<!-- Modal Register -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="myRegis">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Alicyart Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form class="form-container">
          	<div class="form-group">
          		<label>Name:</label>
          		<input class="form-control" type="name" name="name" placeholder="Enter Your Name...">
          	</div>
          	<div class="form-group">
          		<label>Email:</label>
          		<input class="form-control" type="email" name="email" placeholder="Enter Your Email...">
          	</div>
          	<div class="form-group">
          		<label>Password:</label>
          		<input class="form-control" type="password" name="password" placeholder="Enter Your Password...">
          	</div>
          	<div class="form-group">
          		<label>No Telephone:</label>
          		<input class="form-control" type="text" name="no_tlp" placeholder="Enter Your No Telephone...">
          	</div>
          		<input class="form-control" type="number" name="role" value="3" hidden>
          		<input class="form-control" type="text" name="picture_profile" value="profile.png" hidden>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<button type="button" name="register" class="btn btn-primary" value="Daftar">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Register -->
														
<!-- --------------------------------------------------------------------------------------------------------------- -->
													<!-- Modal Section -->
<!-- JS -->
<script src="assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS -->
</body>
</html>
