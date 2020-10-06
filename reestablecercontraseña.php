<!doctype html>
<html lang="en">
    <head>
    <title>Tienda MT</title>
    <meta charset="utf-8">
    <link rel="icon" href="iconos/logomt.PNG"width="100%" height="100%"/>
    <link href="estiloscss/estilorescon.css"rel="StyleSheet">
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
                    <a href="index.html" ide="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="index.html" ide="enlace-trabajo" class="btn-header">Trabajo</a>
                    <a href="index.html" ide="enlace-servicio" class="btn-header">Servicio</a>
                    <a href="index.html" ide="enlace-inicio-sesion" class="btn-header">Inicio Sesión</a>
                    <a href="index.html" ide="enlace-contacto" class="btn-header">Contacto</a>
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

    <div class="recuperar" id="recuperar">

        <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=mostrarcontrasena" method="POST"> 
            <h2>  Reestablecer Contraseña </h2><br>

            <div class="form"> Correo Electronico: </div> 
                <div class="resp">
                    <input type="email" name="Correo"/>
                </div>
            <div class="form"> Numero de Identificacion: </div> 
            <div class="resp">
                <input type="text" name="ID_Usuario"/><br> 
            </div>
            <input type="submit" value="Ver Contraseña"class="guardar"><br>
            <a href="index.html">Regresar a la Página Principal</a>

        </form>
    </div>

    
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
        <p>La pacion e innovacion es lo que nos distingue del resto</p>
    </div>
</footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>