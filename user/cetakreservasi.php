<?php
  include("../config/koneksi.php");
  $kd_pasien = $_GET['id'];
?>
<body onload="window.print();">
<center>
	<h2 style="margin-bottom: -10px;">PEMERINTAH PROVINSI SUMATERA BARAT</h2>
	<h3 style="margin-bottom: -10px;">UPTD RUMAH SAKIT HEWAN</h3>
	<h3 style="margin-bottom: -10px;">SUMATERA BARAT</h3>
	<h4 style="margin-bottom: -10px;">DINAS PETERNAKAN DAN KESEHATAN HEWAN</h4>
	<h5 style="margin-bottom: -10px;">Jl. Rasuna Said No. 68 Kota Padang</h5>
	<h5 style="margin-bottom: -5px;">Telp. (0751)-28077 | (0751)-28060 | (0751)-39377</h5>
</center>
<hr>
<hr>
<?php 
	$no = 1;
	$q = mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_regishewan b ON a.kd_pasien=b.kd_pasien LEFT JOIN tbl_pelayanan c ON a.kd_pelayanan=c.kd_pelayanan WHERE a.kd_pasien = '$kd_pasien'");
	$d = mysqli_fetch_assoc($q);
?>
<div class="container-fluid">
	<h5 style="text-decoration: underline;">A. IDENTITAS PASIEN</h5>
	<table width="90%" style="text-align: left; margin-left: 5%">
		<tr>
			<th>Nama Pasien</th>
			<th>:</th>
			<th><?php echo $d['nm_pasien']; ?></th>

			<th>Kode Registrasi</th>
			<th>:</th>
			<th><?php echo $d['kd_pasien']; ?></th>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<th>:</th>
			<th><?php echo $d['sex']; ?></th>

			<th>Kode Reservasi</th>
			<th>:</th>
			<th><?php echo $d['kd_reservasi']; ?></th>
		</tr>
		<tr>
			<th>Umur</th>
			<th>:</th>
			<th><?php echo $d['umur']; ?></th>
		</tr>
		<tr>
			<th>Alamat</th>
			<th>:</th>
			<th><?php echo $d['alamat']; ?></th>
		</tr>
		<tr>
			<th>Tanggal Masuk</th>
			<th>:</th>
			<th><?php echo date('d F Y', strtotime($d['tgl_masuk'])); ?></th>

			<th>Kelas</th>
			<th>:</th>
			<th><?php echo $d['kelas']; ?></th>
		</tr>
		<tr>
			<th>Tanggal Keluar</th>
			<th>:</th>
			<th><?php echo date('d F Y', strtotime($d['tgl_keluar'])); ?></th>
		</tr>
	</table>
</div>
<hr>
<h5 style="text-decoration: underline;">B. TINDAKAN PELAYANAN</h5>
<div class="container-fluid">
	<table class="table table-responsive" border="1" width="80%" style="margin-left: 7%;">
		<thead>
			<tr>
				<th>No</th>
				<th>Tindakan Pelayanan</th>
			</tr>
		</thead>
		<?php 
			$qq = mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_pelayanan b ON a.kd_pelayanan=b.kd_pelayanan WHERE a.kd_pasien='$kd_pasien'");
			while($dd = mysqli_fetch_assoc($qq)){
		?>
		<tbody>
			<tr align="center">
				<td><?php echo $no++; ?></td>
				<td><?php echo $dd['jns_pelayanan']; ?></td>
			</tr>
		</tbody>
		<?php 
		}
		?>
	</table>
<h4 style="margin-left: 72%; margin-bottom: 5%;">Padang, <?php echo date('d F y') ?></h3>
<br>
<br>
<h5 style="margin-left: 70%; margin-bottom: 1%;">UPTD RUMAH SAKIT HEWAN</h3>
<h5 style="margin-left: 75%; margin-top: 1%;">SUMATERA BARAT</h3>
</div>
</body>