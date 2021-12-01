<?php

include("conexion.php");
$con=conectar();

$iddoctor=$_POST['iddoctor']; 
$paciente=$_POST['paciente']; 
$fecha=$_POST['fecha'];
$hora=$_POST['hora']; 
$telefonopaciente=$_POST['telefonopaciente']; 
$diagnostico=$_POST['diagnostico']; 
$tratamiento=$_POST['tratamiento']; 


$sql="UPDATE citas SET  paciente='$paciente',fecha='$fecha',hora='$hora', telefonopaciente='$telefonopaciente', diagnostico='$diagnostico',tratamiento='$tratamiento' WHERE iddoctor='$iddoctor'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php"); 
    }
?>