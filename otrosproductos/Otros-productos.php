<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!doctype html>
<html lang="en">
    <head>
    <title>Tienda MT</title>
    <meta charset="utf-8">
    <link href="estilootrosproductos.css"rel="StyleSheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
<body class="hidden">

    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="iconos/logomt.PNG" alt="facebook">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="menuusuario.php" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="menuusuario.php" id="enlace-trabajo" class="btn-header">Trabajo</a>
                    <a href="menuusuario.php" id="enlace-servicio" class="btn-header">Servicio</a>
                    <a href="menuusuario.php" id="enlace-sesion" class="btn-header">Inicio Sesión</a>
                    <a href="menuusuario.php" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Mis Trapitos</h1>
            <h2>Tienda de Ropa Online</h2>
            <h3><?php  echo"Bienvenido". " ". $_SESSION["usuario"]."<a href='logout.php'> Salir </a>"?></h3>
            <br><br><br>
            <h4><a href="usuarioactualizar.php" id="<?php echo $_SESSION['id'];?>">Mi Perfil</a></h4>

        </div>
    </header>

    <div class="productos">
      <center>
    <h2><a href="Productos.html"></a>Otros Productos</h2><br><br>
  </center>
  </div>
  <div class="container">   
    <div class="card-columns mt-3">
  
      <div class="card1 " style="width: 18rem;">
        <img class="card-img-top" src="OtrosProductos/otro-producto1.jpg"  alt="Card image cap"width="31%" height="25%">
        <div class="card-body">
          <h5 class="card-title">Porcelana</h5>
          <p class="card-text"> $15.000.</p>
          <a href="Producto1.php" class="btn btn-primary">Ver más detalles</a>
        </div>
      </div>
      <div class="card2" style="width: 18rem;">
        <img class="card-img-top" src="OtrosProductos/otro-producto2.jpg" alt="Card image cap"width="31%" height="25%">
        <div class="card-body">
          <h5 class="card-title">Porcelana</h5>
          <p class="card-text"> $15.000</p>
          <a href="producto2.php" class="btn btn-primary">Ver más detalles</a>
        </div>
      </div>
      <div class="card3" style="width: 18rem;">
        <img class="card-img-top" src="OtrosProductos/otro-producto3.jpg" alt="Card image cap"width="31%" height="25%">
        <div class="card-body">
          <h5 class="card-title">Porcelana</h5>
          <p class="card-text"> $15.000</p>
          <a href="producto3.php" class="btn btn-primary">Ver más detalles</a>
        </div>
      </div>
    </div>
  </div> 
    <br><br><br><br><br><br><br><br>
    <footer>
      <! --Seccion de contacto (footer)-->
 

      <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="iconos/logomt.PNG" alt="">
            </div>
            <div class="iconos">
                <img src="iconos/instagram.png" alt="facebook" width="3%" height="3%">
                <img src="iconos/whatsapp.png" alt="facebook" width="3%" height="3%">
                <img src="iconos/facebook (1).png" alt="facebook" width="3%" height="3%"> 
                <img src="iconos/youtube.png" alt="facebook" width="3%" height="3%">
                <img src="iconos/github.png" alt="facebook" width="3%" height="3%">
            </div><br><br><br>
            <img src="iconos/correo.png" alt="" width="4%" height="4%">&nbsp;&nbsp;&nbsp;&nbsp;<a href="Contactanos.html" ide="enlace-contacto" >Dejanos tu opinion de nuestra pagina</a>
            <p>La pacion e innovacion es lo que nos distingue del resto</p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}else{
    header("location:iniciarsesion.html");
}
?>