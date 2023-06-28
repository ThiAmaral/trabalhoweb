<?php
  require_once './cabecalho.php'
?>

<?php 
  if($logado) : 
    $usuario = $_SESSION['pAcessoUsuario'];
    echo($usuario);
    header('Location: ../controllers/controllerUsuario.php?opcao=2');
  ?>
  
  <h1>Ola mundo</h1>

<?php
  else : header('Location: ./login.php');
  endif ;
?>
  
<?php
  require_once './rodape.php'
?>