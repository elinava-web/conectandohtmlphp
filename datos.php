<?php
// declaracion de variables y uso de GET
// para obtener datos del formulario index.html
$mimatricula=$_GET['mimatricula'];
$minombre=$_GET['minombre'];
$misapellidos=$_GET['misapellidos'];
//salida de datos
echo '<h1>Mi servidor casero de XAMPP jaja</h1>';
echo '<h2>Ingresa tus tatos reales</h2>';
echo 'Matricula********Nombres (s)***Apellidos';
echo '<br>';//salto de linea
//valores de las varibles
echo $mimatricula. '**'.$minombre.'********'.$misapellidos;

?> 