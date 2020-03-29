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
		  $ambil = $host->query("SELECT * FROM pengaduan WHERE status='0'");
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
				<td>
					<a href="petugas.php?halaman=detailpengaduan&id_pengaduan=<?php echo $list['id_pengaduan']; ?>" class="btn btn-sm btn-info">Detail&verifikasi</a>
				</td>
			</tr>

		</tbody>
		<?php } ?>
	</table>

</div>
html5