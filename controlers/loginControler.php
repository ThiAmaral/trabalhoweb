<?php

require_once '../dao/connection.php';
require_once '../services/authAdmin.php';
require_once '../services/authCustomer.php';

function login($user, $user){
    $connection = new Connection();
    $conn = $connection->getConexao();

    $sql = $conn->prepare("select * from usuarios where login = :usr and senha = :pass");

    $user = $user;
    $password = $password;

    $sql->bindValue(':usr', $user);
    $sql->bindValue(':pass', $password);
    $sql->execute();

    $count = $sql->rowCount();

    if($count == 1){
        return true;
    }
    else{
        return false;
    }
}

$user = $_REQUEST['pUser'];
$password = $_REQUEST['pPassword'];
$type = $_REQUEST['pType'];

if($tipo == 1){
    $logged = efetuarConexao($user, $password);
    if($logged){
        session_start();

        $_SESSION['logged'] = true;
        $_SESSION['typeofuser'] = 1;
        header("Location: ../views/index.php");
    }
    else{
        header("Location: ../views/login.php?erro=1");
    }
}


?>