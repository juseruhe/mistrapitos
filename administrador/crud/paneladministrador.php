<?php
session_start();
if(isset($_SESSION["usuario"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Home Administrador</title>
  <link rel="icon" href="../../iconos/logomt.PNG"width="100%" height="100%"/>
  <link href="../../estiloscss/estiloadminpanel.css"rel="StyleSheet">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Mis Trapitos</h2>
        <ul>
            <li><a href="paneladministrador.php"><i class="fas fa-home"></i>Inicio</a></li>
            <li><a href="administrarusuario.php"><i class="fas fa-user"></i>Administrar Usuarios</a></li>
            <li><a href="administrarproducto.php"><i class="fas fa-address-card"></i>Administrar Productos</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>PQR´s</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Inventario</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contactos</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Pedidos</a></li>
        </ul> 

    </div>
    <div class="main_content">
          <div class="header" id="header"> 
            <a class="d-block"><?php echo"Bienvenid@:  "." ".$_SESSION["usuario"]."<a href='logout.php'> Salir </a>"?></a>
          </div>
          <header>
            <div class="textos">
            <h1>Mis Trapitos - Administrador</h1>
                <h2>Tienda de Ropa Online</h2>
            </div>
          </header>

    </div>
</div>
<br>
<strong>Copyright &copy; 2018-2020 <a href="paneladministrador.php">2 Version </a>Mis Trapitos S.A</strong>

</body>
</html>
<?php

}else{
  header("location:../../logout.php");
}
?>