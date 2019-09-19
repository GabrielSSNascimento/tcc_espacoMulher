<?php
require_once '/../../Models/Usuario.php';

$action = $_POST['acao'];

switch($action){

case 'login':
    $arrayAutenticacao = login();

    if($arrayAutenticacao['autorizacao_usuario']){
        if($arrayAutenticacao['cod_tipo_usuario'] === 'A'){
            switch ($arrayAutenticacao['tipo_usuario']){
                case 'D':
                    $url = "indexAdmin.php?theme=admin&pagina=perfilAdmin";
                    break;
                case 'P':
                    $url = "indexProf.php?theme=professor&pagina=perfilProf";
                    break;
                case 'A':
                    $url = "indexAluno.php?theme=aluno&pagina=perfil";
                    break;
                default:
                    break;
            }
            echo "<script>";
            echo "location.href='{$url}'";
            echo "</script>"
        }else{
            echo 'Conta Inativa';
        }
    }else{
        echo'email ou senha invalidos';
    }
    break;

case 'logout':
    try{
        logout();
    }catch(Exception $exc){
        echo "<script>";
        echo "location.href='index.php?theme=site&pagina=erro&cod_erro={$exc->getCode()}'";
        echo "</script>";
    }finally{
        echo "location.href='index.php'";
    }
    break;

default:

break;

}