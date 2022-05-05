<?php

include('../pages/area_cilindro_page.php');
$radio = $_POST['radio'];
$altura = $_POST['altura'];
$area = round((2 * pi() * $radio * ($radio + $altura)), 1);

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del cilindro es: $area</h2>
    </div>
  </div>
</div>
</div>";

?>