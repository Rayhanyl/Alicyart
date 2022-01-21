<?php include('templates/header.php') ?>

<div class="container mt-5">
  <?php if($_SESSION['role'] == 'customer'){ ?>
  <a href="customer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
  <?php } else { ?>
  <a href="designer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
  <?php } ?>
  <hr style="height:1px;border:none;color:#333;background-color:#333;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 ">
        <p>Customer detail:</p>
        <p><i class="fas fa-user"></i> Rayhan yuda lesmana</p>
        <hr>
        <p><i class="fas fa-envelope"></i> Rayhanyuda@gmail.com</p>
        <hr>
        <p><i class="fas fa-phone-square-alt"></i> 082112440715</p>
        <hr>
      </div>
      <div class="col-md-8">
        <p>Deskripsi :</p>
        <textarea class="form-control" rows="6" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>

      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <p>Sketsa awal :</p>
        <center><img src="assets/img/content.png" class=" rounded responsive" style="width:300px;"></center>
        <button type="button" class="btn btn-primary mt-1" style="width:100%;">Submit Sketsa</button>
        <hr>
        <p>Skeksa akhir :</p>
        <center><img src="assets/img/content.png" class=" rounded responsive" style="width:300px;"></center>
        <button type="button" class="btn btn-primary mt-1" style="width:100%;">Submit Sketsa</button>
      </div>
      <div class="col-md-8">
        <p>File Tambahan :</p>
        <iframe class="responsive" src="assets/img/file/Test.pdf" style="height: 760px; border: none"></iframe>
      </div>
    </div>
  </div>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
</div>

<?php include('templates/footer.php') ?>
