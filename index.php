<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>App de prueba PHP - José</title>
</head>

<body>
    <h2>Escribe tu nombre:</h2>
    <form method="POST" action="">
        <label for="mensaje">Tu nombre:</label><br>
        <input type="text" id="mensaje" name="mensaje" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["mensaje"])) {
        $mensaje = htmlspecialchars($_POST["mensaje"], ENT_QUOTES, 'UTF-8');
        echo "<h3> Tu nombre es:</h3>";
        echo "<p>" . $mensaje . "</p>";
    }
    ?>
</body>

</html>