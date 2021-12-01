<?php

include("conexion.php");
$con=conectar();

$doctorid=$_GET['id'];

$sql="DELETE FROM dentista WHERE doctorid='$doctorid'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: dentista.php"); 
    }
?>