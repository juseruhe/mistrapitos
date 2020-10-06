
<!doctype html>
<html lang="en">
  <head>
    <title>Tienda MT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="Imagenes/icono.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estiloindex.css"/>
    <link rel="stylesheet" href="footer.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="galleria.js"></script>
  </head>
  <body>
    <nav class="buscar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </nav>
    <div class="logo">
    <a href="index.html"> <img class="logo" src="imagenes/logomt.PNG"/> </a>
    </div>
<div class="contenedor">
    <header class="nav-bar">
      <ul>
        <li>
          <a href="menuusuario.php">Inicio</a>
        </li>
        <li>
          <a href="Productos.php">Productos</a>
        </li>
        <li>
          <a href="Promociones.php">Promociones</a>
        </li>
        <li>
          <a href="menuusuario.php">Nosotros</a>
        </li>
        <li>
        <a href="Otros-productos.php">Otros Productos</a>
        </li>
        <li>
          <a href="Contactanos.html">Contactanos</a>
        </li>
      </ul>
    </header>

    

    <div class="botonesmenu">
      <a href="menuusuario.php"><button class="btn btn-primary d-block">Inicio</button></a>
      <button class="btn btn-primary d-block">Noticias</button>
      <a href="contactanos.html"><button class="btn btn-primary d-block">Contactanos</button></a>
      <a href="productos.php"><button class="btn btn-primary  d-block">Productos</button></a>
      <button class="btn btn-primary  d-block">Accesorios</button>
    </div>

    



        <?php
$conectar = mysqli_connect("localhost","root","","trapitos");
$result=mysqli_query($conectar,"select * from usuario ");
        if ($datos=mysqli_fetch_array($result)){  
        ?>

    <form method = "post" action ="updatefinal.php">
 <h1>Perfil Actual</h1>
 <h6>tipo de documento</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["nombre"]?>"><br>
        <h6>numero de documento</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["ID_Usuario"]?>"><br>
        <h6>rol</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Nombre_Rol"]?>"><br>
        <h6>genero</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Nombre_Genero"]?>"><br>
        <h6>ciudad</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Nombre_Ciudad"]?>"><br>
        <h6>primer nombre</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Primer_Nombre"]?>"><br>
        <h6>segundo nombre</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Segundo_Nombre"]?>"><br>
        <h6>primer apellido</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Primer_Apellido"]?>"><br>
        <h6>segundo apellido</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Segundo_Apellido"]?>"><br>
        <h6>fecha de nacimiento</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["fecha_nacimiento"]?>"><br>
        <h6>telefono</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Telefono"]?>"><br>
        <h6>correo</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["Correo"]?>"><br>
        <h6>direccion</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["direccion"]?>"><br>
        <h6>onservacion</h6>
        <input type="text" name="correonuevo" value="<?php echo $datos["observaciones"]?>"><br>

        <br><br><input type="submit" value="modificar">

    </form>
    <?php
    }else
    echo "no existe el usuario solicitado";
    ?>


<br><br>
<footer>
  <div class="container-body">

    <div class="colum1">
    <h1>servicios al cliente</h1>
    <p>Terminos y Condiciones<br>
      Autorización para el Tratamiento<br> de Datos de Clientes<br>
      Registro de usuario<br>
      Tiendas<br>
      Política de Protección de Datos<br>
      Contactanos</p> 
    </div>

    <div class="colum3">
      <h1>Mas de  Mis Trapitos</h1>
      <div class="row2">
        <label>
          Nuestra empresa<br>
          Proveedores<br>
          Venta empresa<br>
          Inversionistas<br>
          Canal de Integridad<br>

        </label>
      </div>
    </div>

    <div class="colum2">
      <h1>redes sociales</h1>
      <div class="row">
        <img src="imagenes/facebook.png" alt="facebook" width="30" height="30">
        <label>siguenos en Facebook</label>
      </div>
      <div class="row">
        <img src="imagenes/instagram.jpg" alt="facebook" width="30" height="30">
        <label>siguenos en Instagram</label>
      </div>
      <div class="row">
        <img src="imagenes/twiter.jpg" alt="twiter" width="30" height="30">
        <label>siguenos en twiter</label>
      </div>
    </div>

    <div class="colum3">
      <h1>Informacion Contactos</h1>
      <div class="row2">
        <label>+57 3124845032
        </label>
      </div>
    </div>

    <div class="colum4">
      <h1>Compras</h1>
      <div class="row2">
        <label>Guía de tallas<br>
          Formas de pago.
          Compra segura<br>
        </label>
      </div>
    </div>


  </div>
</footer>


    </body>
</html> 