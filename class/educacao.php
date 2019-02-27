<?php

class Educacao {

    public function getMatriculasFundamental($resultado){
        return array(
            'ano' => $resultado->educacao->matriculas_no_ensino_fundamental->ano,
            'valor' => $resultado->educacao->matriculas_no_ensino_fundamental->valor
        );
    }

    public function getMatriculasMedio($resultado) {
        return array(
            'ano' => $resultado->educacao->matriculas_no_ensino_medio->ano,
            'valor' => $resultado->educacao->matriculas_no_ensino_medio->valor
        );
    }

    public function getDocentesFundamental($resultado){
        return array(
            'ano' => $resultado->educacao->docentes_no_ensino_fundamental->ano,
            'valor' => $resultado->educacao->docentes_no_ensino_fundamental->valor
        );
    }

    public function getDocentesMedio($resultado){
        return array(
            'ano' => $resultado->educacao->docentes_no_ensino_medio->ano,
            'valor' => $resultado->educacao->docentes_no_ensino_medio->valor
        );
    }

    public function getEstabelecimentosFundamental($resultado){
        return array(
            'ano' => $resultado->educacao->numero_de_estabelecimentos_de_ensino_fundamental->ano,
            'valor' => $resultado->educacao->numero_de_estabelecimentos_de_ensino_fundamental->valor
        );
    }

    public function getEstabelecimentosMedio($resultado){
        return array(
            'ano' => $resultado->educacao->numero_de_estabelecimentos_de_ensino_medio->ano,
            'valor' => $resultado->educacao->numero_de_estabelecimentos_de_ensino_medio->valor
        );
    }
    
    public function getArrayEducacao($resultado) {
        $matriculas_no_ensino_fundamental = $this->getMatriculasFundamental($resultado);
        $matriculas_no_ensino_medio = $this->getMatriculasMedio($resultado);
        $docentes_no_ensino_fundamental = $this->getDocentesFundamental($resultado);
        $docentes_no_ensino_medio = $this->getDocentesMedio($resultado);
        $numero_de_estabelecimentos_de_ensino_fundamental = $this->getEstabelecimentosFundamental($resultado);
        $numero_de_estabelecimentos_de_ensino_medio = $this->getEstabelecimentosMedio($resultado);

        return array(
            'matriculas_no_ensino_fundamental' => $matriculas_no_ensino_fundamental,
            'matriculas_no_ensino_medio' => $matriculas_no_ensino_medio,
            'docentes_no_ensino_fundamental' => $docentes_no_ensino_fundamental,
            'docentes_no_ensino_medio' => $docentes_no_ensino_medio,
            'numero_de_estabelecimentos_de_ensino_fundamental' => $numero_de_estabelecimentos_de_ensino_fundamental,
            'numero_de_estabelecimentos_de_ensino_medio' =>  $numero_de_estabelecimentos_de_ensino_medio
        );
    }

}