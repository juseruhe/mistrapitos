<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!doctype html>
<html lang="en">
    <head>
    <title>Tienda MT</title>
    <meta charset="utf-8">
    <link rel="icon" href="../iconos/logomt.PNG"width="100%" height="100%"/>
    <link href="../estiloscss/estiloproductoindex.css"rel="StyleSheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
<body class="hidden">

    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="../iconos/logomt.PNG" alt="facebook">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajo</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Servicio</a>
                    <a href="#" id="enlace-Promocion" class="btn-header">Promocion</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Mis Trapitos</h1>
            <h2>Tienda de Ropa Online</h2>
            <h3><?php  echo"Bienvenido". " ". $_SESSION["usuario"]?></h3>

<br><br><br>
        </div>
    </header>

  <body> <!--   -->
  <div class="textos2">
  <h2> Todos Nuestros Productos</h2>
</div>

<section class="productos" id="pro">

<?php
require("../crudservicios/modelojson.php");
$objeto = new Datos();

$mostrarobj = $objeto->mostrarProductos();

if($mostrarobj){
    foreach($mostrarobj as $fila=>$campo){
        ?>
    <div class="card" style="width: 18rem;">
        <img img src="../administrador<?php echo $campo['Imagen_Producto']?>" class="card-img-top" alt="foto">
        <div class="card-body">
            <h5 class="card-title"><?php echo $campo['Nombre_Producto']; ?></h5>
            <p class="card-text"> <?php echo $campo['Valor']; ?> </p>
            <a href="#" class="btn btn-primary">Ver Detalles</a>
        </div>
    </div>
</section>

        <?php
    }
}
?>
<!-- NO BORRAR ESTE DIV -->

    <div class="contenedor"> 
       <!-- esto permite que los producto como 
        posicion "float" no queden encima del footer-->
    </div>




<footer id="contacto">
    <div class="footer contenedor">
        <div class="marca-logo">
            <img src="../iconos/logomt.PNG" alt="">
        </div>
        <div class="iconos">
            <img src="../iconos/instagram.png" alt="facebook" width="3%" height="3%">
            <img src="../iconos/whatsapp.png" alt="facebook" width="3%" height="3%">
            <img src="../iconos/facebook (1).png" alt="facebook" width="3%" height="3%"> 
            <img src="../iconos/youtube.png" alt="facebook" width="3%" height="3%">
            <img src="../iconos/github.png" alt="facebook" width="3%" height="3%">
        </div><br><br><br>
        <img src="../iconos/correo.png" alt="" width="4%" height="4%">&nbsp;&nbsp;&nbsp;&nbsp;<a href="Contactanos.html" ide="enlace-contacto" >Dejanos tu opinion de nuestra pagina</a>
        <p>La pacion e innovacion es lo que nos distingue del resto</p>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/filtro2.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
    header("location:iniciarsesion.html");
}
?>