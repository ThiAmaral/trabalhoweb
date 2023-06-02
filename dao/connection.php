<?php

class Connection
{
      private $mysql_server = 'localhost';
      private $base_name = 'trabalhoweb';
      private $user = 'root';
      private $password = ''; 
      private $connection;

      public function getConnection()
      {
            $this->connection = new PDO("mysql:host=$this->mysql_server;dbname=$this->base_name","$this->user","$this->password");
            return $this->connection;
      }
}

?>
