<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
 $ns1 = ['id'=>1,'nama'=>'01101','jenis buah'=>80,'harga'=>84];
 $ns2 = ['id'=>2,'nama'=>'01121','jenis buah'=>70,'harga'=>50];
 $ns3 = ['id'=>3,'nama'=>'01130','jenis buah'=>60,'harga'=>86];
 $ns4 = ['id'=>4,'nama'=>'01134','jenis buah'=>90,'harga'=>91];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
 ?>
</head>
<body>
<h3>Daftar Nilai Siswa</h3>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
  $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nama'].'</td>';
 echo '<td>'.$ns['jenis buah'].'</td>';
 echo '<td>'.$ns['harga'].'</td>';
 
 $nilai_akhir = ($ns['jenis buah'] + $ns['harga']);
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>

</body>
</html>