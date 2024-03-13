<?php
include_once 'atas.php';
?>


<div class="container my-5">
            <h1 class="text-center mb-4">Triangle Area Calculator</h1>
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <label for="base">Base</label>
                    <input type="number" class="form-control" id="base" name="base" required>
                </div>
                <div class="form-floating mb-3">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Calculate Area</button>
            </form>
        </div>

        <?php
        
require_once 'libfungsi.php';
$base = $_POST['base'];
$height = $_POST['height'];
$area = hitungluas($base,$height);
$oke = deteksisegitiga($base,$height);



?>

<div class="mt-4"></div>
    <h2>hasil</h2>
    <p>Alas : <?php echo $base ;?></p>
    <p>Tinggi : <?php echo $height ;?></p>
    <p>Luas : <?php echo $area ;?></p>
    <p>Jenis : <?php echo $oke;?></p>
</div>

        

