<?php 
	include ("style/header.php");
	include ("style/sidebar.php");
?>
<div class="container-fluid">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/slide1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/img/slide2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/img/slide3.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<!-- Basic Card Example -->
			<div class="card shadow mt-3 mb-3">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Informasi Tentang Dokter</h6>
				</div>
				<div class="card-body">
					Halaman ini akan menampilkan daftar nama-nama Dokter yang bekerja di Rumah Sakit Hewan Sumatera Barat... <a href="infodokter.php" class="btn btn-sm btn-info">Read More</a>
				</div>
			</div>
			<!-- Basic Card Example -->
			<div class="card shadow">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Informasi Tentang Pelayanan</h6>
				</div>
				<div class="card-body">
					Halaman ini akan menampilkan daftar apa saja jenis pelayanan yang ada di Rumah Sakit Hewan Sumatera Barat... <a href="infopelayanan.php" class="btn btn-sm btn-info">Read More</a>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<!-- Basic Card Example -->
			<div class="card shadow mt-3 mb-3">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Informasi Tentang Cara Mendaftar</h6>
				</div>
				<div class="card-body">
					Halaman ini akan menjelaskan bagaimana langkah-langkah bagaimana cara untuk mendaftarkan pasien... <a href="infomendaftar.php" class="btn btn-sm btn-info">Read More</a>
				</div>
			</div>
			<!-- Basic Card Example -->
			<div class="card shadow">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Informasi Tentang Kami</h6>
				</div>
				<div class="card-body">
					Halaman ini akan menjelaskan informasi tentang Rumah Sakit Hewan Sumatera Barat... <a href="infokami.php" class="btn btn-info btn-sm">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	include ("style/footer.php");
?>