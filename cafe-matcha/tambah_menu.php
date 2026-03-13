<?php
// Menghubungkan ke database
include "koneksi.php";

// ARRAY kategori minuman matcha
$kategori = ["Matcha Latte", "Matcha Milk", "Matcha Strawberry", "Matcha Chocolate", "Matcha Ice"];

// Jika tombol simpan ditekan
if(isset($_POST['simpan'])){

    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];

    // percabangan validasi input
    if($nama_menu == "" || $harga == ""){
        echo "Data tidak boleh kosong!";
    }else{

        mysqli_query($koneksi,"INSERT INTO menu VALUES('', '$nama_menu','$harga')");
        header("location:menu.php");

    }
}
?>

<h2>Tambah Menu Minuman</h2>

<form method="POST">

Nama Menu <br>
<input type="text" name="nama_menu">

<br><br>

Harga <br>
<input type="number" name="harga">

<br><br>

<button type="submit" name="simpan">Simpan</button>

</form>