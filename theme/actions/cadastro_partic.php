<?php

require_once __DIR__.'model/function-aluno';
require_once __DIR__.'model/function-admin';
require_once __DIR__.'model/function-prof';
require_once __DIR__.'connect/connect.php';

$action = $_POST['acao'];

$cpf = $_POST['cpf'];
$tel_partic = $_POST['telefone'];

    switch($action){
        case 'insertPartic';
        try{
            $arrayInsertPartic = [
                "cod_divu" => $_SESSION,
                "nome_patic" => $_SESSION,
                "cpf_partic" => $cpf,
                "email_partic" => $_SESSION,
                "tel_partic" => $tel_partic
            ];
        }
    }