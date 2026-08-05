<?php
include 'includes/cek_session.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title>Dashboard - warung ABC</title>
</head>
<body>
   <h1>Selamat datang, <?php echo $_SESSION['nama_lengkap']; ?></h1> 
   <P>Anda login sebagai: <?php echo $_SESSION['role']; ?></h1> 
   <a href="logout.php">logout</a>
</body>
</html>