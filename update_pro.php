<?php

include("conexion.php");
$con=conectar();

$cod_profesor=$_POST['COD_PROFESOR'];
$dni=$_POST['CED_PROFESOR'];
$nombres=$_POST['NOM_PROFESOR'];
$apellidos=$_POST['APE_PROFESOR'];
$telefono=$_POST['TEL_PROFESOR'];
$edad=$_POST['EDAD_PROFESOR'];



$sql="UPDATE profesor SET  CED_PROFESOR='$dni',NOM_PROFESOR='$nombres',APE_PROFESOR='$apellidos',TEL_PROFESOR='$telefono',EDAD_PROFESOR ='$edad' WHERE COD_PROFESOR='$cod_profesor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>