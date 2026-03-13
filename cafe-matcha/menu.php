<?php
include "koneksi.php";
include "functions.php";

$query = mysqli_query($koneksi, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html>
<head>
<title>Menu Cafe Matcha</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background-color:#f5f9f4;
    font-family: Arial, sans-serif;
}

/* Header */
.header{
    background-color:#6dbb63;
    color:white;
    padding:20px;
    text-align:center;
}

/* Judul */
.judul{
    font-weight:bold;
    font-size:30px;
}

/* Tombol */
.btn-matcha{
    background-color:#6dbb63;
    color:white;
    border:none;
}

.btn-matcha:hover{
    background-color:#4c9448;
}

/* Tabel */
.table thead{
    background-color:#6dbb63;
    color:white;
}

/* Card menu */
.menu-card{
    margin-top:20px;
}

</style>

</head>

<body>

<!-- Header -->
<div class="header">

<div class="container">

<h1 class="judul">🍵 <?php echo judulWebsite(); ?> 🍵</h1>

<p>Fresh Matcha Drinks Everyday</p>

</div>

</div>

<div class="container menu-card">

<div class="row mb-3">

<div class="col-md-6">

<h3>Daftar Menu Minuman</h3>

</div>

<div class="col-md-6 text-end">

<a href="tambah_menu.php" class="btn btn-matcha">
+ Tambah Menu
</a>

</div>

</div>

<!-- Tabel Menu -->
<table class="table table-bordered table-hover">

<thead>

<tr>
<th>No</th>
<th>Nama Menu</th>
<th>Harga</th>
</tr>

</thead>

<tbody>

<?php
$no = 1;
while($data = mysqli_fetch_array($query)){
?>

<tr>

<td><?php echo $no++; ?></td>

<td><b><?php echo $data['nama_menu']; ?></b></td>

<td>Rp <?php echo number_format($data['harga']); ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<!-- Footer -->
<footer class="text-center mt-5 mb-3 text-muted">
Cafe Matcha © 2026
</footer>

</body>
</html>