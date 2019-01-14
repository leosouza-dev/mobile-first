// let botao = document.querySelector(".menu-principal__btn");
// let menuPrincipal = document.querySelector(".menu-principal")

// botao.addEventListener("click", abrirFecharMenu);

// function abrirFecharMenu(){
//     menuPrincipal.classList.toggle("menu-principal--fechado");
// }

//fazendo com jquery
$(".menu-principal__btn").click(function(){
    $(".menu-principal").toggleClass("menu-principal--fechado");
});
