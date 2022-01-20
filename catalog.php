<?php include('templates/header.php') ?>

<div class="container">
  <div class="jumbotron mt-5">
    <h1>Catalog Product</h1>
  </div>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home"><b>Sosmed</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1" ><b>Branding</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2" ><b>Ilustration</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3" ><b>Printed Needs</b></a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content bg-light">

    <!-- Sosmed -->
    <div id="home" class="container tab-pane active"><br>
      <center>
      <div class="row">
        <div class="col-md">
          <h3 style="color:#0077b6;">Sosmed<br><hr></h3>
          <div class="row">
          <!-- Query database Sosmed -->
          <?php 
          $data = $conn->query('SELECT * FROM tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id WHERE category = 1 ');
          while($row = $data->fetch_assoc()) {
          ?>
            <!-- Query database Sosmed -->
            <!-- List 1 -->
            <div class="col-md">
              <div class="branding" style="background-color:#caf0f8;">
                <div class="branding-head" style="background-color:#023e8a;">
                  <p><?= $row['product'];?></p>
                </div>
                <div class="branding-body text-center" style="background-color:#caf0f8;">
                  <p><b><?= $row['judul'];?></b></p>
                  <p><?= $row['deskripsi'];?></p>
                  <?php if (empty($_SESSION['role'])){ ?>
                    <button type="button" class="btn" onclick="myFunction()" style="background-color:#023e8a;">
                      CHOOSE
                    </button>
                    <?php } else { ?>
                    <?php if ($_SESSION['role'] == 'customer'){ ?>
                    <button type="button" class="btn-choose btn" data-toggle="modal" data-target="#myOrder" data-id="<?= $row['id_product'];?>" style="background-color:#023e8a;">
                      CHOOSE
                    </button>
                  <?php } }?>
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
      </center>
    </div>

    <!-- Branding -->
    <div id="menu1" class="container tab-pane fade"><br>
      <center>
      <div class="row">
        <div class="col-md">
          <h3 style="color:#ff4d6d;">Branding<br><hr></h3>
          <div class="row">
            <!-- Query database Branding -->
          <?php 
          $data = $conn->query('SELECT * FROM tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id WHERE category = 2 ');
          while($row = $data->fetch_assoc()) {
          ?>
            <!-- Query database Branding -->
            <!-- List 1 -->
            <div class="col-md">
              <div class="branding" style="background-color: #ffb3c1;">
                <div class="branding-head" style="background-color: #ff477e;">
                  <p><?= $row['product'];?></p>
                </div>
                <div class="branding-body text-center" style="background-color: #ffb3c1;">
                  <p><b><?= $row['judul'];?></b></p>
                  <p><?= $row['deskripsi'];?></p>
                  <?php if (empty($_SESSION['role'])){ ?>
                    <button type="button" class="btn" onclick="myFunction()" style="background-color:#ff477e;">
                      CHOOSE
                    </button>
                    <?php } else { ?>
                    <?php if ($_SESSION['role'] == 'customer'){ ?>
                   <button type="button" class="btn-choose btn" data-toggle="modal" data-target="#myOrder" data-id="<?= $row['id_product'];?>" style="background-color:#ff477e;">
                      CHOOSE
                    </button>
                  <?php } }?>
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
      </center>
    </div>

    <!-- Ilustartion -->
    <div id="menu2" class="container tab-pane fade"><br>
      <center>
      <div class="row">
        <div class="col-md">
          <h3 style="color:#0a8754;">Ilustration<br><hr></h3>
          <div class="row">
            <!-- Query database Ilustration -->
          <?php 
          $data = $conn->query('SELECT * FROM tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id WHERE category = 3 ');
          while($row = $data->fetch_assoc()) {
          ?>
            <!-- Query database Ilustration -->
            <!-- List 1 -->
            <div class="col-md">
              <div class="branding" style="background-color:#c6ecae;">
                <div class="branding-head" style="background-color:#0a8754;">
                  <p><?= $row['product'];?></p>
                </div>
                <div class="branding-body text-center" style="background-color:#c6ecae;">
                  <p><b><?= $row['judul'];?></b></p>
                  <p><?= $row['deskripsi'];?></p>
                  <?php if (empty($_SESSION['role'])){ ?>
                    <button type="button" class="btn" onclick="myFunction()" style="background-color:#0a8754;">
                      CHOOSE
                    </button>
                    <?php } else { ?>
                    <?php if ($_SESSION['role'] == 'customer'){ ?>
                   <button type="button" class="btn-choose btn" data-toggle="modal" data-target="#myOrder" data-id="<?= $row['id_product'];?>" style="background-color:#0a8754;">
                      CHOOSE
                    </button>                 
                  <?php } }?>
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
      </center>
    </div>

    <!-- Printed Needs -->
    <div id="menu3" class="container tab-pane fade"><br>
      <center>
      <div class="row">
        <div class="col-md">
          <h3 style="color:#ff9100;">Printed Needs<br><hr></h3>
          <div class="row">
            <!-- Query database Printed -->
          <?php 
          $data = $conn->query('SELECT * FROM tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id WHERE category = 4 ');
          while($row = $data->fetch_assoc()) {
          ?>
            <!-- Query database Printed -->
            <!-- List 1 -->
            <div class="col-md">
              <div class="branding" style="background-color:#fcf45d;">
                <div class="branding-head" style="background-color:#ff9100;">
                  <p><?= $row['product'];?></p>
                </div>
                <div class="branding-body text-center" style="background-color:#fcf45d;">
                  <p><b><?= $row['judul'];?></b></p>
                  <p><?= $row['deskripsi'];?></p>
                  <?php if (empty($_SESSION['role'])){ ?>
                    <button type="button" class="btn" onclick="myFunction()" style="background-color:#ff9100;">
                      CHOOSE
                    </button>
                    <?php } else { ?>
                    <?php if ($_SESSION['role'] == 'customer'){ ?>
                    <button type="button" class="btn-choose btn" data-toggle="modal" data-target="#myOrder" data-id="<?= $row['id_product'];?>" style="background-color:#ff9100;">
                      CHOOSE
                    </button>
                  <?php } }?>
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
      </center>
    </div>
  </div>
</div>
</div>

<!-- Modal Detail order -->
<!-- The Modal -->
<div class="modal" id="myOrder">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detail Order</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="order_proses.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label><h4>Detail:</h4></label>
            <textarea class="form-control" rows="5" name="o_deskripsi"></textarea>
          </div>
          <div class="form-group">
            <label>
              <h4>File Tambahan:</h4>
              <p style="font-size:15px;">Note: Hanya untuk extensi PNG,PDF</p>
            </label>
            <input type="file" name="file" class="form-control">
          </div>
          <input type="hidden" name="designer" value="">
          <input type="hidden" name="faktur" value="">
          <input type="hidden" name="invoice" value="">
          <input type="hidden" name="status" value="7">
          <input type="hidden" name="user" value="<?php echo $_SESSION['id_user'];?>">
          <input type="hidden" value="" name="id_product" id="product">
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="submit" name="upload" value="Upload" class="btn btn-success" style="width:100%;">Order</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Detail order -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
  $(document).ready(function () {
  
$(document).on("click", ".btn-choose", function () {
     var product = $(this).data('id');
     $("#product").val( product);
});
});
function myFunction() {
  alert("Login Dulu Bang");
}
</script>
<?php include('templates/footer.php') ?>