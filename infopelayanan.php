<?php 
	include ('style/header.php');
	include ('style/sidebar.php');
?>
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-6">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Informasi Tentang Jenis Pelayanan</h6>
			</div>
			<div class="card-body">
				<p>Berikut adalah jenis-jenis pelayanan yang tersedia di UPTD Rumah Sakit Hewan Sumbar.</p>
				<ol>	
				<?php 
					include ("config/koneksi.php");
					$qq = mysqli_query($konek,"SELECT * FROM tbl_pelayanan");
					while($dd = mysqli_fetch_assoc($qq)){
				?>
					<li><?php echo $dd['jns_pelayanan']; ?></li>
				<?php 
				}
				?>
				</ol>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<!-- Basic Card Example -->
		<div class="card shadow mt-3 mb-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">PENTING !!!</h6>
			</div>
			<div class="card-body">
				<h4>Tidak ada hewan yang di RAWAT INAP. Karena, RAWAT INAP baru dianggarankan pada tahun 2020.</h4>
				<h4>Khusus Vaksinasi Rabies <a href="#">GRATIS</a> dengan mengantarkan hewannya ke Rumah Sakit Hewan.</h4>
				<h4>Menerma Pasien rujukan dari Puskeswan dan Klinik Hewan.</h4>
			</div>
		</div>
	</div>
	</div>
</div>
<?php 
	include ('style/footer.php');
?>