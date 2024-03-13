<?php

class Car{

    public $brand;
    public $color;

    function getBrand(){
       return $this->brand;
    }

   
    
}

$pajero = new Car();
$tesla = new Car();

$pajero->brand="Pajero";
$tesla->brand="Tesla";

echo $tesla->getBrand();
echo '<br><br>';
echo $pajero ->getbrand();

?>

<br>

<?php



class Color{

    public $brand;
    public $color;

    function getColor(){
       return $this->color;
    }

   
    
}

$merah = new Color();
$kuning = new Color();

$merah->color="Merah";
$kuning->color="Kuning";

echo $merah->getColor();
echo '<br><br>';
echo $kuning ->getColor();


?>