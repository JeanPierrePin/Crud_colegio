<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['COD_ESTUDIANTE'];

$sql="DELETE FROM estudiante  WHERE COD_ESTUDIANTE='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
