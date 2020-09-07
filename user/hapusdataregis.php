<?php
include ("../config/koneksi.php");
$kd_pasien= $_GET['id'];

$delete = mysqli_query($konek,"DELETE FROM tbl_regishewan WHERE kd_pasien = '$kd_pasien'");
if($delete) {
	echo "<script language=javascript>
	window.alert('Berhasil Menghapus!');
	window.location='register.php';
	</script>";
}else{
	echo "<script language=javascript>
	window.alert('Gagal Menghapus!');
	window.location='register.php';
	</script>";
}

?>