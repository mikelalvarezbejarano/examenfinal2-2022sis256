<?php 
    include("conexion.php");
    $materia = $_GET['materia'];
    $sql= " SELECT * FROM informes WHERE materia = '$materia'";
    if (isset($_GET['orden'])) {
        $sql .= " ORDER BY " . $_GET['orden'];
    }
    $resultado = $conn->query($sql);
?>

<style>

    table {
        border: black 1px solid;
    }
    th,td {
        color: black;
    }

    th a{
        text-decoration: none;
    }
</style>

<table border="1" cellspacing="0">
    <tr>
        <th>Materia</th>
        <th>Mes</th>
        <th>Porcentaje</th>
    </tr> 
    <?php
	while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $fila['materia'];?> </td>
            <td><?php echo $fila['mes'];?> </td>
            <td><?php echo $fila['porcentaje'];?> </td>
    <?php } ?>
    </tr>
</table>