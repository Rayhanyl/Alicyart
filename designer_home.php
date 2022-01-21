<?php include('templates/header.php') ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4 text-center">
      <div class="container">
        <div class="profile">
          <center>
            <img src="assets/img/profile/<?php echo $_SESSION['picture_profile'];?>" class="center" style="width:200px;">
          </center>
          <p><strong><?php echo $_SESSION['name'];?></strong><br>
            <p style="font-size:15px;">
              <?php echo $_SESSION['email'];?><br>
              <?php echo $_SESSION['no_tlp'];?>
            </p>
          </p>
          <hr>
          <p class="pb-3">
          <a href="edit_profile.php" type="button" class="btn btn-primary" style="border-radius:20px;"><?= $_SESSION['role'];?></a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
          <p><h3>Order List:</h3></p>
          <table class="table table-striped text-center" style="font-size:15px;">
            <thead>
              <tr>
                <th>Customer</th>
                <th>Order</th>
                <th>Deskripsi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <td>Rayhan yuda</td>
                <td>Instagram Post</td>
                <td>Design Simpel aja</td>
                <td><a href="designer_detail.php" type="button" class="btn btn-primary">Detail Order:</a></td>
            </tbody>
          </table>
    </div>
  </div>
</div>

<?php include('templates/footer.php') ?>
