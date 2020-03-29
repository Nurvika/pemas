<div class="card shadow">
  <div class="card-header">Detail Pengaduan</div>
    		<?php 
  		  require '../db/koneksi.php';
  		  $ambil = $host->query("SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id_pengaduan]'");
  		    $list = mysqli_fetch_array($ambil);
  		    if ($ambil) {

  		 ?>
  <div class="card-body">
  	<div class="form-group cols-sm-6">
  		<a href="index.php?halaman=verifipengaduan" class="btn btn-primary btn-icon-split">
  			<span class="text">Kembali</span>
  		</a>
  	<?php } ?>
  	</div>
  	<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
  		<?php 
  		  require '../db/koneksi.php';
  		  $ambil = $host->query("SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id_pengaduan]'");
  		    $list = mysqli_fetch_array($ambil);
  		    if ($ambil) {

  		 ?>
         <div class="form-group cols-sm-6">
         	<label for="">Tanggal Pengaduan </label>
         	<input type="text" name="tgl_pengaduan" value="<?php echo $list['tgl_pengaduan']; ?>" class="form-control" readonly>
         </div>  		

         <div class="form-group cols-sm-6">
         	<label for="">Isi Laporan</label>
         	<textarea name="isi_laporan" readonly id="" cols="30" rows="10" class="form-control"><?php echo $list['isi_laporan']; ?></textarea>
         </div>
         <div class="form-group cols-sm-6">
         	<label for="">Bukti Foto</label>
         	<div><img src="../assets/images/<?php echo $list['foto']; ?>" alt=""width="170px"></div>
         </div>

  	</form>
  <?php } ?>

  </div>
 </div>