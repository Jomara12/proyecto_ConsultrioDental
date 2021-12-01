<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM citas WHERE iddoctor='$id'";
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
                    
                                
                                <input type="text" class="form-control mb-3" name="iddoctor" placeholder="Codigo del Dentista" value="<?php echo $row['iddoctor']  ?>">
                                <input type="text" class="form-control mb-3" name="paciente" placeholder="Nombre del Paciente" value="<?php echo $row['paciente']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>"> 
                                <input type="text" class="form-control mb-3" name="hora" placeholder="Hora" value="<?php echo $row['hora']  ?>"> 
                                <input type="text" class="form-control mb-3" name="telefonopaciente" placeholder="Telefono del Paciente" value="<?php echo $row['telefonopaciente']  ?>"> 
                                <input type="text" class="form-control mb-3" name="diagnostico" placeholder="Diagnostico" value="<?php echo $row['diagnostico']  ?>">
                                <input type="text" class="form-control mb-3" name="tratamiento" placeholder="Tratamiento" value="<?php echo $row['tratamiento']  ?>"> 
                                   
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>