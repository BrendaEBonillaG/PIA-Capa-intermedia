const fotosBtn =document.querySelector("#Fotos");
const videosBtn = document.querySelector("#Videos");

const loginForm =document.querySelector("#form_fotos");
const registerForm = document.querySelector("#form_videos");


fotosBtn.addEventListener('click', ()=>{
    fotosBtn.style.backgroundColor = "#A4BF7A";
    videosBtn.style.backgroundColor ="#344028";

    loginForm.style.left ="150%";
    registerForm.style.left ="-50%";


    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;
    

})

videosBtn.addEventListener('click', ()=>{
    fotosBtn.style.backgroundColor = "#344028";
    videosBtn.style.backgroundColor ="#A4BF7A";

    loginForm.style.left ="50%";
    registerForm.style.left ="50%";

    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;
    

})