<?php

include('conexion.php');

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final  = $_POST['fecha_final'];

$juegosLista = $conexion->query("SELECT * FROM orders WHERE orderDate BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'"); 


echo '<table style="width:100%">
  <thead class="bg-primary">
    <th>Nombre</th>
    <th>Fecha Ingreso</th>
  </th>
  </thead>
  <tbody>';

while($juegos = $juegosLista->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr> 
  
			<td>'.$juegos['productName'].'</td>
			
		</tr>';

}

?>

