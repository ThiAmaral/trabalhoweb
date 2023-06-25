<?php
     require_once 'conexaoDAO.php';
    //  require_once '../classes/usuario.php';

    class UsuariosDao{
        private $con;
        function __construct(){
            $c = new ConexaoDAO();
            $this->con = $c->getConexao();
        }
     

    public function incluirUsuario(Usuario $usuario){
        $sql = $this->con->prepare("insert into usuarios(nome, email, cpf, senha, tipo_usuario)
        value(:nome, :email, :cpf, :senha, :tipo)");

        $sql->bindValue('nome', $usuario->getNome());
        $sql->bindValue('email', $usuario->getEmail());
        $sql->bindValue('cpf', $usuario->getCpf());
        $sql->bindValue('senha', $usuario->getSenha());
        $sql->bindValue('tipo', $usuario->getTipoUsuario());
        //$sql->bindValue('data', converteDataMysql($usuario->getDataFabricacao()));
        $sql->execute();
    }

    public function alterarUsuario(Usuario $usuario){
        $sql = $this->con->prepare("update into usuarios set nome:= nome, email:= email, cpf:= cpf, senha:= senha, tipo_usuario:= tipo) where usuario_id := id");

        $sql->bindValue('nome', $usuario->getNome());
        $sql->bindValue('email', $usuario->getEmail());
        $sql->bindValue('cpf', $usuario->getCpf());
        $sql->bindValue('senha', $usuario->getSenha());
        $sql->bindValue('tipo', $usuario->getTipoUsuario());
        $sql->bindValue(':id', $usuario->getUsuarioId());
        $sql->execute();
    }

    public function getUsuarios(){
        $rs = $this->con->query("SELECT * FROM usuarios");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $usuario = new Usuario();
            $usuario->setUsuario_id($row->usuario_id);
            $usuario->setNome($row->nome);
            $usuario->setCpf($row->cpf);
            $usuario->setEmail($row->email);
            $usuario->setSenha($row->senha);
            $usuario->setTipoUsuario($row->tipo_usuario);
            $lista[] = $usuario;
        }
        return $lista;
    }

    public function getUsuario($id){
        $rs = $this->con->query("SELECT * FROM usuarios");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $$usuario = new Usuario();
            $usuario->setUsuario_id($row->usuario_id);
            $usuario->setNome($row->nome);
            $usuario->setCpf($row->cpf);
            $usuario->setEmail($row->email);
            $usuario->setSenha($row->senha);
            $usuario->setTipoUsuario($row->tipo_usuario);
            $lista[] = $usuario;
        }
        return $lista;
    }
}
?>

