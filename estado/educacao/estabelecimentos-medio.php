<?php
// Importação composer | MongoDB Driver
require_once 'C:\wamp64\www\testeAPI\vendor\autoload.php';
// Importação class DataBase
require_once 'C:\wamp64\www\testeAPI/config/database.php';
// Importação class Populacao
require_once 'C:\wamp64\www\testeAPI/class/educacao.php';

// Headers necessarios
header("Access-Control-Allow-Origin: *"); // * sinaliza que pode ser lido por qualquer um
header("Content-Type: application/json; charset=UTF-8"); //Define o tipo de conteudo para o navegador como JSON | Define o charset para o padrao UTF-8

if(isset($_GET['estado'])){
    $estado = $_GET['estado'];
    $database = new Database(); // Instancia um novo objeto Database
    $cliente = $database->getConexao(); // Obtem a conexao ao banco de dados
    $colecao = $cliente->scrap->ibge; // Aponta para a colecao ibge
    $resultado = $colecao->findOne(['estado' => $estado]); // busca resultado de acordo com o estado
    if($resultado){ // verifica se o resultado nao esta vazio
        // ============ EDUCACAO ============
        $edu = new Educacao();
        $educacao = $edu->getEstabelecimentosMedio($resultado);
        // ============ FIM EDUCACAO ============
        http_response_code(200);
        echo json_encode($educacao);
    } else { // Caso o resultado esteja vazio
        http_response_code(404); // Codigo de erro
        echo json_encode(
            array("mensagem" => "Nenhum dado encontrado")
        );
    }
} else {
    http_response_code(404);
    echo json_encode(
        array('mensagem' => "Pesquisa sem parâmetro")
    );
}
