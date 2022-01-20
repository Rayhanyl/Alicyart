<?php
include ('db/db.php');
session_start();
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','pdf');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			$id_product = $_POST['id_product'];
			$user = $_POST['user'];
			$o_deskripsi = $_POST['o_deskripsi'];
			$invoice = $_POST['invoice'];
			$faktur = $_POST['faktur'];	
			$status = $_POST['status'];	

		 			move_uploaded_file($file_tmp, 'assets/img/file/'.$nama);
					$sql = "INSERT INTO tb_order (user, product, o_deskripsi, file, invoice, faktur, status) 
					VALUES ('".$_SESSION['id_user']."','".$id_product."','".$o_deskripsi."','".$nama."','".$invoice."','".$faktur."','".$status."')";

				    if ($conn->query($sql) === TRUE) {
				        header("location:customer_home.php");
				    } else {
				   		header("location:catalog.php");
				    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
				    echo "Error: " . $sql . "<br>" . $conn->error;
				    }
				}
		?>