<?php

require_once __DIR__.'source/Models/Usuario.php';

$action = $_REQUEST['acao'];

$nome = $_POST['nome'];
$rsm = $_POST['rsm'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_confirm = $_POST['senha-confirm'];

class CadastroAdmin
{
public function insertAdmin(){
if($senha == $senha_confirm){
	switch($action){
	case 'insertAdmin';
	try{
	$arrayInsertAdmin =[
		"nome_usuario" => $nome,
		"rsm" => $rsm,
		"senha_usuario" => $senha,
		"email_usuario" => $email,
		"tipo_usuario" => 'D',
		"cod_tipo_usuario" => 'A'
	];
	return $arrayInsertAdmin;
	}finally{

	}

	break;

	default:

	break;

	}

}else{
	echo'<spam>Os campos SENHA e SENHA CONFIRME não conferem</spam>';
}
}
}