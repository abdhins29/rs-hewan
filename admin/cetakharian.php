<?php 
	include ("../config/koneksi.php");
	$tgl = $_GET['tgl'];
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
	$q = mysqli_query($konek,"SELECT * FROM tbl_reservasi  WHERE tgl_masuk = '$tgl'");
	$d = mysqli_fetch_assoc($q);
?>
<div class="container-fluid">
	<h3 style="text-decoration: underline;">Laporan Harian Reservasi</h3>
	<table width="50%" style="text-align: left; margin-bottom: 5px;">
		<tr>
			<th>Tanggal</th>
			<th>:</th>
			<th><?php echo date('d F Y', strtotime($d['tgl_masuk'])); ?></th>
		</tr>
	</table>
</div>
<div class="container-fluid">
	<table class="table table-responsive" border="1" width="100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Reservasi</th>
				<th>Nama Pasien</th>
				<th>Tindakan Pelayanan</th>
				<th>Tanggal Masuk</th>
				<th>Tanggal Keluar</th>
			</tr>
		</thead>
		<?php 
			$qq = mysqli_query($konek,"SELECT * FROM tbl_reservasi a LEFT JOIN tbl_regishewan b ON a.kd_pasien=b.kd_pasien LEFT JOIN tbl_pelayanan c ON a.kd_pelayanan=c.kd_pelayanan WHERE tgl_masuk = '$tgl'");
			while($dd = mysqli_fetch_assoc($qq)){
		?>
		<tbody>
			<tr align="center">
				<td><?php echo $no++; ?></td>
				<td><?php echo $dd['kd_reservasi'] ?></td>
				<td><?php echo $dd['nm_pasien']; ?></td>
				<td><?php echo $dd['jns_pelayanan']; ?></td>
				<td><?php echo date('d F Y', strtotime($dd['tgl_masuk'])); ?></td>
				<td><?php echo date('d F Y', strtotime($dd['tgl_keluar'])); ?></td>
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