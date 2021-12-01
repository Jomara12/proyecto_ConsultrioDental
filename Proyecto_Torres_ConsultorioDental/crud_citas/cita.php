<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM citas";
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
               
                                    <input type="text" class="form-control mb-3" name="iddoctor" placeholder="Codigo del Dentista">     
                                    <input type="text" class="form-control mb-3" name="paciente" placeholder="Nombre del Paciente">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="hora" placeholder="Hora">
                                    <input type="text" class="form-control mb-3" name="telefonopaciente" placeholder="Telefono del Paciente">
                                    <input type="text" class="form-control mb-3" name="diagnostico" placeholder="Diagnostico">
                                    <input type="text" class="form-control mb-3" name="tratamiento" placeholder="Tratamiento">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Torres_ConsultorioDental/index.php">Inicio</a></li>
               </form>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>C. Dentista</th> 
                                        <th>N. Paciente</th> 
                                        <th>Fecha</th> 
                                        <th>Hora</th> 
                                        <th>Telefono</th>
                                        <th>Diagnostico</th> 
                                        <th>Tratamiento</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['iddoctor']?></th> 
                                                <th><?php  echo $row['paciente']?></th> 
                                                <th><?php  echo $row['fecha']?></th> 
                                                <th><?php  echo $row['hora']?></th> 
                                                <th><?php  echo $row['telefonopaciente']?></th> 
                                                <th><?php  echo $row['diagnostico']?></th>
                                                <th><?php  echo $row['tratamiento']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['iddoctor'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['iddoctor'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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