<?php
include ('db/db.php');
session_start();

        $image1=$_FILES["img1"]["name"];
        $newimg1 = date('dmYHis').$image1;
        $id_order = $_POST['id_order'];

        move_uploaded_file($_FILES["img1"]["tmp_name"],"assets/img/invoice/".$newimg1);

        $sql="UPDATE tb_order SET invoice='$newimg1', status='2' WHERE id_order='$id_order'";
        $lastInsertId = mysqli_query($conn, $sql);
        if($lastInsertId){
            echo "<script>alert('Upload Bukti Pembayaran Berhasil!');</script>";
            echo "<script type='text/javascript'> document.location = 'customer_home.php'; </script>";
        }else {
            echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
            echo "<script type='text/javascript'> document.location = 'customer_home.php'; </script>";
        }
?>

