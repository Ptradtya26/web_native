<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);
?>

<div>
    <br>
    <h3>ID : <?= $pelanggan['id'] ?></h3>
    <h3>Kode : <?= $pelanggan['kode'] ?></h3>
    <h3>Nama Pelanggan : <?= $pelanggan['nama_pelanggan'] ?></h3>
    <h3>Alamat : <?= $pelanggan['alamat'] ?></h3>
    <h3>Jenis Kelamin : <?= $pelanggan['jk'] ?></h3>
    <h3>Tempat Lahir : <?= $pelanggan['tmp_lahir'] ?></h3>
    <h3>Tanggal Lahir : <?= $pelanggan['tgl_lahir'] ?></h3>
    <h3>Email : <?= $pelanggan['email'] ?></h3>
    <h3>Kartu ID : <?= $pelanggan['kartu_id'] ?></h3>
</div>