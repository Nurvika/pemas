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
		<section class="header">
			<nav class="navbar navbar-expand-lg bg-light navbar-light">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">User</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<?php 
              if (!isset($_SESSION['nik'])) {
                echo "<a href='index.php'> Login </a>";
              }else{
                echo "<a href='logout.php' class='nav-link'> Logout </a>";
              }
             ?>  
					</li>
				</ul>
			</nav>
			<div class="container-fluid" id="center">
				<div class="container">
					<div class="jumbotron">
						<h1 class="lead">Masukkan Keluhan Anda</h1>
						<p class="lead">
						<a href="pengaduan.php" class="btn btn-lg btn-success">Laporan</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							hihi
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore libero, atque eligendi velit, quaerat molestiae consequuntur, sed in labore nam tempore eum dolorem. Vero iusto velit repellendus ipsa unde nulla?</p>
				</div>
			</div>


		</div>

	</body>
	</body>
	</html>
<?php else: ?>	
	<!-- jika tidak ada -->
	<?php header("location:../login.php") ?>
<?php endif ?>