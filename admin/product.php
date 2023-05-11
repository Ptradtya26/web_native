<?php



$model = new Produk();
$data_produk = $model->dataProduk();

//foreach($data_produk as $row){
    //print $row['kode'];
//}
$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){



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
                                <!--<i class="fas fa-table me-1"></i>
                                DataTable Example-->
                                <!-- membuat tombol mengarahkan ke file produk_form.php-->
                                <a href="index.php?url=product_form" class="btn btn-primary btn-sm"> Tambah </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga beli</th>
                                            <th>Harga jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga beli</th>
                                            <th>Harga jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($data_produk as $row){
                                        ?>
                                        <tr>
                                        <td><?=$no?></td>
                                        <td><?=$row['kode']?></td>
                                        <td><?=$row['nama']?></td>
                                        <td><?=$row['harga_beli']?></td>
                                        <td><?=$row['harga_jual']?></td>
                                        <td><?=$row['stok']?></td>
                                        <td><?=$row['min_stok']?></td>
                                        <td><?=$row['jenis_produk_id']?></td>
                                        <td>
                                            <form action="produk_controller.php" method="POST">
                                            <?php
                                                if($sesi['role'] != 'staff'){
                                                    ?>
                                            <a class="btn btn-info btn-sm" href="index.php?url=product_detail&id=<?= $row ['id'] ?>">Detail</a>
                                            <a class="btn btn-info btn-sm" href="index.php?url=product_form&idedit=<?= $row ['id'] ?>">Ubah</a>
                                            <button type="submit" class="btn btn-info btn-sm" name="proses" value="hapus" 
                                            onclick="return confirm('Anda Yakin Akan Dihapus?')">Hapus</button>


                                            <input type="hidden" name="idx" value="<?= $row['id']?>">
                                            <?php } ?>
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
<?php

} else {
    echo '<script> alert("anda tidak boleh masuk");history.back();</script>';
}

?>