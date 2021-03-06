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
  <form action="process_cadastrar.php" method="POST">
    <fieldset class="grupo">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationServer01"><strong>Nome Completo:</strong></label>
          <input type="text" class="form-control is-valid" id="validationServer01" name="nome" value="<?=$nome?>"  placeholder="Nome Completo"  required>
          <div class="valid-feedback">
          </div>
        </div><br>
        <div class="col-md-4 mb-3">
          <label><strong>Genero:</strong></label>
            <input type="radio"  class="form-control is-valid"  name="sexo" value="masculino" checked>Masculino
            <input type="radio"  class="form-control is-valid" name="sexo" value="feminino">Feminino
          </label>
          <div class="valid-feedback">
          </div>
        </div><br>
        <div class="col-md-4 mb-3">
          <label for="validationServer03"><strong>Data de Nascimento:</strong></label>
          <input type="date" class="form-control is-invalid" id="validationServer03" name="dt_nascimento" value="<?=$dt_nascimento?>" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationServer04"><strong>CPF:</strong></label>
          <input type="text" class="form-control is-invalid" id="validationServer04" name="cpf" value="<?=$cpf?>"  placeholder="CPF" required>
          <div class="invalid-feedback">
          </div>
        </div><br>
        <div class="col-md-3 mb-3">
          <label for="validationServer05"><strong>Telefone:</strong></label>
          <input type="tel" class="form-control is-invalid" id="validationServer05"  name="telefone" value="<?=$telefone?>"  placeholder="Telefone" required>
          <div class="invalid-feedback">
          </div>
        </div><br>
        <div class="col-md-3 mb-3">
          <label for="validationServer06"><strong>E-mail:</strong></label>
          <input type="email" class="form-control is-invalid" id="validationServer06" name="email" value="<?=$email?>" <?=$aux?>  placeholder="email@gmail.com" required>
          <div class="invalid-feedback">
          </div>
        </div><br>
        <div class="col-md-3 mb-3">
          <label for="validationServer07"><strong>Senha:</strong></label>
          <input type="password" class="form-control is-invalid" id="validationServer07" name="senha" value="<?=$senha?>"  placeholder="Senha" required>
          <div class="invalid-feedback">
          </div>
        </div>
      </div>    
      <br>
      
      <button class="btn btn-primary" type="submit">Salvar</button>
      
      <button class="btn btn-primary" type="reset">Excluir</button>

    </fieldset>
  </form>
</body>
</html>
