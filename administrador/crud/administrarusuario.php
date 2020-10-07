<?php
session_start();
if(isset($_SESSION["usuario"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Administrar Usuarios</title>
  <link rel="icon" href="../../iconos/logomt.PNG"width="100%" height="100%"/>
  <link href="../../estiloscss/estiloadminusuarios.css"rel="StyleSheet">
</head>
<body>

<div class="wrapper">
    <div class="sidebar" id="datos">
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
                <h2>Aministrar Usuarios</h2>
            </div>
          </header>

    </div>
</div>
<br>
<main class="container p-4">
  <div class="row">
  </div>
        <div class="col-md-8">
          <table class="table table-bordered">
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
             
              $usuarios = new Datos();

              $mostrarUsuarios = $usuarios->readUsuariosModel();


              if($mostrarUsuarios){

                foreach($mostrarUsuarios as $row => $item) {

               ?>
              <tr>
                <td name="num"><?php echo $item['ID_Usuario']; ?></td>
                <td><?php echo $item['Primer_Nombre']; ?></td>
                <td><?php echo $item['Segundo_Nombre']; ?></td>
                <td><?php echo $item['Primer_Apellido']; ?></td>
                <td><?php echo $item['Segundo_Apellido']; ?></td>
                <td><?php echo $item['fecha_nacimiento']; ?></td>
                <td><?php echo $item['Telefono']; ?></td>
                <td><?php echo $item['Correo']; ?></td>
                <td><?php echo $item['Nombre_Genero']; ?></td>
                <td><?php echo $item['Nombre_Ciudad']; ?></td>
                <td><?php echo $item['direccion']; ?></td>
                <td><?php echo $item['observaciones']; ?></td>
                <td>
                
                  
                  <a href="edit.php?id=<?php echo $item['ID_Usuario'] ?>">
                  <input type="image" value="Eliminar" alt="submit" src="../../iconos/captcha.png" width="40px" height="40px" ?>
                  </a>

                  <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=deleteusuario" method="post">
                    <input type="hidden" name="ID_Tipo_Documento" value="<?php echo $item["ID_Tipo_Documento"];?>">
                    <input type="hidden" name="ID_Usuario" value="<?php echo $item["ID_Usuario"]?>">
                    <input type="image" value="Eliminar" alt="submit" src="../../iconos/borrar.png" width="40px" height="40px" ?>                
                  </form>
                  
                </td>
              </tr>
              
              <?php } }?>
            </tbody>
          </table>
        </div>
      </div>
</main>

<strong>Copyright &copy; 2018-2020 <a href="paneladministrador.php">2 Version </a>Mis Trapitos S.A</strong>

</body>
</html>
<?php

}else{
  header("location:../../logout.php");
}
?>