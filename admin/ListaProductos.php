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

    <div class="">
        <div class="grid grid-cols-5 grid-rows-5 gap-20 mt-30">
            <div class="col-span-5 row-start-1 mx-auto w-300 flex items-center justify-center bg-gray-200 shadow-lg rounded-xl">
                <div>
                    <div class="grid grid-cols-8 grid-rows-3 gap-4">
                        <div class="col-span-2 row-span-3 flex items-center justify-center"> <img src="#" alt="esta es una imagen"> </div>
                        <div class="col-span-4 col-start-3"><h2>Título de la Tarjeta</h2></div>
                        <div class="col-span-4 row-span-2 col-start-3"><p >Esta es una descripción breve de la tarjeta. Puedes añadir más información aquí.</p></div>
                        <div class="col-span-2 col-start-7 row-start-2 flex items-center justify-center "><button class="w-full bg-amber-400 rounded-xl "><a href="#">Ver</a></button></div>
                    </div> 

    
                </div><br>
            </div>
            <div class="col-span-5 row-start-2 mx-auto w-300  flex items-center justify-center bg-gray-200 shadow-lg rounded-xl" >
                <div >
                    <div class="grid grid-cols-8 grid-rows-3 gap-4">
                        <div class="col-span-2 row-span-3 flex items-center justify-center"> <img src="#" alt="esta es una imagen"> </div>
                        <div class="col-span-4 col-start-3"><h2>Título de la Tarjeta</h2></div>
                        <div class="col-span-4 row-span-2 col-start-3"><p >Esta es una descripción breve de la tarjeta. Puedes añadir más información aquí.</p></div>
                        <div class="col-span-2 col-start-7 row-start-2 flex items-center justify-center "><button class="w-full bg-amber-400 rounded-xl "><a href="#">Ver</a></button></div>
                    </div>

    
                </div><br>
            </div>
        </div>

    
            
      
    </div>
    
</body>
</html>