<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM estudiante";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ESTUDIANTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos del estudiante</h1>
                                <form action="insertar.php" method="POST">
                                    <br>

        <input type="text" class="form-control mb-3" name="COD_ESTUDIANTE" placeholder="Ingrese el codigo">
        <input type="text" class="form-control mb-3" name="CEDU_ESTUDIANTE" placeholder="Ingrese la cédula">
         <input type="text" class="form-control mb-3" name="NOM_ESTUDIANTE" placeholder="Ingrese los nombres">
        <input type="text" class="form-control mb-3" name="APE_ESTUDIANTE" placeholder="Ingrese los apellidos">
        <input type="text" class="form-control mb-3" name="GEN_ESTUDIANTE" placeholder="Ingrese el genero">
        <input type="date" class="form-control mb-3" name="NACI_ESTUDIANTE" placeholder="Ingrese la fecha de nacimiento">
        <input type="text" class="form-control mb-3" name="DIRE_ESTUDIANTE" placeholder="Ingrese la dirección">
        <input type="text" class="form-control mb-3" name="TEL_ESTUDIANTE" placeholder="Ingrese el telefono">
                           
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
                                        <th>Género</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                      <th></th>
                                        <th>Acciones </th>

                                        </th>

                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['COD_ESTUDIANTE']?></th>
                                                <th><?php  echo $row['CEDU_ESTUDIANTE']?></th>
                                                <th><?php  echo $row['NOM_ESTUDIANTE']?></th>
                                                <th><?php  echo $row['APE_ESTUDIANTE']?></th> 
                                                <th><?php  echo $row['GEN_ESTUDIANTE']?></th>    
                                                <th><?php  echo $row['NACI_ESTUDIANTE']?></th>  
                                                <th><?php  echo $row['DIRE_ESTUDIANTE']?></th>    
                                                <th><?php  echo $row['TEL_ESTUDIANTE']?></th>    
                                                <th></th>
                                                
                                                <th><a href="actualizar.php?COD_ESTUDIANTE=<?php echo $row['COD_ESTUDIANTE'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?COD_ESTUDIANTE=<?php echo $row['COD_ESTUDIANTE'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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