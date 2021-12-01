<?php

include("conexion.php");
$con=conectar();

$iddoctor=$_GET['id'];

$sql="DELETE FROM citas WHERE iddoctor='$iddoctor'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php"); 
    }
?>