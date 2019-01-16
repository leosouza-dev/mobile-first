<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $titulo = "Design Responsivo";
        global $tituloPagina;
        if($tituloPagina != "")
        {
            $titulo .= " - " . $tituloPagina;
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $titulo ?></title>
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <?php if($tituloPagina == ''): ?>
                <h1 class="logo">Design Responsivo</h1>

            <?php else: ?>
                <a href="index.php" class="logo">Design Responsivo</a>

            <?php endif; ?>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn menu-principal__btn--fechar">Abrir/fechar menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php if($tituloPagina == '') echo 'menu-principal__item--atual' ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php if($tituloPagina == 'Sobre nós') echo 'menu-principal__item--atual' ?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-principal__item <?php if($tituloPagina == 'Portifólio') echo 'menu-principal__item--atual' ?>" href="portifolio.php">Portifólio</a></li>
                    <li><a class="menu-principal__item <?php if($tituloPagina == 'Contato') echo 'menu-principal__item--atual' ?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>