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
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat Privado</title>
  <link rel="stylesheet" href="../PIA_PCI 2/CSS/Chats.css">
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
      <img id="home" class="home" src="../PIA_PCI 2/img/home.png" alt="">
    </div>

    <ul class="menu">

      <li>
        <h1>Pedidos</h1>
      </li>
      <li>
        <h1>Productos</h1>
      </li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
          <path fill="#DA961F"
            d="M20.95 4H5.05C4.473 4 4 4.476 4 5.059v12.536c0 .583.473 1.06 1.05 1.06h5.178v3.08c0 .212.23.34.41.223l5.134-3.304h5.178c.577 0 1.05-.476 1.05-1.059V5.06C22 4.476 21.527 4 20.95 4M8.918 14C8.416 14 8 13.563 8 13.011v-.022c0-.552.416-.989.918-.989h8.154c.512 0 .928.448.928 1s-.416 1-.928 1zm0-4C8.416 10 8 9.563 8 9.011V8.99c0-.553.416-.99.918-.99h8.154c.512 0 .928.448.928 1s-.416 1-.928 1z" />
        </svg></li>
    </ul>

    <div>
      <img id="carrito" class="carrito" src="../PIA_PCI 2/img/carrito.png" alt="">
      <div id="numero"></div>
    </div>
    <div>
      <img src="https://i.pinimg.com/736x/dc/6c/b0/dc6cb0521d182f959da46aaee82e742f.jpg" alt="foto de perfil"
        class="profile-pic">
    </div>
  </header>

  <div class="usuarios-container">
    <div class="user-list">
      <div class="user-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
          <path fill="#DA961F"
            d="M20.95 4H5.05C4.473 4 4 4.476 4 5.059v12.536c0 .583.473 1.06 1.05 1.06h5.178v3.08c0 .212.23.34.41.223l5.134-3.304h5.178c.577 0 1.05-.476 1.05-1.059V5.06C22 4.476 21.527 4 20.95 4M8.918 14C8.416 14 8 13.563 8 13.011v-.022c0-.552.416-.989.918-.989h8.154c.512 0 .928.448.928 1s-.416 1-.928 1zm0-4C8.416 10 8 9.563 8 9.011V8.99c0-.553.416-.99.918-.99h8.154c.512 0 .928.448.928 1s-.416 1-.928 1z" />
        </svg>
        <span class="user">Chats</span>
      </div>
      <ul id="lista-usuarios">
        <!-- Aquí se insertarán los usuarios dinámicamente -->
      </ul>
    </div>
  </div>
  <div class="chat-container">
    <div class="chat-header">
      <img src="https://i.pinimg.com/736x/dc/6c/b0/dc6cb0521d182f959da46aaee82e742f.jpg" alt="foto de perfil"
        class="profile-pic">
      <div class="user-info">
        <span class="user">Juan</span>
        <p class="Estado" name="Estado">En linea</p>
      </div>
    </div>

    <div class="chat-box">
      <div class="message received">

        <p>Hola, ¿cómo estás?</p>
      </div>

    </div>

    <div class="chat-footer">
      <input type="text" placeholder="Escribe un mensaje..." id="message-input">
      <button class="send-btn" id="send-btn">Enviar</button>
    </div>
  </div>

  <main>
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
    document.addEventListener("DOMContentLoaded", function () {
      // Función para cargar la lista de usuarios
      function cargarUsuarios() {
        fetch('PHP/MostrarUsuChat.php')
          .then(response => {
            if (!response.ok) {
              throw new Error("Error al cargar los usuarios");
            }
            return response.json();
          })
          .then(usuarios => {
            const listaUsuarios = document.getElementById("lista-usuarios");
            listaUsuarios.innerHTML = ""; // Limpiar la lista antes de agregar usuarios

            // Recorre los usuarios y los agrega a la lista
            usuarios.forEach(usuario => {
              const li = document.createElement("li");
              li.innerHTML = `
                        <img src="data:image/jpeg;base64,${usuario.imagenBase64}" alt="${usuario.Nombre_U}" class="profile-pic">
                        ${usuario.Nombre_U}
                    `;
              listaUsuarios.appendChild(li);
            });
          })
          .catch(error => {
            console.error("Error:", error);
            alert("Hubo un error al cargar la lista de usuarios. Inténtalo de nuevo.");
          });
      }

      // Llama a la función para cargar los usuarios al cargar la página
      cargarUsuarios();
    });
  </script>

  <script>
    function changeImage(src) {
      document.getElementById('mainImage').src = src;
    }
    function abrirVentanaPago() {
      window.open('../PIA_PCI 2/tarjeta.php', '_blank', 'width=600,height=600');
    }
  </script>
  <script src="../PIA_PCI 2/JS/app.js"></script>
  <script src="JS/mensajes.js"></script>


</body>

</html>