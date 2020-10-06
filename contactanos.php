<!doctype html>
<html lang="en">
  <head>
    <title>Tienda MT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
<body>
    <?php
   $link = mysqli_connect("localhost", "root", "", "trapitos");

   if($link === false) {
       die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   
   $nombre = mysqli_real_escape_string($link, $_REQUEST['nombre']);
   $correo = mysqli_real_escape_string($link, $_REQUEST['correo']);
   $telefono = mysqli_real_escape_string($link, $_REQUEST['telefono']);
   $asunto = mysqli_real_escape_string($link, $_REQUEST['asunto']);
   $Descripcion = mysqli_real_escape_string($link, $_REQUEST['Descripcion']);


   // Attempt insert query execution
   $sql = "INSERT INTO pqrs (nombre, correo, telefono, asunto, Descripcion) 
           VALUES ('$nombre', '$correo', '$telefono', '$asunto', '$Descripcion')";
   if(mysqli_query($link, $sql)){
       echo "Agregando los registro correctamente.";
   } else{
       echo "ERROR: No se ha podido almacenar la información $sql. " . mysqli_error($link);
   }
   
   // Close connection
   mysqli_close($link);
    ?>

</body>
    </html>