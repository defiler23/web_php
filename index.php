<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio - 7E2</title>
</head>
<body>
   <?php 
    $alumno = array("Joan", "Hector", "Gerard", "Joan", "Hector", "Gerard");
    $asignatura = array("Matematicas", "Biologia", "Física", "Fisica", "Religion", "Biologia");
    $nota = array("8", "9", "10", "10", "10", "8");
        
    function notasAlumno($nombre){
            global $alumno, $asignatura, $nota;
    ?>
    <table border="1">
        <tr>
            <td colspan="2"><?=$nombre; ?></td>
        </tr>
        <?php
            for ($i = 0; $i < count($alumno); $i++){ 
                if($nombre == $alumno[$i]){ 
        ?>
                <tr>
                    <td><?=$asignatura[$i]; ?></td>
                    <td><?=$nota[$i]; ?></td>
                </tr>
                <br/>
        <?php
                } 
        }
        $suma = 0;
        $num = 0;
        for ($i=0; $i<count($nota);$i++){
            if ($nombre == $alumno[$i]){
                $suma += $nota[$i];
                $num++;
            }
        }
        $media = $suma/$num;
        ?>
                <tr>
                    <td>Media: </td>
                    <td><?=$media;?></td>
                </tr>
    <?php
    }
    notasAlumno("Joan");
    notasAlumno("Hector");
    notasAlumno("Gerard");
    ?>
       
    </table>
</body>
</html>
