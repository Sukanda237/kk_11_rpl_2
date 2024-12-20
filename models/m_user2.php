<?php
//memanggil file c_koneksi yang ada pada folder controllers
include_once '../controllers/c_koneksi.php';

class user2
{
    //membuat fungsi untuk menampilkan data dari tabel user yang ada pada database
    function tampil_data()
    {
        //kita buat / instansiasi objek dari class atau file koneksi
        $conn = new koneksi();

        //perintah untuk menampilkan semua data dari tabel user 
        $sql = "SELECT * FROM user";

        //select => tampilkan
        // * => semua data
        // from => dari
        //user => merupakan tabel yang datanya akan ditampilkan

        //eksekutor untuk perintah diatas = $sql
        $query = mysqli_query($conn->koneksi, $sql);

        //untuk mengecek apakah $query ada datanya atau tidak
        if ($query->num_rows > 0) {

            //kita mencacah data menjadi array asosiatif
            while ($data = mysqli_fetch_assoc($query)) {
                //kita bungkus hasil cacahan dari $data
                $hasil[] = $data;
            }
            //mengembalikan nilai
            return $hasil;
        } else {
            echo 'data pada tabel user kosong';
        }
    }
}
