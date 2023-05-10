<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);
?>


<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tanggal </th>
                                            <th>Total</th>
                                            <th>Pelanggan ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>ID : <?= $pesanan['id'] ?></td>
                                          <td>Tanggal : <?= $pesanan['tanggal'] ?></td>
                                            <td>Total : <?= $pesanan['total'] ?></td>
                                             <td>Pelanggan ID :<?= $pesanan['pelanggan_id'] ?></td>
                                        </tr>
                                    </tbody>
                                    </table>