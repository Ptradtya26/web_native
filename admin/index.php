<?php
//memanggil dan memproses file bagian atas
include_once 'top.php';

//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <h1>Selamat Datang di web admin</h1>
        <?php
        //algoritma menangkap url agar masuk kedalam index
        $url = $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        } else if (!empty($url)){
            include_once ''.$url.'.php';
        } else { 'dashboard.php';

        }

        ?>
</div>
</main>
</div>
<?php
//ini memanggil dan memproses file bagian bawah atau footer
include_once 'bottom.php'
?>