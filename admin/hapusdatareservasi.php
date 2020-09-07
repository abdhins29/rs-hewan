<?php
include ("../config/koneksi.php");
$kd_reservasi= $_GET['id'];

$delete = mysqli_query($konek,"DELETE FROM tbl_reservasi WHERE kd_reservasi = '$kd_reservasi'");
 
if($delete) {
	echo "<script language=javascript>
	window.alert('Berhasil Menghapus!');
	window.location='datareservasi.php';
	</script>";
}else{
	echo "<script language=javascript>
	window.alert('Gagal Menghapus!');
	window.location='datareservasi.php';
	</script>";
}

?>