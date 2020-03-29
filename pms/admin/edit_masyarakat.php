<?php
	require '../db/koneksi.php';
	$ambil = $host->query("SELECT * FROM masyarakat WHERE nik = '$_GET[nik]' ");
	$list = $ambil->fetch_assoc();
?>
<div class="container">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">
				<h3>Register</h3>
			</div>
			<div class="card-body">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">nik</label>
								<input type="text" name="nik" class="form-control" value="<?php echo $list['nik'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">nama</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $list['nama'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $list['username'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">password</label>
								<input type="password" class="form-control" name="password" value="<?php echo $list['password'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">telpon</label>
								<input type="text" class="form-control" name="telp" value="<?php echo $list['telp'] ?>">
							</div>
						</div>
					</div>
					<button type="submit" name="update" class="btn btn-warning">Update</button>
				</form>
				<?php
					if (isset($_POST['update'])) {
					$result = $host->query("UPDATE masyarakat SET nik = '$_POST[nik]',  nama = '$_POST[nama]', username = '$_POST[username]', password = md5'($_POST[password])', telp = '$_POST[telp]' WHERE nik = '$_GET[nik]'");
				echo "<script>window.location = 'index.php?halaman=masyarakat'</script>";
				}
				?>
			</div>
		</div>
	</div>
</div>