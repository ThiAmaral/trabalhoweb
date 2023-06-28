<?php
  require_once '../classes/usuario.php';
  require_once '../dao/usuariosDAO.php';

  $opcao = (int)$_REQUEST('opcao');

  if($opcao == 1){// }Insere Usuario
    $usuario = new Usuario();
    $usuario->setUsuario($_REQUEST['pNome'], $_REQUEST['pEmail'], $_REQUEST['pCpf'], $_REQUEST['pSenha'], 1);
    $usuarioDAO = new UsuariosDao();
    $usuarioDAO->incluirUsuario($usuario);

    header('Location: ../views/login.php');
  }
  if($opcao == 2){//Buca Usuario
    session_start();
    $dadosUsuario = $_SESSION['pAcessoUsuario'];
    // $dadosUsuarioDAO = new UsuariosDao();
    // $dadosUsuarioDAO->getUsuario($dadosUsuario);
    // echo($dadosUsuarioDAO);
    echo($dadosUsuario);
  }
?>