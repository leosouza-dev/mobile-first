<?php 
        global $tituloPagina;
        $tituloPagina = "Portifólio";
        include('parts/cabecalho.php');
    ?>

    <main>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portifólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Integer vulputate vulputate nulla, nec malesuada nibh imperdiet ut. <br>
                Nulla vulputate pellentesque nisi, at mattis purus. Nam est elit, aliquet lacinia scelerisque a, viverra sed dolor.<br>
                Phasellus aliquet lectus magna. Nullam sit amet.
            </p>
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="avião">
                            <h2 class="lista-trabalhos__titulo">Titulo do Job 1</h2>
                        </a>
                    </li>

                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Titulo do Job 2</h2>
                        </a>
                    </li>

                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Titulo do Job 3</h2>
                        </a>
                    </li>

                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Titulo do Job 4</h2>
                        </a>
                    </li>

                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Titulo do Job 5</h2>
                        </a>
                    </li>

                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Titulo do Job 6</h2>
                        </a>
                    </li>

                </ul>
            </nav>
        </section>
    </main>

    <?php 
    include('parts/rodape.php')
    ?>