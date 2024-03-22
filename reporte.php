<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reporte de Ingreso al Parque de Diversiones</title>
</head>
<body>
<h2>Reporte de Ingreso al Parque de Diversiones</h2>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Documento</th>
    <th>Fecha de ingreso</th>
    <th>Juego favorito</th>
</tr>

<?php

$conexion = new mysqli("localhost", "id21450562_diverciones", "Lorenaleon01@", "id21450562_diverciones");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$consulta = "SELECT nombre, apellido, documento, fecha, juego FROM ingresos ORDER BY fecha";
$resultado = $conexion->query($consulta);

if ($resultado === false) {
    die("Error al ejecutar la consulta: " . $conexion->error);
}

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['apellido']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['documento']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['fecha']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['juego']) . "</td>";  
    echo "</tr>";
}

$resultado->free();
$conexion->close();
?>

</table>

</body>
</html>
