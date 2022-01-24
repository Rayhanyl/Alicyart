<?php
include ('db/db.php');
session_start();

        $image1=$_FILES["sketsa_awal"]["name"];
        $newimg1 = date('dmYHis').$image1;
        $id_order = $_POST['id_order'];

        move_uploaded_file($_FILES["sketsa_awal"]["tmp_name"],"assets/img/sketsa/awal/".$newimg1);

        $sql="UPDATE tb_order SET s_awal='$newimg1' WHERE id_order='$id_order'";
        $lastInsertId = mysqli_query($conn, $sql);
        if($lastInsertId){
            echo "<script>alert('Upload Sketsa Awal Berhasil!');</script>";
            echo "<script type='text/javascript'> document.location = 'designer_home.php'; </script>";
        }else {
            echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
            echo "<script type='text/javascript'> document.location = 'designer_detail.php'; </script>";
        }
?>

