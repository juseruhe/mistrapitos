<?php
session_start();
if(isset($_SESSION["usuario"])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Home Administrador</title>
  <link rel="icon" href="../../iconos/logomt.PNG"width="100%" height="100%"/>
  <link href="../../estiloscss/estiloeditarpro.css"rel="StyleSheet">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
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
                <h2>Editar Producto</h2>
            </div>
          </header>

    </div>
</div>
<div class="content-wrapper">
  <main class="container p-4">
  <div class="row">
  </div>
    <div class="col-md-8">
      <table class="table table-bordered">

        <tbody>
          <?php
          require_once("../../crudservicios/modelojson.php");
          $id= $_GET["id"];

          $producto = new Datos();
          $mostrarProducto = $producto->editarproducto($id,"producto");

          if($mostrarProducto){

          foreach($mostrarProducto as $row=> $item)
          
          {
          ?>

      <section class="crearproductos" id="crear">

           <form  action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=updateproducto" method="POST"
           enctype="multipart/form-data" >
          
           <div class="proingresa1"> Código del Producto </div>
           <div class="resp1">  <?php echo $item['ID_Producto']; ?> </div>
           <input type="hidden" name="ID_Producto"  value="<?php echo $item['ID_Producto']; ?>" > 


           <div class="proingresa1"> Nombre del Producto: </div>
           <div class="resp1"> 
             <input type="text" name="Nombre_Producto"   value="<?php echo $item['Nombre_Producto']; ?>"/> 
            </div> 

            
             <div class="proingresa1"> Imagen del Producto: </div>
             <div class="resp1">
            <img src="<?php echo $item['Imagen_Producto']?>" width=100 height=100 alt="foto"/> 
            <input type="file" value name="Imagen_Producto" />
           </div>

            <div class="proingresa1"> Talla: </div>
            <div class="resp1">
             <input type="text" name="Talla"   value="<?php echo $item['Talla']; ?>" />
           </div>


           <div class="proingresa2"> Color: </div>
        <div class="resp2">
        <input type="text" name="Color"   value="<?php echo $item['Color']; ?>" />
        </div>
             

        <div class="proingresa2"> Material: </div>
        <div class="resp2">
        <input type="text" name="Material"   value="<?php echo $item['Material']; ?>"/>
        </div>
            
        <div class="proingresa2"> Valor: </div>
        <div class="resp2">
        <input type="text" name="Valor"   value="<?php echo $item['Valor']; ?>"/>
        </div>

            

        <div class="proingresa2"> Categoria: </div>
          <div class="resp2">       

            <select name="ID_categoria">
            <option> <?php echo $item['Nombre_Categoria']?> </option>
            <?php
          $Categoria = new Datos();
          $mostrarCategoria= $Categoria->mostrarCategoria($item["Nombre_Categoria"],"categoria");
           if($mostrarCategoria){
            foreach($mostrarCategoria as $rowcat => $itemcat){
            ?>
           <option> <?php echo $itemcat["Nombre_Categoria"]; }} ?> </option>             
            </select>
            </div>



            <div class="proingresa2"> Clasificacion: </div>
          <div class="resp2">         

          <select name="ID_clasificacion" id="">
          <option> <?php echo $item["Nombre_Clasificacion"];  ?></option>
         <?php
       $Clasificacion = new Datos();
       $mostrarClasificacion = $Clasificacion->mostrarClasificacion($item["Nombre_Clasificacion"],
       "clasificacion");
       if($mostrarClasificacion){
        foreach($mostrarClasificacion as $rowcla => $itemcla){
        ?>
        <option><?php echo $itemcla["Nombre_Clasificacion"]; }}  ?></option>
        </select>
        </div>


        <div class="proingresa2"> Descripcion: </div>
        <div class="resp2">
        <input type="text" name="Descripcion"   value="<?php echo $item['Descripcion']; ?>"/>
        </div>
        
        
        <input type="submit" value="Actualizar Datos" class="guardar">
      <br>
                <a href="administraproducto.php" class="volver">
                 Volver Administrar Productos
                </a>
             
            </form>

        </section>
        <?php }} ?>

<br>
<strong>Copyright &copy; 2018-2020 <a href="paneladministrador.php">2 Version </a>Mis Trapitos S.A</strong>

</body>
</html>
<?php

}else{
  header("location:../../logout.php");
}
?>