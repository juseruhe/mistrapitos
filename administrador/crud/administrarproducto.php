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
  <link href="../../estiloscss/estiloadminproductos.css"rel="StyleSheet">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Mis Trapitos</h2>
        <ul>
            <li><a href="paneladministrador.php"><i class="fas fa-home"></i>Inicio</a></li>
            <li><a href="administrarusuario.php"><i class="fas fa-user"></i>Administrar Usuarios</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Administrar Productos</a></li>
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
                <h2>Administrar Productos</h2>
            </div>
          </header>

    </div>
</div>

    
  <!-- Content Wrapper. Contains page content -->
  <main class="container p-4">
  <div class="row">
  </div>
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th>ID_Producto</th>
            <th>Nombre_Producto</th>
            <th>Imagen_Producto</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Material</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Clasificacion</th>
            <th>Descripción</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php
         
         require_once("../../crudservicios/modelojson.php");

         $mostrarP = new Datos();

         $resultado = $mostrarP->mostrarProductos();

         if($resultado){

          foreach($resultado as $row => $item){

           ?>
          <tr>
            <td><?php echo $item['ID_Producto']; ?></td>
            <td><?php echo $item['Nombre_Producto']; ?></td>
            <td><img src="<?php echo $item['Imagen_Producto']?>" width=100 height=100 alt="foto"/></td>
            <td><?php echo $item['Talla']; ?></td>
            <td><?php echo $item['Color']; ?></td>
            <td><?php echo $item['Material']; ?></td>
            <td><?php echo $item['Valor']; ?></td>
            <td><?php echo $item['Nombre_Categoria']; ?></td>
            <td><?php echo $item['Nombre_Clasificacion']; ?></td>
            <td><?php echo $item['Descripcion']; ?></td>
           
            <td>
              <a href="editproducto.php?id=<?php echo $item['ID_Producto'] ?>" >
              <input type="image" value="Eliminar" alt="submit" src="../../iconos/captcha.png" width="40px" height="40px" ?>
                
              </a>
              <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=deleteproducto" method="post">

                <input type="hidden" name="ID_Producto" value="<?php echo $item["ID_Producto"] ?>">
                <input type="image" value="Eliminar" alt="submit" src="../../iconos/borrar.png" width="40px" height="40px" ?>
              
              </form>

              </a>
            </td>
          </tr>
          <?php

          }}
?>
          
        </tbody>
      </table>
   
    </div>
 <!--   -->
<section class="crearproductos" id="crear">
  <form action="http://localhost/tiendavirtual/crudservicios/api.php?apicall=createproducto" method="POST" enctype="multipart/form-data">

      <div class="proingresa1"> Código del Producto </div>
        <div class="resp1">
        <input type="text" name="ID_Producto">
        </div>

      <div class="proingresa1"> Nombre del Producto: </div>
        <div class="resp1">
        <input type="text" name="Nombre_Producto" id="Nombre_Producto">
        </div>

      <div class="proingresa1"> Imagen del Producto: </div>
        <div class="resp1">
        <input type="file" name="Imagen_Producto">
        </div>

      <div class="proingresa1"> Talla: </div>
        <div class="resp1">
        <input type="text" name="Talla" id="Talla">
        </div>

      <div class="proingresa1"> Color: </div>
        <div class="resp1">
        <input type="text" name="Color" id="Color">
        </div>

      <div class="proingresa2"> Material: </div>
        <div class="resp2">
        <input type="text" name="Material" id="Materia">
        </div>

      <div class="proingresa2"> Valor: </div>
        <div class="resp2">
        <input type="text" name="Valor" id="Valor">
        </div>

      <div class="proingresa2"> Descripcion: </div>
        <div class="resp2">
        <input type="text" name="Descripcion" id="Descripcion">
        </div>

      <div class="proingresa2"> Categoria: </div>
          <div class="resp2">
            <select name="ID_categoria" id="ID_categoria"> 
              <option>Chaquetas</option>
              <option>Pantalones</option>
              <option>Formal</option>
              <option>Informal</option>
              <option >Blusa</option>
            </select></br>
          </div>

      <div class="proingresa2"> Clasificacion: </div>
          <div class="resp2">
            <select name="ID_clasificacion" id="ID_clasificacion"> 
              <option>Unisex</option>
              <option>Mujeres</option>
              <option>Niños</option>
              <option>Bebes</option>
              <option>Niñas</option>
              <option>Hombres</option>
            </select></br>
          </div>

            <input type="submit" value="Guardar"class="guardar">
  </form>
    
  </section>


<br>
<strong>Copyright &copy; 2018-2020 <a href="paneladministrador.php">2 Version </a>Mis Trapitos S.A</strong>

</body>
</html>
<?php

}else{
  header("location:../../logout.php");
}
?>