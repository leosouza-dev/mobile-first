let botao = document.querySelector(".menu-principal__btn");
let menuPrincipal = document.querySelector(".menu-principal")

botao.addEventListener("click", abrirFecharMenu);

function abrirFecharMenu(){
    menuPrincipal.classList.toggle("menu-principal--fechado");
}