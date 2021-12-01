<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_POST['idpaciente']; 
$edad=$_POST['edad']; 
$peso=$_POST['peso'];
$altura=$_POST['altura']; 
$tratamiento=$_POST['tratamiento']; 
$medicamento=$_POST['medicamento']; 
$via=$_POST['via']; 


$sql="UPDATE receta SET  edad='$edad',peso='$peso',altura='$altura', tratamiento='$tratamiento', medicamento='$medicamento',via='$via' WHERE idpaciente='$idpaciente'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: receta.php"); 
    }
?>