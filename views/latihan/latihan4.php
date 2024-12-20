<?php
include_once __DIR__ . '../../../controllers/c_lahitan.php';
include_once __DIR__ . '../../template/header.php';
include_once __DIR__ . '../../template/navbar.php';
?>
<br><br>
<!-- awal konten -->
<div class="container">

    <div class="row align-items-center">
        <div class="col-1">
            <!-- One of three columns -->
        </div>
        <div class="col-10">
            <center>
                <h3>Latiahan Menampilkan Data Dari Tabel User Dan Tampilkan Data User Yang Lahirnya Dikota Bandung</h3>
            </center><br>
            <table class="table ">
                <thead>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Tempat Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($latihan->tampil_data2() as $data) :

                        $tanggal_sekarang = new DateTime();

                        $tanggal_lahir = new DateTime($data->tanggallahir_user);

                        $umur = $tanggal_sekarang->diff($tanggal_lahir);

                        if (strtolower($data->tempatlahir_user) == strtolower('bandung')) {


                    ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $data->nama_user ?></td>
                                <td><?= $umur->y ?></td>
                                <td><?= $data->tempatlahir_user . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                                <td><?= $data->alamat_user ?></td>

                            </tr>
                    <?php }
                    endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="col-1">
            <!-- One of three columns -->
        </div>
    </div>

</div>
<!-- akhir content  -->
<?php include_once __DIR__ . '../../template/footer.php'; ?>