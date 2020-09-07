<?php 
include ('../../config/koneksi.php');
if (isset($_POST['simpan'])) {

	$qr = mysqli_query($konek,"SELECT * FROM tbl_pelayanan ORDER BY kd_pelayanan DESC");
	$dt = mysqli_fetch_assoc($qr);
	$jl = mysqli_num_rows($qr);
	if($jl==0){
		$kd_pelayanan='JP001';
	}else{
		$suid = substr($dt['kd_pelayanan'],3);
		if($suid>0 && $suid<=8){
			$su=$suid+1;
			$kd_pelayanan='JP00'.$su;
		}elseif($suid>=9 && $suid<=100){
			$su=$suid+1;
			$kd_pelayanan='JP0'.$su;
		}elseif($suid>=99 && $suid<=1000){
			$su=$suid+1;
			$kd_pelayanan='JP'.$su;
		}
	}

	$jns_pelayanan	= $_POST['jns_pelayanan'];

	$save = mysqli_query($konek, "INSERT INTO tbl_pelayanan VALUES('$kd_pelayanan','$jns_pelayanan')");
	if($save) {
      echo "<script language=javascript>
          window.alert('Berhasil Menambah!');
          window.location='../datapelayanan.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Menambah!');
          window.location='../datapelayanan.php';
          </script>";
      }

}
?>