// let botao = document.querySelector(".menu-principal__btn");
// let menuPrincipal = document.querySelector(".menu-principal")

// botao.addEventListener("click", abrirFecharMenu);

// function abrirFecharMenu(){
//     menuPrincipal.classList.toggle("menu-principal--fechado");
// }


$(document).ready(function(){
    
    //fazendo botão menu-principal com jquery
    $(".menu-principal__btn").click(function(){
        $(".menu-principal").toggleClass("menu-principal--fechado");
    });
    
    //plugin slick - carrousel/slide de imagens - depoimentos
    $(".depoimentos__caixa").slick({
        autoplay: true,
        arrows: false,
        dots: true
    });
});

