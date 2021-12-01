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

$sql="INSERT INTO receta VALUES('$idpaciente','$edad','$peso','$altura','$tratamiento','$medicamento','$via')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: receta.php");
}else {
    echo "hay un problema";
}
?>

