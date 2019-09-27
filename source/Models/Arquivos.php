<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;


class Arquivos extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("arquivos", ["cod_status_arq", "cod_divu"], "cod_arq", false);
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    // fazer  a funcao add 

    public function add( Divulgacao $cod_divu,
                         string $tipo_arq,
                         string $url_arq,
                         string $legenda_arq,
                         string $descricao_arq,
                         string $cod_status_arq,
    )
    {
        $this->cod_divu = $cod_divu;
        $this->tipo_arq = $tipo_arq;
        $this->url_arq = $url_arq;
        $this->legenda = $legenda_arq;
        $this->descricao = $descricao_arq;
        $this->cod_status_arq = $cod_status_arq;
    }
    public function update( string $tipo_arq,
                            string $url_arq,
                            string $legenda_arq,
                            string $descricao_arq
    )
    {
        $this = (new Arquivo())->findById("cod_arq = :cod","cod={$this->cod_arq}");
        $this->tipo_arq = $tipo_arq;
        $this->url_arq = $url_arq;
        $this->legenda_arq = $legenda_arq;
        $this->descricao_arq = $descricao_arq;

    }
}