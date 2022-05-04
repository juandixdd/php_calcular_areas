<?php

include('../pages/area_circulo_page.php');
$radio = $_POST['radio'];
$area = round(pi() * $radio * $radio, 1);

echo "<div class='row justify-content-center m-5'>
<div class='col-md-8'>
  <div class='card'>
    <div class='card-body'>
        <h2>El area del círculo es: $area</h2>
    </div>
  </div>
</div>
</div>";


?>