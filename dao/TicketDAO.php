<?php

class TicketDAO
{
    public function insertar($conn, $ticket)
    {
        $sql = "INSERT INTO ticket (titulo, descripcion, estado) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("No se pudo preparar el insert del Ticket.");
        }

        $titulo = $ticket->getTitulo();
        $descripcion = $ticket->getDescripcion();
        $estado = $ticket->getEstado();

        $stmt->bind_param(
            "sss",
            $titulo,
            $descripcion,
            $estado
        );

        return $stmt->execute();
    }
}