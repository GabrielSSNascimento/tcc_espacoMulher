<?php

require_once __DIR__.'model/function-site';
require_once __DIR__.'connect/connect.php';

$action = $_POST['acao'];

$nome = $_POST['nome'];
$rsm = $_POST['rsm'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_confirm = $_POST['senha-confirm'];

if($senha == $senha_confirm){
    switch($action){
        case 'insertProf';
        try{
            $arrayProfInsert = [
                "nome_usuario" => $nome,
                "rsm" => $rsm,
                "senha_usuario" => $senha,
                "email_usuario" => $email,
                "tipo_usuario" => 'P',
                "cod_tipo_usuario" => 'A'
            ];
            if(insertProf($arrayProfInsert)){
                echo "<script>";
                    echo "location.href='view=tpl_professor&homeProf.php'";
            }

        }
    }
}else{
    echo '<spam>Os campos SENHA e SENHA CONFIRME não conferem</spam>';
}

