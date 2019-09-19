<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class File extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("arquivos", ["cod_divu", "tipo_arq","url_arq","legenda_arq","descricao_arq","cod_status_arq"], "cod_arq");
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    public function insertArq($arrayArq){
        $arq = new File();

            $arq->cod_divu = $arrayArq['cod_divu'];
            $arq->tipo_arq = $arrayArq['tipo_arq'];
            $arq->url_arq = $arrayArq['url_arq'];
            $arq->legenda_arq = $arrayArq['legenda_arq'];
            $arq->descicao_arq = $arrayArq['descricao_arq'];
            $arq->cod_status_arq = $arrayArq['cod_status_arq'];


            $arq->save();

            if($arq and $url !='ERRO!!!'){
                $dir = 'uplods/';
                move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir . $url);
            }

            return $arq;

            //var_dump($arq);
    }
    
    public function updateArq($arrayUpdateArq){

        if($_FILES['file_upload']['tmp_name'] != ''){
        $dir = 'uploads/';

        $extensao = strlower(substr($_FILES['file_upload']['tmp_name'], -4));

        $extencaoPermi = [".gif", ".jpeg", ".jpg", ".png", ".bmp", ".webp", ".mp4"];
        if(in_array($extencao, $extencaoPermi)){
            $url_arq => $extencao; 
        }else{
            $url_arq => "ERROR!!!!!!";
        }
    
    
        $arq = (new File())->findById($arrayUpdateArq['cod_divu']);
        $arq->tipo_arq = $arrayUpdateArq['tipo_arq'];
        $arq->url_arq = $arrayUpdateArq['url_arq'];
        $arq->legenda_arq = $arrayUpdateArq['legenda_arq'];
        $arq->descricao_arq = $arrayUpdateArq['descricao'];
        $arq->save();
    
     }else{
        $arq = (new File())->findById($arrayUpdateArq['cod_divu']);
        $arq->tipo_arq = $arrayUpdateArq['tipo_arq'];
        $arq->legenda_arq = $arrayUpdateArq['legenda_arq'];
        $arq->descricao_arq = $arrayUpdateArq['descricao'];
        $arq->save();
        
     }    
    

     if($_FILES['file_upload']['tmp_name'] != ''){

     if($arq and $url_arq != 'ERROR!!!!!!'){
         if(file_exists($dir . $arrayUpdateArq['url_Arq'])
            and !empty($arrayUpdateArq['url_arq'])
            and $arrayUpdateArq['url_arq'] != 'ERROR!!!!!!'){
                unlink($dir . $arrayUpdateArq['url_arq']);
            }
         
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir . $url_arq);
     }
     }
     
     
     return $arq;

     //var_dump($arq);
}

public function getFotoDivu(Divugacao $cod_divu){
    $arq = new File();
    $listArq = $arq->find($cod_divu)->fetch(true);

    return $listArq;

    //var_dump($listArq);
}


}
