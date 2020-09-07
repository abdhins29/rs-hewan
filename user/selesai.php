<?php 
include ('../config/koneksi.php');
$qq=mysqli_query($konek,"SELECT * FROM tbl_tmp");

  $qr = mysqli_query($konek,"SELECT * FROM tbl_reservasi ORDER BY kd_reservasi DESC");
  $dt = mysqli_fetch_assoc($qr);
  $jl = mysqli_num_rows($qr);
  if($jl==0){
    $kd_reservasi='RS001';
  }else{
    $suid = substr($dt['kd_reservasi'],3);
    if($suid>0 && $suid<=8){
      $su=$suid+1;
      $kd_reservasi='RS00'.$su;
    }elseif($suid>=9 && $suid<=100){
      $su=$suid+1;
      $kd_reservasi='RS0'.$su;
    }elseif($suid>=99 && $suid<=1000){
      $su=$suid+1;
      $kd_reservasi='RS'.$su;
    }
  }

while($dd=mysqli_fetch_assoc($qq)){
$save = mysqli_query($konek,"INSERT INTO tbl_reservasi VALUES ('','$kd_reservasi','$dd[tgl_masuk]','$dd[tgl_keluar]','$dd[kd_pasien]','$dd[kd_pelayanan]','$dd[kelas]')");
$deleter = mysqli_query($konek,"DELETE FROM tbl_tmp WHERE id_tmp='$dd[id_tmp]'");
}
  if($save) {
      echo "<script language=javascript>
          window.alert('Berhasil Menambah!');
          window.location='reservasi.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Menambah!');
          window.location='reservasi.php';
          </script>";
      }
?>