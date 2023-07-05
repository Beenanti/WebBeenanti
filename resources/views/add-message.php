<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];

    // // buat query
    $sql = "INSERT INTO `tb_message` VALUES ('1', $name, $email, $subject, $message)";
    $query = mysqli_query($db, $sql);

} else {
    header('Location: index.php');
}

?>