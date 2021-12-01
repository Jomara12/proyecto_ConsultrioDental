<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM paciente WHERE idpaciente='$id'";
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
                    
                                
                                <input type="text" class="form-control mb-3" name="idpaciente" placeholder="Codigo del Paciente" value="<?php echo $row['idpaciente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="paterno" placeholder="Apellido Paterno" value="<?php echo $row['paterno']  ?>"> 
                                <input type="text" class="form-control mb-3" name="materno" placeholder="Apellido Materno" value="<?php echo $row['materno']  ?>"> 
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>"> 
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="curp" placeholder="Curp" value="<?php echo $row['curp']  ?>"> 
                                   
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>