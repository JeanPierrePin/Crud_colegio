<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['COD_ESTUDIANTE'];

$sql="SELECT * FROM estudiante WHERE COD_ESTUDIANTE='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="COD_ESTUDIANTE" value="<?php echo $row['COD_ESTUDIANTE']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="CEDU_ESTUDIANTE" placeholder="Ingrese la cédula" value="<?php echo $row['CEDU_ESTUDIANTE']  ?>">
                                <input type="text" class="form-control mb-3" name="NOM_ESTUDIANTE" placeholder="Ingrese los nombres" value="<?php echo $row['NOM_ESTUDIANTE']  ?>">
                                <input type="text" class="form-control mb-3" name="APE_ESTUDIANTE" placeholder="Ingrese los apellidos" value="<?php echo $row['APE_ESTUDIANTE']  ?>">
                                <input type="text" class="form-control mb-3" name="GEN_ESTUDIANTE" placeholder="Ingrese el genero" value="<?php echo $row['GEN_ESTUDIANTE']  ?>">
                                <input type="date" class="form-control mb-3" name="NACI_ESTUDIANTE" placeholder="Ingrese la fecha de nacimiento" value="<?php echo $row['NACI_ESTUDIANTE']  ?>">
                                <input type="text" class="form-control mb-3" name="DIRE_ESTUDIANTE" placeholder="Ingrese la dirección" value="<?php echo $row['DIRE_ESTUDIANTE']  ?>">
                                <input type="text" class="form-control mb-3" name="TEL_ESTUDIANTE" placeholder="Ingrese el telefono" value="<?php echo $row['TEL_ESTUDIANTE']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>