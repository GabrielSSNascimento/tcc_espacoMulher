<?php
namespace Source\App;
use League\Plates\Engine;

use Source\Models\Usuario;


class Aluno
{
    /*aula 7*/
    private $view;


    // posso ter um construtor que pode ter
    // tudo que será feito para todos os sites
    // contagem de relatório, manipulação de sessão
    // manipulação global para o site
    public function __construct()
    {
        $this->view = Engine::create(__DIR__ . "/../../theme", "php");
    }

    public function home($data):void
    {
        require __DIR__."/../../theme/aluno/homeLog.php";
    }
    public function perfil($data):void
    {
       
         require __DIR__."/../../theme/aluno/perfil.php";
    }
    public function atividades($data):void
    {
        require __DIR__."/../../theme/aluno/atividades.php";
    }
    public function curosEspecifico($data):void
    {
        require __DIR__."/../../theme/site/curso1.php";
    }
    public function cursos($data):void
    {
        require __DIR__."/../../theme/aluno/cursos.php";
    }
    public function curosEspecifico($data):void
    {
        require __DIR__."/../../theme/aluno/curso1.php";
    }
    public function delegacia($data):void
    {
        require __DIR__."/../../theme/aluno/delegacia.php";
    }
    public function noticias($data):void
    {
        require __DIR__."/../../theme/aluno/noticias.php";
    }  
    public function noticiaEspecifica($data):void
    {
        require __DIR__."/../../theme/aluno/noticia1.php";
    }
    public function eventoEspecifico($data):void
    {
        require __DIR__."/../../theme/aluno/noticia2.php";
    }  
    public function contato($data):void
    {
        require __DIR__. "/../../theme/aluno/FaleConosco.php";
       
    }
    public function sobreNos($data):void
    {
        require __DIR__. "/../../theme/aluno/sobreNos.php"; 
    }
    public function error(array $data):void
    {
         //echo "<h1>Web Erro {$data["errcode"]}</h1>";
        // var_dump($data);

        require __DIR__. "/../../theme/site/404.php";
    }
}