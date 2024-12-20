<?php
include_once '../controllers/c_user.php';
require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<?php

foreach ($user->tampil_data() as $data) { ?>

    <p><?= $data->id_user ?>. <?= $data->nama_user ?> | <?= $data->alamat_user ?> |</p>

<?php } ?>



<?php require_once 'template/footer.php'; ?>