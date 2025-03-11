<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="..//PIA_PCI 2/Perfil.css">
    <link rel="stylesheet" href="../PIA_PCI 2/CSS/Carrito.css">

    
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
            <img id="home" class="home" src="../PIA_PCI 2/img/home.png" alt="Home">
        </div>

        <ul class="menu">
            <li><h1>Chat</h1></li>
            <li><h1>Pedidos</h1></li>
        </ul>

        <div>
            <img id="carrito" class="carrito" src="../PIA_PCI 2/img/carrito.png" alt="Carrito">
            <div id="numero"></div>
        </div>
        <div>
            <img id="perfil" class="perfil" src="../PIA_PCI 2/img/face.png" alt="Perfil">
        </div>
    </header>

    <div class="product-container">
        
        <div>
            <img src="https://i.pinimg.com/474x/a6/4c/23/a64c2327f410f1f91abff4db7ef4e555.jpg" alt="Producto" class="main-image" id="mainImage">
        </div>

        <div class="product-info">
            <div>
                <div class="product-title">Dregan Ganon Walsh</div>
                <ul class="product-details">
                    <li class="titulo"><strong>Vendedor</strong></li>
                    <li>Categorias de productos</li>
                    <li><strong>Calificacion:</strong>  5 estrellas</li>
                    <li>Numero de ventas</li>
                    <li><button class="EditarPerfil">Editar</button></li>
                </ul>
            </div>
        </div>
       
    </div>

    
    <div class="similar-products">
        <div class="similar-item">
            <img src="https://i.pinimg.com/474x/45/ee/02/45ee022351d5b3fe23246925a7732aa8.jpg" alt="Producto Similar 1">
            <p>Producto 1</p>
            <span>$249.99</span>
        </div>
        <div class="similar-item">
            <img src="https://i.pinimg.com/474x/ab/ee/ab/abeeab1b1d93e5b6a5b862f0b964853f.jpg" alt="Producto Similar 2">
            <p>Producto 2</p>
            <span>$199.99</span>
        </div>
        <div class="similar-item">
            <img src="https://i.pinimg.com/474x/ec/65/fd/ec65fd4224a69cc1e546910aa00b61d2.jpg" alt="Producto Similar 3">
            <p>Producto 3</p>
            <span>$279.99</span>
        </div>
        <div class="similar-item">
            <img src="https://i.pinimg.com/474x/45/ee/02/45ee022351d5b3fe23246925a7732aa8.jpg" alt="Producto Similar 1">
            <p>Producto 4</p>
            <span>$249.99</span>
        </div>
        <div class="similar-item">
            <img src="https://i.pinimg.com/474x/ab/ee/ab/abeeab1b1d93e5b6a5b862f0b964853f.jpg" alt="Producto Similar 2">
            <p>Producto 5</p>
            <span>$199.99</span>
        </div>
        <div class="similar-item">
            <img src="https://i.pinimg.com/474x/ec/65/fd/ec65fd4224a69cc1e546910aa00b61d2.jpg" alt="Producto Similar 3">
            <p>Producto 6</p>
            <span>$279.99</span>
        </div>
        
    </div>

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

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>

<script>
    function abrirVentanaPago() {
        window.open('../PIA_PCI 2/tarjeta.php', '_blank', 'width=600,height=600');
    }
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cantidadInput = document.getElementById('cantidad');
        const incrementarBtn = document.getElementById('incrementar');
        const decrementarBtn = document.getElementById('decrementar');

        // Incrementar la cantidad
        incrementarBtn.addEventListener('click', function () {
            let cantidad = parseInt(cantidadInput.value);
            if (cantidad < 10) { // Límite máximo de 10
                cantidadInput.value = cantidad + 1;
            }
        });

        // Decrementar la cantidad
        decrementarBtn.addEventListener('click', function () {
            let cantidad = parseInt(cantidadInput.value);
            if (cantidad > 1) { // Límite mínimo de 1
                cantidadInput.value = cantidad - 1;
            }
        });
    });
</script>
    <script src="../PIA_PCI 2/JS/app.js"></script>
</body>
</html>
