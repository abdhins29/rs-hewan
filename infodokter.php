<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Informasi Tentang Dokter</h6>
			</div>
			<div class="card-body">
				<p>Berikut ini adalah daftar nama-nama Dokter yang bekerja di Rumah Sakit Hewan Sumatera Barat beserta dengan jam kerja nya.</p>

				<table class="table table-bordered">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Nama Dokter</th>
							<th>Gender</th>
							<th>Jam Kerja</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include ('config/koneksi.php');
							$no = 1;
							$qq = mysqli_query($konek, "SELECT * FROM tbl_dokter");
							while($dd = mysqli_fetch_assoc($qq)){
						?>
						<tr>
							<td align="right"><?php echo $no++; ?></td>
							<td><?php echo $dd['nm_dokter']; ?></td>
							<td><?php echo $dd['gender']; ?></td>
							<td align="center"><?php echo $dd['jam_kerja']; ?></td>
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