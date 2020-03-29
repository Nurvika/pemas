<?php require 'middleware.php'; ?>
<?php if (auth()["error"]=="400"): ?>
<!-- jika sudah login -->
<?php if (auth()["level"]=="admin"): ?>
<!-- jika level admin -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Pengaduan Masyarakat</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		<script src="../assets/js/jquery-3.4.1.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/js/bootstrap.bundle.js"></script>
		<script src="../assets/js/bootstrap.bundle.js.map"></script>
		<script src="../assets/js/bootstrap.bundle.min.js.map"></script>
	</head>
	<body>
		<div>
			<div class="d-inline-flex p-2 bd-highlight" id="wrapper">
				<!-- Sidebar -->
				<div class="bg-light border-right" id="sidebar-wrapper">
					<div class="sidebar-heading">Start Bootstrap </div>
					<div class="list-group list-group-flush">
						<a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
						<a href="index.php?halaman=petugas" class="list-group-item list-group-item-action bg-light">Petugas</a>
						<a href="index.php?halaman=masyarakat" class="list-group-item list-group-item-action bg-light"> Masyarakat</a>
						<a href="index.php?halaman=verifipengaduan" class="list-group-item list-group-item-action bg-light"> Verifikasi Pengaduan</a>
						<a href="index.php?halaman=pengaduan" class="list-group-item list-group-item-action bg-light">Pengaduan</a>
						<a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
					</div>
				</div>
				<!-- /#sidebar-wrapper -->
				<!-- Page Content -->
				<div  id="page-content-wrapper">
					<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
						<h4>Navvv</h4>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					</nav>
					<div class="container-fluid">
						<?php
						if (isset($_GET['halaman'])) {
							if ($_GET['halaman']== "masyarakat") {
								require 'view_masyarakat.php';
							}
							if ($_GET['halaman']== "editmasyarakat") {
								require 'edit_masyarakat.php';
							}
							if ($_GET['halaman']== "petugas") {
								require 'view_petugas.php';
							}
							if ($_GET['halaman']== "hapusmasyarakat") {
								require 'delete_masyarakat.php';
							}
							if ($_GET['halaman']== "insert_petugas") {
								require 'insert_petugas.php';
							}
							if ($_GET['halaman']== "pengaduan") {
								require 'pengaduan.php';
							}
							if ($_GET['halaman']== "editpengaduan") {
								require 'edit_pengaduan.php';
							}
							if ($_GET['halaman']== "verifipengaduan") {
								require 'verifikasi_pengaduan.php';
							}
							if ($_GET['halaman']== "detailpengaduan") {
								require 'detail_pengaduan.php';
							}
							if ($_GET['halaman']== "tanggapan") {
								require 'tanggapan.php';
							}
						}
						?>
					</div>
				</div>
				<!-- /#page-content-wrapper -->
			</div>
		</div>
	</body>
</html>
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/js/bootstrap.bundle.js"></script>
		<script src="../assets/js/bootstrap.bundle.js.map"></script>
		<script src="../assets/js/bootstrap.bundle.min.js.map"></script>
<script>
$(document).ready(function($) {
$(".table").DataTable();
});
</script>
<?php else: ?>
<!-- jika bukan admin -->
<?php header('location:../petugas/page.php'); ?>
<?php endif ?>
<?php else: ?>
<!-- jika belum login -->
<?php header("location:login.php") ?>
<?php endif ?>