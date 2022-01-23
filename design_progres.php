<?php include('templates/header.php') ?>
<!-- Query Get ID Product -->
<?php 
$data = $conn->query("SELECT * FROM tb_order INNER JOIN tb_users ON tb_order.designer = tb_users.id_user INNER JOIN tb_product ON tb_order.product = tb_product.id_product where id_order='".$_GET['id_order']."'");
// $row = $data->fetch_assoc()
?>
          <?php while($row = $data->fetch_assoc()) { ?> 
<!-- Query Get ID Product -->
<div class="container mt-5">
  <a href="customer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
  <hr style="height:1px;border:none;color:#333;background-color:#333;">
  <div class="row mt-4">
    <!--  -->
    <div class="col-sm-3 col-md-6 col-lg-4" style="background-color:lightcyan; border-radius:20px; padding:5px 8px;">
      <div class="col-md mb-2">
        <center>
          <img src="assets/img/profile/profile.png" class="rounded-corners responsive" style="width:200px;">
        </center>
      </div>
      <p><i class="fas fa-user"></i> <?= $row['name']?></p>
      <hr>
      <p><i class="fas fa-envelope"></i> <?= $row['email']?></p>
      <hr>
      <p>Konsultasi via Whatsup:</p>
      <p><i class="fas fa-phone-square-alt"></i> <?= $row['no_tlp']?></p>
      <hr>
      <p class="btn btn-success" style="width:100%; border-radius:20px;">Designer</p>
    </div>
    <!--  -->
    <!--  -->
    <div class="col-sm-9 col-md-6 col-lg-8">
      <p class="text-center"><h4>Sketsa Pengerjaan Design Product: <?= $row['product']?></h4></p>
      <hr style="height:1px;border:none;color:#333;background-color:#333;">
      <div class="row">
        <div class="col-md">
          <p>Sketsa Awal :</p>
          <?= $row['s_awal']?>
          <img src="assets/img/faktur.png" class="responsive" style="width:350px;">
        </div>
        <div class="col-md">
          <p>Hasil Akhir :</p>
          <?= $row['s_akhir']?> <!-- ini nanti buat yang gambar -->
          <img src="assets/img/faktur.png" class="responsive" style="width:350px;">
          <button type="submit" class="btn btn-primary mt-2" style="width:100%;">Acc Sketsa</button>
        </div>
      </div>
      <hr style="height:1px;border:none;color:#333;background-color:#333; opacity:0.5;">
      <div class="row pl-5">
        <div class="col-md">
          <div class="form-group">
          <label>Deskripsi Pesanan :</label>
          <textarea class="form-control" rows="3" style="width:100%;"><?=$row['o_deskripsi']?></textarea>
        </div>
        </div>
      </div>
    </div>
    <!--  -->
  </div>
  <hr style="height:1px;border:none;color:#333;background-color:#333;">
</div>
          <?php }?>
<?php include('templates/footer.php') ?>
