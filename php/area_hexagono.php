<?php

include('../pages/area_hexagono_page.php');
/* perímetro * Apotema / 2 */
$lado = $_POST['lado'];
$perimetro = round(6 * $lado, 1);
$apotema = round($lado / 2, 1);
$area = round($perimetro * $apotema / 2, 1);

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del hexágono es: $area</h2>
    </div>
  </div>
</div>
</div>";


?>