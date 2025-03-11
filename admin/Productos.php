<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <nav class="bg-blue-600 p-4 w-500  h-center  mx-auto rounded-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-white text-2xl font-bold">MiLogo</a>

            <!-- Menú -->
            <div class="hidden md:flex space-x-6">
                
                <a href="#" class="text-white hover:text-gray-300">Productos</a>
                
            </div>

            <div class="relative">
                <!-- Botón para desplegar el menú -->
                <button class="text-white" id="menu-button">
                    <label ><img src="https://t.ctcdn.com.br/H-aNaP96CEouFFvJy_wBsyBJY5Q=/1920x1080/smart/i601453.png" class="w-15 h-10 rounded-xl" alt=""></label>
                    
                   
                </button>
    
                <!-- Menú Desplegable -->
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10" id="dropdown-menu">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Perfil</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Salir</a>
                  
                </div>
            </div>

    </nav>

    <div >
        <div class="grid grid-cols-5 grid-rows-5 gap-4 bg-amber-400 p-4 w-500 h-175 h-center  mx-auto rounded-lg mt-20 shadow-xl">
            <div class="col-span-3 row-span-2 flex items-center justify-center border-b-1 border-gray-300 ">
                <img src="#" alt="imagen">
                <video src="#">Video</video>
            </div>
            <div class="col-span-2 row-span-2 col-start-4 flex items-center justify-center border-b-1 border-gray-300 "><h1>nombre</h1></div>
            <div class="col-span-3 row-span-2 row-start-3 flex items-center justify-center border-b-1 border-gray-300 "><p>descripcion</p></div>
            <div class="col-span-2 col-start-4 row-start-3 flex items-center justify-center "><p>categoria</p></div>
            <div class="col-span-2 col-start-4 row-start-4 flex items-center justify-center border-b-1 border-gray-300 "><p>cotizacion o venta</p></div>
            <div class="col-span-5 col-start-1 row-start-5">

                <div class="grid grid-cols-5 grid-rows-1 gap-4">
                    <div class="col-span-3 flex items-center justify-center"><p>Precio</p></div>
                    <div class="col-span-2 col-start-4 flex items-center justify-center"><p>Cantidad</p></div>
                </div>
                

    
            </div>
               
        </div>

       
    </div>

    <div class="bg-indigo-400 p-4 w-500  h-center  mx-auto rounded-lg mt-5 shadow-xl">
            <div class="grid grid-cols-2 grid-rows-2 gap-4">
                <div class="row-span-2 flex items-center justify-center "><button class="w-30 h-15 bg-amber-400 rounded-xl">Aceptar</button></div>
                <div class="row-span-2 flex items-center justify-center"><button class="w-30 h-15 bg-amber-400 rounded-xl">Rechazar</button></div>
            </div>

    </div>


</body>
</html>