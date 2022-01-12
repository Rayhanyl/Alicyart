<?php include('templates/header.php') ?>

<div class="container mt-5">
  <div class="row">

    <div class="col-sm-6 text-center">
      <div class="container">
        <div class="profile">
          <center>
            <img src="assets/img/profile/profile.png" class="center" style="width:200px;">
          </center>
          <p><strong>Rayhan Yuda Lesmana</strong><br>
            <p style="font-size:15px;">
              rayhanyuda@gmail.com<br>
              +6282112440715
            </p>
          </p>
          <hr>
          <p class="pb-3">
          <button type="button" class="btn btn-primary" style="border-radius:20px;">Customer</button>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mt-3">
      <div class="container-fluid">
        <div class="order-list">
          <div class="row">
            <div class="col-sm-4">
              <img src="assets/img/content.png" class="responsive">
            </div>
            <div class="col-sm-8">
              <div class="d-flex flex-column">
                <div class="">
                  <p>Desain Logo UMKM</p>
                </div>
                <div class="p-1">
                  <textarea rows="5" disabled style="width:100%;">Ukuran 600x600, Warna dominan biru, Desain simpel aja</textarea>
                </div>
                <div class="p-1">
                  <p>Harga : Rp.150.000.00.,</p>
                  <button type="button" class="btn btn-primary">Pesanan Selesai</button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Detail order</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>

      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<!-- Optional JavaScript -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
<div class="modal-dialog modal-lg" role="document">
       
<div class="modal-content">
<div class="modal-header">
<div class="modal-title" id="myModalLabel">
  <p>Order Detail</p>
</div>
<button type="button" class="btn btn-lg cl" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
          <tr>
              <td class="textt">Nama</td>
                <td>:</td>
                <td style="color: black; font-weight:bold">Rayhan Yuda Lesmana</td>
            </tr>
          <tr>
              <td class="textt">Jenis Kelamin</td>
                <td>:</td>
                <td>Laki-Laki</td>
            </tr>
          <tr>
              <td class="textt">Tanggal Lahir</td>
                <td>:</td>
                <td>13-02-2000</td>
            </tr>
          <tr>
              <td class="textt">Email</td>
                <td>:</td>
                <td>rayhanyuda13@gmail.com</td>
            </tr>
          <tr>
              <td class="textt">No Telephone</td>
                <td>:</td>
                <td>+6282112440715</td>
            </tr>
          <tr>
              <td class="textt">Odername</td>
                <td>:</td>
                <td>Desain Logo UMKM</td>
            </tr>
          <tr>
              <td class="textt">deskirpsi</td>
                <td>:</td>
                <td>Ukuran 600x600, Warna dominan biru, Desain simpel aja</td>
            </tr>
          <tr>
          <tr>
              <td class="textt">harga</td>
                <td>:</td>
                <td>Rp.150.000.00.,</td>
            </tr>
                <td>Gambar</td>
                <td>:</td>
                <td>
                  <img src="assets/img/content.png" class="responsive" style="width:150px;">
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
<?php include('templates/footer.php') ?>
