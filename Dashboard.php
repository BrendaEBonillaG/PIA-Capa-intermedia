<?php
session_start(); // Inicia la sesión

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión, redirige al usuario a la página de inicio de sesión
    header('Location: ../PIA-capa-intermedia/sesion/log_in2.php');
    exit; // Detiene la ejecución del script
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../PIA_PCI 2/CSS/Carrito.css" rel="stylesheet" type="text/css">
    <title>Productos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
<header id="header">
    <div class="HomeIcon" id="HomeIcon">
        <img id="home" class="home" src="../PIA_PCI 2/img/home.png" alt="Inicio">
    </div>

    <ul class="menu">
        <li>
            <h1><a href="../PIA-Capa-intermedia/Chat.php">Chat</a></h1>
        </li>
        <li>
            <h1>Pedidos</h1>
        </li>
    </ul>

    <div>
        <img id="carrito" class="carrito" src="../PIA_PCI 2/img/carrito.png" alt="Carrito de compras">
        <div id="numero"></div>
    </div>
    
    <div>
        <img id="perfil" class="perfil" src="../PIA_PCI 2/img/face.png" alt="Perfil de usuario">
    </div>
</header>


    <aside class="filtros" id="filtros">
        <h2>Filtros</h2>
        <form id="filtrosForm">
            <label for="precio">Precio:</label>
            <input type="range" id="precio" min="0" max="1000" step="10" onchange="updatePrecioValue()">
            <span id="precioValor">0</span>

            <label for="masVendidos">Más Vendidos:</label>
            <input type="radio" id="masVendidos" name="venta" value="masVendidos">

            <label for="menosVendidos">Menos Vendidos:</label>
            <input type="radio" id="menosVendidos" name="venta" value="menosVendidos">

            <label for="calificacion">Calificación:</label>
            <select id="calificacion">
                <option value="1">1 estrella</option>
                <option value="2">2 estrellas</option>
                <option value="3">3 estrellas</option>
                <option value="4">4 estrellas</option>
                <option value="5">5 estrellas</option>
            </select>

            <button type="submit">Aplicar Filtros</button>
        </form>
    </aside>

    <main>
        <!-- Contenedor principal para los productos -->
        <div class="contenedorProductos" id="contenedorProductos">
            <div class="contenedor" id="contenedor"></div>
        </div>

        <!-- Contenedor para la información de la compra -->
        <div id="contenedorCompra">
            <div class="informacionCompra" id="informacionCompra">
                <h2>Carrito</h2>
                <p class="x" id="x">x</p>
            </div>

            <div class="productosCompra" id="productosCompra"></div>
            <div class="total" id="total"></div>
            <button type="button" class="btn btn-primary" onclick="abrirVentanaPago()">
                Finalizar Compra
            </button>
            
        </div>
    </main>
<script>
function abrirVentanaPago() {
    window.open('../PIA_PCI 2/tarjeta.php', '_blank', 'width=600,height=600');
}
</script>

    <script src="./JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>