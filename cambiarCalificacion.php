<?php
include("conexion.php");
$id = $_GET['id'];
$nota = $_GET["nota"];
$materia = $_GET['materia'];

$sql="UPDATE alumnos SET calificacion=$nota WHERE id = $id";
$resultado = mysqli_query($conn, $sql);

if($resultado) {
    Header("Location: editarCalificaciones.php?materia=$materia");
}

?>
<p>Se inserto con exito</p>