
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    

<div class="container">
  
  <table border=2 class="table table-dark table-borderless">
  
    
             

<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */

require_once 'class_cerita.php';

$motor = new Gojek(10000, 5000, 6000);
$submarine = new Angkot(5000, 3500, 4000);
echo "Angkutan <td>";
echo "Info tarif Gojek :<br><br>";
$motor->getTiket();
echo"<br>";

echo "Info tarif Angkot :<br><br>";
$submarine->getTiket();
?>

    
  </table>
</div>
</body>