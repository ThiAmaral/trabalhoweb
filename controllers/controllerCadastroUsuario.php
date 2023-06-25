<?php
  require_once '../classes/usuario.php';
  require_once '../dao/usuariosDAO.php';

  $usuario = new Usuario();
  $usuario->setusuario($_REQUEST['pNome'], $_REQUEST['pEmail'], $_REQUEST['pCpf'], $_REQUEST['pSenha'], 1);
  $usuarioDAO = new UsuariosDao();
  $usuarioDAO->incluirUsuario($usuario);

  header('Location: ../views/login.php');
?>