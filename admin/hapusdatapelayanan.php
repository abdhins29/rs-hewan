<?php
include ("../config/koneksi.php");
$kd_pelayanan= $_GET['id'];

$delete = mysqli_query($konek,"DELETE FROM tbl_pelayanan WHERE kd_pelayanan = '$kd_pelayanan'");
if($delete) {
	echo "<script language=javascript>
	window.alert('Berhasil Menghapus!');
	window.location='../admin/datapelayanan.php';
	</script>";
}else{
	echo "<script language=javascript>
	window.alert('Gagal Menghapus!');
	window.location='../admin/datapelayanan.php';
	</script>";
}

?>