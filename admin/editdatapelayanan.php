<?php 
	include ("style/header.php");
	include ("style/sidebar.php");
	include ("../config/koneksi.php");
	$kd_pelayanan = $_GET['id'];
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
					$qq = mysqli_query($konek, "SELECT * FROM tbl_pelayanan WHERE kd_pelayanan = '$kd_pelayanan'");
					$dd = mysqli_fetch_assoc($qq);
				?>
				<form action="" method="POST">
					<input type="hidden" class="form-control" name="kd_pelayanan" value="<?php echo $dd['kd_pelayanan']; ?>" readonly="">
					<div class="form-group">
						<label>Jenis Pelayanan</label>
						<input type="text" class="form-control" name="jns_pelayanan" value="<?php echo $dd['jns_pelayanan']; ?>">
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

	$kd_pelayanan	= $_POST['kd_pelayanan'];
	$jns_pelayanan	= $_POST['jns_pelayanan'];

	$update = mysqli_query($konek, "UPDATE tbl_pelayanan SET kd_pelayanan = '$kd_pelayanan', jns_pelayanan = '$jns_pelayanan' WHERE kd_pelayanan = '$kd_pelayanan'");
	if($update) {
      echo "<script language=javascript>
          window.alert('Berhasil Mengedit!');
          window.location='../admin/datapelayanan.php';
          </script>";
      }else{
        echo "<script language=javascript>
          window.alert('Gagal Mengedit!');
          window.location='../admin/datapelayanan.php';
          </script>";
      }

}
?>

<?php 
	include ("style/footer.php");
?>