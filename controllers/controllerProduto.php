<?php
    $opcao = (int)$_REQUEST('opcao');

    if ($opcao == 1){
        $produtos = new Produto();
        $produto->setproduto($_REQUEST['pNome'], $_REQUEST['pDescricao']);
        $produtoDAO = new ProdutoDao();
        $produtoDAO->incluirProduto($produto);

        header('Location: ../views/exibirProdutos.php');

        
    }elseif($opcao == 2){
        $produtoDAO = new ProdutoDao();
        $lista = $produtoDAO->getProdutos();

        session_start();
        $_SESSION['produtos'] = $lista;

        header['Location: controlerProduto.php?opcao=2'];
    }elseif ($opcao == 4) {
        
    }elseif ($opcao == 5) {
        $produtos = new Produto();
        $produto->setproduto($_REQUEST['pNome'], $_REQUEST['pDescricao']);
        $protuso->
        $produtoDAO = new ProdutoDao();
        $produtoDAO->incluirProduto($produto);

        header('Location: ../views/exibirProdutos.php');
    }
?>