<?php

class Populacao {

    public function getPopulacaoEstimada($resultado){
        return array(
            'ano' => $resultado->populacao->populacao_estimada->ano,
            'valor' => $resultado->populacao->populacao_estimada->valor
        );
    }

    public function getPopulacaoCenso($resultado){
        return array(
            'ano' => $resultado->populacao->populacao_no_ultimo_censo->ano,
            'valor' => $resultado->populacao->populacao_no_ultimo_censo->valor
        );
    }

    public function getDensidadeDemografica($resultado){
        return array(
            'ano' => $resultado->populacao->densidade_demografica->ano,
            'valor' => $resultado->populacao->densidade_demografica->valor
        );
    }

    public function getTotalDeVeiculos($resultado){
        return array(
            'ano' => $resultado->populacao->total_de_veiculos->ano,
            'valor' => $resultado->populacao->total_de_veiculos->valor
        );
    }

    public function getArrayPopulacao($resultado){
        $populacao_estimada = $this->getPopulacaoEstimada($resultado);
        $populacao_censo = $this->getPopulacaoCenso($resultado);
        $densidade_demografica = $this->getDensidadeDemografica($resultado);
        $total_de_veiculos = $this->getTotalDeVeiculos($resultado);
        
        return array(
            'populacao_estimada' => $populacao_estimada,
            'populacao_no_ultimo_censo' => $populacao_censo,
            'densidade_demografica' => $densidade_demografica,
            'total_de_veiculos' => $total_de_veiculos
        );
    }
}