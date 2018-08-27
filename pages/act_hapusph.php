<?php
include "koneksi.php";
$sn = $_GET['id_ph'];
$query=mysql_query("delete from ph where id_ph='$sn'");
if($query){
$_SESSION['id_ph'] = "$sn";
header
('location:ph.php');
}else{
echo "Gagal hapus data ".(mysql_error());
}
?>