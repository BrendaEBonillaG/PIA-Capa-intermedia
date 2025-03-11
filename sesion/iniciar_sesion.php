<?php
include 'conexion.php';
// Iniciar la sesión
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $Nombre_U =$_POST['Nombre_U'];
    $contrasena= $_POST['contrasena'];
    

    // Consultar la base de datos para obtener el usuario
    $sql = "SELECT id, Nombre_U, contrasena FROM Usuarios_P WHERE Nombre_U = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $Nombre_U); // "s" indica que es una cadena
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $row = $result->fetch_assoc();

        // Verificar si la contraseña es correcta
        if ($contrasena === $row['contrasena']) {
            // La contraseña es correcta, iniciar sesión
            $_SESSION['id'] = $row['id'];
            $_SESSION['Nombre_U'] = $row['Nombre_U'];

            // Redirigir al usuario a la página principal
        
            header('Location: http://localhost/PIA_PCI 2/Dashboard.php');
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
