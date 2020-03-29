<div class="table-responsive">
	<table class="table table-respons">
		<thead>
			<th>No</th>
			<th>Tanggal Pengaduan</th>
			<th>nik</th>
			<th>isi Laporan</th>
			<th>Foto</th>
			<th>Status</th>
			<th>klik</th>
		</thead>
		<?php 
		  require '../db/koneksi.php';
		  $no = 1;
		  $ambil = $host->query("SELECT * FROM pengaduan");
		  while ($list = $ambil->fetch_assoc()) {

		 ?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $list['tgl_pengaduan']; ?></td>
				<td><?php echo $list['nik']; ?></td>
				<td><?php echo $list['isi_laporan']; ?></td>
				<td><img src="../assets/images/<?php echo $list['foto']; ?>" alt=""width="170px"></td>
				<td><?php echo $list['status']; ?></td>
				<td><a href="index.php?halaman=editpengaduan" class="btn btn-success">Konfirmasi</a></td>
			</tr>

		</tbody>
		<?php } ?>
	</table>

</div>
html5