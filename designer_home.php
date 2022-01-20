<?php include('templates/header.php') ?>

<div class="container">
  <div class="jumbotron mt-5" style="border-radius: 20px;">
    <div class="row">
      <div class="col-sm-4">
          <center>
            <img src="assets/img/profile/<?php echo $_SESSION['picture_profile'];?>" class="center" style="width:200px;">
          </center>
      </div>
      <div class="col-sm-6">
        <hr>
          <p style="font-size:25px;"><strong><?php echo $_SESSION['name'];?></strong><br>
            <p style="font-size:20px;">
              <?php echo $_SESSION['email'];?><br>
              <?php echo $_SESSION['no_tlp'];?>
            </p>
          </p>
          <hr>
          <p class="pb-3">
          <button type="button" class="btn btn-primary" style="border-radius:20px;">Owner</button>
          </p>
      </div>
    </div>
  </div>
</div>

<!-- Barier -->
<div class="barier mt-5 mb-3">
    <center>
        <p style="font-size:30px;"><strong><i>Order Design</i></strong></p>
        <hr>
    </center>
</div>
<!-- Barier -->

<div class="container-fluid">
  <div class="">
    
  </div>
</div>


<?php include('templates/footer.php') ?>
