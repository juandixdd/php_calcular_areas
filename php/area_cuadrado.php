<?php

include('../pages/area_cuadrado_page.php');
$lado = $_POST['lado'];
$area = $lado * $lado;

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del cuadrado es: $area</h2>
    </div>
  </div>
</div>
</div>";


?>