<?php
  require_once './cabecalho.php'
?>
<form action="../controllers/ControllerLogin.php" method="GET" class="container card my-2 py-2">
  <div class="mb-3">
    <label for="pUsuario" class="form-label">E-mail de Acesso</label>
    <input type="text" class="form-control" id="pUsuario" name="pAcessoUsuario">
  </div>
  <div class="mb-3">
    <label for="pAcessoSenha" class="form-label">Senha</label>
    <input type="text" class="form-control" id="pAcessoSenha" name="pAcessoSenha">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="lembrarSenha" name="lembrarSenha">
    <label class="form-check-label" for="lembrarSenha">Continue Conectado</label>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Entrar</button>
  <a href="./novoUsuario.php">Ainda não possui cadastro?
</form>
  
<?php
  require_once './rodape.php'
?>