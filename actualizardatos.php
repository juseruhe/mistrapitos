<?php
$conectar = mysqli_connect("localhost","root","","trapitos");
session_start();
if(isset($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos1.css" rel="StyleSheet" type="text/css">

    <title>Actualizar datos</title>
</head>
<body>
<?php
if  (isset($_GET['ID_Usuario'])) {
    $id = $_GET['ID_Usuario'];
    $query = "SELECT * FROM usuario WHERE id=$id";
    $result = mysqli_query($conectar,$query);
    if (mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_array($result);
      $title = $row['title'];
      $description = $row['description'];
      $otro = $row['otro'];
    }
  }
  
  if (isset($_POST['update'])) {
    $id = $_GET['ID_Usuario'];
    $title= $_POST['title'];
    $description = $_POST['description'];
    $otro = $row['otro'];
  
    $query = "UPDATE usuario set nombre = '$title', description = '$description' WHERE id=$id";
    mysqli_query($conectar, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: paneladministrador.php');
  }

?>
<a href="slider.html"> <img class="logo" src="imagenes/logomt.PNG"/></a>
    <div class="actualizardatos">
    <form action="actualizardatos.php" method="post">
        Ingrese sus nombres: <input type="text" name="nommbre"></br>
        Ingrese sus apellidos: <input type="text" name="apellido"></br>
        Fecha de Nacimineto: <input type="text" name="fnaci"></br>
        Genero<input type="checkbox" name="generom" value="gusta">Masculino<input type="checkbox" name="generof" value="gusta">Femenino<br>
        Telefono:<input type="text" name="apellido"></br>
        Ingrese E-mail: <input type="text" name="telefono"></br>
        Ingrese su Nueva contraseña: <input type="text" name="telefono"></br>
        Confirmar Contraseña: <input type="text" name="telefono"></br>
        <input type="submit" name="Enviar">
</form>
</div>
    <?php

    ?>
</body>
</html>
<?php
}else{
  header("location:../iniciarsesion.html");
}
?>