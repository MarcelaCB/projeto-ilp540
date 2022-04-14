<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Home</title>
    </head>
    <body>
        <header class="cabecalho">
            <img class="cabecalho-imagem" src="img/capa.png" alt="tapete de crochê">
            <nav class="cabecalho-menu">
                <a class="cabecalho-menu-item">FEMININO</a>
                <a class="cabecalho-menu-item">MASCULINO</a>
                <a class="cabecalho-menu-item">INFANTIL</a>
                <a class="cabecalho-menu-item">CASA</a>
                <a class="cabecalho-menu-item">MARCAS</a>
                <a class="cabecalho-menu-item">PREMIUM</a>
                <a class="cabecalho-menu-item">PROMOS</a>
            </nav>
        </header>
        <main class="conteudo">
            <section class="conteudo-principal">
                <div class="conteudo-principal-escrito">
                    <p id="h1" class="conteudo-principal-escrito-titulo">Tapete de Crochê</p>
                    <p class="conteudo-principal-estrito-subtitulo">Bem-Vindo(a), visitante!</p>
                    <nav>  
                        <a href="index.php">Home</a> <br>
                        <a href="login.php">Login /</a>   
                        <a href="cadastro.php">Cadastro</a>
                    </nav>
                </div>
                <form action="#">
                    <label>
                        <input type="text" name="search"  id="input-sizing-default" placeholder="pesquisa...">
                    </label>
                    <label>
                        <img src="img/search.png" alt="pesquisa">
                    </label>
                    <label>
                        <nav>
                            <a href="editar.php"><img src="img/pessoa.png" alt="pessoa"></a>
                        </nav>
                    </label>
                    <label>
                        <img src="img/car.png" alt="car">
                    </label>
                </form>
            </section>
            <br>
                <legend><strong>Amostra de tapete</strong></legend>
                <label>
                    <img src="img/tapete_fio_malha.png" alt="tapete">
                    <p>Tapete de fio de malha </p>
                </label>
                <label>
                    <img src="img/tapete_hexágono.png" alt="tapete">
                    <p>Tapete de Crochê</p>
                </label>
                <label>
                    <img src="img/tapete_infantil.png" alt="tapete">
                    <p>Tapete de Crochê de infantil</p>
                </label>
            </div>
        </main>

        <footer class="rodape">
            <p>Política de Privacidade  <br>   Segurança   <br>    Meus pedidos</p>
        </footer>
        
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
