<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_GET['id'];

$sql="DELETE FROM receta WHERE idpaciente='$idpaciente'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: receta.php"); 
    }
?>