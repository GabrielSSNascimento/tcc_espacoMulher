<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Partic extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("participantes", ["cod_divu", "nome_patic","cpf_partic","email_partic","tel_partic"], "cod_partic");
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    public function insertPartic($arrayInsertPartic){
        $partic = new Partic();

            $partic->cod_divu = $arrayInsertPartic['cod_divu'];
            $partic->nome_patic = $arrayInsertPartic['nome_partic'];
            $partic->cpf_partic = $arrayInsertPartic['cpf_partic'];
            $partic->email_partic = $arrayInsertPartic['email_partic'];
            $partic->tel_partic = $arrayInsertPartic['tel_partic'];


            $partic->save();

            return $partic;
    }

    public function selectPartic($arraySelectPartic){
        $partic = new Partic();

        $listPartic = $partic->find($arraySelectPartic['cod_divu'])->fecth(true);

        return $listPartic;

        //var_dump($listPartic);
    }

    



}
