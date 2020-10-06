<?php
session_start();
if(isset($_SESSION["usuario"])){

    if(($_POST["nombre1"]=="" || $_POST["nombre1"]== null ) || ($_POST["apellido1"]=="" || $_POST["apellido1"]==null ) ||
    
    ($_POST["fnaci"]=="" || $_POST["fnaci"]== null ) ||($_POST["telefono"]=="" ||  $_POST["telefono"]==null ) ||
    
    ($_POST["correo"]=="" || $_POST["correo"]== null)  || ($_POST["ID_Genero"]=="" || $_POST["genero"]==null ) ||
    
    ($_POST["ciudad"]=="" || $_POST["ciudad"]== null  ) ||  ($_POST["direccion"]=="" || $_POST["direccion"]== null ))
    {
        echo " <h3> Hay Datos Vaciós Por Favor Llenarlos </h3>
        <a href='usuarioactualizar.php'> Volver a Actualizar Datos </a>
        <a href='menuusuario.php'> Ir a Menú Usuario </a>";   
    }
    else {
    
    $genero = $_POST["genero"];

    if($genero == "Masculino"){
        $genero = "GEN01";
    }
    elseif($genero == "Femenino"){
        $genero= "GEN02";
    }
    else{
        $genero = "";
    }
    $ciudad=$_POST["ciudad"];
    switch($_POST["ciudad"]){
        case "Bogotá":$ciudad="CIU008";
        break;
    
        case "Cali":$ciudad="CIU012";
        break;
        
        case "Medellín":$ciudad="CIU039";
        break;   
        }
    $nombre1=$_POST["nombre1"];
    $nombre2=$_POST["nombre2"];
    $apellido1=$_POST["apellido1"];
    $apellido2=$_POST["apellido2"];
    $fnaci=$_POST["fnaci"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $direccion=$_POST["direccion"];
    $observaciones=$_POST["observaciones"];

$conectar = mysqli_connect("localhost","root","","trapitos");

$consulta = "UPDATE usuario set ID_Genero='$genero',ID_Ciudad='$ciudad',Primer_Nombre='$nombre1',
Segundo_Nombre='$nombre2',Primer_Apellido='$apellido1',Segundo_Apellido='$apellido2',fecha_nacimiento='$fnaci',
Telefono='$telefono',
Correo='$correo',direccion='$direccion',observaciones='$observaciones' 
where Correo = '$_SESSION[usuario]'";

$insertar= mysqli_query($conectar,$consulta);
    echo "<h3> Datos Actualizados </h3>";

    }

    }
    else{    
        header("location:iniciarsesion.html");
    }
?>
<a href="menuusuario.php";>Volver</a>