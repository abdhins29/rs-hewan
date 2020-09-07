<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Laporan Bulanan Data Reservasi</h6>
			</div>
				<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
					<div class="input-group">
						<select class="form-control bg-light border-0 small mt-2 mb-2" name="bulan" aria-label="Search" aria-describedby="basic-addon2">
							<option value="0" selected="">-- Silahkan Pilih Bulan --</option>
							<option value="01">Januari</option>
							<option value="02">Februari</option>
							<option value="03">Maret</option>
							<option value="04">April</option>
							<option value="05">Mei</option>
							<option value="06">Juni</option>
							<option value="07">Juli</option>
							<option value="08">Agustus</option>
							<option value="09">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
						<div class="input-group-append">
							<button class="btn btn-primary mt-2 mb-2" type="submit" name="check">
								<i class="fas fa-search fa-sm mt"></i>
							</button>
						</div>
					</div>
				</form>

				<?php
				include ("../config/koneksi.php");
				$no = 1;
				if(isset($_POST['check'])){
					$bulan 	= $_POST['bulan'];
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
						$query 	= mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_regishewan b ON a.kd_pasien=b.kd_pasien LEFT JOIN tbl_pelayanan c ON a.kd_pelayanan=c.kd_pelayanan WHERE month(a.tgl_masuk) = '$bulan'");
						?>
						<a href="cetakbulanan.php?bulan=<?php echo $bulan;?>" target="_blank();" class="btn btn-success mb-2"><i class="fas fa-print"></i></a>
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