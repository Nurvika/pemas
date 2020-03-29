<?php session_start(); ?>
<?php if (isset($_SESSION["nik"])): ?>
<!-- jika ada -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Masyarakat</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
		<section class="hihi">
			<div class="container" >
				<div class="col-md-6 offset-3 pt-5">
					<div class="card">
						<div class="card-header"><h3>Silahkan Masuka Keluhan anda</h3></div>
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Tanggal pengaduan</label>
											<input type="date" name="tgl_pengaduan" class="form-control">
										</div>
										<div class="form-group">
											<label for="">NOmer NIK</label>
											<input type="text" readonly="" value="<?php echo $_SESSION["nik"]; ?>" name="nik" class="form-control">
										</div>
										<div class="form-group">
											<label for="">Isi Laporan</label>
											<textarea name="isi_laporan" id="" cols="30" class="form-control" rows="10"></textarea>
										</div>
										<div class="form-group">
											<label for="">Foto</label>
											<input type="file" name="foto" class="form-control" >
										</div>
										<div class="form-group">
											<label for="">Status</label>
											<select name="status" id="" class="form-control">
												<option value="0">0</option>
												<option value="proses">Proses</option>
												<option value="selesai">Selesai</option>
											</select>
										</div>
										<button type="submit" name="save" class="btn btn-success">Kirim</button>
									</div>
								</div>
							</form>
							<?php
								require '../db/koneksi.php';
								if (isset($_POST['save'])) {
									$nama = $_FILES['foto']['name'];
									$lokasi = $_FILES['foto']['tmp_name'];
									move_uploaded_file($lokasi, "../assets/images/".$nama);
									$ambil=	$host->query("INSERT INTO pengaduan(id_pengaduan,tgl_pengaduan,nik,isi_laporan,foto,status) VALUES(NULL,'$_POST[tgl_pengaduan]','$_POST[nik]','$_POST[isi_laporan]','$nama','$_POST[status]')");
									header("location:index.php");
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
<?php else: ?>
<!-- jika tidak ada -->
<?php header("location:../login.php") ?>
<?php endif ?>
