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
          <a href="edit_profile.php" type="button" class="btn btn-primary" style="border-radius:20px;"><?php echo $_SESSION['role'];?></a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
          <p><h3>Order List:</h3></p>
        <div class="container-fluid">
          <table class="table table-striped text-center" style="font-size:15px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Order</th>
                <th></th>
                <th></th>

              </tr>
            </thead>
            <tbody>

        <?php
        $batas = 5;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
        
        $previous = $halaman - 1;
        $next = $halaman + 1;
        
        $data = mysqli_query($conn,"SELECT * FROM tb_order");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

        $data = mysqli_query($conn,"SELECT * FROM tb_order INNER JOIN tb_users ON tb_order.user = tb_users.id_user INNER JOIN tb_product ON tb_order.product = tb_product.id_product limit $halaman_awal, $batas");
        $nomor = 1;
        while($row = mysqli_fetch_array($data))
        {
        ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?= $row['name'];?></td>
                <td><?= $row['product'];?></td>
                <td><?= $row['judul'];?></td>
                <td>
                  <?php if ($row['faktur'] == null){?>
                    <p>Faktur Tagihan Belum Di Upload</p>
                  <?php } else { ?>
                  <?php if ($row['invoice'] == null){?>
                    <p>Belum transfer</p>
                  <?php } else { ?>
                  <?php if ($row['status'] == '2'){?>
                    <p>Sudah Transfer</p>
                  <?php } else { ?>
                  <?php if ($row['status'] == '3'){?>
                    <p>Sedangan Pengerjaan Design</p>
                  <?php } else { ?>
                  <?php if ($row['status'] == '4'){?>
                    <p>Pesanan Selesai</p>
                  <?php } else { ?>
                  <?php if ($row['status'] == '6'){?>
                    <p>Pesanan Dibatalkan</p>
                  <?php } } } } } }?>
                </td>
                <td>
                  <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#myDetail<?=$row['id_order'];?>"style="width:100%;">
                    Detail
                  </button>
                  <?php if ($row['faktur'] == null) {?>
                  <a class="btn-faktur btn btn-success mt-1" data-toggle="modal" data-target="#myFaktur" 
                  data-order="<?= $row['id_order'];?>" data-product="<?= $row['product'];?>" style="width:100%;">
                  Upload Faktur</a>
                  <?php} else { ?>

                  <?php } ?>
                </td>
              </tr>


                <!-- Modal Detail Order -->
                <div class="modal fade" id="myDetail<?=$row['id_order'];?>">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      
                      <!-- Header -->
                      <div class="modal-header">
                        <h4>Detail Order</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Header -->

                      <!-- Body -->
                      <div class="modal-body">
                        <div class="container">
                          <?php if($row['invoice'] == null ){ ?>
                          <?php } else { ?>
                          <hr>
                          <form action="verify.php" method="POST">
                          <div class="form-group">
                            <label for="designer">Select List :</label>
                            <select class="form-control" name="designer" id="designer">
                              <option selected>-- Pilih Designer --</option>
                              <?php
                              $designer = $conn->query('SELECT * FROM tb_designer INNER JOIN tb_users ON tb_designer.user = tb_users.id_user');
                              while($rowd=$designer->fetch_assoc()){
                                ?>
                              <option value="<?= $rowd['id_designer']?>"><?= $rowd['name']?></option>
                            <?php } ?>
                            </select>
                              <div class="row mt-1">
                                <div class="col">
                                    <input type="hidden" name="id_order" value="<?=$row['id_order'];?>">
                                    <input type="hidden" name="status" value="3">
                                    <center><button type="submit" name="submit" class="btn btn-primary" style="width:50%;">Verify</button></center>
                                  <!-- Pesan di batalkan -->
                              </form>
                                </div>
                                <div class="col">
                                  <form action="verify.php" method="POST">
                                    <input type="hidden" name="id_order" value="<?=$row['id_order'];?>">
                                    <input type="hidden" name="status" value="6">
                                    <center><button type="submit" name="submit" class="btn btn-primary" style="width:50%;">Verified</button></center>
                                  <!-- Pesan di batalkan -->
                                  </form>
                                </div>
                              </div>
                          </div>
                          <hr>
                          <?php }?>
                          <div class="row mb-1">
                            <div class="col-sm">
                              <label>Customer :</label>
                              <input type="text" class="form-control" value="<?=$row['name'];?>" disabled>
                            </div>
                            <div class="col-sm">
                              <label>Email :</label>
                              <input type="text" class="form-control" value="<?=$row['email'];?>" disabled>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-sm">
                              <label>Telephone :</label>
                              <input type="text" class="form-control" value="<?=$row['no_tlp'];?>" disabled>
                            </div>
                            <div class="col-sm">
                              <label>Product :</label>
                              <input type="text" class="form-control" value="<?=$row['product'];?>" disabled>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <label>Deskripsi:</label>
                            <textarea class="form-control" rows="5" disabled><?= $row['o_deskripsi'];?></textarea>
                          </div>
                          <hr>
                          <div class="row mt-2">
                            <div class="col-sm">
                              <label>Faktur:</label>
                              <img src="assets/img/faktur/<?php echo htmlentities($row['faktur']);?>" class="responsive">
                            </div>
                            <div class="col-sm">
                              <label>Invoice:</label>
                              <img src="assets/img/invoice/<?php echo htmlentities($row['invoice']);?>" class="responsive">
                            </div>
                          </div>
                          <hr>
                          <div class="row mt-3">
                            <div class="col-md">
                            <?php if ($row['file'] == null ){?>
                              <p>Tidak Ada File Tambahan</p>
                            <?php }else { ?>
                            <center> 
                                  <iframe class="responsive" src="assets/img/file/<?php echo htmlentities($row['file']);?>" frameBorder="0">
                                  </iframe>
                                  <p><?= $row['file'];?></p>
                            </center>
                          <?php }?>
                            </div>
                          </div>
                          <hr>
                        </div>
                      </div>
                      <!-- Body -->
                    </div>
                  </div>
                </div>
                <!-- Modal Detail Order -->

              <?php }?>
            </tbody>
          </table>
  <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
        </li>
        <?php 
        for($x=1;$x<=$total_halaman;$x++){
        ?> 
          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
        <?php
        }
        ?>        
        <li class="page-item">
          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
      </ul>
  </nav>
        </div>
    </div>
  </div>
</div>


<!-- Modal Upload Faktur Tagihan -->
<!-- The Modal -->
<div class="modal" id="myFaktur">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Upload Faktur Tagihan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="order_faktur.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="user"    value="<?php echo $_SESSION['id_user'];?>" readonly>
          <input type="hidden" name="product" value="" id="product" readonly>
          <input type="hidden" name="invoice" value="" readonly>
          <input type="hidden" name="status" value="1d">
          <input type="hidden" name="id_order"value="" id="id_order">
          <div class="form-group">
            <label>Upload Faktur Tagihan:</label>
            <input class="form-control" type="file" name="img1" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-success" name="submit" value="Sumbit">Upload</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Modal Upload Faktur Tagihan -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
  $(document).ready(function () {
  
$(document).on("click", ".btn-faktur", function () {
     var faktur = $(this).data('order');
     $("#id_order").val( faktur);
  });
});
$(document).ready(function () {
  
$(document).on("click", ".btn-faktur", function () {
     var product = $(this).data('product');
     $("#product").val( product);
  });
});
</script>
<?php include('templates/footer.php') ?>
