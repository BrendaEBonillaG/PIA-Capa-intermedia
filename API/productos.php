<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST, PUT');
include 'config.php';

// Leer productos con filtrado opcional por categoría
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $categoria = isset($_GET['id_categoria']) ? $_GET['id_categoria'] : null;
    
    if ($categoria) {
        $stmt = $pdo->prepare("SELECT * FROM Productos WHERE id_categoria = ?");
        $stmt->execute([$categoria]);
    } else {
        $stmt = $pdo->query("SELECT * FROM Productos");
    }
    
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}

// Crear producto con imagen y video
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $precio = $_POST['precio'] ?? 0;
    $cantidad = $_POST['cantidad_Disponible'] ?? 0;
    $tipo = $_POST['tipo'] ?? '';
    $id_vendedor = $_POST['id_vendedor'] ?? 0;
    $id_categoria = $_POST['id_categoria'] ?? 0;
    
    if (!$nombre || !$descripcion || !$precio || !$cantidad || !$tipo || !$id_vendedor || !$id_categoria) {
        echo json_encode(['message' => 'Datos incompletos']);
        exit;
    }
    
    $stmt = $pdo->prepare("INSERT INTO Productos (nombre, descripcion, precio, cantidad_Disponible, tipo, id_vendedor, id_categoria, estado) VALUES (?, ?, ?, ?, ?, ?, ?, 'pendiente')");
    $stmt->execute([$nombre, $descripcion, $precio, $cantidad, $tipo, $id_vendedor, $id_categoria]);
    $id_producto = $pdo->lastInsertId();
    
    // Subir imagen
    if (!empty($_FILES['imagen']['name'])) {
        $imagen = 'uploads/' . basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);
        $stmt = $pdo->prepare("INSERT INTO Imagenes_Productos (id_producto, url_imagen) VALUES (?, ?)");
        $stmt->execute([$id_producto, $imagen]);
    }
    
    // Subir video
    if (!empty($_FILES['video']['name'])) {
        $video = 'uploads/' . basename($_FILES['video']['name']);
        move_uploaded_file($_FILES['video']['tmp_name'], $video);
        $stmt = $pdo->prepare("INSERT INTO Videos_Productos (id_producto, url_video) VALUES (?, ?)");
        $stmt->execute([$id_producto, $video]);
    }
    
    echo json_encode(['message' => 'Producto creado exitosamente, pendiente de aprobación']);
}

// Actualizar estado del producto (solo administradores)
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $data);
    
    $id = $data['id'] ?? 0;
    $estado = $data['estado'] ?? '';
    
    if (!$id || !$estado) {
        echo json_encode(['message' => 'Datos incompletos']);
        exit;
    }
    
    $stmt = $pdo->prepare("UPDATE Productos SET estado = ? WHERE id = ?");
    $stmt->execute([$estado, $id]);
    
    echo json_encode(['message' => 'Estado del producto actualizado correctamente']);
}
?>
