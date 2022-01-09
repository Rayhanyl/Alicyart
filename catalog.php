<?php include('templates/header.php') ?>

<div class="container">
  <div class="jumbotron mt-5">
    <h1>Catalog Product</h1>
  </div>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Sosmed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Branding</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Ilustration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Printed Needs</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content bg-light">

    <div id="home" class="container tab-pane active"><br>
      <center>

      <div class="row">

        <div class="col-md">
          <h3 style="color:#ff4d6d;">Branding<br><hr></h3>
          <!-- List 1 -->
          <div class="branding">
            <div class="branding-head">
              <p>UMKM NEEDS</p>
            </div>
            <div class="branding-body text-center">
              <p><b>Logo only 400k</b></p>
              <p>We notice that this quarantine bring out
              lots of potential in everyone! Affordable
              logo design for UMKM is available!</p>
              <button type="button" class="btn" data-toggle="modal" data-target="#myOrder">
                CHOOSE
              </button>
            </div>
          </div>
          <!-- List 2 -->
          <div class="branding">
            <div class="branding-head">
              <p>CORPORATE NEEDS</p>
            </div>
            <div class="branding-body text-center">
              <p><b>Logo + GSM 1000K</b></p>
              <p>Start up is everywhere and for those who
              need any logo design with a complete Graphic
              Standard Manual, we're ready to help you!</p>
              <button type="button" class="btn">
                CHOOSE
              </button>
            </div>
          </div>
        </div>

        <div class="col-md">
          <h3 style="color:#ff6201;">Printed<br><hr></h3>

          <!-- List 2 -->
          <div class="printed">
            <div class="printed-head">
              <p>DESIGN PACKAGING</p>
            </div>
            <div class="printed-body text-center">
              <p><b>Packaging design start from 150k</b></p>
              <p>Tell us your reference and we'll calculate
              the price for you</p>
              <button type="button" class="btn">
                CHOOSE
              </button>
            </div>
          </div>

          <!-- List 2 -->
          <div class="printed">
            <div class="printed-head">
              <p>POSTER</p>
            </div>
            <div class="printed-body text-center">
              <p>Poster design start from 150k</p>
              <p>Tell us your reference and we'll calculate
              the price for you</p>
              <button type="button" class="btn">
                CHOOSE
              </button>
            </div>
          </div>
        </div>
      </div>

      </center>
    </div>

    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>

    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
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
        <form>
          <div class="form-group">
            <label>Detail:</label>
            <textarea class="form-control" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label>Reference file:</label>
            <input type="file" class="form-control">
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="button" class="btn btn-primary">Submit</button>
      </div>

    </div>
  </div>
</div>
<!-- Modal Detail order -->
<?php include('templates/footer.php') ?>