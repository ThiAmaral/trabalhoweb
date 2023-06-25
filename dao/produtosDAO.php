<?php
     require_once 'dao/conexao.inc.php';
     require_once '..classes/modeloLoja.inc.php';
     require_once '..utils/util.inic.php';

     class ProdutoDao{
        private $con;
        function __construct(){
            $c = new Conexao();
            $this->con = $c->getConexao();
        }
     }

    public function incluirProduto(Produto $produto){
        $sql = $this->con->prepare("insert into produtos(nome, descicao, data_fabricacao, preco, estoque, referencia, cod_fabricane)
        value(:nome, :desc, :data, :preco, :est, :ref, ;fab)");

        $sql->bindValue('nom', $produto->getNome());
        $sql->bindValue('desc', $produto->getDescricao());
        $sql->bindValue('preco', $produto->getPreco());
        $sql->bindValue('est', $produto->getEstoque());
        $sql->bindValue('ref', $produto->getReferencia());
        $sql->bindValue('fab', $produto->getFabricante());
        $sql->bindValue('data', converteDataMysql($produto->getDataFabricacao()));
        $sql->execute();
    }

    public function alterarProduto(Produto $produto){
        $sql = $this->con->prepare("update into produtos set nome:= nome, descicao:= desc, data_fabricacao:= data, preco:= preco, estoque:= est, referencia:= ref, cod_fabricante:= fab) where produto_id :=id");

        $sql->bindValue(':nom', $produto->getNome());
        $sql->bindValue(':desc', $produto->getDescricao());
        $sql->bindValue(':preco', $produto->getPreco());
        $sql->bindValue(':est', $produto->getEstoque());
        $sql->bindValue(':ref', $produto->getReferencia());
        $sql->bindValue(':fab', $produto->getFabricante());
        $sql->bindValue(':data', converteDataMysql($produto->getDataFabricacao()));
        $sql->bindValue(':id', $produto->getProduto_id());
        $sql->execute();
    }

    public function getProdutos(){
        $rs = $this->con->query("SELECT * FROM produtos");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $produto = new Produto();
            $produto->setProduto_id($row->produto_id);
            $produto->setReferencia($row->referencia);
            $produto->setNome($row->nome);
            $produto->setDescricao($row->descricao);
            $produto->setPreco($row->preco);
            $produto->setEstoque($row->estoque);
            $produto->setFabricante($row->fabricante);
            $produto->setDataFabricacao($row->data_fabricacao);
            $lista[]=$produto;
        }
        return $lista;
    }

    public function getProduto($id){
        $rs = $this->con->query("SELECT * FROM produtos");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $produto = new Produto();
            $produto->setProduto_id($row->produto_id);
            $produto->setReferencia($row->referencia);
            $produto->setNome($row->nome);
            $produto->setDescricao($row->descricao);
            $produto->setPreco($row->preco);
            $produto->setEstoque($row->estoque);
            $produto->setFabricante($row->fabricante);
            $produto->setDataFabricacao($row->data_fabricacao);
            $lista[]=$produto;
        }
        return $lista;
    }
?>

