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
  <link rel="icon" href="../../iconos/logomt.PNG"width="100%" height="100%"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="admin.css"rel="StyleSheet">

    <link href="../../estiloscss/estiloadminproducto.css"rel="StyleSheet">
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
        <a href="#" class="nav-link">Nosotros</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admincrearproducto.php" class="nav-link">Productos</a>
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
    <a href="paneladministrador.php" class="brand-link">
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
  <main class="container p-4">
  <div class="row">
  </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID_Producto</th>
            <th>Nombre_Producto</th>
            <th>Imagen_Producto</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Material</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Clasificacion</th>
            <th>Descripción</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php
         
         require_once("../../crudservicios/modelojson.php");

         $mostrarP = new Datos();

         $resultado = $mostrarP->mostrarProductos();

         if($resultado){

          foreach($resultado as $row => $item){

           ?>
          <tr>
            <td><?php echo $item['ID_Producto']; ?></td>
            <td><?php echo $item['Nombre_Producto']; ?></td>
            <td><img src="<?php echo $item['Imagen_Producto']?>" width=100 height=100 alt="foto"/></td>
            <td><?php echo $item['Talla']; ?></td>
            <td><?php echo $item['Color']; ?></td>
            <td><?php echo $item['Material']; ?></td>
            <td><?php echo $item['Valor']; ?></td>
            <td><?php echo $item['Nombre_Categoria']; ?></td>
            <td><?php echo $item['Nombre_Clasificacion']; ?></td>
            <td><?php echo $item['Descripcion']; ?></td>
           
            <td>
              <a href="editproducto.php?id=<?php echo $item['ID_Producto'] ?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=deleteproducto" method="post">

                <input type="hidden" name="ID_Producto" value="<?php echo $item["ID_Producto"] ?>">
                <input type="image" value="Eliminar" alt="submit" src="../../iconos/eliminar.png" width="90%" height="35px" class="btn btn-danger"?>
              
              </form>

              </a>
            </td>
          </tr>
          <?php

          }}
?>
          
        </tbody>
      </table>
    <!--   -->
    </div>

<section class="crearproductos" id="crear">
  <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=createproducto" method="POST" enctype="multipart/form-data">

      <div class="proingresa1"> Código del Producto </div>
        <div class="resp1">
        <input type="text" name="ID_Producto">
        </div>

      <div class="proingresa1"> Nombre del Producto: </div>
        <div class="resp1">
        <input type="text" name="Nombre_Producto" id="Nombre_Producto">
        </div>

      <div class="proingresa1"> Imagen del Producto: </div>
        <div class="resp1">
        <input type="file" name="Imagen_Producto">
        </div>

      <div class="proingresa1"> Talla: </div>
        <div class="resp1">
        <input type="text" name="Talla" id="Talla">
        </div>

      <div class="proingresa1"> Color: </div>
        <div class="resp1">
        <input type="text" name="Color" id="Color">
        </div>

      <div class="proingresa2"> Material: </div>
        <div class="resp2">
        <input type="text" name="Material" id="Materia">
        </div>

      <div class="proingresa2"> Valor: </div>
        <div class="resp2">
        <input type="text" name="Valor" id="Valor">
        </div>

      <div class="proingresa2"> Descripcion: </div>
        <div class="resp2">
        <input type="text" name="Descripcion" id="Descripcion">
        </div>

      <div class="proingresa2"> Categoria: </div>
          <div class="resp2">
            <select name="ID_categoria" id="ID_categoria"> 
              <option>Chaquetas</option>
              <option>Pantalones</option>
              <option>Formal</option>
              <option>Informal</option>
              <option >Blusa</option>
            </select></br>
          </div>

      <div class="proingresa2"> Clasificacion: </div>
          <div class="resp2">
            <select name="ID_clasificacion" id="ID_clasificacion"> 
              <option>Unisex</option>
              <option>Mujeres</option>
              <option>Niños</option>
              <option>Bebes</option>
              <option>Niñas</option>
              <option>Hombres</option>
            </select></br>
          </div>

            <input type="submit" value="Guardar"class="guardar">
  </form>
    
  </section>


</main>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mis opoppo</a></li>
              <li class="breadcrumb-item active">jaaaaaa</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
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
  header("location:../index.html");
}
?>
