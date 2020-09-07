<?php 
	include ("style/header.php");
	include ("style/sidebar.php");
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Entry Data Reservasi</h6>
			</div>
			<div class="card-body">
			<form action="" method="POST">
				<div class="form-group">
					<label>Kode Pasien</label>
					<select name="kd_pasien" class="form-control">
					<?php 
					include ("../config/koneksi.php");
					$query = mysqli_query($konek, "SELECT * FROM tbl_regishewan a LEFT JOIN tbl_user b ON a.id_user=b.id_user");
					while($data = mysqli_fetch_assoc($query)){
					?>
						<option value="<?php echo $data['kd_pasien']; ?>"><?php echo $data['nm_pasien']; ?></option>
					<?php  
					}
					?>
					</select>
				</div>	
				<div class="form-group">
					<label>Tanggal Masuk</label>
					<input type="date" name="tgl_masuk" class="form-control">
				</div>
				<div class="form-group">
					<label>Tanggal Keluar</label>
					<input type="date" name="tgl_keluar" class="form-control">
				</div>
				<div class="form-group">	
					<label>Jenis Pelayanan</label>
					<select name="kd_pelayanan" class="form-control">
						<?php 
						include ("../config/koneksi.php");
						$qq = mysqli_query($konek,"SELECT * FROM tbl_pelayanan");
						while($dd = mysqli_fetch_assoc($qq)){
							?>
							<option value="<?php echo $dd['kd_pelayanan'] ?>"><?php echo $dd['jns_pelayanan']; ?></option>
							<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">	
					<label>Kelas</label>
					<input type="text" name="kelas" value="Kelas 1" readonly="" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-md btn-primary" name="tambah" type="submit">Tambah</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

<?php 
include ('../../config/koneksi.php');
if (isset($_POST['tambah'])) {

	$rq = mysqli_query($konek,"SELECT * FROM tbl_tmp ORDER BY id_tmp DESC");
	$td = mysqli_fetch_assoc($rq);
	$lj = mysqli_num_rows($rq);
	if($lj==0){
		$id_tmp='TM001';
	}else{
		$suids = substr($td['id_tmp'],3);
		if($suids>0 && $suids<=8){
			$sus=$suids+1;
			$id_tmp='TM00'.$sus;
		}elseif($suids>=9 && $suids<=100){
			$sus=$suids+1;
			$id_tmp='TM0'.$sus;
		}elseif($suids>=99 && $suids<=1000){
			$sus=$suids+1;
			$id_tmp='TM'.$sus;
		}
	}



	$kd_pasien 	= $_POST['kd_pasien'];
	$kd_pelayanan	= $_POST['kd_pelayanan'];
	$tgl_masuk    = $_POST['tgl_masuk'];
	$tgl_keluar		= $_POST['tgl_keluar'];
	$kelas		= $_POST['kelas'];

	$save = mysqli_query($konek, "INSERT INTO tbl_tmp VALUES('$id_tmp','$kd_pasien','$kd_pelayanan','$kelas','$tgl_masuk','$tgl_keluar')");
	if($save) {
      echo "<script language=javascript>
          window.alert('Berhasil Menambah!');
          window.location='datareservasi.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Menambah!');
          window.location='datareservasi.php';
          </script>";
      }

}
?>

<?php 
	include ("style/footer.php");
?>