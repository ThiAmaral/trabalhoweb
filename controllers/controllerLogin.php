<?php
    echo "Login";
    require_once('../dao/conexaoDAO.php');

    function efetuarLogin($usuario, $senha){
        $con = new ConexaoDAO();
        $conexao = $con->getConexao();
        $sql = $conexao->prepare("select * from usuarios where login = :usr and senha = :pass");
        $usuario = strtolower($usuario); // padronizando o texto digitado em minúsculo para ambos, login e senha
        $senha = strtolower($senha);
        $sql->bindValue(':usr', $login);
        $sql->bindValue(':pass', $senha);
        $sql->execute();

        $count = $sql->rowCount(); // verificando quantos registros retornam; caso seja 1, localizou o usuário
        if($count == 1){
            return true;
        }
        else
            return false;
    }

    $tipo = $_REQUEST['pTipo'];
    $usuario = $_REQUEST['pUsuario'];
    $senha = $_REQUEST['pSenha'];
   
    if ($tipo == '1'){
        $logado = efetuarLogin($usuario, $senha);
        if($logado){// se achou o usuário, a função retorna true
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['tipousuario'] = '1';
            header("Location: ../views/index.php");
        }
        else{
            header("Location: ../views/formLogin.php?erro=1");
        }
    }

?>