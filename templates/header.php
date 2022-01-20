<?php include('db/db.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alicyart | Design</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owner.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
<?php
session_start()
?>
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#00509d;">
  <a class="navbar-brand" href="#">
  	<img class="img-thumbnail rounded-circle"src="assets/img/logo.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav" style="font-size:18px;">      
      <?php if (empty($_SESSION['role'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color:white;"><i class="fas fa-home "></i> Home</a>
      </li>
      <!-- Owner -->
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'owner'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="owner_home.php" style="color:white;"><i class="fas fa-home "></i> Home</a>
      </li>
      <!-- Designer -->
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'designer'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="designer_home.php" style="color:white;"><i class="fas fa-home "></i> Home</a>
      </li>
      <!-- Customer -->
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'customer'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="customer_home.php" style="color:white;"><i class="fas fa-home "></i> Home</a>
      </li>
      <?php } } } }?>
      <li class="nav-item">
        <a class="nav-link" href="catalog.php" style="color:white;"><i class="fab fa-shopify "></i> Catalog</a>
      </li>
      
      <?php if (empty($_SESSION['role'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php" style="color:white;"><i class="fas fa-sign-in-alt"></i> Login</a>
      </li> 
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'owner'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color:white;"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'designer'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color:white;"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>  
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'customer'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color:white;"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>        
      <?php }}}} ?> 
    </ul>
  </div>  
</nav>


