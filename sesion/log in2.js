const loginBtn =document.querySelector("#login");
const registerBtn = document.querySelector("#register");

const loginForm =document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");


loginBtn.addEventListener('click', ()=>{
    loginBtn.style.backgroundColor = "#21264D";
    registerBtn.style.backgroundColor ="rgba(255,255,255,0.2)";

    loginForm.style.left ="50%";
    registerForm.style.left ="-50%";


    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;
    

})

registerBtn.addEventListener('click', ()=>{
    loginBtn.style.backgroundColor = "rgba(255,255,255,0.2)";
    registerBtn.style.backgroundColor ="#21264D";

    loginForm.style.left ="150%";
    registerForm.style.left ="50%";

    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;
    

})

/*radios*/
// Obtener las opciones de los dos grupos
const rol_opcion2 = document.getElementById('option4');
const privacidad_opcion2 = document.getElementById('option6');
const privacidad_opcion1 = document.getElementById('option5');

// Cuando se selecciona la opción 2 del primer grupo
rol_opcion2.addEventListener('change', () => {
  if (rol_opcion2.checked) {
    // Deshabilitar la opción 2 del segundo grupo
    privacidad_opcion2.disabled = true;
  }

  if (privacidad_opcion2.checked) {
    privacidad_opcion1.checked = true; // Cambiar a la opción 1
  }
});

// Cuando se selecciona cualquier opción en el primer grupo, habilitar la opción 2 del segundo grupo
const rol_radios = document.querySelectorAll('input[name="rol"]');
rol_radios.forEach(radio => {
  radio.addEventListener('change', () => {
    if (!rol_opcion2.checked) {
      // Si la opción 2 del primer grupo no está seleccionada, habilitar la opción 2 del segundo grupo
      privacidad_opcion2.disabled = false;
    }
  });
});
