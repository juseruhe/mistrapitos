<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador MT</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href="admin.css" rel="StyleSheet" type="text/css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Nosotros</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="administrarproductos.php" class="nav-link">Productos</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
 </nav>
 <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="paneladministrador.html" class="brand-link">
      <img src="../Imagenes/logomt.PNG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Mis Trapitos</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../Imagenes/logomt.PNG" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="paneladministrador.php" class="d-block"><?php echo"Bienvenido"." ".$_SESSION["usuario"]."<a href='logout.php'> Salir </a>"?></a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="paneladministrador.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312654">Tablero Principal</p>
            </a>
             </li><li class="nav-item">
                <a href="administrarusuario.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312754">Administrar Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="administraproducto.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312754">Administrar Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="PQRS.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312754">PQR'S</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="administraproducto.php" class="nav-link disabled">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312754">Inventario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="administraproducto.php" class="nav-link disabled">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312754">Mis Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="paneladministrador.php" class="nav-link disabled">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p _msthash="2925169" _msttexthash="312754">Realizar Pedido</p>
                </a>
              </li>
           </ul>
          </nav>
  
  </div>
    
      
        <thead>
         </thead>        
        </tbody>
      </table>
    </div>
  </div>  
</div>
<div class="row">
<div class="col-md-8">
<table class="table table-bordered">
<main class="container p-4">
<?php
$ID_Producto =  $_POST["ID_Producto"];
$Nombre_Producto =  $_POST["Nombre_Producto"];


$foto= $_FILES["Imagen_Producto"] ["name"];

if(isset($foto) && $foto= $_FILES["Imagen_Producto"] ["name"] != ""){
  $ruta= $_FILES["Imagen_Producto"] ["tmp_name"];
  $destino="../Fotos/".$foto;
  copy($ruta,$destino);
  }
  else {
  

  
  $destino = "";
  
  
  
  
  }







$Talla=$_POST["Talla"];
$Color= $_POST["Color"];
$Material=$_POST["Material"];
$precio=$_POST["precio"];
$Descripcion=$_POST["Descripcion"];
$ID_categoria= $_POST["ID_categoria"];

switch ($ID_categoria) {

case "Chaquetas" :    $ID_categoria = "CAT01";
break;

case"Pantalones" :    $ID_categoria = "CAT02";
break;

case "Formal" :    $ID_categoria = "CAT03";
break;

case "Informal" :    $ID_categoria = "CAT04";
break;

case "Blusa" :    $ID_categoria = "CAT05";
break;

default: "";
break;



}




$ID_clasificacion= $_POST['ID_clasificacion'];
switch ($ID_clasificacion) {

  case"Unisex" :    $ID_clasificacion = "CLAS01";
  break;
  
  case "Mujeres" :    $ID_clasificacion = "CLAS02";
  break;
  
  case "Niños" :    $ID_clasificacion = "CLAS03";
  break;
  
  case "Bebes" :    $ID_clasificacion = "CLAS04";
  break;
  
  case "Niñas" :    $ID_clasificacion = "CLAS05";
  break;

  case "Hombres" :    $ID_clasificacion = "CLAS06";
  break;
  
  
  default: "";
  break;
  
  
  
  }


$conectar = mysqli_connect("localhost","root","","trapitos");


$consulta = "INSERT into producto(ID_Producto,Nombre_Producto,Imagen_Producto,Talla,Color,Material,precio,Descripcion,ID_categoria,ID_clasificacion) 
values ('$ID_Producto','$Nombre_Producto','$destino','$Talla','$Color','$Material','$precio','$Descripcion','$ID_categoria','$ID_clasificacion')";
if(mysqli_query($conectar,$consulta)){
echo "Datos insertados a la base de datos";
}else{
  echo "ERROR: No se ha podido almacenar la informacion $consulta.". mysqli_error($conectar);
}




mysqli_close($conectar);




?>

<a  href="administraproducto.php"> Volver Administra Producto </a>
</main>
</table>
</div>
</div>

<footer class="main-footer">
  <strong>Copyright &copy; 2018-2020 <a href="index.html">2 Version </a></strong>Mis Trapitos S.A
  </footer>
</div>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
<?php
}else{
  header("location:../iniciarsesion.html");
}
?>