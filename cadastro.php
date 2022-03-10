<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Login/Cadastro</title>
</head>
<body> 
    <div >
        <h1 id="titulo">Cadastro</h1>
        <p id="subtitulo">Complete suas informações</p>
    </div>
    
    <fieldset class="grupo">
        <form action="/action_page.php">
            <label for="nome"><strong> Nome Completo:</strong></label>
                <input type="text" id="nome" name="nome" required><br>
            <br>
            <div>
                <label for="genero"><strong>Genero:</strong></label>
                <label>
                    <input type="radio" name="devweb" value="masculino checked">Masculino
                </label>
                <label>
                    <input type="radio" name="devweb" value="feminino">Feminino
                </label>
            </div>
            <br>
            <label for="dt_nascimento"><strong>Data de Nascimento:</strong></label>
                <input type="date" id="dt_nascimento" name="dt_nascimento" required><br>
            <br>
            <label for="cpf"><strong>CPF:</strong></label>
                <input type="text" id="cpf" name="cpf" required><br>
            <br>
            <div>
                <label for="telefone"><strong>Telefone:</strong></label>
                    <input type="tel" name="telefone" id="telefone" required>
            </div>
            <br>

            <label for="email"><strong>E-mail:</strong></label>
                <input type="email" id="email" name="email" required><br>
            <br>

            <div>
                <label for="senha"><strong>Senha:</strong></label>
                    <input type="password" name="senha" id="senha" required>
            </div>
            <br><br>
                
            <button type="submit" >Cadastrado</button><br> 
            <br>

            <button type="submit" >Salvar</button> 

            <button type="reset" >Excluir</button> 
        
        </form>

    </fieldset> 

</body>
</html>