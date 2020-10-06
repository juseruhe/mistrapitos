<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!doctype html>
<html lang="en">
    <head>
    <title>Tienda MT</title>
    <meta charset="UTF-8">
    <link rel="icon" href="iconos/logomt.PNG"width="100%" height="100%"/>

    <link href="estiloscss/estilousuarioactualizar.css"rel="StyleSheet">
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
                    <a href="menuusuario.php" id="enlace-Promocion" class="btn-header">Promocion</a>
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
            <h3><?php  echo"Bienvenido". " ". $_SESSION["usuario"]."<a href='logout.php'> <br>Cerrar Sesión </a>"?></h3>

        </div>
    </header>
    <br>
  
    <section class="perfil" id="perfil">
    <div class="info">
<h2>Mis Datos</h2>
</div>
  <?php
        require("crudservicios/modelojson.php");
        $mostrar2 = new Datos();
        $resultado =$mostrar2->readUsuarioModel($_SESSION["usuario"],"usuario");
        if($resultado){
            foreach($resultado as $row => $item){
  ?>

<section class="usuarioactualiza" id="regi">

        <form  method="POST" action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=updateusuario">
        
        <div class="form"> Tipo de Documento: </div> 
            <div class="resp">
            <?php echo $item["Nombre"] ;?>
                <input type="hidden" name="ID_Tipo_Documento" value="<?php echo $item["Nombre"];  ?>">
                </div> 
        
        
        <div class="form"> Número de Documento:</div>
        <div class="resp">
            <?php echo $item["ID_Usuario"] ;   ?> 
                <input type="hidden" name="ID_Usuario" value="<?php echo $item["ID_Usuario"];  ?>">
                </div>
        
        <div class="form"> Rol: </div>
        <div class="resp">
            <?php echo $item["Nombre_Rol"] ;   ?> </div>
            </div>

        <div class="form"> Género:</div> 
        <div class="resp">
            <select name="ID_Genero">  
                <option> <?php echo $item["Nombre_Genero"] ;   ?> </option>
                <?php $Nombre_Genero = new Datos(); 
                $MostrarGenero = $Nombre_Genero->todoGeneroModel($item["Nombre_Genero"],"genero");
                if($MostrarGenero){
                foreach($MostrarGenero as $rowgen => $itemgen){
                ?>;
                <option> <?php echo $itemgen["Nombre_Genero"];}} ?>
                </option>
            </select > </div> 

        <div class="form"> Ciudad: </div>
        <div class="resp">
            <select name="ID_Ciudad"> 
                <option><?php echo $item["Nombre_Ciudad"] ;  ?> </option>
                <?php $medellin = new Datos();
                $mostrarMedellin = $medellin->mostrarCiudades("Medellín","ciudad");
                if($mostrarMedellin){
                foreach($mostrarMedellin as $rowMedellin => $itemMedellin){
                ?> 
                <option> <?php echo $itemMedellin["Nombre_Ciudad"] ;   }}?> </option>
                <?php $cali  = new Datos();
                $mostrarCali = $cali->mostrarCiudades("Cali","ciudad");
                if($mostrarCali){
                foreach($mostrarCali as $rowCali => $itemCali){
                ?>
                <option> <?php echo $itemCali["Nombre_Ciudad"] ;}} ?> </option>

                <?php $bogota  = new Datos();
                $mostrarBogota = $cali->mostrarCiudades("Bogotá","ciudad");
                if($mostrarBogota){
                foreach($mostrarBogota as $rowBogota => $itemBogota){
                ?>
                <option> <?php echo $itemBogota["Nombre_Ciudad"] ;}} ?> </option>
            </select> </div>


        <div class="form"> Primer Nombre: </div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["Primer_Nombre"] ;   ?> " name="Primer_Nombre"/>
                </div>
                
        <div class="form"> Segundo Nombre: </div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["Segundo_Nombre"] ;   ?> " name="Segundo_Nombre"/></div>
                </div>
                
        <div class="form"> Primer Apellido: </div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["Primer_Apellido"] ;   ?> " name="Primer_Apellido"/></div> 
                </div>
                
        <div class="form"> Segundo Apellido:</div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["Segundo_Apellido"] ;   ?> " name="Segundo_Apellido"/> </div>
                </div>
                
        <div class="form"> Fecha de Nacimiento:</div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["fecha_nacimiento"] ;   ?> " name="fecha_nacimiento" /></div> 
                </div>
                
        <div class="form"> Teléfono:  </div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["Telefono"] ;   ?> " name="Telefono"  /></div>
                </div>
                
        <div class="form"> Correo Electrónico: </div>
            <div class="resp">
                <input type="email"  value="<?php echo $item["Correo"] ;   ?> " name="Correo"  /></div> 
                </div>
                
        <div class="form"> Contraseña: </div>
            <div class="resp">
                <input type="password"  value="<?php echo $item["Contrasena"] ;?> " name="Contrasena"  /></div> 
                </div>
                
        <div class="form"> Dirección:  </div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["direccion"] ;   ?> " name="direccion" /></div>
                </div>
                
        <div class="form"> Observaciones: </div>
            <div class="resp">
                <input type="text"  value="<?php echo $item["observaciones"] ;   ?> " name="observaciones" /> </div>
                </div>
                
        <input class="guardar" type="submit" value="Guardar" class="guardar">
    <!--<a href="perfilusuario.php"> Volver a ver perfil </a>-->
    </form>
</section>
  


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
}}}else{
    header("location:iniciarsesion.html");
}
?> 