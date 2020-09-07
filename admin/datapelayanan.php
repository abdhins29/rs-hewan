<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Pelayanan</h6>
			</div>
			<div class="card-body">
				<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pelayanan"><i class="fas fa-plus fa-sm"></i> Tambah Pelayanan</button>

				<table class="table table-bordered">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Jenis Pelayanan</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include ('../config/koneksi.php');
							$no = 1;
							$qq = mysqli_query($konek,"SELECT * FROM tbl_pelayanan");
							while($dd = mysqli_fetch_assoc($qq)){
						?>
						<tr>
							<td align="right"><?php echo $no++; ?></td>
							<td><?php echo $dd['jns_pelayanan']; ?></td>
							<td align="center">
								<a href="editdatapelayanan.php?id=<?php echo $dd['kd_pelayanan']; ?>"><i class="btn btn-sm btn-success"><span class="fas fa-edit"></span></i></a>
							</td>
							<td align="center">
								<a href="hapusdatapelayanan.php?id=<?php echo $dd['kd_pelayanan']; ?>"><i class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></i></a>
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
<div class="modal fade" id="tambah_pelayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Data Pelayanan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="modal/modaltambahpelayanan.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Jenis Pelayanan</label>
						<input type="text" name="jns_pelayanan" class="form-control">
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