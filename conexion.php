<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$host = "localhost";
$usuario= "root";
$contraseña = "";

try {
   $conexion = new PDO("mysql:host=$host;dbname=shopping", $usuario, $contraseña);
   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $conexion->exec("set names utf8");
    return$conexion;
    }
catch(PDOException $error)
    {
    echo "No se pudo conectar a la BD: " . $error->getMessage();
    }

?>