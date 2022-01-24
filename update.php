<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['COD_ESTUDIANTE'];
$dni=$_POST['CEDU_ESTUDIANTE'];
$nombres=$_POST['NOM_ESTUDIANTE'];
$apellidos=$_POST['APE_ESTUDIANTE'];
$genero=$_POST['GEN_ESTUDIANTE'];
$nacimiento=$_POST['NACI_ESTUDIANTE'];
$direccion=$_POST['DIRE_ESTUDIANTE'];
$telefono=$_POST['TEL_ESTUDIANTE'];


$sql="UPDATE estudiante SET  CEDU_ESTUDIANTE='$dni',NOM_ESTUDIANTE='$nombres',APE_ESTUDIANTE='$apellidos',GEN_ESTUDIANTE='$genero',NACI_ESTUDIANTE='$nacimiento',DIRE_ESTUDIANTE='$direccion',TEL_ESTUDIANTE='$telefono' WHERE COD_ESTUDIANTE='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>