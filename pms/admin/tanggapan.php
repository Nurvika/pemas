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
      <div class="form-group cols-sm-6">
        <label for="">ID Pengaduan </label>
        <input type="text" name="id_pengaduan" value="<?php echo $_GET['id_pengaduan']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label for="">Tanggal Tanggapan </label>
        <input type="date" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label for="">Tulis tanggapan</label>
        <textarea name="tanggapan" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label for="">ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
      </div>
      <input type="submit" class="btn btn-primary btn-user" value="Tanggapi !" name="tanggap">
      
    </form>
    <?php
    require '../db/koneksi.php';
    if (isset($_POST['tanggap'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl          = $_POST['tgl_tanggapan'];
    $tanggapan          = $_POST['tanggapan'];
    $id_petugas   = $_POST['id_petugas'];
    $st           = 'selesai';
    $query = $host->query("INSERT INTO tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES('$id_pengaduan' , '$tgl','$tanggapan','$id_petugas')");
    $update_st = $host->query("UPDATE pengaduan SET status='$st' WHERE id_pengaduan='$id_pengaduan'");
    if ($query) {
      ?>
    <script type="text/javascript">
    alert('Data Sudah DItanggapi');
    window.location="index.php?halaman=verifipengaduan";
    </script>

  
  <?php } ?>
<?php } ?>
 
  </div>
</div>