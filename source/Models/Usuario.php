<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;
require __DIR__ .'theme/actions/cadastroUser.php';
require __DIR__ .'theme/actions/cadastroProf.php';
require __DIR__ .'theme/actions/cadastroAdmin.php';
require __DIR__ .'theme/actions/actionLogin.php';

class User extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("usuario", ["nome_usuario", "rsm","senha_usuario","email_usuario","tipo_usuario","cod_tipo_usuario"], "cod_usuario");
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    public function insertUsuario($arrayInsertUsuario){
        $user = new User();

            $user->nome_usuario = $arrayInsetUsuario['nome_usuario'];
            $user->rsm = $arrayInsertUsuario['rsm'];
            $user->senha_usuario = $arrayInsertUsuario['senha_usuario'];
            $user->email_usuario = $arrayInsertUsuario['email_usuario'];
            $user->tipo_usuario = $arrayInsertUsuario['tipo_usuario'];
            $user->cod_tipo_usuario = $arrayInsertUsuario['cod_tipo_usuario'];


            $user->save();

            return $user;

            //var_dump($user);
    }
    public function inserProf($arrayProfInsert){

        $userProf = new User();

        $userProf->nome_usuario = $arrayProfInsert['nome_usuario'];
        $userProf->rsm = $arrayProfInsert['rsm'];
        $userProf->senha_usuario = $arrayProfInsert['senha_usuario'];
        $userProf->email_usuario = $arrayProfInsert['email_usuario'];
        $userProf->tipo_usuario = $arrayProfInsert['tipo_usuario'];
        $userProf->cod_tipo_usuario = $arrayProfInsert['cod_tipo_usuario'];


        $userProf->save();

        return $userProf;

        //var_dump($userProf);

    }

    public function insertAdmin($arrayInsertAdmin){

        
        $userAdmin = new User();

        $userAdmin->nome_usuario = $arrayInsertAdmin['nome_usuario'];
        $userAdmin->rsm = $arrayInsertAdmin['rsm'];
        $userAdmin->senha_usuario = $arrayInsertAdmin['senha_usuario'];
        $userAdmin->email_usuario = $arrayInsertAdmin['email_usuario'];
        $userAdmin->tipo_usuario = $arrayInsertAdmin['tipo_usuario'];
        $userAdmin->cod_tipo_usuario = $arrayInsertAdmin['cod_tipo_usuario'];

        $userAdmin->save();

        return $userAdmin;

        //var_dump($userAdmin);
    }

    public function login(){
        $rsm = $_POST['rsm'];
        $senha = $_POST['senha'];

        $usuario = new User();
        $usuarioVal = $usuario->find($usuario['rsm'] and $usuario['senha_usuario'])->fetch(true);

        $arrayUsuario = $usuarioVal;

        if(count($arrayUsuario) > 0){
            if($arrayUsuario[0]['cod_tipo_usuario'] = 'A'){

                $_SESSION['cod_usuario'] = $arrayUsuario[0]['cod_usuario'];
                $_SESSION['nome_usuario'] = $arrayUsuario[0]['nome_usuario'];
                $_SESSION['rsm'] = $arrayUsuario[0]['rsm'];
                $_SESSION['email_usuario'] = $arrayUsuario['emailUsuario'];
                $_SESSION['tipo_usuario'] = $arrayUsuario['tipo_usuario'];
                $_SESSION['cod_tipo_usuario'] = $arrayUsuario['cod_tipo_usuario'];
            }
                $arraAutenticacao = [
                    "tipo_usuario" => $arrayUsuario[0]['tipo_usuario'],
                    "cod_tipo_usuario" => $arrayUsuario[0]['cod_tipo_usuario'],
                    "autorizacao_usuario" => true
                ]
               
        }else{
            $arraAutenticacao = [
                    "tipo_usuario" => '',
                    "cod_tipo_usuario" => '',
                    "autorizacao_usuario" => false
         ];
        }
        return $arraAutenticacao;

    }
    public function logout(){
        session_destroy();
        return;
    }
    public function validaLogin($tipoUsuario)
    {
        if(!isset($_SESSION['rsm_usuario']) and !isset($_SESSION['senha_usuario'])){
            logout();
            echo "<script>";
            echo"location.href='index.php'";
            echo"</script>";
        }else if($_SESSION['tipo_usuario'] !== $tipoUsuario){
            logout();
            echo"<script>";
            echo"location.href='index.php'";
            echo"</script>";
        }
    }

}
