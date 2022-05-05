<?php

include('../pages/area_triangulo_page.php');
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = ($base * $altura);

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del rectángulo es: $area</h2>
    </div>
  </div>
</div>
</div>";

?>