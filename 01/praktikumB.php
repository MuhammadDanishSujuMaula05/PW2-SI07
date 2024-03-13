<?php


$dragons = [
    [
   "Nama" => "Danish",
   "Umur" => 12
],
[
    "Nama" => "Acil",
    "Umur" => 16
 ],
 [
    "Nama" => "Dony",
    "Umur" => 17
 ],
[
   "Nama" => "Sausan",
   "Umur" => 34
],
[
   "Nama" => "Ata",
   "Umur" => 23
],
];


foreach ($dragons as $dragon){
echo $dragon["Nama"] . "<br>". " " . $dragon["Umur"] ."<br>" ." " ;
echo "<br>";

}



?>