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


$sql="UPDATE  dentista SET nombre='$nombre',curp='$curp',telefono='$telefono', correo='$correo', direccion='$direccion',cedula='$cedula' WHERE doctorid='$doctorid'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: dentista.php"); 
    }
?>