<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej. Array-Tabla</title>
</head>
<body>
    <?php 
        $alumno = array("Joan", "Hector", "Gerard");
        $asignatura = array("Matematicas", "Biologia", "Física");
        $nota = array("8", "9", "10");
        
    ?>
    <table border="1">
        <tr>
            <td>Alumno</td>
            <td>Asignatura</td>
            <td>Nota</td>
        </tr>
        <?php 
            for ($i = 0; $i < count($alumno); $i++){
        ?>
           <tr>
            <td>
                <?= $alumno[$i]; ?>
            </td>
            <td>
                <?= $asignatura[$i]; ?>
            </td>
            <td>
                <?= $nota[$i]; ?>
            </td>
        </tr>
        <?php } ?>        
    </table>
</body>
</html>
