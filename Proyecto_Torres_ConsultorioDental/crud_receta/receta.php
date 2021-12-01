<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM receta";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Consultorio Dental</title> 
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-3">
                <h1>Ingrese datos:</h1>
               <form action="insertar.php" method="POST">
               
                                    <input type="text" class="form-control mb-3" name="idpaciente" placeholder="Codigo del Paciente">     
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="peso" placeholder="Peso en Kilos">
                                    <input type="text" class="form-control mb-3" name="altura" placeholder="Altura en Metros">
                                    <input type="text" class="form-control mb-3" name="tratamiento" placeholder="Tratamiento">
                                    <input type="text" class="form-control mb-3" name="medicamento" placeholder="Medicamento">
                                    <input type="text" class="form-control mb-3" name="via" placeholder="Via de Administracion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Torres_ConsultorioDental/index.php">Inicio</a></li>
               </form>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th> 
                                        <th>Edad</th> 
                                        <th>Peso</th> 
                                        <th>Altura</th> 
                                        <th>Tratamiento</th>
                                        <th>Medicamento</th> 
                                        <th>Via de Administracion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idpaciente']?></th> 
                                                <th><?php  echo $row['edad']?></th> 
                                                <th><?php  echo $row['peso']?></th> 
                                                <th><?php  echo $row['altura']?></th> 
                                                <th><?php  echo $row['tratamiento']?></th> 
                                                <th><?php  echo $row['medicamento']?></th>
                                                <th><?php  echo $row['via']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idpaciente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idpaciente'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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