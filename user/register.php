<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
			</div>
			<div class="card-body">
				<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pasien"><i class="fas fa-plus fa-sm"></i> Tambah Pasien</button>

				<table class="table table-bordered">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Kode Pasien</th>
							<th>Nama Pasien</th>
							<th>Spesies</th>
							<th>Umur</th>
							<th>Jenis Kelamin</th>
							<th>Nama Pemilik</th>
							<th>Alamat</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include ('../config/koneksi.php');
							$no = 1;
							$qq = mysqli_query($konek, "SELECT * FROM tbl_regishewan a LEFT JOIN tbl_user b ON a.id_user=b.id_user WHERE a.id_user= '$_SESSION[id_user]'");
							while($dd = mysqli_fetch_assoc($qq)){
						?>
						<tr>
							<td align="right"><?php echo $no++; ?></td>
							<td><?php echo $dd['kd_pasien']; ?></td>
							<td><?php echo $dd['nm_pasien']; ?></td>
							<td><?php echo $dd['spesies']; ?></td>
							<td><?php echo $dd['umur']; ?></td>
							<td><?php echo $dd['sex']; ?></td>
							<td><?php echo $dd['nm_pemilik']; ?></td>
							<td><?php echo $dd['alamat']; ?></td>
							<td align="center">
								<a href="editdataregis.php?id=<?php echo $dd['kd_pasien']; ?>"><i class="btn btn-sm btn-success"><span class="fas fa-edit"></span></i></a>
							</td>
							<td align="center">
								<a href="hapusdataregis.php?id=<?php echo $dd['kd_pasien']; ?>"><i class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></i></a>
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
<div class="modal fade" id="tambah_pasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Data Pasien</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="modal/modaltambahpasien.php" method="POST" enctype="multipart/form-data">
					<?php
					include ("../config/koneksi.php");
					$qqq = mysqli_query($konek, "SELECT * FROM tbl_user WHERE id_user = '$_SESSION[id_user]'");
					while ($ddd = mysqli_fetch_assoc($qqq)) {
					?>
					<input type="hidden" name="id_user" value="<?php echo $ddd['id_user']; ?>">
					<?php 
						} 
					?>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="nm_pasien" class="form-control">
					</div>
					<div class="form-group">
						<label>Spesies</label>
						<input type="text" name="spesies" class="form-control">
					</div>
					<div class="form-group">
						<label>Umur</label>
						<input type="text" name="umur" class="form-control">
					</div>
					<div class="form-group">
						<label>Sex</label>
						<select name="sex" class="form-control">
							<option value="--Silahkan Pilih--">--Silahkan Pilih--</option>
							<option value="Jantan">Jantan</option>
							<option value="Betina">Betina</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Pemilik</label>
						<input type="text" name="nm_pemilik" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control">
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