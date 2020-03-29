<div class="container">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header"><h3>Petugas</h3></div>
			<div class="card-body">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Nama Petugas</label>
								<input type="text" name="nama_petugas" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" name="username" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control">
							</div>
						</div>		
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Telpon</label>
								<input type="text" name="telp" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select name="level" id="" class="form-control">
									<option value="admin">admin</option>
									<option value="petugas">petugas</option>
								</select>
							</div>
						</div>
						
					</div>
				<button type="submit" class="btn btn-primary" name="save">Save</button>
				</form>
				<?php 
					require '../db/koneksi.php';
					if (isset($_POST['save'])) {
						$nama_petugas  = $_POST['nama_petugas'];
						$username      = $_POST['username'];
						$password      = $_POST['password'];
						$telp          = $_POST['telp'];
						$level         = $_POST['level'];
					  $host->query("INSERT INTO petugas VALUES(NULL,'$nama_petugas' , '$username' ,'$password','$telp' ,'$level')");
                		// header('location:index.php?halaman=petugas');
					  
					}
					
				 ?>
			</div>
		</div>

	</div>
</div>