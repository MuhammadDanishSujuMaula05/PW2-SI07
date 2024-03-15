<?php 

require_once 'tugas01.php';

$balok1 = new Balok(9,8,9);
$balok2 = new Balok(9,8,9);
$balok3 = new Balok(9,8,9);

echo "<br>Luas Balok1 = ".$balok1->getLuas().'cm'; 
echo "<br>Kel Balok1 = ".$balok2->getKel().'cm'; 
echo "<br>Vol Balok1 = ".$balok3->getVolume().'cm'; 


?>