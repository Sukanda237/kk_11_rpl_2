<?php
include_once __DIR__ . '../../controllers/c_koneksi.php';

class latiahan
{

    function tampil_data()
    {
        $conn = new koneksi();

        $sql = "SELECT * FROM user";

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

    function tampil_data2()
    {
        $conn = new koneksi();

        $sql = "SELECT * FROM user ORDER BY nama_user ASC";

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

    function ubah_data()
    {
        $conn = new koneksi();
    }

    function tampil_data3()
    {
        $conn = new koneksi();

        $sql = "SELECT * FROM user WHERE MONTH(tanggallahir_user) = 2 ORDER BY nama_user ASC  ";

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

    function tampil_data4()
    {
        $conn = new koneksi();

        $sql = "SELECT * FROM user ORDER BY nama_user DESC";

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
}
