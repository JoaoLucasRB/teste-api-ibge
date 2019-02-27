<?php

class Territorio {

    public function getArea($resultado){
        return array(
            'ano' => $resultado->territorio_e_ambiente->area_da_unidade_territorial->ano,
            'valor' => $resultado->territorio_e_ambiente->area_da_unidade_territorial->valor
        );
    }

    public function getArrayTerritorio($resultado){
        $area = $this->getArea($resultado);
        return array(
            'area_da_unidade_territorial' => $area
        );
    }
}