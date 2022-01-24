<?php
include("conexion.php");
$con=conectar();

$cod_profesor=$_POST['COD_PROFESOR'];
$dni=$_POST['CED_PROFESOR'];
$nombres=$_POST['NOM_PROFESOR'];
$apellidos=$_POST['APE_PROFESOR'];
$telefono=$_POST['TEL_PROFESOR'];
$edad=$_POST['EDAD_PROFESOR'];


$sql="INSERT INTO profesor VALUES('$cod_profesor','$dni','$nombres','$apellidos','$telefono', '$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: profesor.php");
    
}else {
}
?>