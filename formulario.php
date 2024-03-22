<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Ingreso al Parque de Diversiones</title>
<script src="validaciones.js"defer></script> 
</head>
<body>
<h2>Formulario de Ingreso al Parque de Diversiones</h2>
<form action="procesar.php" method="POST" id="formulario">
<label for="nombre">documento:</label>
  <input type="text" id="documento" name="documento" required><br><br>

  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required><br><br>

  <label for="nombre">apellido:</label>
  <input type="text" id="apellido" name="apellido" required><br><br>

  <label for="fecha">Fecha de ingreso:</label>
  <input type="date" id="fecha" name="fecha" required><br><br>

  <select name="juego">
    <option value="futbol">Futbol</option>
    <option value="baloncesto">Baloncesto</option>
    <option value="tenis">Tenis</option>
    <option value="natacion">Natación</option>
    <option value="atletismo">Atletismo</option>
</select>

  <button type="submit">Enviar</button>
</form>
</body>
</html>
