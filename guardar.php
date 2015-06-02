<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <?php
      $conexion= new mysqli('localhost', 'pw', 'pw', 'proyectopw');

      if ($conexion->connect_error) {
        die("Conexion Fallida".$conexion->connect_error);
      }
      $nombre= $_POST["nombre"];
      $apellidos= $_POST["apellidos"];
      $estado= $_POST["estado"];
      $municipio= $_POST["municipio"];
      $direccion= $_POST["direccion"];
      $codigopostal= $_POST["codigopostal"];
      $correo= $_POST["correo"];
      $telefono= $_POST["telefono"];
      $contrasena= $_POST["contrasena"];

      $sql=mysqli_query($conexion, "INSERT INTO clientes (nombre, apellidos, estado, municipio, direccion, codigopostal, correo, telefono, contrasena) 
        VALUES ('$nombre', '$apellidos', '$estado', '$municipio', '$direccion', '$codigopostal', '$correo', '$telefono', '$contrasena')");
    ?>
  </body>
</html>