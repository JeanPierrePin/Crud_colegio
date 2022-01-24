<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM profesor";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA Profesor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos del Profesor</h1>
                                <form action="insertar_pro.php" method="POST">

    <input type="text" class="form-control mb-3" name="COD_PROFESOR" placeholder="Ingrese el codigo">
    <input type="text" class="form-control mb-3" name="CED_PROFESOR" placeholder="Ingrese la cédula">
    <input type="text" class="form-control mb-3" name="NOM_PROFESOR" placeholder="Ingrese los nombres">
    <input type="text" class="form-control mb-3" name="APE_PROFESOR" placeholder="Ingrese los apellidos">
    <input type="text" class="form-control mb-3" name="TEL_PROFESOR" placeholder="Ingrese el teléfono">
    <input type="date" class="form-control mb-3" name="EDAD_PROFESOR" placeholder="Ingrese la edad">
                                   
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Cédula</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Teléfono</th>
                                        <th>Edad</th>
                                        <th></th>
                                        <th>Acciones</th>


                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['COD_PROFESOR']?></th>
                                                <th><?php  echo $row['CED_PROFESOR']?></th>
                                                <th><?php  echo $row['NOM_PROFESOR']?></th>
                                                <th><?php  echo $row['APE_PROFESOR']?></th> 
                                                <th><?php  echo $row['TEL_PROFESOR']?></th>    
                                                <th><?php  echo $row['EDAD_PROFESOR']?></th>
                                                <th></th>
                                                
                                                <th><a href="actualizar_pro.php?COD_PROFESOR=<?php echo $row['COD_PROFESOR'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete_pro.php?COD_PROFESOR=<?php echo $row['COD_PROFESOR'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>