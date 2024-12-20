<?php
include_once '../controllers/c_user2.php';

require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<?php
foreach ($user->tampil_data() as $user) {
?>
    <p><?= $user['nama_user'] ?> |<?= $user['jenis_kelamin'] ?> |<?= $user['alamat_user'] ?></p>
<?php } ?>

<?php require_once 'template/footer.php'; ?>