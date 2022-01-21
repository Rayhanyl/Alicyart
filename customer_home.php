<?php include('templates/header.php') ?>

<div class="container mt-5">
  <div class="row">

    <div class="col-sm-6 text-center">
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
          <a href="edit_profile.php" type="button" class="btn btn-primary" style="border-radius:20px;">Customer</a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mt-3">
      <div class="container-fluid">
        <h3>List Order:</h3>

        <div class="order-list">
        <?php
        $batas = 1;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
        
        $previous = $halaman - 1;
        $next = $halaman + 1;
        
        $data = mysqli_query($conn,"SELECT * FROM tb_order WHERE user='".$_SESSION['id_user']."'");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

        $data = mysqli_query($conn,"SELECT * FROM tb_order INNER JOIN tb_users ON tb_order.user = tb_users.id_user INNER JOIN tb_product ON tb_order.product = tb_product.id_product INNER JOIN tb_status ON tb_order.status = tb_status.id_status WHERE user='".$_SESSION['id_user']."' limit $halaman_awal, $batas");
        while($row = mysqli_fetch_array($data))
        {
          ?>
          <hr style="height:2px;border:none;color:#333;background-color:#333;">
          <div class="row">
            <div class="col-sm-4">
              <img src="assets/img/product/<?php echo htmlentities($row['p_product']);?>" class="responsive" >
            </div>
            <div class="col-sm-8">
              <div class="d-flex flex-column">
                <div class="">
                  <p><b><?= $row['product']?></b></p>
                </div>
                <div class="p-1">
                  <textarea rows="5" disabled style="width:100%;"><?= $row['o_deskripsi'];?></textarea>
                </div>
                <div class="p-1 ml-3">
                  <hr style="height:1px;border:none;color:#333;background-color:#333;">
                  <p style="font-size:18px;"><b>Rp.<?=$row['harga'];?>.,</b></p>
                  <hr style="height:1px;border:none;color:#333;background-color:#333;">
                </div>
                <div class="p-1">
                  <div class="row">
                    <div class="col-xm pl-3 pr-1">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?= $row['id_order'];?>">Detail order</button>
                    </div>
                    <div class="col-xm pl-1">
                      <?php if ( $row['status'] == '7' ){ ?>
                        
                      <?php } else { ?>
                      <?php if ( $row['status'] == '1'){ ?>
                      <button class="btn-invoice btn btn-primary" type="button" name="order" data-toggle="modal" data-target="#myUpload" data-order="<?=$row['id_order'];?>" data-product="<?=$row['product'];?>" data-faktur="<?=$row['faktur'];?>">
                          Upload Bukti Pembayaran
                      </button>
                      <?php } else { ?>
                      <?php if ( $row['status'] == '2'){ ?>
                      <button type="button" class="btn btn-warning">Menunggu Verivikasi</button>
                      <?php } else { ?>
                      <?php if ( $row['status'] == '3'){ ?>
                      <a href="design_progres.php?id_order=<?=$row['id_order']?>" type="button" class="btn btn-info">Pengerjaan Design</a>
                      <?php } else { ?>
                      <?php if ( $row['status'] == '6'){ ?>
                      <button type="button" class="btn btn-danger">Pesanan Dibatalkan</button>
                    <?php } } } } }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr style="height:2px;border:none;color:#333;background-color:#333;">
<!-- ------------------------------------------------------------------------------------------------------------- -->
<!-- Modal -->
<!-- Optional JavaScript -->
<div class="modal fade" id="myModal<?= $row['id_order']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
<div class="modal-dialog modal-lg" role="document">
       
<div class="modal-content">
<div class="modal-header">
<div class="modal-title" id="myModalLabel">
  <p><h1>Order Detail</h1></p>
</div>
<button type="button" class="btn btn-lg cl" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 <table width="100%" border="0" class="p-5">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
          <tr>
              <td class="textt">Nama</td>
                <td>:</td>
                <td style="color: black; font-weight:bold"> <?php echo $_SESSION['name'];?></td>
            </tr>
          <tr>
              <td class="textt">Email</td>
                <td>:</td>
                <td> <?php echo $_SESSION['email'];?></td>
            </tr>
          <tr>
              <td class="textt">Telephone</td>
                <td>:</td>
                <td> <?php echo $_SESSION['no_tlp'];?></td>
            </tr>
          <tr>
              <td class="textt">Oder Name</td>
                <td>:</td>
                <td> <?= $row['judul'] ?></td>
            </tr>
          <tr>
              <td class="textt">Harga:</td>
                <td>:</td>
                <td>Rp.<?= $row['harga']?>.,</td>
            </tr>
          <tr>
              <td class="textt">deskirpsi</td>
                <td>:</td>
                <td><textarea class="form-control mt-3 mb-3" rows="3" disabled><?= $row['o_deskripsi'];?></textarea></td>
            </tr>
          <tr>
            <td>Faktur</td>
              <td>:</td>
              <td>
                <img src="assets/img/faktur/<?php echo htmlentities($row['faktur']);?>" class="responsive" >
              </td>
            </tr>
          <tr>
            <td>Inovice</td>
              <td>:</td>
              <td>
                <img src="assets/img/invoice/<?php echo htmlentities($row['invoice']);?>" class="responsive" >
              </td>            
            </tr>
            <tr class="mt-3">
              <td>File Tambahan</td>
              <td>:</td>
              <td>
                <?php if ($row['file'] == null ){?>
                  <p class="mt-4">Tidak Ada File Tambahan</p>
                <?php } else { ?>
                <center>
                      <iframe class="responsive" src="assets/img/file/<?php echo htmlentities($row['file']);?>" frameBorder="0" >
                      </iframe>
                      <p><?= $row['file'];?></p>
                </center>
              <?php }?>
              </td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<!------------------------------------------------------- Modal ---------------------------------------------------------------->

<!-- --------------------------------------------------Detail Order----------------------------------------------------------- -->
<!-- Modal Upload Bukti Pembayaran -->
<div class="modal" id="myUpload">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Upload Bukti Pembayaran</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="order_invoice.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="user"    value="<?php echo $_SESSION['id_user'];?>" readonly>
          <input type="hidden" name="product" value="" id="product" readonly>
          <input type="hidden" name="faktur"  value="" id="faktur"  readonly>
          <input type="hidden" name="id_order"value="" id="id_order">
          <label>Upload Bukti:</label>
          <input class="form-control" type="file" name="img1" accept="image/*" required>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="submit" value="Sumbit">Upload</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Modal Upload Bukti Pembayaran -->
<!-- --------------------------------------------------Detail Order----------------------------------------------------------- -->
      <?php }?>
<!------------------------------------------------------- Modal ---------------------------------------------------------------->
        </div>
      </div>
    </div>
  </div>
</div>

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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
// 
$(document).ready(function () {
$(document).on("click", ".btn-invoice", function () {
     var invoice = $(this).data('order');
     $("#id_order").val( invoice);
  });
});

// 
$(document).ready(function () {
$(document).on("click", ".btn-invoice", function () {
     var product = $(this).data('product');
     $("#product").val( product);
  });
});
// 
$(document).ready(function () {
$(document).on("click", ".btn-invoice", function () {
     var faktur = $(this).data('faktur');
     $("#faktur").val( faktur);
  });
});
</script>


<?php include('templates/footer.php') ?>
