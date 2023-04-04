<?php
$title = 'Contact - Admin';
$style = [
    'https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css',
    'css/styles.css',
];
$script = [
    'https://use.fontawesome.com/releases/v6.3.0/js/all.js'
];
?>
<body class="sb-nav-fixed">
    <?php
    include_once('top.php')
    ?>
    <div id="layoutSidenav">
        <?php 
        include_once('menu.php')
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Contact</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                        <form>
              <fieldset>
                <table border="0" align="center" cellpadding="10" width="30%">
                  <thead>
                    <tr bgcolor="blue">
                      <th colspan="2">Isi document</th>
                    </tr>
                  </thead>
                  <!--tfoot walaupun kodingan ada ditengah tetapi tampilan akan dibawah-->
                  <tbody>
                    <tr>
                      <td width="25%">
                        <!--Inputan Nama menggunakan type text-->
                        <label>Nama</label>
                      </td>
                      <td>
                        <input
                          type="text"
                          name="nama"
                          value=""
                          placeholder="silahkan masukan nama"
                          size="50"
                          width="100"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>Email</label>
                      </td>
                      <td>
                        <input
                          type="email"
                          name="email"
                          value=""
                          placeholder="Email Balasan akan dikirim disini"
                          size="50"
                          width="100"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td><label>Gender</label></td>
                      <td>
                        <input type="radio" name="gender" value="L" checked />
                        Laki-laki &nbsp;&nbsp;
                        <input type="radio" name="gender" value="P" />Perempuan
                      </td>
                    </tr>
                    <tr>
                      <td><span>Pesan</span></td>
                      <td>
                        <textarea
                          name="teks"
                          cols="50"
                          rows="5"
                          placeholder=""
                        ></textarea>
                      </td>
                    </tr>
                    <tr><td>
                    <button>Kirim</button></td>
</tr>
                  </tbody>
                </table>
              </fieldset>
            </form>
                    </ol>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<?php
$src = [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',
    'js/scripts.js',
    'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js',
    'assets/demo/chart-area-demo.js',
    'assets/demo/chart-bar-demo.js',
    'https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js',
    'js/datatables-simple-demo.js'
];
include_once('bottom.php');
?>