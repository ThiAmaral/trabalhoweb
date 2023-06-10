<?php
  require_once './cabecalho.php'
?>
<form action="../controlers/ControlerLogin.php" method="get" class="container card my-2 py-2">
  <div class="mb-3">
    <label for="pUsuario" class="form-label">Usuário</label>
    <input type="text" class="form-control" id="pUsuario">
  </div>
  <div class="mb-3">
    <label for="pSenha" class="form-label">Senha</label>
    <input type="text" class="form-control" id="pSenha">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="lembrarSenha">
    <label class="form-check-label" for="lembrarSenha">Continue Conectado</label>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Entrar</button>
  <a href="./novoUsuario.php">Ainda não possui cadastro?
</form>
  
<?php
  require_once './rodape.php'
?>