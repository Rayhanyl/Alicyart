<?php
include ('db/db.php');
session_start();

        $image1=$_FILES["sketsa_awal"]["name"];
        $image2=$_FILES["sketsa_akhir"]["name"];
        
        $id_order = $_POST['id_order'];

        if (!isset($image1)){
            $newimg1 = date('dmYHis').$image1;
            move_uploaded_file($_FILES["sketsa_awal"]["tmp_name"],"assets/img/hasil_design/".$newimg1);
            $sql="UPDATE tb_order SET s_awal='$newimg1'WHERE id_order='$id_order'";
            $lastInsertId = mysqli_query($conn, $sql);
            if($lastInsertId){
                echo "<script>alert('Upload Sketsa Berhasil!');</script>";
                echo "<script type='text/javascript'> document.location = 'designer_detail.php'; </script>";
            }else {
                echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
                echo "<script type='text/javascript'> document.location = 'designer_detail.php'; </script>";
            }
        } else if (!isset($image2)){
            $newimg2 = date('dmYHis').$image2;
            move_uploaded_file($_FILES["sketsa_akhir"]["tmp_name"],"assets/img/hasil_design/".$newimg2);
            $sql="UPDATE tb_order SET s_akhir='$newimg2' WHERE id_order='$id_order'";
            $lastInsertId = mysqli_query($conn, $sql);
            if($lastInsertId){
                echo "<script>alert('Upload Sketsa Berhasil!');</script>";
                echo "<script type='text/javascript'> document.location = 'designer_detail.php'; </script>";
            }else {
                echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
                echo "<script type='text/javascript'> document.location = 'designer_detail.php'; </script>";
            }
        } else {
            var_dump($image1);
        }

        
?>

