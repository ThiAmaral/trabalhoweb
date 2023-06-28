<?php
  require_once './cabecalho.php'
?>
<form class="container card my-2 py-2" action="../controllers/controllerUsuario.php" method="POST">
  <div class="mb-3">
    <label for="pNome" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" id="pNome" name="pNome">
  </div>
  <div class="mb-3">
    <label for="pEmail" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="pEmail" name="pEmail">
  </div>
  <div class="mb-3">
    <label for="pCpf" class="form-label">CPF</label>
    <input type="number" class="form-control" id="pCpf" name="pCpf">
  </div>
  <div class="mb-3">
    <label for="pSenha" class="form-label">Senha</label>
    <input type="text" class="form-control" id="pSenha" name="pSenha">
  </div>
  <div class="mb-3">
    <label for="pConfirmarSenha" class="form-label">Confirmar Senha</label>
    <input type="text" class="form-control" id="pConfirmarSenha" name="pConfirmarSenha">
  </div>
  <div class="mb-1 form-check">
    <input type="checkbox" class="form-check-input" id="termos" name="termos">
    <label class="form-check-label" for="termos">Concordo com termos e condições.</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="reberNotificacoes" name="reberNotificacoes">
    <label class="form-check-label" for="reberNotificacoes">Gostaria de receber e-mails com novidades e promoções!</label>
  </div>
  <input type="hidden" name="opcao" value="1">
  <input type="submit" class="btn btn-primary" value="Cadastrar"></button>
</form>
<?php
  require_once './rodape.php'
?>