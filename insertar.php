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



$sql="INSERT INTO estudiante VALUES('$cod_estudiante','$dni','$nombres','$apellidos','$genero','$nacimiento','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>