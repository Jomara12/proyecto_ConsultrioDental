<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM receta WHERE idpaciente='$id'";
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
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="peso" placeholder="Peso" value="<?php echo $row['peso']  ?>"> 
                                <input type="text" class="form-control mb-3" name="altura" placeholder="Altura" value="<?php echo $row['altura']  ?>"> 
                                <input type="text" class="form-control mb-3" name="tratamiento" placeholder="Tratamiento" value="<?php echo $row['tratamiento']  ?>"> 
                                <input type="text" class="form-control mb-3" name="medicamento" placeholder="Medicamentos" value="<?php echo $row['medicamento']  ?>">
                                <input type="text" class="form-control mb-3" name="via" placeholder="Via de Administracion" value="<?php echo $row['via']  ?>"> 
                                   
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>