<?php
session_start();

if(isset($_SESSION['id_user'])) {
    include 'config/koneksi.php';
    $id_user = $_SESSION [id_user];
    $waktu = date ('Y-m_d H:i:s');
    $log ="INSERT INTO tbl_log (id_user, aktivitas, waktu)";
    $log = "VALUES ($id_user, 'login', $waktu)";
    mysqli_query($koneksi, $log)
}

session_unsert();
session_destroy();

header('location: login.php');
exit;
?>