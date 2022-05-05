<?php

include('../pages/area_trapecio_page.php');
$base_mayor = $_POST['base_mayor'];
$altura = $_POST['altura'];
$base_menor = $_POST['base_menor'];
$area = round((($base_mayor + $base_menor) / 2 ) * 2, 1);

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del trapecio es: $area</h2>
    </div>
  </div>
</div>
</div>";

?>