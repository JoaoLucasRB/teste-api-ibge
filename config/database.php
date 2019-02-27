<?php

class Database {
    public $conector;

    public function getConexao(){
        $this->conector = null;
        try{
            $this->conector = new MongoDB\Client("<string de conexao>");
        } catch (MongoDB\Driver\Exception $e) {
            echo "Erro de conexao:  ".$e->getMessage()."\n";
        }

        return $this->conector;
    }
}
