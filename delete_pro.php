<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['COD_PROFESOR'];

$sql="DELETE FROM profesor  WHERE COD_PROFESOR='$cod_profesor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>
