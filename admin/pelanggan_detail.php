<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);
?>

<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu ID</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><?= $pelanggan['id'] ?></td>
    <td><?= $pelanggan['kode'] ?></td>
    <td><?= $pelanggan['nama_pelanggan'] ?></td>
    <td><?= $pelanggan['alamat'] ?></td>
    <td><?= $pelanggan['jk'] ?></td>
    <td><?= $pelanggan['tmp_lahir'] ?></td>
    <td><?= $pelanggan['tgl_lahir'] ?></td>
    <td><?= $pelanggan['email'] ?></td>
    <td><?= $pelanggan['kartu_id'] ?></td>
                                        </tr>
                                    </tbody>
                                    </table>