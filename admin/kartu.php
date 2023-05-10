<?php
//include_once 'models/Produk.php';
//include_once 'koneksi.php';


$model = new kartu();
$kartu = $model->Kartu();

//foreach($data_produk as $row){
    //print $row['kode'];
//}
?>            
                <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>id</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($kartu as $row){
                                        ?>
                                        <tr>
                                        <td><?= $row['id']?></td>
                                        <td><?= $row['kode']?></td>
                                        <td><?= $row['nama']?></td>
                                        <td><?= $row['diskon']?></td>
                                        <td><?= $row['iuran']?></td>
                                        <td>
                                                <form action="kartu_controller.php" method="post">
                                                    <a class="btn btn-info btn-sm" href="index.php?url=kartu_detail&id=<?= $row ['id'] ?>">Detail</a>
                                                    <a class="btn btn-info btn-sm" href="index.php?url=kartu_form&idedit=<?= $row ['id'] ?>">Ubah</a>
                                            <button type="submit" class="btn btn-info btn-sm" name="proses" value="hapus" 
                                            onclick="return confirm('Anda Yakin Akan Dihapus?')">Hapus</button>

                                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
</div>