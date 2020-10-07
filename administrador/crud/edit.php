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
  <link href="../../estiloscss/estiloeditarpro.css"rel="StyleSheet">
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



<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
       <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">pagina pricipal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mis Trapitos</a></li>
              <li class="breadcrumb-item active">Administrador</li>
            </ol>
            
          </div>
        </div>        
      </div>
    </div>
    <main class="container p-4">
  <div class="row">
  </div>
    <div class="col-md-8">
      <table class="table table-bordered ">
        <thead>
          <tr>
            <th>Documento</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Fecha nacimiento</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Genero</th>
            <th>ciudad</th>
            <th>Direccion</th>
            <th>Descripcion</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php

          require_once("../../crudservicios/modelojson.php");

         $id = $_GET["id"];

         $usuario = new Datos();

         $mostrarUsuario = $usuario->readUsuarioAdminModel($id,"usuario");
           
         if($mostrarUsuario){
           
          foreach($mostrarUsuario as $row => $item) {
           
           ?>
          <table>
          <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=updateadminusuario" method="POST">
          <tr>
      
            <td> <input type="hidden" name="ID_Usuario" value="<?php echo $item['ID_Usuario'];?>"/> </td>
            <td> <input type="text" name="Primer_Nombre" value="<?php echo $item['Primer_Nombre'];?>"/> </td>
            <td> <input type="text" name="Segundo_Nombre" value="<?php echo $item['Segundo_Nombre'];?>"/></td>
            <td> <input type="text" name="Primer_Apellido" value="<?php echo $item['Primer_Apellido'];?>"/></td>
            <td> <input type="text"  name="Segundo_Apellido" value="<?php echo $item['Segundo_Apellido'];?>"/></td>
            <td> <input type="text" name="fecha_nacimiento" placeholder="año/mes/dia" value="<?php echo $item['fecha_nacimiento'];?>"/></td>
            <td> <input type="text" name="Telefono" placeholder="Escriba  Número Teléfonico" value="<?php echo $item['Telefono'];?>"/></td>
            <td> <input type="email" name="Correo" placeholder="Escribe Correo " value="<?php echo $item['Correo'];?>"/></td>
            <td > <select name="ID_Genero">
            <option>  <?php  echo $item['Nombre_Genero']; ?>  </option>
      <?php

      $genero = new Datos();

      $mostrarGenero = $genero->todoGeneroModel($item['Nombre_Genero'],"genero");

      if($mostrarGenero) {

    foreach($mostrarGenero as $rowgen => $itemgen){
?>
           
<option> <?php  echo $itemgen["Nombre_Genero"]; }}  ?>  </option>
</select>
 </td>
            <td>
            <select name="ID_Ciudad"> 
<option><?php echo $item["Nombre_Ciudad"] ;  ?> </option>
 <?php
$cali = new Datos();

$mostrarCali = $cali->mostrarCiudades("Cali","ciudad");

if($mostrarCali ) {

  foreach($mostrarCali as $rowCali => $itemCali){
?>
<option> <?php echo $itemCali["Nombre_Ciudad"]; }}    ?>  </option>

<?php


$Medellin = new Datos();

$mostrarMedellin = $Medellin->mostrarCiudades("Medellín","ciudad");

if($mostrarMedellin) {

  foreach($mostrarMedellin as $rowMedellin => $itemMedellin){
?>
<option> <?php echo $itemMedellin["Nombre_Ciudad"]; }}    ?>  </option>


<?php


$Bogota = new Datos();

$mostrarBogota = $Bogota->mostrarCiudades("Bogotá","ciudad");

if($mostrarBogota) {

  foreach($mostrarBogota as $rowBogota => $itemBogota){
?>
<option> <?php echo $itemBogota["Nombre_Ciudad"]; }}    ?>  </option>








</select>
          </td>
            <td><input type="text" name="direccion" placeholder="Escriba Dirección" value="<?php echo $item['direccion'];?>"/></td>
            <td><input type="text" name="observaciones" placeholder="Escriba Observaciones" value="<?php echo $item['observaciones'];?>"/></td>
            <td>
              <input type="submit" value="Actualizar Datos"  class="btn btn-secondary" class="botones"/>
                
              <a href="administarusuario.php" class="btn btn-danger" class="botones">
               Volver Administrar Usuarios
              </a>
            </td>
          </tr>
</form>
<?php }} ?>
<?php

}else{
  header("location:../../logout.php");
}
?>



