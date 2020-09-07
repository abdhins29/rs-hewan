<?php 
	include ("style/header.php");
	include ("style/sidebar.php");
	include ("../config/koneksi.php");
	$kd_dokter = $_GET['id'];
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Edit Data Dokter</h6>
			</div>
			<div class="card-body">
				<?php 
					include ("../config/koneksi.php");					
					$qq = mysqli_query($konek, "SELECT * FROM tbl_dokter WHERE kd_dokter = '$kd_dokter'");
					$dd = mysqli_fetch_assoc($qq);
				?>
				<form action="" method="POST">
					<input type="hidden" class="form-control" name="kd_dokter" value="<?php echo $dd['kd_dokter']; ?>" readonly="">
					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" class="form-control" name="nm_dokter" value="<?php echo $dd['nm_dokter']; ?>">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="text" class="form-control" name="gender" value="<?php echo $dd['gender']; ?>">
					</div>
					<div class="form-group">
						<label>Jam Kerja</label>
						<input type="text" class="form-control" name="jam_kerja" value="<?php echo $dd['jam_kerja']; ?>">
					</div>
					<div class="form-group">
						<button type="submit" name="edit" class="btn btn-md btn-success">Edit</button>
						<button type="reset" name="reset" class="btn btn-md btn-danger">Reset</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
include ('../config/koneksi.php');
if (isset($_POST['edit'])) {

	$kd_dokter	= $_POST['kd_dokter'];
	$nm_dokter	= $_POST['nm_dokter'];
	$gender     = $_POST['gender'];
	$jam_kerja	= $_POST['jam_kerja'];

	$update = mysqli_query($konek, "UPDATE tbl_dokter SET kd_dokter = '$kd_dokter', nm_dokter = '$nm_dokter', gender = '$gender', jam_kerja = '$jam_kerja' WHERE kd_dokter = '$kd_dokter'");
	if($update) {
      echo "<script language=javascript>
          window.alert('Berhasil Mengedit!');
          window.location='../admin/datadokter.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Mengedit!');
          window.location='../admin/datadoker.php';
          </script>";
      }

}
?>

<?php 
	include ("style/footer.php");
?>