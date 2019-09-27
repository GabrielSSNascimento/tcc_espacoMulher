<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;
//require __DIR__ "theme/actions/cadastro_partic.php";

class Divulgacao extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("divulgacao", ["cod_status_divu","cod_usuario", "cod_tipo_divu"], "cod_divu", false);
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    
    public function add(Usuario $usuario, 
                       TipoDivulga $tipoDivulga,
                        string $desc_divu,
                        string $contato_divu,
                        string $cod_status_divu,
                        string $data_hora_divu,
                        string $titulo_divu)
    {
        $this->cod_usuario = $usuario->cod_usuario;
        $this->cod_tipo_divu = $tipoDivulga->cod_tipo_divu;
        $this->desc_divu = $desc_divu;
        $this->contato_divu = $contato_divu;
        $this->data_hora_divu = $data_hora_divu;
        $this->cod_status_divu = $cod_status_divu;
        $this->titulo_divu = $titulo_divu;
    }

    public function participantes()
    {
        return(new Participantes())->find("cod_divu = :cod","cod={$this->cod_divu}")->fetch(true);
    }
    public function arquivos()
    {
        return(new Arquivos())->find("cod_divu = :cod","cod={$this->cod_divu}")->fetch(true);
    }

    public function update( string $desc_divu,
                            string $contato_divu,
                            string $data_hora_divu,
                            string $titulo_divu
    )
    {
    $this = (new Arquivo())->findById("cod_arq = :cod","cod={$this->cod_arq}");
        $this->desc_divu = $desc_divu;
        $this->contato_divu = $contato_divu;
        $this->data_hora_divu = $data_hora_divu;
        $this->titulo_divu = $titulo_divu;

    }

    public function delete()
    {
        $this = (new Divulga())->findById("cod_divu = :vl_cod", "vl_cod={$data["cod_divu"]}");


        if($this){
        $this->destroy();
        }else{
        echo $this "é invencivel";
        }
    }

   
}