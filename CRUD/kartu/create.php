<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$jproduk = new Kartu($db);

if(isset($_POST['tambah'])){
    $jproduk->kode = $_POST['kode'];
    $jproduk->nama = $_POST['nama'];
    $jproduk->diskon = $_POST['diskon'];
    $jproduk->iuran = $_POST['iuran'];

    $jproduk->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>

    
</head>
<body>
    <h1>Tambah Data</h1>
   
    <form method="POST" action="">
    <label for="kode">Kode:</label>
        <input type="text" name="Kode"  required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>


        <label for="diskon">Diskon:</label>
        <input type="text" name="diskon" required>


        <label for="iuran">Iuran kau:</label>
        <input type="text" name="iuran" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>

</body>
</html>