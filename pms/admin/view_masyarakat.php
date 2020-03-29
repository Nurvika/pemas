<div class="table-responsive">
  <table class="table table-responsive">
    <thead>
      <th >NO</th> 
      <th>Nik</th>
      <th>nama</th>
      <th>username</th>
      <th>password</th>
      <th>telp</th>
      <th>Aksi</th>
    </thead>
    <tbody>
    <?php
    require '../db/koneksi.php';
    $no = 1;
    $ambil = $host->query("SELECT * FROM masyarakat");
    while ($list = $ambil->fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $list['nik'] ?></td>
      <td><?php echo $list['nama'] ?></td>
      <td><?php echo $list['username'] ?></td>
      <td>Tidak ditampilkan</td>
      <td><?php echo $list['telp'] ?></td>
      <td>
        <a href="index.php?halaman=editmasyarakat&nik=<?php echo $list['nik']; ?>" class="btn btn-warning">Edit</a>
        <a href="index.php?halaman=hapusmasyarakat&nik=<?php echo $list['nik']; ?>" class="btn btn-danger">Hapus</a>
      </td>
    </tr>

    <?php } ?>
    </tbody>
  </table>
</div>