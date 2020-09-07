<?php
include ("../config/koneksi.php");
$kd_dokter= $_GET['id'];

$delete = mysqli_query($konek,"DELETE FROM tbl_dokter WHERE kd_dokter = '$kd_dokter'");
if($delete) {
	echo "<script language=javascript>
	window.alert('Berhasil Menghapus!');
	window.location='../admin/datadokter.php';
	</script>";
}else{
	echo "<script language=javascript>
	window.alert('Gagal Menghapus!');
	window.location='../admin/datadoker.php';
	</script>";
}

?>