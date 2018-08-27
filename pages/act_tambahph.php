<?php
session_start();
error_reporting(0);
include("koneksi.php");

$nama_barang = $_POST['namabarang'];
$spesifikasi = $_POST['spesifikasi'];
$qty = $_POST['qty'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

	$query = mysql_query("insert into ph values('','$nama_barang','$spesifikasi','$qty','$satuan','$harga','$keterangan')") or die(mysql_error());
	//$query="INSERT INTO material VALUES ('','$kode_mater' ,' $mater','$satuan','0','0','$harga','$keterangan') " ;


if ($query){
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ph.php'/>  ";
} else { 
	echo "Data gagal disimpan :".(mysql_error()).
  "<meta http-equiv='refresh' content='2; url= tambahph.php'/>";
}
?>