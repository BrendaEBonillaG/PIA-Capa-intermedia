<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../PIA_PCI 2/CSS/Carrito.css" rel="stylesheet" type="text/css">
    <link href="../PIA_PCI 2/CSS/ListaDeseos.css" rel="stylesheet" type="text/css">
    <title>Lista de deseos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        <div class="HomeIcon" id="HomeIcon">
            <img id="home" class="home" src="../PIA_PCI 2/img/home.png" alt="">
        </div>

        <ul class="menu">
            <li><h1>Chat</h1></li>
            <li><h1>Pedidos</h1></li>
        </ul>

        <div>
            <img id="carrito" class="carrito" src="../PIA_PCI 2/img/carrito.png" alt="">
            <div id="numero"></div>
        </div>
        <div>
            <img id="perfil" class="perfil" src="../PIA_PCI 2/img/face.png" alt="">
        </div>
    </header>

    <aside class="Wishlist" id="filtrosWishlist">
        <h2>Wishlist</h2>
        <form id="filtrosForm">
            <label for="calificacion">Revisa tus listas:</label>
            <select id="calificacion">
                <option value="1">Wishlist</option>
                <option value="2">Compus</option>
                <option value="3">Regalos</option>
                <option value="4">Cuarto</option>
            </select>

            <button type="button" id="CrearLista" class="CrearLista">Crear lista</button>
        </form>
    </aside>

    <main>
        <div class="contenedorProductos" id="contenedorProductos">
            <div class="contenedor" id="contenedor"></div>
        </div>

        <div id="contenedorCompra">
            <div class="informacionCompra" id="informacionCompra">
                <h2>Carrito</h2>
                <p class="x" id="x">x</p>
            </div>

            <div class="productosCompra" id="productosCompra"></div>
            <div class="total" id="total"></div>
            <button type="button" class="btn btn-primary" onclick="abrirVentanaPago()">Finalizar Compra</button>
        </div>
    </main>

    <!-- Ventana emergente para crear lista -->
    <div id="crearWishlist" class="modal">
        <form action="../PIA_PCI 2/ListaDeseos.html" method="post">
            <div class="modal-header">
                <h2>Crear lista</h2>
                <p class="close" id="cerrarVentana">×</p>
            </div>        
            <div class="informacionLista" id="informacionLista">
            </div>
            <input type="text" placeholder="Nombre..." id="NombreLista">
            <input type="text" placeholder="Descripción..." id="DescripcionLista">
            <button class="Crear-btn">Crear</button>
        </form>
    </div>
    

    <script>
        // Lógica para abrir y cerrar la ventana emergente
        const abrirListaBtn = document.getElementById('CrearLista');
        const ventanaLista = document.getElementById('crearWishlist');
        const cerrarVentana = document.getElementById('cerrarVentana');

        // Abrir la ventana emergente cuando se hace clic en el botón Crear lista
        abrirListaBtn.addEventListener('click', function() {
            ventanaLista.style.display = 'flex'; // Muestra la ventana emergente con flexbox
        });

        // Cerrar la ventana emergente cuando se hace clic en el icono "x"
        cerrarVentana.addEventListener('click', function() {
            ventanaLista.style.display = 'none'; // Oculta la ventana emergente
        });

        // Cerrar la ventana emergente si el usuario hace clic fuera de la ventana emergente
        window.addEventListener('click', function(event) {
            if (event.target === ventanaLista) {
                ventanaLista.style.display = 'none'; // Oculta la ventana emergente si el clic es fuera de ella
            }
        });

        // Función para abrir ventana de pago (por si la necesitas)
        function abrirVentanaPago() {
            window.open('../PIA_PCI 2/tarjeta.php', '_blank', 'width=600,height=600');
        }
    </script>

    <script src="../PIA_PCI 2/JS/app.js"></script>
</body>

</html>
