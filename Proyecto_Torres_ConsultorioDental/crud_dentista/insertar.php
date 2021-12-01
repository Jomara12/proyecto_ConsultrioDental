<?php
include("conexion.php");
$con=conectar();

$doctorid=$_POST['doctorid'];
$nombre=$_POST['nombre'];
$curp=$_POST['curp'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$cedula=$_POST['cedula'];

$sql="INSERT INTO dentista VALUES('$doctorid','$nombre','$curp','$telefono','$correo','$dirccion','$cedula')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: dentista.php");
}else {
    echo "hay un problema";
}
?>

