<?php

class Database {
    private $usuario = "joao_admin";
    private $senha = "34th53rT5NJ93uoR";
    public $conector;

    public function getConexao(){
        $this->conector = null;
        try{
            $this->conector = new MongoDB\Client("mongodb+srv://joao_admin:34th53rT5NJ93uoR@jaotestenuvem-f6qrm.gcp.mongodb.net/test?retryWrites=true");
        } catch (MongoDB\Driver\Exception $e) {
            echo "Erro de conexao:  ".$e->getMessage()."\n";
        }

        return $this->conector;
    }
}