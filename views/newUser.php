<?php
  require_once './header.php'
?>
  <form class="container card my-2 py-2">
    <div class="mb-3">
      <label for="pUser" class="form-label">Usuário</label>
      <input type="email" class="form-control" id="pUser">
    </div>
    <div class="mb-3">
      <label for="pPassowrd" class="form-label">Senha</label>
      <input type="text" class="form-control" id="pPassowrd">
    </div>
    <div class="mb-3">
      <label for="pConfirmPassowrd" class="form-label">Confirmar Senha</label>
      <input type="text" class="form-control" id="pConfirmPassowrd">
    </div>
    <div class="mb-1 form-check">
      <input type="checkbox" class="form-check-input" id="terms">
      <label class="form-check-label" for="terms">Concordo com termos e condições.</label>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="emailNotification">
      <label class="form-check-label" for="emailNotification">Gostaria de receber e-mails com novidades e promoções!</label>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
<?php
  require_once './footer.php'
?>