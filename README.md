# Alta de Ticket
Aplicación web desarrollada en PHP para registrar un nuevo Ticket utilizando una arquitectura en tres capas.

## Estructura

El proyecto está dividido en tres capas:

### Capa de presentación
Se encuentra en "public/tickets/crear.php".

Se encarga de:
- Mostrar el formulario.
- Recibir el título y la descripción.
- Iniciar la creación del Ticket.
- Mostrar un mensaje indicando si la operación fue realizada correctamente.

### Capa de negocio
Se encuentra en "clases/Ticket.php".
Contiene la clase "Ticket", que representa un Ticket y sus datos (titulo, descripción y estado).
Al crear un nuevo Ticket, el estado se establece automáticamente como "pendiente".

### Capa de persistencia

Se encuentra en "dao/TicketDAO.php"
El "TicketDAO" se encarga de guardar el Ticket en la base de datos.
El INSERT se encuentra en esta clase porque el acceso y modificación de los datos pertenecen a la capa de persistencia.

## Regla de negocio
El estado inicial "pendiente" no es ingresado por el usuario. La clase "Ticket" establece automáticamente este estado al crear un nuevo Ticket porque se trata de una regla de negocio del sistema.
