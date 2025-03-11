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
    

<div class="h-100 mt-2 mb-30 bg-amber-400 opacity-80 w-500 mx-auto rounded-xl " >
    <div class="grid grid-cols-5 grid-rows-5 gap-4">
        <div class="col-span-2 row-span-3 row-start-2"><img src="#" alt="#"></div>
        <div class="col-span-3 col-start-3 row-start-2"><h1>Nombre de Usuario</h1></div>
        <div class="col-span-3 row-span-2 col-start-3 row-start-3">
          <h2>publico</h2>
        </div>
        </div>
</div>


<div class="w-400 mx-auto grid grid-cols-4 grid-rows-1 gap-8 flex items-center justify-center">
    <div class="flex items-center justify-center bg-gray-200 shadow-lg rounded-xl w-75 h-100">

        <div class="grid grid-cols-1 grid-rows-6 gap-4">
            <div class="row-span-2"><img src="#" alt="Imagen"></div>
            <div class="row-span-3 row-start-3">
                <div class="grid grid-cols-1 grid-rows-3 gap-4">
                    <div ><h2>Titulo</h2></div>
                    <div class="row-span-2"><p>Descripcion</p></div>
                </div>
                

            </div>
            <div class="row-start-6"><a href="#">Ver</a></div>
        </div>
        
    </div>
    <div class="flex items-center justify-center bg-gray-200 shadow-lg rounded-xl w-75 h-100">
        <div class="grid grid-cols-1 grid-rows-6 gap-4">
            <div class="row-span-2"><img src="#" alt="Imagen"></div>
            <div class="row-span-3 row-start-3">
                <div class="grid grid-cols-1 grid-rows-3 gap-4">
                    <div ><h2>Titulo</h2></div>
                    <div class="row-span-2"><p>Descripcion</p></div>
                </div>
                

            </div>
            <div class="row-start-6"><a href="#">Ver</a></div>
        </div>

    </div>
    <div class="flex items-center justify-center bg-gray-200 shadow-lg rounded-xl w-75 h-100">
        <div class="grid grid-cols-1 grid-rows-6 gap-4">
            <div class="row-span-2"><img src="#" alt="Imagen"></div>
            <div class="row-span-3 row-start-3">
                <div class="grid grid-cols-1 grid-rows-3 gap-4">
                    <div ><h2>Titulo</h2></div>
                    <div class="row-span-2"><p>Descripcion</p></div>
                </div>
                

            </div>
            <div class="row-start-6"><a href="#">Ver</a></div>
        </div>

    </div>
    <div class="flex items-center justify-center bg-gray-200 shadow-lg rounded-xl w-75 h-100">
        <div class="grid grid-cols-1 grid-rows-6 gap-4">
            <div class="row-span-2"><img src="#" alt="Imagen"></div>
            <div class="row-span-3 row-start-3">
                <div class="grid grid-cols-1 grid-rows-3 gap-4">
                    <div ><h2>Titulo</h2></div>
                    <div class="row-span-2"><p>Descripcion</p></div>
                </div>
                

            </div>
            <div class="row-start-6"><a href="#">Ver</a></div>
        </div>

    </div>
</div>
    
       


     
        
            
            

        
   


        
       
    

    <script src="./perfil.js"></script>
</body>
</html>