<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!doctype html>
<html lang="en">
  <head> 
    <title>Tienda MT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="unsoloproducto.css" rel="StyleSheet" type="text/css">   
    <link href="footer.css" rel="StyleSheet" type="text/css">   

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="sss/sss.min.js"></script>
    <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
    <script>jQuery(function($) {$('.slider').sss();});</script>

  </head>
  <body> <!-- papa de todos -->
  <h3><?php  echo"Bienvenido". " ". $_SESSION["usuario"]."<a href='logout.php'> Salir </a>"?></h3>
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
          <a href="index.html">Inicio</a>
        </li>
        <li>
          <a href="Productos.html">Productos</a>
        </li>
        <li>
          <a href="iniciarsesion.html">Iniciar Sesion</a>
        </li>
        <li>
          <a href="registrarse.html">Registrarse</a>
        </li>
        <li>
          <a href="noticias.php">Noticias</a>
        </li>
        <li>
          <a href="Contactanos.html">Contactanos</a>
        </li>
      </ul>
    </header>    </div>
    <div class="botonesmenu">
      <button class="btn btn-primary d-block">Inicio</button>
      <button class="btn btn-primary d-block">Promociones</button>
      <button class="btn btn-primary d-block">Noticias</button>
      <button class="btn btn-primary d-block">Contactanos</button>
      <button class="btn btn-primary  d-block">Productos</button>
    </div>



    <div class="slider" style="text-align: center;">
        <img src="Producto/categoria1/producto1.jpeg" />
        <img src="Producto/categoria1/producto1.1.jpeg" />
      </div>

      <h2>Chaqueta en antifluido</h2>
      <p>Chaqueta en antefluido Covid 19 diseño unicolor y estampada, incluye tapabocas</p>
      <h3>$ 45.000</h3>

      <div class="tallas">
      <input type="button" value="S">
      <input type="button" value="M">
      <input type="button" value="L">
      <input type="button" value="XL">
      </div>
  
      <footer>
    <div class="container-body">

      <div class="colum1">
      <h1>servicios al cliente</h1>
      <br><br><br><br>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
    header("location:iniciarsesion.html");
}
?>