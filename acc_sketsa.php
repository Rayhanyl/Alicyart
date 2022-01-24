<?php
include ('db/db.php');
session_start();
        
        $id_order = $_POST['id_order'];

        $sql="UPDATE tb_order SET status='4' WHERE id_order='$id_order'";
        $lastInsertId = mysqli_query($conn, $sql);
        if($lastInsertId){
            echo "<script>alert('Pesanan Anda Telah Selesai!');</script>";
            echo "<script type='text/javascript'> document.location = 'customer_home.php'; </script>";
        }else {
            echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
            echo "<script type='text/javascript'> document.location = 'design_progres.php'; </script>";
        }
?>

