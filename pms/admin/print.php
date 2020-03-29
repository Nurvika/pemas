<a href="index.php?halaman=insert_petugas" class="btn btn-primary">Tambah Petugas</a>
<div class="table-responsive">
	<table class="table table-responsive">
		<thead>
			<th>no</th>
			<th>Nama Petugas</th>
			<th>Username</th>
			<th>password</th>
			<th>Telpon</th>
			<th>Level</th>
			<th>aksi</th>
		</thead>
		<tbody>
			<?php 
				require '../db/koneksi.php';
				$no = 1;
				$ambil = $host->query("SELECT * FROM petugas");
				while ($list = $ambil->fetch_assoc()) {
			
			 ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $list['nama_petugas'] ?></td>
				<td><?php echo $list['username'] ?></td>
				<td><?php echo $list['password'] ?></td>
				<td><?php echo $list['telp'] ?></td>
				<td><?php echo $list['level'] ?></td>
				<td>
					<a href="" class="btn btn-warning">Edit</a>
					<a href="" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>