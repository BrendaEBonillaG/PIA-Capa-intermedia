<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $correo = $_POST['Correo'];
    $nombreUsu = $_POST['Nombre_U'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];
    $nombres = $_POST['Nombre_C'];
    $apePa = $_POST['Apellido_P'];
    $apeMa = $_POST['Apellido_M'];
    $fechaNacim = $_POST['fecha_Nac'];
    $sexo = $_POST['Sexo'];
    $privacidad = $_POST['Privacidad'];

    // Obtener la información de la imagen subida
    $imagenTmp = $_FILES['imagen']['tmp_name'];
    $imagenNombre = $_FILES['imagen']['name'];
    $imagenContenido = file_get_contents($imagenTmp);

    // Preparar y ejecutar el procedimiento almacenado
    $stmt = $conexion->prepare("CALL sp_insert_usuario(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssbsssssss", $correo, $nombreUsu, $contrasena, $rol, $imagenContenido, $imagenNombre, $nombres, $apePa, $apeMa, $fechaNacim, $sexo, $privacidad);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Iniciar sesión automáticamente después del registro
        session_start(); // Iniciar la sesión
        $_SESSION['usuario'] = $nombreUsu; // Guardar el nombre de usuario en la sesión
        $_SESSION['correo'] = $correo; // Guardar el correo en la sesión (opcional)
        $_SESSION['rol'] = $rol; // Guardar el rol en la sesión (opcional)

        // Redirigir al dashboard
        header('Location: http://localhost/PIA-capa-intermedia/Dashboard.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>