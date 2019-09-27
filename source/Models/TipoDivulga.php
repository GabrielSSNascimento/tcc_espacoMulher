<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;
/*require __DIR__ .'theme/actions/cadastroUser.php';
require __DIR__ .'theme/actions/cadastroProf.php';
require __DIR__ .'theme/actions/cadastroAdmin.php';
require __DIR__ .'theme/actions/actionLogin.php';*/

class TipoDivulga extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("tipo_divulga", ["nome_tipo_divu","cod_status_divu"], "cod_tipo_divu", false);
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    
    public function divulgacao()
    {
        return(new Divulgacao())->find("cod_tipo_divu = :cod","cod={$this->cod_tipo_divu}")->fetch(true);
    }
    
    public function add(string $nome_tipo_divu,
                        string $cod_status_divu,
                        )
    {
        $this->nome_tipo_divu = $nome_tipo_divu;
        $this->cod_status_divu= $cod_status_divu;
    }
}

