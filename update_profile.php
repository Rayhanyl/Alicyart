<?php
include ('db/db.php');
session_start();

        $image1=$_FILES["img1"]["name"];
        $newimg1 = $image1;
        $id_user = $_POST['id_user'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $no_tlp = $_POST['no_tlp'];

        move_uploaded_file($_FILES["img1"]["tmp_name"],"assets/img/profile/".$newimg1);

        if (isset($newimg1)) {
            $sql="UPDATE tb_users SET picture_profile='$newimg1', name='$name', email='$email', no_tlp='$no_tlp'  WHERE id_user='$id_user'";
        } else {
            $sql="UPDATE tb_users SET name='$name', email='$email', no_tlp='$no_tlp'  WHERE id_user='$id_user'";
        }
        
        $lastInsertId = mysqli_query($conn, $sql);
        if($lastInsertId){
            if ($_SESSION['role'] == 'customer') {
                echo "<script>alert('Update Profile Berhasil .');</script>";
                echo "<script type='text/javascript'> document.location = 'customer_home.php'; </script>";
            } elseif ($_SESSION['role'] == 'owner') {
                echo "<script>alert('Update Profile Berhasil .');</script>";
                echo "<script type='text/javascript'> document.location = 'owner_home.php'; </script>";
            } elseif ($_SESSION['role'] == 'designer') {
                echo "<script>alert('Update Profile Berhasil .');</script>";
                echo "<script type='text/javascript'> document.location = 'designer_home.php'; </script>";
            }

        }else {
            echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
            echo "<script type='text/javascript'> document.location = 'owner_home.php'; </script>";
        }
?>