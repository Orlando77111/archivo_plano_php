<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h1>Registro de Estudiantes</h1>
    <form action="" method="post">
        <label for="nombres">Nombres y cursos (un nombre por línea):</label><br>
        <textarea id="nombres" name="nombres" rows="10" cols="50"></textarea><br><br>
        <input type="submit" value="Registrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Define el nombre del archivo
        $filename = 'estudiantes.txt';

        // Obtén los nombres del formulario
        $nombres = $_POST['nombres'];

        // Abre el archivo para escritura, o crea uno nuevo si no existe
        $file = fopen($filename, 'w');

        // Escribe los nombres en el archivo
        fwrite($file, $nombres);

        // Cierra el archivo
        fclose($file);

        echo "<p>Nombres registrados en $filename.</p>";
    }
    ?>
</body>
</html>
