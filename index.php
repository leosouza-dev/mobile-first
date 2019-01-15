    <?php 
    include('parts/cabecalho.php')
    ?>

    <main>

        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Texto grande bem aqui</h2>
            <p class="cabecalho-home__subtitulo">texto menor aqui</p>
            <a class="cabecalho-home__role" href="#servicos">role para ver mais...</a>
        </header>

        <section id="servicos" class="servicos">
            <div class="container">
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servicos__item">
                    <img src="img/icone-desenvolvimento-web.png" alt="">
                    <h3>Desenvolvimento Web</h3>
                    <p class="servicos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. Aliquam dignissim pulvinar arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </section>
    
                <section class="servicos__item">
                    <img src="img/icone-carrinho-compras.png" alt="">
                    <h3>E-commerce</h3>
                    <p class="servicos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. Aliquam dignissim pulvinar arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </section>
    
                <section class="servicos__item">
                    <img src="img/icone-cafe.png" alt="">
                    <h3>Café</h3>
                    <p class="servicos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. Aliquam dignissim pulvinar arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </section>
            </div>
        </section>

        <section class="depoimentos">
            <div class="container">
                <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
                
                <div class="depoimentos__caixa">
                    
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto Pessoa">
                        <p class="depoimentos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing consectetur adipiscing consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. </p>
                        <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
                    </section>

                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto Pessoa">
                        <p class="depoimentos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing consectetur adipiscing consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. </p>
                        <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
                    </section>

                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto Pessoa">
                        <p class="depoimentos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing consectetur adipiscing consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. </p>
                        <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
                    </section>

                </div>

            </div>
        </section>

    </main>

    <?php 
    include('parts/rodape.php')
    ?>

    