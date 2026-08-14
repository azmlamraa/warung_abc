<?php

include 'includes/cek_session.php';
include 'config/koneksi.php';

$sql = "SELECT * FROM tbl_pelanggan ORDER BY nama_pelanggan ASC";
Shasil mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head><title>Data Pelanggan - Warung ABC</title></head>
<body>
     <h1>Data Pelanggan</h1>
     <p><a href="dashboard.php">Kembali ke Dashboard</a> |
        <a href="tambah_pelanggan.php">Tambah Pelanggan</a></p>
     <table border="1" cellpadding="6">
        <tr><th>Nama Pelanggan</th><th>No. HP</th><th>Alamat</th><th>Aksi</th></tr>
        <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
        <tr>
            <td><?php echo $row['nama_pelanggan']; ?></td>
            <td><?php echo $row['no_hp']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td>
                <a href="edit pelanggan.php?id=<?php echo $row['id pelanggan']; ?>">Edit</a> |
                <a href="hapus pelanggan.php?id=<?php echo $row['id pelanggan']; ?>" 
                onclick="return confirm('Yakin hapus pelanggan ini?');">Hapus</a>
            </td>
         </tr>
      <?php } ?>
    </table>
</body>
</html>
