<?php
//memanggil model user yang ada di dalam folder user
include_once '../models/m_user.php';

//membuat objek dari model user
$user = new user();

// Fungsi try-catch adalah struktur pengendalian kesalahan (error handling) dalam pemrograman yang memungkinkan penanganan kesalahan yang terjadi selama eksekusi kode.
try {
    //mengecek apakah $_get ada atau tidak 
    if (!empty($_GET['aksi'])) {

        // mengecek apakah aksi tidak sama dengan hapus 
        if (!($_GET['aksi'] == 'hapus')) {

            //menangkap semua input dari user dengan method post
            $id_user = $_POST['id_user'];
            $username = $_POST['username1'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $nama = $_POST['nama_user'];
            $alamat = $_POST['alamat_user'];
            $jk = $_POST['jenis_kelamin'];
            $tempat = $_POST['tempatlahir_user'];
            $tanggal = $_POST['tanggallahir_user'];

            // mengecek apakah aksi yang bernilai tambah 
            if ($_GET['aksi'] == 'tambah') {
                // memanggil fungsi tambah_user yang ada dalam model user 
                $user->tambah_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal);

                // mengecek apakah aksi yang bernilai update
            } elseif ($_GET['aksi'] == 'update') {
                // memanggil fungsi update_user yang ada dalam model user 
                $user->ubah_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal);
            }
        } else {
            // mengambil data id dari tomboh hapus yang di pilih 
            $id_user = $_GET['id'];

            // memanggil fungsi hapus 
            $user->hapus_user($id_user);
        }
    } else {
        //kalau tidak ada maka akan menampilkan semua data user
        $user = $user->tampil_data();
    }
} catch (Exception $e) {
    //jika terjadi error pesan ini yang akan ditampilkan ke browser
    echo $e->getMessage();
}
