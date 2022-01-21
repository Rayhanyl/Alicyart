<?php include('templates/header.php') ?>

<div class="container mt-5">
<!-- Container START -->
	 <?php if($_SESSION['role'] == 'customer'){ ?>
	 <a href="customer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
	 <?php } else { ?>
	 <?php if($_SESSION['role'] == 'designer'){ ?>
	 <a href="designer_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
	 <?php } else { ?>
	 <a href="owner_home.php" class="line"><i class="fas fa-arrow-left"></i> Back To Home</a>
	 <?php } } ?>

	<div class="row">
		<!-- Row START -->
		<div class="col-xl">
			<!-- Col XL Start -->

			<main>
			    <div class="container-fluid px-4">
			      <h1 class="mt-4">Edit Profile</h1>
			      <ol class="breadcrumb mb-4">
			        <li class="breadcrumb-item"><a href="#"><?= $_SESSION['role']?></a></li>
			        <li class="breadcrumb-item active">Form Edit Profile</li>
			      </ol>

			      <div class="card mb-4">
			        <div class="card-header">
			          <i class="fas fa-table me-1"></i>
			          Form Edit Profile
			        </div>
			        <div class="card-body">
					  <form action="support_proses.php" method="POST">
					  <div class="form-group">
					  	<center>
					  		<img src="assets/img/profile/<?php echo htmlentities($_SESSION['picture_profile']);?>" style="width: 200px;"><br>
					  	</center>
					  </div>
					  <div class="form-group">
					    <label for="persentase">Nama :</label>
					    <input type="text" class="form-control" placeholder="Persentase" name="persentase" value="<?= $_SESSION['name'] ?>">
					  </div>
					  <div class="form-group">
					    <label for="due_date">Email :</label>
					    <input type="email" class="form-control" placeholder="Deadline" name="due_date" value="<?= $_SESSION['email'] ?>">
					  </div>
					  <div class="form-group">
					    <label for="keterangan">No Telephone :</label>
					    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="<?= $_SESSION['no_tlp'] ?>">
					  </div>
					  <div class="form-group">
					  	<label>Picture Profile :</label>
					  	<input class="form-control" type="file" name="img1" accept="image/*" required>
					  </div>
					  <button type="submit" class="btn btn-success" style="width:100%;">Edit PRofile</button>
					</form>
			        </div>
			    </div>
			</main>

			<!-- Col XL End -->
		</div>
		<!-- Row END -->	
	</div>

<!-- Container END -->
</div>

<?php include('templates/footer.php') ?>