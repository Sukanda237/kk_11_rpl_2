<?php
include_once '../controllers/c_koneksi.php';

class user
{

    function tampil_data()
    {
        //membuat objek dari kelas koneksi yang ada di folder controller
        $conn = new koneksi();

        // mengambil semua data dari tabel user
        $sql = "SELECT * FROM user";

        // perintah untuk mengeksekusi sql diatas 
        $query = mysqli_query($conn->koneksi, $sql);

        // mengecek apakah data yang ada ditabel user ada isi nya atau tidak 
        if ($query->num_rows > 0) {

            //merubah data menjadi data berbentuk array asosiatif
            // while ($data = mysqli_fetch_assoc($query)) {
            //     $result[] =  $data;
            // }
            // return $result;

            // mengembalikan data hasil dari query diatas berupa data array 
            // return $query;

            //merubah data menjadi data berbentuk array object
            while ($data = mysqli_fetch_object($query)) {

                // menyimpan data objek kedalam variabel array 
                $result[] = $data;
            }

            // mengmebalikan nilai array yang didalam nya terdapat data objek 
            return $result;
        } else {
            echo "tidak ada data";
        }
    }

    // membuat fungsi untuk menambahkan data user dari form yang kita buat 
    function tambah_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal)
    {
        $conn = new koneksi();

        $sql = "INSERT INTO user VALUES ('$id_user', '$username', '$email', '$pass', '$nama', '$alamat', '$jk', '$tempat', '$tanggal')";

        $query = mysqli_query($conn->koneksi, $sql);

        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/dashboard.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambahkan');window.location='../views/form.php'</script>";
        }
    }

    function tampil_data_byid($id)
    {
        $conn = new koneksi();
        $sql = " SELECT * FROM user WHERE id_user = $id";

        $query = mysqli_query($conn->koneksi, $sql);

        if ($query->num_rows > 0) {
            while ($data = mysqli_fetch_object($query)) {
                $result[] = $data;
            }
            return $result;
        } else {
            echo "tidak ada data";
        }
    }

    function ubah_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal)
    {
        $conn = new koneksi();
        $sql = "UPDATE user SET username = '$username', email = '$email', password = '$pass', nama_user = '$nama', alamat_user = '$alamat', jenis_kelamin = '$jk', tempatlahir_user = '$tempat', tanggallahir_user = '$tanggal' WHERE id_user = '$id_user' ";

        $query = mysqli_query($conn->koneksi, $sql);

        if ($query) {
            echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/dashboard.php'</script>";
        } else {
            echo "<script>alert('Data Tidak Berhasil Di Ubah');window.location='../views/edit.php'</script>";
        }
    }

    function hapus_user($id_user)
    {
        $conn = new koneksi();

        $query = "DELETE FROM user WHERE id_user = $id_user";

        mysqli_query($conn->koneksi, $query);

        header("location:../views/dashboard.php");
    }
}
