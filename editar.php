<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/editar.css">
    <title>Editar</title>
</head>
<body>
    <div>
        <p class="h1"><strong>Cadastro</strong></p>
        <p id="subtitulo">Complete suas informações</p>
    </div>
    <br>
    <form class="needs-validation" novalidate>
        <fieldset class="grupo">
            <div class="valid-feedback">
                <label for="validationServer01"><strong> Nome Completo:</strong></label>
                <input type="text"  class="form-controle is-valid" id="validationServer01" name="nome"  placeholder="Nome Completo" required>
            </div>
            <div class="valid-feedback">
                <label for="validationServer02"><strong>Genero:</strong></label>
                <label>
                    <input type="radio"  class="form-controle is-valid " id="validationServer02" name="sexo" value="masculino checked">Masculino
                </label>
                <label>
                    <input type="radio"  class="form-controle is-valid" id="validationServer02"name="sexo" value="feminino">Feminino
                </label>
            </div>
            <div class="valid-feedback">
                <label for="validationServer03"><strong>Data de Nascimento:</strong></label>
                <input type="date" class="form-controle is-valid" id="validationServer03" name="dt_nascimento"  placeholder="Data de Nascimento" required>
            </div>
            <div class="valid-feedback">
                <label for="validationServer04"><strong>CPF:</strong></label>
                <input type="text" class="form-controle is-valid" id="validationServer04" name="cpf"  placeholder="CEP"required>
            </div>
            <div class="valid-feedback">
                <label for="validationServer05"><strong>Telefone:</strong></label>
                <input type="tel"  class="form-controle is-valid " name="telefone" id="validationServer05"  placeholder="Telefone" required>
            </div>
            <div class="valid-feedback">
                <label for="validationServer07"><strong>E-mail:</strong></label>
                <input type="email"  class="form-controle is-valid" id="validationServer06" name="email" placeholder="email@gmail.com" required>
            </div>
            <div class="valid-feedback">
                <label for="validationServer08"><strong>Senha:</strong></label>
                <input type="password" class="form-controleis-valid " name="senha" id="validationServer07"  placeholder="Senha" required>
            </div>
            <br>

            <button  class="btn btn-primary" type="submit">Cadastrado</button><br>
            <br>

            <button class="btn btn-primary" type="submit">Salvar</button>

            <button class="btn btn-primary" type="reset" >Excluir</button>

        </fieldset>
    </form>
</body>
</html>