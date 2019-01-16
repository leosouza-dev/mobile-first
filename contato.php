    <?php 
        global $tituloPagina;
        $tituloPagina = "Contato";
        include('parts/cabecalho.php');

        $nome = '';
        $email = '';
        $mensagem = ''; 
        $erroFormulario = '';
        $sucessoFormulario = '';
        if( isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            if($nome != '' && $email != '' && $mensagem != ''){
                // mensagem ok
                $mensagemEmail = 'Nome: ' . $nome . ' - ';
                $mensagemEmail .= 'Email: ' . $email . ' - ';
                $mensagemEmail .= 'Mensagem: ' . $mensagem;
                if(mail('sarival@sarival.com.br', 'Mensagem de Contato', $mensagemEmail)){
                    //email enviado
                    $sucessoFormulario = "Mensagem enviada com sucesso";
                }
                else{
                    //email não enviado
                    $erroFormulario = "Mensagem não enviada. Tente novamente mais tarde ou diretamente no email sarival@sarival.com.br";
                }
            }
            else{
                //mensagem de erro
                $erroFormulario = "Preencha todos os campos";
            }
        }
    ?>

    <main>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
        </header>
        <section class="pagina-conteudo container">
            <p class="text-center">Suspendisse convallis, turpis vitae placerat luctus, est felis dictum augue.</p>
            <form action="contato.php" class="formulario" method="post">

                <?php if($erroFormulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>

                <?php if($sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoFormulario ?>
                    </div>
                <?php endif; ?>

                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="nome">Nome</label> <br>
                    <input class="formulario__campo" name="nome" id="nome" type="text">
                </div>

                <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario__label" for="email">E-mail</label> <br>
                    <input class="formulario__campo" name="email" id="email" type="email">
                </div>

                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label> <br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" name="submit">
            </form>

            <p class="text-center">
                Maecenas facilisis volutpat ipsum, sed faucibus tortor aliquam non.<br>
                Aliquam erat volutpat. Vivamus cursus pulvinar turpis, nec blandit augue maximus ac.
            </p>

        </section>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14623.76894338931!2d-46.694952!3d-23.6064045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x606f678d72060e9a!2sIASTECH+Automa%C3%A7%C3%A3o+de+Sistemas!5e0!3m2!1spt-BR!2sbr!4v1545924341474" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </main>

    <?php 
    include('parts/rodape.php')
    ?>