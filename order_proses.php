<?php
include ('db/db.php');
session_start();
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','pdf');
			$nama = $_FILES['file']['name'];
			$countfiles = count($_FILES['file']['name']);

			// Looping all files
			$nama_semua_file = '';
			for($i=0;$i<$countfiles;$i++){
			  $filename = $_FILES['file']['name'][$i];
			  // Upload file
			  move_uploaded_file($_FILES['file']['tmp_name'][$i],'assets/img/file/'.$filename);
			  $nama_semua_file = $filename . ',' . $nama_semua_file  ;
			//   var_dump($filename);
			}

			// $x = explode('.', $nama);
			// $ekstensi = strtolower(end($x));
			// $ukuran	= $_FILES['file']['size'];
			// $file_tmp = $_FILES['file']['tmp_name'];
			$id_product = $_POST['id_product'];
			$user = $_POST['user'];
			$o_deskripsi = $_POST['o_deskripsi'];
			$invoice = $_POST['invoice'];
			$faktur = $_POST['faktur'];	
			$status = $_POST['status'];	

		 			// move_uploaded_file($file_tmp, 'assets/img/file/'.$nama);
					if (empty($nama)) {
						$sql = "INSERT INTO tb_order (user, product, o_deskripsi, invoice, faktur, status) 
						VALUES ('".$_SESSION['id_user']."','".$id_product."','".$o_deskripsi."','".$invoice."','".$faktur."','".$status."')";
				   	} else {
						$sql = "INSERT INTO tb_order (user, product, o_deskripsi, file, invoice, faktur, status) 
						VALUES ('".$_SESSION['id_user']."','".$id_product."','".$o_deskripsi."','".$nama_semua_file."','".$invoice."','".$faktur."','".$status."')";
					}
					
				    if ($conn->query($sql) === TRUE) {
						echo "<script>alert('Update Profile Berhasil .');</script>";
				        header("location:customer_home.php");
				    } else {
				   		header("location:catalog.php");
				    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
				    echo "Error: " . $sql . "<br>" . $conn->error;
				    }
				}
		?>

<?php 
if(isset($_POST['submit'])){
 // Count total files
 $countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['file']['name'][$i];
   
   // Upload file
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
    
 }
} 
?>