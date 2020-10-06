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
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet"  href="edit.css"/>
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
        <a href="#" class="nav-link">Productos</a>
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
      <!-- /.sidebar-menu -->
      </div>
    </aside>
  <!-- Content Wrapper. Contains page content -->
  
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
  <?php

if($_POST["numero"]=="" ||  $_POST["nombre1"]=="" ||  $_POST["apellido1"]=="" || $_POST["fnaci"]=="" ||  

$_POST["telefono"]=="" ||  $_POST["correo"]=="" ||    $_POST["genero"]=="" ||  $_POST["ciudad"]=="" ||  

 $_POST["direccion"]==""   )

{

    echo " <h3> Hay Datos Vaciós Por Favor Llenarlos </h3>
    <a href='administrarusuario.php'> Volver a Administrar Usuarios </a>
    <a href='paneladministrador.php'> Ir a Panel de Administración </a>
    ";

    
}



else {


  $id = $_GET["id"];

$numero = $_POST["numero"];
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$fnaci = $_POST["fnaci"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$genero = $_POST["genero"];

if($genero == "Masculino"){
    $genero = "GEN01";
}
elseif($genero == "Femenino"){
    $genero= "GEN02";
}
else{
    $genero = "";
}

$ciudad=$_POST["ciudad"];
switch($_POST["ciudad"]){
    case "Bogotá":$ciudad="CIU008";
    break;
   
    case "Cali":$ciudad="CIU012";
    break;
    
    case "Medellín":$ciudad="CIU039";
    break;   
    }

    $direccion=$_POST["direccion"];
$observaciones=$_POST["observaciones"];

$conectar = mysqli_connect("localhost","root","","trapitos");

$consulta = "UPDATE usuario set ID_Usuario='$numero',Primer_Nombre='$nombre1',
Segundo_Nombre='$nombre2',Primer_Apellido='$apellido1',Segundo_Apellido='$apellido2',fecha_nacimiento='$fnaci',
Telefono='$telefono',
Correo='$correo',ID_Genero='$genero',ID_Ciudad='$ciudad',direccion='$direccion',observaciones='$observaciones' 
where ID_Usuario = '$id'";

$insertar= mysqli_query($conectar,$consulta);
echo "<h3> Datos Actualizados a la Base de Datos</h3>";






}

?>

<a href="administrarusuario.php"> Volver Administrar Usuarios. </a>
<a href="paneladministrador.php"> Volver al Panel de Administrador. </a>
</main>
  </div>
</div>
</div>
</div>



  <footer class="main-footer">
  <strong>Copyright &copy; 2018-2020 <a href="index.html">2 Version </a></strong>Mis Trapitos S.A
  </footer>
</div>

<!-- ./wrapper -->

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
