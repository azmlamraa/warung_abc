<?php
include 'includes/cek_session.php';
include 'config/koneksi.php' 
$id = $_GET['id'];
$sql ="SELECT * FROM tbl_barang ORDER BY nama_barang ASC";
$hasil = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html>
<head>
   <title>Data Barang - warung_abc</title>
</head>
<body>
   <h1>Edit Barang</h1>
   <form action ="proses_edit_barang.php" nethod="POST">
        <Input type="hidden" name="id_barang" value="<?php echo $data ['id_barang']; ?>">
        <table>
        <tr><td>Kode Barang</td><td>:</td>
            <td><input type="text" name="kode_barang"
               value="<?php echo $data ['kode_barang']; ?>" require></td></tr>
         <tr><td>Nama Barang</td><td>:</td>
            <td><input type="text" name="nama_barang"
               value="<?php echo $data ['nama_barang']; ?>" require></td></tr>
         <tr><td>Harga Satuan</td><td>:</td>
            <td><input type="text" name="harga_satuan"
               value="<?php echo $data ['harga_satuan']; ?>" require></td></tr>
         <tr><td>Stok</td><td>:</td>
            <td><input type="text" name="stok"
               value="<?php echo $data ['stok']; ?>" require></td></tr>
         <tr><td>tanggal kadaluarsa</td><td>:</td>
            <td><input type="text" name="tanggal_kadaluarsa"
               value="<?php echo $data ['tanggal_kadaluarsa']; ?>" require></td></tr>
         <tr><td colspan="3"><input type="sumbit" value="Update"></td></tr>
         </table>
   </from> 
   <p><a href="data_barang.php">Kembali</a></p>
</body>
</html>