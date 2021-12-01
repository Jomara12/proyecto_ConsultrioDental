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

$sql="INSERT INTO citas VALUES('iddoctor','$paciente','$fecha','$hora','$telefonopaciente','$diagnostico','$tratamiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: cita.php");
}else {
    echo "hay un problema";
}
?>

