<?php 
include ('../../config/koneksi.php');
if (isset($_POST['simpan'])) {

	$qr = mysqli_query($konek,"SELECT * FROM tbl_regishewan ORDER BY kd_pasien DESC");
	$dt = mysqli_fetch_assoc($qr);
	$jl = mysqli_num_rows($qr);
	if($jl==0){
		$kd_pasien='PS001';
	}else{
		$suid = substr($dt['kd_pasien'],3);
		if($suid>0 && $suid<=8){
			$su=$suid+1;
			$kd_pasien='PS00'.$su;
		}elseif($suid>=9 && $suid<=100){
			$su=$suid+1;
			$kd_pasien='PS0'.$su;
		}elseif($suid>=99 && $suid<=1000){
			$su=$suid+1;
			$kd_pasien='PS'.$su;
		}
	}

	$id_user 	= $_POST['id_user'];
	$nm_pasien	= $_POST['nm_pasien'];
	$spesies    = $_POST['spesies'];
	$umur		= $_POST['umur'];
	$sex		= $_POST['sex'];
	$nm_pemilik = $_POST['nm_pemilik'];
	$alamat		= $_POST['alamat'];

	$save = mysqli_query($konek, "INSERT INTO tbl_regishewan VALUES('$kd_pasien','$id_user','$nm_pasien','$spesies','$umur','$sex','$nm_pemilik','$alamat')");
	if($save) {
      echo "<script language=javascript>
          window.alert('Berhasil Menambah!');
          window.location='../datapasien.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Menambah!');
          window.location='../datapasien.php';
          </script>";
      }

}
?>