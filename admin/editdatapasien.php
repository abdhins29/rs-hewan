<?php 
	include ("style/header.php");
	include ("style/sidebar.php");
	include ("../config/koneksi.php");
	$kd_pasien = $_GET['id'];
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Edit Data Pasien</h6>
			</div>
			<div class="card-body">
				<?php 
					include ("../config/koneksi.php");					
					$qq = mysqli_query($konek, "SELECT * FROM tbl_regishewan WHERE kd_pasien = '$kd_pasien'");
					$dd = mysqli_fetch_assoc($qq);
				?>
				<form action="" method="POST">
					<input type="hidden" class="form-control" name="kd_pasien" value="<?php echo $dd['kd_pasien']; ?>" readonly="">
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" class="form-control" name="nm_pasien" value="<?php echo $dd['nm_pasien']; ?>">
					</div>
					<div class="form-group">
						<label>Spesies</label>
						<input type="text" class="form-control" name="spesies" value="<?php echo $dd['spesies']; ?>">
					</div>
					<div class="form-group">
						<label>Umur</label>
						<input type="text" class="form-control" name="umur" value="<?php echo $dd['umur']; ?>">
					</div>
					<div class="form-group">
						<label>Sex</label>
						<input type="text" class="form-control" name="sex" value="<?php echo $dd['sex']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Pemilik</label>
						<input type="text" class="form-control" name="nm_pemilik" value="<?php echo $dd['nm_pemilik']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?php echo $dd['alamat']; ?>">
					</div>
					<div class="form-group">
						<button type="submit" name="edit" class="btn btn-md btn-success">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
include ('../config/koneksi.php');
if (isset($_POST['edit'])) {

	$kd_pasien	= $_POST['kd_pasien'];
	$nm_pasien	= $_POST['nm_pasien'];
	$spesies     = $_POST['spesies'];
	$umur	= $_POST['umur'];
	$nm_pemilik	= $_POST['nm_pemilik'];
	$alamat     = $_POST['alamat'];
	$sex	= $_POST['sex'];

	$update = mysqli_query($konek, "UPDATE tbl_regishewan SET kd_pasien = '$kd_pasien', nm_pasien = '$nm_pasien', spesies = '$spesies', umur = '$umur', sex = '$sex', nm_pemilik = '$nm_pemilik', alamat = '$alamat' WHERE kd_pasien = '$kd_pasien'");
	if($update) {
      echo "<script language=javascript>
          window.alert('Berhasil Mengedit!');
          window.location='datapasien.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Mengedit!');
          window.location='datapasien.php';
          </script>";
      }

}
?>

<?php 
	include ("style/footer.php");
?>