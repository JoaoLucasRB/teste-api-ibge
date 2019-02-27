<?php

class Economia {

    public function getIndice($resultado){
        return array(
            'ano' => $resultado->economia->indice_de_desenvolvimento_humano->ano,
            'valor' => $resultado->economia->indice_de_desenvolvimento_humano->valor
        );
    }
    
    public function getReceitas($resultado){
        return array(
            'ano' => $resultado->economia->receitas_orcamentarias_realizadas->ano,
            'valor' => $resultado->economia->receitas_orcamentarias_realizadas->valor
        );
    }

    public function getDespesas($resultado){
        return array(
            'ano' => $resultado->economia->despesas_orcamentarias_empenhadas->ano,
            'valor' => $resultado->economia->despesas_orcamentarias_empenhadas->valor
        );
    }

    public function getAgencias($resultado){
        return array(
            'ano' => $resultado->economia->numero_de_agencias->ano,
            'valor' => $resultado->economia->numero_de_agencias->valor
        );
    }

    public function getDepositos($resultado){
        return array(
            'ano' => $resultado->economia->total_de_depositos->ano,
            'valor' => $resultado->economia->total_de_depositos->valor
        );
    }

    public function getArrayEconomia($resultado){
        $indice = $this->getIndice($resultado);
        $receitas = $this->getReceitas($resultado);
        $despesas = $this->getDespesas($resultado);
        $agencias = $this->getAgencias($resultado);
        $depositos = $this->getDepositos($resultado);

        return array(
            'indice_de_desenvolvimento_humano' => $indice,
            'receitas_orcamentarias_realizadas' => $receitas,
            'despesas_orcamentarias_empenhadas' => $despesas,
            'numero_de_agencias' => $agencias,
            'total_de_depositos' => $depositos 
        );
    }
}