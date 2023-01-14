<?php
    include("conexion.php");
    $materia = $_GET['materia'];
    $sql= " SELECT * FROM alumnos WHERE materia = '$materia'";
    $resultado = $conn->query($sql);
?>

<table border="1" cellspacing="0">
    <tr>
        <th style="background-color: #548dd4;">Nro</th>
        <th style="background-color: #548dd4;">Nombres y Apellidos</th>
        <th style="background-color: #548dd4;">Calificacion</a></th>
        
    </tr> 
    <?php
	while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $fila['id'];?> </td>
            <td><?php echo $fila['nombres_apellidos'];?> </td>
            <td><input type="number" name="nota" id="nota" value="<?php echo $fila['calificacion'];?>" onchange="nuevaCalificacion('<?php echo $fila['id'];?>')"></td>
        </tr>
    <?php } ?>
</table>