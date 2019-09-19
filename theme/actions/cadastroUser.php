<?php

require_once __DIR__.'model/function-site';


$action = $_post['acao'];

$nome = $_POST['nome'];
$rsm = $_POST['rsm'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_confirm = $_POST['senha-confirm'];

if($senha == $senha_confirm){
    switch($action){
        case 'insertUsuario';
        try{
            $arrayInsertAluno = [
                "nome_usuario" => $nome,
                "rsm" => $rsm,
                "senha_usuario" => $senha,
                "email_usuario" => $email,
                "tipo_usuario" => 'A',
                "cod_tipo_usuario" => 'A'
            ];
            if(insertUsuario($arrayInsertAluno)){
                echo "<script>";
                    echo "location.href='theme=Aluno&homeAluno.php'";
                 echo"</script>;   
            }

        }
    }
}else{
    echo '<spam>Os campos SENHA e SENHA CONFIRME não conferem</spam>';
}

//var_dump($arrayInsertAluno);