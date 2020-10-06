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
    <link href="productos.css" rel="StyleSheet" type="text/css">   

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
    <a href="administrador.php"> <img class="logo" src="imagenes/logomt.PNG"/> </a>
    </div>
<div class="contenedor">
  <header class="nav-bar">
  <ul>
        <li>
          <a href="administrador.php">Inicio</a>
        </li>
        <li>
          <a href="Productos.php">Productos</a>
        </li>
        <li>
          <a href="iniciarsesion.html">Promociones</a>
        </li>
        <li>
          <a href="administrador.php">Nosotros</a>
        </li>
        <li>
          <a href="noticias.php">Noticias</a>
        </li>
        <li>
          <a href="Contactanos.html">Contactanos</a>
        </li>
      </ul>
  </header>
    </div>
    <div class="productos">
    <h2><a href="Productos.html"></a>Todos los Productos</h2><br><br>
  </div>
  <div class="container">   
    <div class="card-columns mt-3">
  
      <div class="card1" style="width: 18rem;">
        <img class="card-img-top" src="../Producto/categoria1/producto1.jpeg"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Chaqueta en antefluido</h5>
          <p class="card-text"> $45.000.</p>
          <a href="../Producto/Producto1.php" class="btn btn-primary">Editar</a>
        </div>
      </div>
      <div class="card2" style="width: 18rem;">
        <img class="card-img-top" src="../Producto/categoria1/producto2.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Chaqueta en antefluido</h5>
          <p class="card-text"> $45.000</p>
          <a href="../Producto/producto2.php" class="btn btn-primary">Editar</a>
        </div>
      </div>
      <div class="card3" style="width: 18rem;">
        <img class="card-img-top" src="../Producto/categoria1/producto3.1.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Chaqueta en antefluido</h5>
          <p class="card-text"> $45.000</p>
          <a href="../Producto/producto3.php" class="btn btn-primary">Editar</a>
        </div>
      </div>
    </div>
  </div> 
    <br><br>
    <div class="container">   
      <div class="card-columns mt-3">
        <div class="card1" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria1/producto4.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta en antefluido</h5>
            <p class="card-text">  $45.000</p>
            <a href="../Producto/producto4.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria2/producto5.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta en antefluido cuello alto</h5>
            <p class="card-text"> $28.000</p>
            <a href="../Producto/Producto5.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria2/producto6.1.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta en antefluido cuello alto</h5>
            <p class="card-text"> $28.000</p>
            <a href="../Producto/Producto6.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    </div> 
    <br><br>
    <div class="container">   
      <div class="card-columns mt-3">
        <div class="card1" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria2/producto7.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta en antefluido cuello alto</h5>
            <p class="card-text">$28.000.</p>
            <a href="../Producto/Producto7.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria3/producto8.3.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta motera</h5>
            <p class="card-text"> $60.000</p>
            <a href="../Producto/Producto8.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria3/producto9.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta motera</h5>
            <p class="card-text"> $60.000</p>
            <a href="../Producto/Producto9.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">   
      <div class="card-columns mt-3">
        <div class="card1" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria3/producto10.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta motera</h5>
            <p class="card-text">$60.000.</p>
            <a href="../Producto/Producto10.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto11.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto11.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto12.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto12.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">   
      <div class="card-columns mt-3">
    
        <div class="card1" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto13.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text">$45.000.</p>
            <a href="../Producto/Producto13.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto14.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto14.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto15.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto15.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">   
      <div class="card-columns mt-3">
        <div class="card1" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto17.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text">$60.000.</p>
            <a href="../Producto/Producto17.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto18.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto18.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto19.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto19.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">   
      <div class="card-columns mt-3">
        <div class="card1" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto22.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta motera</h5>
            <p class="card-text">$60.000.</p>
            <a href="../Producto/Producto22.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria4/producto24.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $45.000</p>
            <a href="../Producto/Producto24.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
        <div class="card3" style="width: 18rem;">
          <img class="card-img-top" src="../Producto/categoria5/producto21.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Chaqueta enguantada</h5>
            <p class="card-text"> $55.000</p>
            <a href="../Producto/Producto25.php" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
 <div class="box2"><footer>
   Visita nuestras redes Sociales
      <a href="https://www.facebook.com"> <img src="imagenes/facebook.png" alt="facebook" width="10" height="10"></a> 
      <a href="https://twitter.com"> <img src="imagenes/twiter.jpg" alt="twiter" width="10" height="10"></a> 
      <a href="https://www.instagram.com"> <img src="imagenes/instagram.jpg" alt="facebook" width="10" height="10"></a>
    </footer></div>
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