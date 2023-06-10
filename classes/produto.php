<?php
    
class Produto{

    private $id_produto;
    private $nome;
    private $descricao;
    private $preco;
    private $estoque;
    private $referencia;
    private $fabricante;

    function constructor(){

    }

    function setProduto($nome, $descricao, $preco, $estoque, $referencia, $fabricante){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->referencia = $referencia;
        $this->fabricante = $fabricante;
        $this->data_fabricacao = strtotime(str_replace('/','-',$data));
    }

    public function getNome(){
        return $this->nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function getReferencia(){
        return $this->referencia;
    }
    public function getFabricante(){
        return $this->fabricante;
    }
    public function getDataFabricacao(){
        return $this->data_fabricacao;
    }
    public function setNome($pNome){
        return $this->nome = $pNome;
    }
    public function setDescricao($pDescricao){
        return $this->descricao = $pDescricao;
    }
    public function setPreco($pPreco){
        return $this->preco = $pPreco;
    }
    public function setEstoque($pEstoque){
        return $this->estoque = $pEstoque;
    }
    public function setReferencia($pReferencia){
        return $this->referencia = $pReferencia;
    }
    public function setFabricante($pFabricante){
        return $this->fabricante = $pFabricante;
    }
    public function setDataFabricacao($pData){
        return $this->data_fabricacao = strtotime($pData);
    }
}
?>