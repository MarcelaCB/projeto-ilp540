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
            <div class="col-md-4 mb-3">
                <label for="validationCustom01"><strong>Nome Completo:</strong></label>
                <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome Completo" required>
                <div class="valid-feedback">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02"><strong>Genero:</strong></label>
                <label>
                    <input type="radio"  class="form-controle" id="validationCustom02" name="sexo" value="masculino checked">Masculino
                </label>
                <label>
                    <input type="radio"  class="form-controle" id="validationCustom02" name="sexo" value="feminino">Feminino
                </label>
                <div class="valid-feedback">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom03"><strong>Data de Nascimento:</strong></label>
                <input type="date" class="form-control" id="validationCustom03" name="dt_nascimento" placeholder="Data de Nascimento" required>
                <div class="valid-feedback">
                </div>
            </div>    
            <div class="col-md-4 mb-3">
                <label for="validationCustom04"><strong>CPF:</strong></label>
                <input type="text" class="form-control" id="validationCustom04" name="cpf" placeholder="CPF" required>
                <div class="valid-feedback">
                </div>
            </div>    
            <div class="col-md-4 mb-3">
                <label for="validationCustom05"><strong>Telefone:</strong></label>
                <input type="tel" class="form-control" id="validationCustom05" name="telefone" placeholder="Telefone" required>
                <div class="valid-feedback">
                </div>
            </div>    
            <div class="col-md-4 mb-3">
                <label for="validationCustom06"><strong>E-mail:</strong></label>
                <input type="email" class="form-control" id="validationCustom06" name="email" placeholder="email@gmail.com" required>
                <div class="valid-feedback">
                </div>
            </div>    
            <div class="col-md-4 mb-3">
                <label for="validationCustom07"><strong>Senha:</strong></label>
                <input type="password" class="form-control" id="validationCustom07" name="senha" placeholder="Senha" required>
                <div class="valid-feedback">
                </div>
            </div>    
            <br>
    
            <button class="btn btn-primary" type="submit">Salvar</button>

            <button class="btn btn-primary" type="reset" >Excluir</button>

        </fieldset>
    </form>
</body>
</html>