<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Divulgacao extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("divulgacao", ["cod_usuario", "cod_tipo_divu","desc_divu","contato_divu","data_hora_divu","cod_status_divu", "titulo_divu"], "cod_divu");
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    public function insertDivu($arrayDivuga){
        $divulgacao = new Divulgacao();

            $divulgacao->cod_usuario = $arrayDivuga['cod_usuario'];
            $divulgacao->cod_tipo_divu = $arrayDivuga['cod_tipo_divu'];
            $divulgacao->desc_divu = $arrayDivuga['desc_divu'];
            $divulgacao->contato_divu = $arrayDivuga['contato_divu'];
            $divulgacao->data_hora_divu = $arrayDivuga['data_hora_divu'];
            $divulgacao->cod_status_divu = $arrayDivuga['cod_status_divu'];
            $divulgacao->titulo_divu = $arrayDivuga['titulo_divu'];


            $divulgacao->save();

            return $divulgacao;

            //var_dump($divulgacao);
    }
    public function UpdateDivu($arrayUpdateDivu){

        $divulgacao = (new Divulgacao())->findById($arrayUpdateDivu['cod_divu']);
        $divulgacao->desc_divu = $arrayUpdateDivu['desc_divu'];
        $divulgacao->contato_divu =  $arrayUpdateDivu['contato_divu'];
        $divulgacao->data_hora_divu =  $arrayUpdateDivu['data_hora_divu'];
        $divulgacao->titulo_divu =  $arrayUpdateDivu['titulo_divu'];

        $divulgacao->save();

        return $divulgacao;

        //var_dump($divulgacao);

    }
    public function deleteDivu($arrayDeleteDivu){
        $divulgacao = (new Divulgacao())->findById($arrayDeleteDivu['cod_divu']);

        if($divulgacao){
            $$divulgacao->destroy();
        }else{
            return($divulgacao);
        }
        //var_dump($divulgacao);

    }
    public function getDivu($cod_divu){

        $divulgacao = new Divulga();
        $list = $divulgacao->find($cod_divu)->fetch(true);


        return $list;

        //var_dump($getDivu);

    }
    
    public function selectDivu()
    {
        switch($divu){
            case 'Eventos':

            $divulgacao = new Divulga();
            $listEve = $divulgacao->find($cod_divu)->fetch(true);
            
            return $listEve;

            break;

            case 'Noticias':

            $divulgacao = new Divulga();
            $listNot = $divulgacao->find($cod_divu)->fetch(true);
    
            return $listNot;

            break;

            case 'Cursos':

            $divulgacao = new Divulga();
            $listCurs = $divulgacao->find($cod_divu)->fetch(true);
    
            return $listCurs;

            break;

            case 'Atividades':

            $divulgacao = new Divulga();
            $listAtv = $divulgacao->find($cod_divu)->fetch(true);
    
            return $listAtv;

            break;

            case 'Delegacia':

            $divulgacao = new Divulga();
            $listDel = $divulgacao->find($cod_divu)->fetch(true);

            return $listDel;

            break;

            default:
            break;
        }

        //var_dump(return);

    }

    public function selectDivuArq()
    {
        return (new File())->find("cod_arq = ucod", "ucod={$this->id}")->fetch(true);

        //var_dump($ucod);
    }


}
