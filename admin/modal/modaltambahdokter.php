<?php 
include ('../../config/koneksi.php');
if (isset($_POST['simpan'])) {

	$qr = mysqli_query($konek,"SELECT * FROM tbl_dokter ORDER BY kd_dokter DESC");
	$dt = mysqli_fetch_assoc($qr);
	$jl = mysqli_num_rows($qr);
	if($jl==0){
		$kd_dokter='DK001';
	}else{
		$suid = substr($dt['kd_dokter'],3);
		if($suid>0 && $suid<=8){
			$su=$suid+1;
			$kd_dokter='DK00'.$su;
		}elseif($suid>=9 && $suid<=100){
			$su=$suid+1;
			$kd_dokter='DK0'.$su;
		}elseif($suid>=99 && $suid<=1000){
			$su=$suid+1;
			$kd_dokter='DK'.$su;
		}
	}

	$nm_dokter	= $_POST['nm_dokter'];
	$gender     = $_POST['gender'];
	$jam_kerja	= $_POST['jam_kerja'];

	$save = mysqli_query($konek, "INSERT INTO tbl_dokter VALUES('$kd_dokter','$nm_dokter','$gender','$jam_kerja')");
	if($save) {
      echo "<script language=javascript>
          window.alert('Berhasil Menambah!');
          window.location='../datadokter.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Menambah!');
          window.location='../datadoker.php';
          </script>";
      }

}
?>