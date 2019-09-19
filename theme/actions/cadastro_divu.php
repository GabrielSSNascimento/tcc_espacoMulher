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


if($nome_tipo_divu == "evento"){
    switch($action){
        case 'insertTipoDivu':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "evento",
                "cod_status_divu" => "E"
            ]
        }
    
        
    }
}elseif($nome_tipo_divu == "noticias"){

    switch($action){
        case 'insertTipoDivu':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "noticias",
                "cod_status_divu" => "N"
            ]
        }
    
        
    }
}elseif($nome_tipo_divu == "delegacia"){
    switch($action){
        case 'insertTipoDivu':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "delegacia",
                "cod_status_divu" => "D",
            ]
        }
    
        
    }
}elseif($nome_tipo_divu == "cursos"){
    switch($action){
        case 'insertTipoDivu':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "cursos",
                "cod_status_divu" => "C",
            ]
        }
    
        
    }
}elseif($nome_tipo_divu == "atividade"){
    switch($action){
        case 'insertTipoDivu':
    
        try{
            $arrayTipo = [
                "nome_tipo_divu" => "atividade",
                "cod_status_divu" => "A",
            ]
        }
    
        
    }
}

switch($action){
    case 'insertDivu':

    try{
        $arrayDivu = [
            "cod_usuario" => $_SESSION['cod_usuario'],
            "cod_tipo_divu" => $_SESSION['cod_tipo_divu'],
            "desc_divu" => $desc_divu,
            "contato_divu" => $contato_divu,
            "data_hora_divu" => $data_hora_divu,
            "titulo_divu" => $titulo_divu,
            "cod_status_divu" => "A"

        ]
    }
}
 
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

switch($action){
    case 'insertArq':

    try{
        $arrayArq = [
            "cod_divu" => $_SESSION['cod_divu'],
            "tipo_arq" => $url_arq,
            "url_arq" =>  $url_arq,
            "legenda_arq" => $legenda,
            "descricao_arq" => $desc_arq,
            "cod_status_arq" => "I"
        ]
    }
}


?>