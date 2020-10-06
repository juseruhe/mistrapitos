<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!doctype html>
<html lang="en"> 
    <head>
    <title>Tienda MT</title>
    <meta charset="utf-8">
    <link rel="icon" href="iconos/logomt.PNG"width="100%" height="100%"/>
    <link href="estiloscss/estilosmenuusuario.css"rel="StyleSheet">
    
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
            <h3><?php  echo"Bienvenido". " ". $_SESSION["usuario"]."<a href='logout.php'> Salir </a>"?></h3>
          <!--  <a href="http://localhost/proyecto-mistrapitos/3.DESARROLLO/HTML2/CRUD-SERVICIOS/api.php?apicall=readusuario?Correo=$_SESSION[usuario]" id="<?php # $_SESSION["usuario"];?>" name="Correo">Mi Perfil</a> -->
<br><br>
 <!--  <form action="http://localhost/proyecto-mistrapitos/3.DESARROLLO/HTML2/CRUD-SERVICIOS/api.php?apicall=readusuario" method="POST">

<input type="hidden" name="Correo" value="<?php echo $_SESSION["usuario"]   ?>">
  </form>-->
  <h4><a href="usuarioactualizar.php">Mi Perfil</a></h4>


        </div>
    </header>

    <main>
    <div class="contenedor2" id="trabajo">
            <h3>Nuestros Trabajo</h3> 
        
        <p class="after">Conoce lo que tenemos que ofrecerte.</p>
        <h4><a href="producto/productos_menuusuario.php" >TODA LA ROPA</a></h4>

    </div>

        <! --Seccion de nuestros trabajo (productos)-->
        <section class="galeria">

                <a href="#imagen1">
                    <img src="OtrosProductos/otro-producto2.jpg "alt="">
                </a>
                <a href="#imagen2">
                    <img src="Producto/categoria2/producto7.jpeg" alt="">
                </a>
                <a href="#imagen3">
                    <img src="Producto/categoria4/producto14.jpeg" alt="">
                </a>
                <a href="#imagen4">
                    <img src="Producto/categoria1/producto1.1.jpeg "alt="">
                </a>
                <a href="#imagen5">
                    <img src="Producto/categoria3/producto8.3.jpeg" alt="">
                </a>
                <a href="#imagen6">
                    <img src="OtrosProductos/otro-producto4.jpg" alt="">
                </a>
        </section>  
                
                <article class="light-box" id="imagen1">
                    <img src="OtrosProductos/otro-producto2.jpg"alt="">
                    <a href="" class="close">X</a>
                </article>
                <article class="light-box" id="imagen2">
                    <img src="Producto/categoria2/producto7.jpeg"alt="">
                    <a href="" class="close">X</a>
                </article>
                <article class="light-box" id="imagen3">
                    <img src="Producto/categoria4/producto14.jpeg"alt="">
                    <a href="" class="close">X</a>
                </article>
                <article class="light-box" id="imagen4">
                    <img src="Producto/categoria1/producto1.1.jpeg"alt="">
                    <a href="" class="close">X</a>
                </article>
                <article class="light-box" id="imagen5">
                    <img src="Producto/categoria3/producto8.3.jpeg"alt="">
                    <a href="" class="close">X</a>
                </article>
                <article class="light-box" id="imagen6">
                    <img src="OtrosProductos/otro-producto4.jpg"alt="">
                    <a href="" class="close">X</a>
                </article>
                


        <! --Seccion de nuestros servicios-->
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>Nuestros Servicios</h3>
                <p class="after">Siempre mejorando para ti</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="iconos/corbata.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Loren ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="iconos/gafas-de-sol.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Loren ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="iconos/moda.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Loren ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </section> 
<br><br>
        <! --Seccion de inicio de sesion-->
        <section class="team contenedor" id="Promocion">
                    <div class="Promociones">
                <center>
                <h2><a href="Productos.html"></a>Promociones</h2><br><br>
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
        </section> 
    </main>
 
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
<script src="js/filtro2.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
    header("location:iniciarsesion.html");
}
?>