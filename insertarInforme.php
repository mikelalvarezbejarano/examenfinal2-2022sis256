<?php
include("conexion.php");
$mes = $_POST['mes'];
$sis256 = $_POST["por256"];
$sis258 = $_POST["por258"];
$sis406 = $_POST["por406"];

$sql = "INSERT INTO informes(materia,mes,porcentaje) VALUES('SIS256','$mes','$sis256')";
mysqli_query($conn, $sql);
$sql = "INSERT INTO informes(materia,mes,porcentaje) VALUES('SIS258','$mes','$sis258')";
mysqli_query($conn, $sql);
$sql = "INSERT INTO informes(materia,mes,porcentaje) VALUES('SIS406','$mes','$sis406')";
mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)) {
    Header("Location: listarInformes.php?materia=SIS256");
}

?>
<p>Se inserto con exito</p>