<?php
include 'conexion.php';


// Establecer la zona horaria
date_default_timezone_set('America/Mexico_City');

// Obtener la fecha y hora actual
$fechaHoraActual = date('Y-m-d H:i:s');

// Mostrar la fecha y hora
echo "Fecha y hora actual: " . $fechaHoraActual;


if($_SERVER ["REQUEST_METHOD"] =="POST"){
    $Nombre_C = $_POST['Nombre_C'];      // VARCHAR
    $Correo = $_POST['Correo'];         // VARCHAR
    $contrasena = $_POST['contrasena']; // VARCHAR
    $Nombre_U = $_POST['Nombre_U'];         // VARCHAR
    $fecha_Nac = $_POST['fecha_Nac']; // DATE
    $rol =$_POST['rol'];

    $Apellido_P = $_POST['Apellido_P'];
    $Apellido_M = $_POST['Apellido_M'];
    $Sexo = $_POST['Sexo'];
    $Privacidad = $_POST['Privacidad'];

  // Obtener la información de la imagen subida
  $imagenTmp = $_FILES['imagen']['tmp_name'];
  $imagenNombre = $_FILES['imagen']['name'];

  // Obtener el contenido de la imagen y convertirlo a Base64
  $imagenContenido = file_get_contents($imagenTmp);
  $imagenBase64 = base64_encode($imagenContenido);


    // Preparar y ejecutar el procedimiento almacenado
    $stmt = $conexion->prepare("CALL sp_insert_usuario(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssssss", $Nombre_C, $Correo,$contrasena,$Nombre_U,$fecha_Nac,$rol,$imagenBase64,$imagenNombre,$Apellido_P,$Apellido_M,$Sexo,$Privacidad,$fechaHoraActual);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso.";
        
        header('Location: http://localhost/PIA_PCI 2/Dashboard.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}



?>

