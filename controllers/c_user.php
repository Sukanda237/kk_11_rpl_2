<?php

include_once '../models/m_user.php';

$user = new user();

if (!empty($_GET['aksi'])) {
    try {
        if ($_GET['aksi'] == 'tambah') {
            $id_user = $_POST['id_user'];
            $username = $_POST['username1'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $nama = $_POST['nama_user'];
            $alamat = $_POST['alamat_user'];
            $jk = $_POST['jenis_kelamin'];
            $tempat = $_POST['tempatlahir_user'];
            $tanggal = $_POST['tanggallahir_user'];

            $user->tambah_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    $user = $user->tampil_data();
}


    // $user->tambah_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal);

    // echo "<h1> username nya adalah " . " $username</h1>";
