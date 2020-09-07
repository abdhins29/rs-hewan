<?php
include ("../config/koneksi.php");
$id_tmp= $_GET['id'];

$delete = mysqli_query($konek,"DELETE FROM tbl_tmp WHERE id_tmp = '$id_tmp'");
if($delete) {
	echo "<script language=javascript>
	window.alert('Berhasil Menghapus!');
	window.location='reservasi.php';
	</script>";
}else{
	echo "<script language=javascript>
	window.alert('Gagal Menghapus!');
	window.location='reservasi.php';
	</script>";
}

?>