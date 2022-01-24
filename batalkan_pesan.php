<?php
include ('db/db.php');
session_start();
        
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        
        $sql="UPDATE tb_order SET status='$status' WHERE id_order='$id_order'";
        $lastInsertId = mysqli_query($conn, $sql);
        if($lastInsertId){
            echo "<script>alert('Pembatalan Pesan Berhasil!');</script>";
            echo "<script type='text/javascript'> document.location = 'owner_home.php'; </script>";
        }else {
            echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
            echo "<script type='text/javascript'> document.location = 'owner_home.php'; </script>";
        }
?>

