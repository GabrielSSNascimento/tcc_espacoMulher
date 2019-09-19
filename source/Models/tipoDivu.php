<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Tipo extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("tipo_divulga", ["nome_tipo_divu", "cod_status_divu"], "cod_tipo_divu");
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    public function insertTipoDivu($arrayTipo){
        $tipo = new Tipo();

            $tipo->nome_tipo_divu = $arrayTipo['nome_tipo_divu'];
            $tipo->cod_status_divu = $arrayTipo['cod_status_divu'];


            $tipo->save();

            return $tipo;

            //var_dump($tipo);
    }
    

}
