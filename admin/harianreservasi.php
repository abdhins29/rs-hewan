<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Laporan Harian Data Reservasi</h6>
			</div>
				<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class="input-group">
						<input type="date" class="form-control bg-light border-0 small mt-2 mb-2" name="tgl_masuk" aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary mt-2 mb-2" type="submit">
								<i class="fas fa-search fa-sm mt"></i>
							</button>
						</div>
					</div>
				</form>
				<?php
				include ("../config/koneksi.php");
				$no = 1;
				if(isset($_GET['tgl_masuk'])){
					$tgl 	= $_GET['tgl_masuk'];
				?>
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
						</tr>
					</thead>
					<tbody>
						<?php
						$query 	= mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_regishewan b ON a.kd_pasien=b.kd_pasien LEFT JOIN tbl_pelayanan c ON a.kd_pelayanan=c.kd_pelayanan WHERE tgl_masuk = '$tgl' ");
						?>
						<a href="cetakharian.php?tgl=<?php echo $tgl;?>" target="_blank();" class="btn btn-success mb-2"><i class="fas fa-print"></i></a>
						<?php
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
						</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
			</div>
			<?php 
			}
			?>
		</div>
	</div>
</div>
<?php 
	include ('style/footer.php');
?>