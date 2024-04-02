<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$jproduk = new Kartu($db);

if(isset($_POST['update'])) {
    $jproduk->id = $_POST['id'];
    $jproduk->kode = $_POST['kode'];
    $jproduk->nama = $_POST['nama'];
    $jproduk->diskon = $_POST['diskon'];
    $jproduk->iuran = $_POST['iuran'];

    $jproduk->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $jproduk->id = $_GET['id'];
    $stmt = $jproduk->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
    
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="Kode">Kode:</label>
        <input type="text" name="kode" value="<?php echo $kode; ?>" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
       
        <label for="Diskon">Diskon:</label>
        <input type="text" name="diskon" value="<?php echo $diskon; ?>" required>
        
        <label for="iuran">Iuran kau:</label>
        <input type="text" name="iuran" value="<?php echo $iuran; ?>" required>
        

        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>