<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM dentista";
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
               
                                    <input type="text" class="form-control mb-3" name="doctorid" placeholder="Codigo del Dentista">     
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="curp" placeholder="Curp">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="cedula" placeholder="Cedula Profesional">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Torres_ConsultorioDental/index.php">Inicio</a></li>
               </form>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th> 
                                        <th>Nombre</th> 
                                        <th>Curp</th> 
                                        <th>Telefono</th> 
                                        <th>Correo</th>
                                        <th>Direccion</th> 
                                        <th>Cedula</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['doctorid']?></th> 
                                                <th><?php  echo $row['nombre']?></th> 
                                                <th><?php  echo $row['curp']?></th> 
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['cedula']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['doctorid'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['doctorid'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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