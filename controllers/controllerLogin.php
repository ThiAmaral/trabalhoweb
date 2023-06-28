<?php

    require_once('../dao/conexaoDAO.php');

    function efetuarLogin($usuario, $senha){
        $con = new ConexaoDAO();
        $conexao = $con->getConexao();
        $sql = $conexao->prepare("select * from usuarios where email = :usr and senha = :pass");
        $usuario = ($usuario);
        $senha = ($senha);
        $sql->bindValue(':usr', $usuario);
        $sql->bindValue(':pass', $senha);
        $sql->execute();

        $count = $sql->rowCount(); // verificando quantos registros retornam; caso seja 1, localizou o usuário
        if($count == 1){
            return true;
        }
        else
            return false;
    }

    $usuario = $_REQUEST['pAcessoUsuario'];
    $senha = $_REQUEST['pAcessoSenha'];
    
    $logado = efetuarLogin($usuario, $senha);
    if($logado){// se achou o usuário, a função retorna true
        if(isset($_REQUEST['lembrarSenha'])){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['pAcessoUsuario'] = $usuario;
        }
        else{
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['pAcessoUsuario'] = $usuario;
        }
        header("Location: ../index.php");
    }
    else{
        header("Location: ../views/formLogin.php?erro=1");
    }
    

?>