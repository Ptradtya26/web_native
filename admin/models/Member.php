<?php
class Member{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function ceklogin($data){
        $sql = "SELECT * from member WHERE username = ? AND password = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
}
}


?>