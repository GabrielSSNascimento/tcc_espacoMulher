<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;
//require __DIR__ . "theme/actions/cadastro_divu.php";

class Participantes extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("participantes", ["cod_divu"], "cod_partic", false);
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    // fazer  a funcao add    
    public function add(Divulgacao $cod_divu,
                        string $cpf_partic,
                        string $nome_partic,
                        string $email_partic,
                        string $tel_partic)
    {
        $this->cod_divu = $cod_divu,
        $this->nome_partic = $nome_partic,
        $this->cpf_partic = $cpf_partic,
        $this->email_partic = $email_partic,
        $this->tel_partic = $tel_partic,
    }

}