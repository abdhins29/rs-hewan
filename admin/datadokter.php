<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
			</div>
			<div class="card-body">
				<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_dokter"><i class="fas fa-plus fa-sm"></i> Tambah Dokter</button>

				<table class="table table-bordered">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Nama Dokter</th>
							<th>Gender</th>
							<th>Jam Kerja</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include ('../config/koneksi.php');
							$no = 1;
							$qq = mysqli_query($konek, "SELECT * FROM tbl_dokter");
							while($dd = mysqli_fetch_assoc($qq)){
						?>
						<tr>
							<td align="right"><?php echo $no++; ?></td>
							<td><?php echo $dd['nm_dokter']; ?></td>
							<td><?php echo $dd['gender']; ?></td>
							<td align="center"><?php echo $dd['jam_kerja']; ?></td>
							<td align="center">
								<a href="editdatadokter.php?id=<?php echo $dd['kd_dokter']; ?>"><i class="btn btn-sm btn-success"><span class="fas fa-edit"></span></i></a>
							</td>
							<td align="center">
								<a href="hapusdatadokter.php?id=<?php echo $dd['kd_dokter']; ?>"><i class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></i></a>
							</td>
						</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_dokter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Data Dokter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="modal/modaltambahdokter.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" name="nm_dokter" class="form-control">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<select name="gender" class="form-control">
							<option value="--Silahkan Pilih--">--Silahkan Pilih--</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jam Kerja</label>
						<input type="text" name="jam_kerja" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" name="reset" class="btn btn-danger">Reset</button>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	include ('style/footer.php');
?>