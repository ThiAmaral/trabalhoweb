<?php
     require_once 'dao/conexao.inc.php';
     require_once '..classes/modeloLoja.inc.php';
     require_once '..utils/util.inic.php';

     class ClienteDao{
        private $con;
        function __construct(){
            $c = new Conexao();
            $this->con = $c->getConexao();
        }
     }

    public function incluirCliente(Cliente $cliente){
        $sql = $this->con->prepare("insert into clientes(nome, descicao, data_fabricacao, preco, estoque, referencia, cod_fabricane)
        value(:nome, :desc, :data, :preco, :est, :ref, ;fab)");

        $sql->bindValue('nom', $cliente->getNome());
        $sql->bindValue('desc', $cliente->getDescricao());
        $sql->bindValue('preco', $cliente->getPreco());
        $sql->bindValue('est', $cliente->getEstoque());
        $sql->bindValue('ref', $cliente->getReferencia());
        $sql->bindValue('fab', $cliente->getFabricante());
        $sql->bindValue('data', converteDataMysql($cliente->getDataFabricacao()));
        $sql->execute();
    }

    public function alterarCliente(Cliente $cliente){
        $sql = $this->con->prepare("update into clientes set nome:= nome, descicao:= desc, data_fabricacao:= data, preco:= preco, estoque:= est, referencia:= ref, cod_fabricante:= fab) where cliente_id :=id");

        $sql->bindValue(':nom', $cliente->getNome());
        $sql->bindValue(':desc', $cliente->getDescricao());
        $sql->bindValue(':preco', $cliente->getPreco());
        $sql->bindValue(':est', $cliente->getEstoque());
        $sql->bindValue(':ref', $cliente->getReferencia());
        $sql->bindValue(':fab', $cliente->getFabricante());
        $sql->bindValue(':data', converteDataMysql($cliente->getDataFabricacao()));
        $sql->bindValue(':id', $cliente->getCliente_id());
        $sql->execute();
    }

    public function getClientes(){
        $rs = $this->con->query("SELECT * FROM clientes");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $cliente = new Cliente();
            $cliente->setCliente_id($row->cliente_id);
            $cliente->setReferencia($row->referencia);
            $cliente->setNome($row->nome);
            $cliente->setDescricao($row->descricao);
            $cliente->setPreco($row->preco);
            $cliente->setEstoque($row->estoque);
            $cliente->setFabricante($row->fabricante);
            $cliente->setDataFabricacao($row->data_fabricacao);
            $lista[]=$cliente;
        }
        return $lista;
    }

    public function getCliente($id){
        $rs = $this->con->query("SELECT * FROM clientes");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $cliente = new Cliente();
            $cliente->setCliente_id($row->cliente_id);
            $cliente->setReferencia($row->referencia);
            $cliente->setNome($row->nome);
            $cliente->setDescricao($row->descricao);
            $cliente->setPreco($row->preco);
            $cliente->setEstoque($row->estoque);
            $cliente->setFabricante($row->fabricante);
            $cliente->setDataFabricacao($row->data_fabricacao);
            $lista[]=$cliente;
        }
        return $lista;
    }
?>

