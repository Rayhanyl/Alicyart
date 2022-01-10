<?php include('templates/header.php') ?>

<!-- Top Content -->
<div class="container mt-5">
  <div class="profile">
    <div class="row">
      <div class="col-sm-2">
        <center>
          <img src="assets/img/profile/profile.png" class="responsive">
        </center>
        <p class="text-center">Rayhan Yuda Lesmana</p>
        <hr>
        <p class="text-center">Customer</p>
      </div>
      <div class="col-sm-8">
        <div class="container mt-5">
          <div class="jumbotron">
            <p>Alicyart Studio's</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Top Content -->

<!-- Barier -->
<div class="barier">
  <hr>
  <p class="text-center"><b>Order List</b></p>
</div>
<!-- Barier -->

<!-- Center Content -->
<div class="container">
 <div class="container">
 <table id="example1" class="table table-striped text-center">
                <thead>
                <tr>
                  <th>Customer</th>
                  <th>Email</th>
                  <th>No Telephone</th>
                  <th>Order Name</td>
                  <th>Order Detail</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Rayhan Yuda Lesmana</td>
                  <td>rayhanyuda13@gmail.com</td>
                  <td>+6282112440715</td>
                  <td>UMKM</td>
                   <td>
                    <a href="#" class="btn btn-success btn-xs " data-toggle="modal" data-target="#myModal"><i class="fas fa-search-plus"></i> Detail</a>
                </td>
                </tr>
                </tbody>
              </table>
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
                <td>UMKM</td>
            </tr>
          <tr>
              <td class="textt">deskirpsi</td>
                <td>:</td>
                <td>Ukuran 600x600, Warna dominan biru, simple</td>
            </tr>
          <tr>
          <tr>
              <td class="textt">harga</td>
                <td>:</td>
                <td>Rp.150.000.,</td>
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
</div>
</div>
<!-- Center Content -->


<!-- Footer -->

<!-- Footer -->

<!-- Modal -->

<!-- Modal -->

<?php include('templates/footer.php') ?>
