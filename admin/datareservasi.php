<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Entry Reservasi</h6>
			</div>
			<div class="card-body">
				<a href="tambahdatareservasi.php" class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Reservasi</a>
				<?php 
					$qqq = mysqli_query($konek,"SELECT * FROM tbl_tmp");
					$rrr = mysqli_num_rows($qqq);
					if($rrr < 1){}else{
				?>
				<a href="selesai.php" class="btn btn-sm btn-success mb-2"><i class="fas fa-check fa-sm"></i> Selesai</a>
				<?php 
					}
				?>
				<table class="table table-bordered">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Kode TMP</th>
							<th>Kode Pasien</th>
							<th>Kode Pelayanan</th>
							<th>Tanggal Masuk</th>
							<th>Tanggal Keluar</th>
							<th>Kelas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include ('../config/koneksi.php');
							$no = 1;
							$qq = mysqli_query($konek, "SELECT * FROM tbl_tmp a ");
							while($dd = mysqli_fetch_assoc($qq)){
						?>
						<tr>
							<td align="right"><?php echo $no++; ?></td>
							<td><?php echo $dd['id_tmp']; ?></td>
							<td><?php echo $dd['kd_pasien']; ?></td>
							<td><?php echo $dd['kd_pelayanan']; ?></td>
							<td><?php echo $dd['tgl_masuk']; ?></td>
							<td><?php echo $dd['tgl_keluar']; ?></td>
							<td><?php echo $dd['kelas']; ?></td>
							<td align="center">
								<a href="hapusdatatmp.php?id=<?php echo $dd['id_tmp']; ?>"><i class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></i></a>
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

<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Reservasi</h6>
			</div>
				<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class="input-group">
						<input type="date" class="form-control bg-light border-0 small mt-2" name="tgl_masuk" aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary mt-2" type="submit">
								<i class="fas fa-search fa-sm mt"></i>
							</button>
						</div>
					</div>
				</form>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Kode Reservasi</th>
							<th>Nama Pasien</th>
							<th>Jenis Pelayanan</th>
							<th>Kelas</th>
							<th>Tanggal Masuk</th>
							<th>Tanggal Keluar</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include ("../config/koneksi.php");
							if(isset($_GET['tgl_masuk'])){
								$tgl 	= $_GET['tgl_masuk'];
								$query 	= mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_regishewan b ON a.kd_pasien=b.kd_pasien LEFT JOIN tbl_pelayanan c ON a.kd_pelayanan=c.kd_pelayanan WHERE tgl_masuk = '$tgl' ");
							}else{
							$query = mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_regishewan b ON a.kd_pasien=b.kd_pasien LEFT JOIN tbl_pelayanan c ON a.kd_pelayanan=c.kd_pelayanan");
							}
							while($data = mysqli_fetch_assoc($query)){ 
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['kd_reservasi']; ?></td>
							<td><?php echo $data['nm_pasien'];?></td>
							<td><?php echo $data['jns_pelayanan']; ?></td>
							<td><?php echo $data['kelas']; ?></td>
							<td><?php echo $data['tgl_masuk']; ?></td>
							<td><?php echo $data['tgl_keluar']; ?></td>
							<td><a href="cetakreservasi.php?id=<?php echo $data['kd_reservasi']; ?>"><i class="btn btn-sm btn-primary"><span class="fas fa-print"></span></i></a></td>
							<td><a href="hapusdatareservasi.php?id=<?php echo $data['kd_reservasi']; ?>"><i class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></i></a></td>
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
<?php 
	include ('style/footer.php');
?>