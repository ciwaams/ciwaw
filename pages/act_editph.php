<?php 
session_start();
error_reporting(0);
include "koneksi.php";

$update = mysql_query("UPDATE ph SET nama_barang ='$_POST[namabarang]',
												spesifikasi = '$_POST[spesifikasi]',
												qty = '$_POST[qty]',
												satuan = '$_POST[satuan]',
												harga = '$_POST[harga]',
												keterangan = '$_POST[keterangan]'
										WHERE id_ph ='$_POST[id_ph]'");
	if ($update==FALSE){
		echo "<p>Update Gagal karena:".(mysql_error())."</p>";
		}else{
	header('location:ph.php');
	}

?>
	