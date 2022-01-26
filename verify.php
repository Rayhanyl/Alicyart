<?php
include ('db/db.php');
session_start();
        
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        $designer = $_POST['designer'];

        $sql="UPDATE tb_order SET status='$status', designer=$designer WHERE id_order='$id_order'";
        $lastInsertId = mysqli_query($conn, $sql);
        if($lastInsertId){
            echo "<script>alert('Verifikasi Pembayaran Berhasil!');</script>";
            echo "<script type='text/javascript'> document.location = 'owner_home.php'; </script>";
        }else {
            echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
            echo "<script type='text/javascript'> document.location = 'owner_home.php'; </script>";
        }
?>

