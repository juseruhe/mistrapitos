<!doctype html>
<html lang="en">
    <head>
    <title>Tienda MT</title>
    <meta charset="utf-8">
    <link rel="icon" href="../iconos/logomt.PNG"width="100%" height="100%"/>
    <link href="unsoloproducto.css"rel="StyleSheet">
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

        </div>
    </header>
<?php

$id = $_GET["id"];
$conectar = mysqli_connect("localhost","root","","trapitos");

$consulta = "SELECT * FROM producto where ID_Producto = '$id' ";

$insertar= mysqli_query($conectar,$consulta);
echo "<h3> Productos </h3>";


while($chaqueta1=mysqli_fetch_assoc($insertar)){

?>
<center>
      <div class="card1" style="width: 18rem;">
        <img class="card-img-top" src="../administrador/crud/<?php echo $chaqueta1["Imagen_Producto"]?>"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"> Producto: <?php echo "$chaqueta1[Nombre_Producto]"?> </h5>
         <p class="card-text"> Talla: <?php echo "$chaqueta1[Talla]"?> </p>
          <p class="card-text"> Color:<?php echo "$chaqueta1[Color]"?> </p>
          <p class="card-text">Material:<?php echo "$chaqueta1[Material]"?> </p>
          <p class="card-text">precio:<?php echo "$chaqueta1[precio]"?> </p>
          <p class="card-text">Descripcion:<?php echo "$chaqueta1[Descripcion]"?> </p>
          <p class="card-text">Categoria:<?php 
          $consulta2 = "SELECT Nombre_Categoria FROM producto 
          join categoria on producto.ID_Categoria = categoria.ID_Categoria
          where ID_Producto = '$id' ";

          $insertar2 = mysqli_query($conectar,$consulta2);
          
          $categoria=mysqli_fetch_array($insertar2);


          echo "$categoria[Nombre_Categoria]";


          ?> </p>


<p class="card-text"> Clasificacion:<?php 
          $consulta3 = "SELECT Nombre_Clasificacion FROM producto 
          join clasificacion on producto.ID_clasificacion = clasificacion.ID_Clasificacion
          where ID_Producto = '$id' ";

          $insertar3 = mysqli_query($conectar,$consulta3);
          
          $clasificacion=mysqli_fetch_array($insertar3);


          echo "$clasificacion[Nombre_Clasificacion]";


          ?> </p>



          <a href="Producto1.php" class="btn btn-primary">Añadir al Carrito</a>
        </div>
      </div>
      
</center>

<?php
}
?>




<footer id="contacto">
    <div class="footer contenedor">
        <div class="marca-logo">
            <img src="iconos/logomt.PNG" alt="">
        </div>
        <div class="iconos">
            <img src="../iconos/instagram.png" alt="facebook" width="3%" height="3%">
            <img src="../iconos/whatsapp.png" alt="facebook" width="3%" height="3%">
            <img src="../iconos/facebook (1).png" alt="facebook" width="3%" height="3%"> 
            <img src="../iconos/youtube.png" alt="facebook" width="3%" height="3%">
            <img src="../iconos/github.png" alt="facebook" width="3%" height="3%">
        </div><br><br><br>
        <img src="iconos/correo.png" alt="" width="4%" height="4%">&nbsp;&nbsp;&nbsp;&nbsp;<a href="Contactanos.html" ide="enlace-contacto" >Dejanos tu opinion de nuestra pagina</a>
        <p>La pacion e innovacion es lo que nos distingue del resto</p>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/filtro2.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
