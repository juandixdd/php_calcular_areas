<?php

include('../pages/area_circulo_page.php');
$arista = $_POST['arista'];
$area = round(6 * $arista * $arista, 1);

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del cubo es: $area</h2>
    </div>
  </div>
</div>
</div>";


?>