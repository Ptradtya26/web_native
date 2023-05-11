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
                                        <td><?= $pesanan['id'] ?></td>
                                          <td><?= $pesanan['tanggal'] ?></td>
                                            <td><?= $pesanan['total'] ?></td>
                                             <td><?= $pesanan['pelanggan_id'] ?></td>
                                        </tr>
                                    </tbody>
                                    </table>