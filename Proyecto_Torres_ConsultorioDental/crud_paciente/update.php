<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_POST['idpaciente']; 
$nombre=$_POST['nombre']; 
$paterno=$_POST['paterno'];
$materno=$_POST['materno']; 
$telefono=$_POST['telefono']; 
$edad=$_POST['edad']; 
$curp=$_POST['curp']; 


$sql="UPDATE paciente SET  nombre='$nombre',paterno='$paterno',materno='$materno', telefono='$telefono', edad='$edad',curp='$curp' WHERE idpaciente='$idpaciente'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php"); 
    }
?>