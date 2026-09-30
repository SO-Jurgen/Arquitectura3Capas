<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../clases/Ticket.php";
require_once __DIR__ . "/../../dao/TicketDAO.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titulo = trim($_POST["titulo"] ?? "");
    $descripcion = trim($_POST["descripcion"] ?? "");

    if ($titulo === "" || $descripcion === "") {

        $mensaje = "Debe completar todos los campos.";

    } else {

        try {

            $ticket = new Ticket($titulo, $descripcion);
            $dao = new TicketDAO();
            $dao->insertar($conn, $ticket);
            $mensaje = "Ticket creado correctamente.";

        } catch (Exception $e) {

            $mensaje = "No se pudo crear el Ticket.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Ticket</title>
</head>

<body>
    <h1>Alta de Ticket</h1>

    <?php if ($mensaje !== ""): ?>
        <p> <?= htmlspecialchars($mensaje) ?> </p>
    <?php endif; ?>

    <form method="POST">
        <label for="titulo">Título:</label> <br>

        <input type="text" id="titulo" name="titulo" required> <br><br>

        <label for="descripcion">Descripción:</label> <br>

        <textarea id="descripcion" name="descripcion" required></textarea> <br><br>

        <button type="submit"> Crear Ticket </button>
    </form>

</body>

</html>