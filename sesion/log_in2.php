<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../sesion/log in2.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="form-container">
        <div class="col col-1">

        </div>
        <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Iniciar Sesion</button>
                <button class="btn btn-2" id="register">Registrarse</button>
            </div>

            <!--login form-->
            <div class="login-form">
                <div class="form-title">
                    <span>Iniciar Sesion</span>
                </div>

                <form class="form-inputs" action="../sesion/iniciar_sesion.php"   method="post"  enctype="multipart/form-data">

                    <div class="form-control">
                        <input type="value" required="" name="Nombre_U">
                        <label class="w-70">
                            <span style="transition-delay:0ms">N</span>
                            <span style="transition-delay:25ms">o</span>
                            <span style="transition-delay:50ms">m</span>
                            <span style="transition-delay:75ms">b</span>
                            <span style="transition-delay:100ms">r</span>
                            <span style="transition-delay:125ms">e</span>
                            <span style="transition-delay:150ms"></span>
                            <span style="transition-delay:175ms">d</span>
                            <span style="transition-delay:200ms">e</span>
                            <span style="transition-delay:225ms"></span>
                            <span style="transition-delay:250ms">U</span>
                            <span style="transition-delay:275ms">s</span>
                            <span style="transition-delay:300ms">u</span>
                            <span style="transition-delay:325ms">a</span>
                            <span style="transition-delay:350ms">r</span>
                            <span style="transition-delay:375ms">i</span>
                            <span style="transition-delay:400ms">o</span>
                        </label>
                    </div>
            
                    <div class="form-control">
                        <input type="value" required="" name="contrasena">
                        <label class="w-70">
                            <span style="transition-delay:0ms">C</span>
                            <span style="transition-delay:25ms">o</span>
                            <span style="transition-delay:50ms">n</span>
                            <span style="transition-delay:75ms">t</span>
                            <span style="transition-delay:100ms">r</span>
                            <span style="transition-delay:125ms">a</span>
                            <span style="transition-delay:150ms">s</span>
                            <span style="transition-delay:175ms">e</span>
                            <span style="transition-delay:200ms">ñ</span>
                            <span style="transition-delay:225ms">a</span>
                            
                        </label>
                    </div>
            
                    <div class="checkbox-wrapper-46">
                        <input type="checkbox" id="cbx-46" class="inp-cbx" />
                        <label for="cbx-46" class="cbx"
                          ><span>
                            <svg viewBox="0 0 12 10" height="10px" width="12px">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span
                          ><span>Recuerdame</span>
                        </label>
                    </div>
                    <button class="IniciarSesion">
                        <input type="submit" value="Inicar Sesion">
                        <div class="arrow-wrapper">
                            <div class="arrow"></div>
                    
                        </div>
                    </button>
                </form>
                        

                    
                   

                    
  
            </div>

            <!--login form-->
            <div class="register-form">
                <div class="form-title">
                    <span>Registrarse</span>
                </div>

                <div class="form-inputs">

                    <form action="../sesion/proceso_registro.php" method="post" class="grid grid-cols-3 grid-rows-5 gap-4 flex items-center justify-center h-center w-100 h-110 absolute left-1" enctype="multipart/form-data">
                        


    
   <div class="flex justify-center"> 
        <div class="form-control w-8 h-2">
        <input type="value" required="" name="Nombre_C">
        <label class="w-70 h-2">
            <span style="transition-delay:0ms">N</span>
            <span style="transition-delay:25ms">o</span>
            <span style="transition-delay:50ms">m</span>
            <span style="transition-delay:75ms">b</span>
            <span style="transition-delay:100ms">r</span>
            <span style="transition-delay:125ms">e</span>
            <span style="transition-delay:150ms">s</span>
            
            
        </label>
        </div>
    </div>
   <div class="flex justify-center"> 
        <div class="form-control w-1 h-2 ">
        <input type="value" required="" name="Apellido_P">
        <label class="w-70 h-2 ">
            <span style="transition-delay:0ms">A</span>
            <span style="transition-delay:25ms">p</span>
            <span style="transition-delay:50ms">e</span>
            <span style="transition-delay:75ms">l</span>
            <span style="transition-delay:100ms">l</span>
            <span style="transition-delay:125ms">i</span>
            <span style="transition-delay:150ms">d</span>
            <span style="transition-delay:225ms">o</span> <br>
            
            <span style="transition-delay:175ms">P</span>
            <span style="transition-delay:200ms">a</span>
            <span style="transition-delay:225ms">t</span>
            <span style="transition-delay:225ms">e</span>
            <span style="transition-delay:225ms">r</span>
            <span style="transition-delay:225ms">n</span>
            <span style="transition-delay:225ms">o</span>
            
        </label>
        </div>
    </div>
    <div class="flex justify-center"> 
        <div class="form-control w-1 h-2  ">
        <input type="value" required="" name="Apellido_M">
        <label class="w-70 h-2">
            <span style="transition-delay:0ms">A</span>
            <span style="transition-delay:25ms">p</span>
            <span style="transition-delay:50ms">e</span>
            <span style="transition-delay:75ms">l</span>
            <span style="transition-delay:100ms">l</span>
            <span style="transition-delay:125ms">i</span>
            <span style="transition-delay:150ms">d</span>
            <span style="transition-delay:225ms">o</span><br>
            
            <span style="transition-delay:175ms">M</span>
            <span style="transition-delay:200ms">a</span>
            <span style="transition-delay:225ms">t</span>
            <span style="transition-delay:225ms">e</span>
            <span style="transition-delay:225ms">r</span>
            <span style="transition-delay:225ms">n</span>
            <span style="transition-delay:225ms">o</span>
            
        </label>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="form-control w-1 h-2 ">
            <input type="value" required="" name="Correo">
            <label class="w-70 h-2">
                <span style="transition-delay:0ms">C</span>
                <span style="transition-delay:25ms">o</span>
                <span style="transition-delay:50ms">r</span>
                <span style="transition-delay:75ms">r</span>
                <span style="transition-delay:100ms">e</span>
                <span style="transition-delay:125ms">o</span><br>
     
                <span style="transition-delay:225ms">E</span>
                <span style="transition-delay:225ms">l</span>
                <span style="transition-delay:175ms">e</span>
                <span style="transition-delay:200ms">c</span>
                <span style="transition-delay:225ms">t</span>
                <span style="transition-delay:225ms">r</span>
                <span style="transition-delay:225ms">o</span>
                <span style="transition-delay:225ms">n</span>
                <span style="transition-delay:225ms">i</span>
                <span style="transition-delay:225ms">c</span>
                <span style="transition-delay:225ms">o</span>
                
            </label>
        </div>
    </div>
    <div class="flex justify-center"><div class="form-control w-1 h-2">
        <input type="value" required="" name="Nombre_U">
        <label class="w-70">
            <span style="transition-delay:0ms">N</span>
            <span style="transition-delay:25ms">o</span>
            <span style="transition-delay:50ms">m</span>
            <span style="transition-delay:75ms">b</span>
            <span style="transition-delay:100ms">r</span>
            <span style="transition-delay:125ms">e</span>
            <span style="transition-delay:150ms"></span>
            <span style="transition-delay:175ms">d</span>
            <span style="transition-delay:200ms">e</span><br>
        
            <span style="transition-delay:250ms">U</span>
            <span style="transition-delay:275ms">s</span>
            <span style="transition-delay:300ms">u</span>
            <span style="transition-delay:325ms">a</span>
            <span style="transition-delay:350ms">r</span>
            <span style="transition-delay:375ms">i</span>
            <span style="transition-delay:400ms">o</span>
        </label>
    </div></div>
    <div class="flex justify-center"> <div class="form-control w-1 h-2">
        <input type="value" required="" name="contrasena">
        <label class="w-70">
            <span style="transition-delay:0ms">C</span>
            <span style="transition-delay:25ms">o</span>
            <span style="transition-delay:50ms">n</span>
            <span style="transition-delay:75ms">t</span>
            <span style="transition-delay:100ms">r</span>
            <span style="transition-delay:125ms">a</span>
            <span style="transition-delay:150ms">s</span>
            <span style="transition-delay:175ms">e</span>
            <span style="transition-delay:200ms">ñ</span>
            <span style="transition-delay:225ms">a</span>
            
        </label>
    </div></div>
    <div class="">
        <div id="firstFilter" class="filter-switch">
        <input checked="" id="option1" name="Sexo" type="radio" value="Hombre" />
        <label class="option" for="option1">Hombre</label>
        <input id="option2" name="Sexo" type="radio" value="Mujer" />
        <label class="option" for="option2">Mujer</label>
        <span class="background"></span>
      </div>
    </div>
    <div class="" ><div id="firstFilter" class="filter-switch">
        <input checked="" id="option3" name="rol" type="radio" value="Comprador" />
        <label class="option" for="option3">Comprador</label>
        <input id="option4" name="rol" type="radio" value="Vendedor"/>
        <label class="option" for="option4">Vendedor</label>
        <span class="background"></span>
      </div>
    </div>

    <div class="" ><div id="firstFilter" class="filter-switch">
        <input checked="" id="option5" name="Privacidad" type="radio" value="Publico" />
        <label class="option" for="option5">Publico</label>
        <input id="option6" name="Privacidad" type="radio" value="Privado" />
        <label class="option" for="option6">Privado</label>
        <span class="background"></span>
      </div>
    </div>

   
   
   <div class="row-span-2 flex items-center justify-center h-center mb-8 ml-5"><div>
        <label class="flex items-center justify-center h-center">Fecha de Nacimiento</label>
       
        <input type="date" name="fecha_Nac">
    </div></div>
    <div class="row-span-2 col-start-3 row-start-4 flex items-center justify-center h-center mb-8"><div>  
                                                                                    
        <label class="custum-file-upload" for="file">
        
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
        </div>
        <div class="text">
           <span>Agregar foto de perfil</span>
           </div>
           <input type="file" id="file" name="imagen">
        </label></div></div>
    <div class="row-span-2 col-start-2 row-start-4"><div class="row-span-2 col-start-2 row-start-4 flex justify-center">
        <input type="submit" value="Enviar">
    </div></div>

    
                            
                        
                        
                        
                       
                        </form>

                    

    
                    
                        
                    
                                        
                    </div>

                   

                    

                </div>

          


          

            
                    
            </div>
    </div>
                

                
      


    <script src="./log in2.js"></script>
</body>
</html>

