<?php
include 'db/db.php';

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // enkripsi password
    $password = $_POST["password"];
    $no_tlp = filter_input(INPUT_POST, 'no_tlp', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
    $picture_profile = filter_input(INPUT_POST, 'picture_profile', FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO tb_users (name, email, password, no_tlp, role, picture_profile)
    VALUES ('".$name."', '".$email."', '".$password."', '".$no_tlp."', '".$role."', '".$picture_profile."')";

    if ($conn->query($sql) === TRUE) {
        header("location:login.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}

?>
<!--  $password = password_hash($_POST["password"], PASSWORD_DEFAULT); -->