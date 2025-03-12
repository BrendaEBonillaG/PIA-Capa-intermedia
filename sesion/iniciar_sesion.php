<?php
include 'conexion.php';

// Iniciar la sesión
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $nombreUsu = $_POST['Nombre_U'];
    $contrasena = $_POST['contrasena'];

    // Consultar la base de datos para obtener el usuario
    $sql = "SELECT id, nombreUsu, contrasena, rol FROM Usuarios WHERE nombreUsu = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $nombreUsu); // "s" indica que es una cadena
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $row = $result->fetch_assoc();

        // Verificar si la contraseña es correcta
        if ($contrasena === $row['contrasena']) {
            // La contraseña es correcta, iniciar sesión
            $_SESSION['id'] = $row['id']; // Guardar el ID del usuario en la sesión
            $_SESSION['nombreUsu'] = $row['nombreUsu']; // Guardar el nombre de usuario en la sesión
            $_SESSION['rol'] = $row['rol']; // Guardar el rol del usuario en la sesión

            // Redirigir al usuario a la página principal
            header('Location: http://localhost/PIA-capa-intermedia/Dashboard.php');
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // El nombre de usuario no existe
        echo "Nombre de usuario no encontrado.";
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>