<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    

<div class="container">
  <h4>Kalkulator</h4>
  <table border=2 class="table table-dark table-borderless">
  
      <thead>
          <tr>
              <th>Pertambahan</th>
              <th>Pengurangan</th>
              <th>Perkalian</th>
              <th>Pembagian</th>
             
          </tr>
      </thead>
      
             

<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
private $angka1;
private $angka2;



        public function __construct($angka1,$angka2) {
            $this->A=$angka1;
            $this->B=$angka2;
        }

        public function getTambah() {
          return $this->A+$this->B;
      }

  

              public function getKurang() {
                  return $this->A-$this->B;
            }
  

            public function getKali() {
              return  $this->A*$this->B;
            }

            public function getBagi() {

              if ($this->B != 0) {

              return  $this->A/$this->B;
              }
              else {
                return "Tidak dapat melakukan pembagian oleh nol";
            }


    }
  }

  



    $calculator = new Calculator(80, 10);

    echo '<td>'.$calculator->getTambah();
    
    
    echo '<td>'.$calculator->getKurang();
   
    
    echo'<td>'. $calculator->getKali();
   
   
    echo '<td>'.$calculator->getBagi();
    
    
?>
    
  </table>
</div>
</body>