<?php include('templates/header.php') ?>

<div class="container mt-5">
  <?php if($_SESSION['role'] == 'customer'){ ?>
  <a href="customer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
  <?php } else { ?>
  <a href="designer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
  <?php } ?>
  <hr style="height:1px;border:none;color:#333;background-color:#333;">
  <div class="container-fluid">
      <?php
        $data = $conn->query("SELECT * FROM tb_order INNER JOIN tb_users ON tb_order.user = tb_users.id_user INNER JOIN tb_product ON tb_order.product = tb_product.id_product WHERE id_order='".$_GET['id_order']."' ");
        
      ?>
      <?php while($row = $data->fetch_assoc()) { ?>
    <div class="row">
      <div class="col-md-4 ">
        <p>Customer detail:</p>
        <p><i class="fas fa-user"></i> <?= $row['name']?></p>
        <hr>
        <p><i class="fas fa-envelope"></i> <?= $row['email']?></p>
        <hr>
        <p><i class="fas fa-phone-square-alt"></i> <?= $row['no_tlp']?></p>
        <hr>
      </div>
      <div class="col-md-8">
        <p>Deskripsi :</p>
        <textarea class="form-control" rows="6" style="text-align: justify;"><?= $row['o_deskripsi']?></textarea>

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
<?php }?>
<?php include('templates/footer.php') ?>
