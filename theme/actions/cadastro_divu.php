<?php 
require_once __DIR__.'model/function-admin.php';
require_once __DIR__.'connect/connect.php';

$action = $_REQUEST['acao'];


$titulo_divu = $_POST['titulo_divu'];
$contato_divu = $_POST['rsm'];
$desc_divu = $_POST['email'];
$data_hora_divu = $_POST['data_hora'];

//arquivos

$legenda_arq = $_POST['legenda_arq'];
$desc_arq = $_POST['desc_arq'];
//------------------------------------------------------------------------------------------
class Divugacao{

public function divugacaoArqTipo(){
switch($action){

case 'inserTipoDivu':
    switch($nome_tipo_divu){
        case'Eventos': 
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "eventos",
                "cod_status_divu" => "E"
            ];
            return $arrayTipo;
        }finally{

        }
        break;
    
    //-----------------------------------
        case 'Noticias':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "noticias",
                "cod_status_divu" => "N"
            ];
            return $arrayTipo;
        }finally{

        }
        break;
    //-----------------------------------
        case 'Delegacia':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "delegacia",
                "cod_status_divu" => "D",
            ];
            return $arrayTipo;
        }finally{

        }
        break;
    //------------------------------------
        
    
        case 'Cursos':
  
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "cursos",
                "cod_status_divu" => "C",
            ];
            return $arrayTipo;
        }finally{

        }
        break;
    //=====================================
        case 'Atividades':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "atividades",
                "cod_status_divu" => "A",
            ];
            return $arrayTipo;
        }finally{

        }
        break;
    //=------------------------------------

        default:
        break;
       
}
    break;
//--============---------------------------==========-----------------======================
    case 'insertDivu':

    try{
        $arrayDivu = [
            "cod_usuario" => $_SESSION['cod_usuario'],
            "cod_tipo_divu" => $_POST['cod_tipo_divu'],
            "desc_divu" => $desc_divu,
            "contato_divu" => $contato_divu,
            "data_hora_divu" => $data_hora_divu,
            "titulo_divu" => $titulo_divu,
            "cod_status_divu" => "A"

        ];
        return $arrayDivu;
    }finally{

    }
    break;

//---------------------------------------------======================================

    case 'insertArq':

    if($_FILES['fileUpload']['tmp_name'] !=''){
        $dir = 'uploads/';
        $extencao = strlower(substr($_FILES['fileUpload'['name'], -4));
    
        $extencaoPermi = [".gif", ".jpeg", ".jpg", ".png", ".bmp", ".webp", ".mp4"];
        if(in_array($extencao, $extencaoPermi)){
            $url_arq => $extencao; 
        }else{
            $url_arq => "ERROR!!!!!!";
        }
    }

    try{
        $arrayArq = [
            "cod_divu" => $_POS['cod_divu'],
            "tipo_arq" => $url_arq,
            "url_arq" =>  $url_arq,
            "legenda_arq" => $legenda,
            "descricao_arq" => $desc_arq,
            "cod_status_arq" => "I"
        ];
        return $arrayArq;
    }
    break;
//---------------------------------------------------------------------=========================================
    
    case'UpdateDivu':
    try{
        $arrayUpdateDivu = [
            "cod_divu"=>$_POST['cod_divu'],
            "desc_divu"=>$_POST['desc_divu'],
            "contato_divu"=>$_POST['contato_divu'],
            "data_hora_divu"=>$_POST['data_hora_divu'],
            "titulo_divu"=>$_POST['titulo_divu']
        ];
        return $arrayUpdateDivu;

    }finally{

    }
    break;
//--------------------------------------------------------------------------------------------------------------
    
case'UpdateArq':
    if($_FILES['fileUpload']['tmp_name'] !=''){
        $dir = 'uploads/';
        $extencao = strlower(substr($_FILES['fileUpload'['name'], -4));
    
        $extencaoPermi = [".gif", ".jpeg", ".jpg", ".png", ".bmp", ".webp", ".mp4"];
        if(in_array($extencao, $extencaoPermi)){
            $url_arq => $extencao; 
        }else{
            $url_arq => "ERROR!!!!!!";
        }
    }
    try{

        $arrayUpdateArq[
            "url_arq"=>$url_arq,
            "legenda_arq"=>$_POST['legenda_arq'],
            "descricao_arq"=>$_POST['descricao_arq'],
            "tipo_arq"=>
        ];
        return $arrayUpdateArq;


    }finally{

    }
    break;
//=======================================================================================================
    default:
    break


}
}
}
?>