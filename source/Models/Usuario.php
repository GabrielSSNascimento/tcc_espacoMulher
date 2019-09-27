<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
/*use Theme\Actions\CadastroUser;
use Theme\Actions\CadastroProf;
use Theme\Actions\CadastroAdmin;
use Theme\Actions\ActionLogin;*/

class Usuario extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("usuario", ["senha_usuario", "email_usuario","cod_status_usuario"], "cod_usuario",false);
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    
    public function divulgacao()
    {
        return(new Divulgacao())->find("cod_usuario = :cod","cod={$this->cod_usuario}")->fetch(true);
    }


    public function add(string $senha_usuario,
                        string $nome_usuario,
                        string $email_usuario,
                        string $rsm,
                        string $tipo_usuario,
                        string $cod_status_usuario)
    {
        $this->nome_usuario = $nome_usuario;
        $this->rsm = $rsm;
        $this->senha_usuario = $senha_usuario;
        $this->email_usuario = $email_usuario;
        $this->tipo_usuario = $tipoUsuario;
        $this->cod_status_usuario = $cod_status_usuario;
    }
}