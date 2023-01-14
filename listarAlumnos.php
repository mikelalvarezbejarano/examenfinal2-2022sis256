<?php 
    $cuadros = $_GET['cuadros'];
    $materia = $_GET['materia'];
    include("conexion.php");
    $sql= " SELECT * FROM alumnos WHERE materia = '$materia'";
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
        <th>Imagen</th>
        <th>Nombres</th>
        <?php
        for($i=1; $i<=$cuadros; $i++){ ?>
            <th>Cuadro <?php echo $i; ?></th>
        <?php } ?>
    </tr> 
    <?php
	while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo '<img src="images/' . $fila['fotografia']. '" alt="">';?></td>
            <td><?php echo $fila['nombres_apellidos'];?> </td>
            <?php for($i=0; $i<$cuadros; $i++){ ?>
                <th><?php echo "&nbsp"; ?></th>
            <?php } ?>
    <?php } ?>
    </tr>
</table>