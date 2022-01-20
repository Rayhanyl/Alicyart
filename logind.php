<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'db/db.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tb_users where email='$email'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    
    if($password==$data['password']){
        // cek jika user login sebagai admin
        if($data['role']=="admin"){
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['no_tlp'] = $data['no_tlp'];
            $_SESSION['picture_profile'] = $data['picture_profile'];
            $_SESSION['register_date'] = $data['register_date'];
            $_SESSION['role'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index.php");
    
        // cek jika user login sebagai owner
        }else if($data['role']=="owner"){
            // buat session login dan username
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['no_tlp'] = $data['no_tlp'];
            $_SESSION['picture_profile'] = $data['picture_profile'];
            $_SESSION['register_date'] = $data['register_date'];
            $_SESSION['role'] = "owner";
            // alihkan ke halaman dashboard owner
            header("location:owner_home.php");
    
        }else if($data['role']=="designer"){
            // buat session login dan username
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['no_tlp'] = $data['no_tlp'];
            $_SESSION['picture_profile'] = $data['picture_profile'];
            $_SESSION['register_date'] = $data['register_date'];
            $_SESSION['role'] = "designer";
            // alihkan ke halaman dashboard designer
            header("location:designer_home.php");
    
        }else if($data['role']=="customer"){
            // buat session login dan username
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['no_tlp'] = $data['no_tlp'];
            $_SESSION['picture_profile'] = $data['picture_profile'];
            $_SESSION['register_date'] = $data['register_date'];
            $_SESSION['role'] = "customer";
            // alihkan ke halaman dashboard customer
            header("location:customer_home.php");
    
        }
    }else{
        //alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal_password salah");
    }
 }
?>

