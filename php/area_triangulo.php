<?php

/* Muestra el resultado en pages/area_triangulo.php */
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = ($base * $altura) / 2;

echo "<p>El área del triángulo es: $area</p>";





?>