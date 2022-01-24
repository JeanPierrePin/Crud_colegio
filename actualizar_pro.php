<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['COD_PROFESOR'];

$sql="SELECT * FROM profesor WHERE COD_PROFESOR='$id'";
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
                    <form action="update_pro.php" method="POST">
                    
                                <input type="hidden" name="COD_PROFESOR" value="<?php echo $row['COD_PROFESOR']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="CED_PROFESOR" placeholder="Ingrese la cédula" value="<?php echo $row['CED_PROFESOR']  ?>">
                                <input type="text" class="form-control mb-3" name="NOM_PROFESOR" placeholder="Ingrese los nombres" value="<?php echo $row['NOM_PROFESOR']  ?>">
                                <input type="text" class="form-control mb-3" name="APE_PROFESOR" placeholder="Ingrese los apellidos" value="<?php echo $row['APE_PROFESOR']  ?>">
                                <input type="text" class="form-control mb-3" name="TEL_PROFESOR" placeholder="Ingrese el telefono" value="<?php echo $row['TEL_PROFESOR']  ?>">
                                <input type="date" class="form-control mb-3" name="EDAD_PROFESOR" placeholder="Ingrese la edad" value="<?php echo $row['EDAD_PROFESOR']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>