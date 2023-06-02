<?php
  require_once './header.php'
?>
  <form action="../controlers/ControlerLogin.php" method="get" class="container card my-2 py-2">
    <div class="mb-3">
      <label for="pUser" class="form-label">Usuário</label>
      <input type="email" class="form-control" id="pUser">
    </div>
    <div class="mb-3">
      <label for="pPassord" class="form-label">Senha</label>
      <input type="text" class="form-control" id="pPassord">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="remenberPassword">
      <label class="form-check-label" for="remenberPassword">Continue Conectado</label>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
<?php
  require_once './footer.php'
?>