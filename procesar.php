<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $juego = $_POST["juego"];
    $apellido = $_POST["apellido"];
    $documento= $_POST["documento"];
    
   
    $conexion = new mysqli("localhost", "id21450562_diverciones", "Lorenaleon01@", "id21450562_diverciones");
    
    
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
   
    $consulta = $conexion->prepare("INSERT INTO ingresos (nombre, fecha, juego, apellido, documento) VALUES (?, ?, ?, ?, ?)");
    
   
    if ($consulta === false) {
        die("Error al preparar la consulta: " . $conexion->error);
    }
    
    
    $consulta->bind_param("sssss", $nombre, $fecha, $juego, $apellido, $documento );
    $resultado = $consulta->execute();
    
    
    if ($resultado === false) {
        die("Error al ejecutar la consulta: " . $consulta->error);
    }
    
   
    $consulta->close();
    $conexion->close();
    
    echo "¡Gracias por enviar tus datos!";
} else {
  
    header("Location: formulario.php");
    exit();
}
?>


<a href="reporte.php">Ver reporte de ingresos</a>
