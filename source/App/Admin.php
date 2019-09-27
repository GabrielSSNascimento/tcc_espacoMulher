<?php

namespace Source\App;

class Admin
{
    // posso ter um construtor que pode ter
    // tudo que será feito para todos os sites
    // contagem de relatório, manipulação de sessão
    // manipulação global para o site
    /*public function __construct()
    {

    }*/

   

    public function home($data):void
    {
        require __DIR__."/../../theme/admin/homeLog.php";
    }
    public function atividades($data):void
    {
        require __DIR__."/../../theme/admin/atividades.php";
    }
    public function atividadeEspecifica($data):void
    {
        require __DIR__."/../../theme/admin/atividade1.php";
    }
    public function cursos($data):void
    {
        require __DIR__."/../../theme/admin/cursos.php";
    }
    public function curosEspecifico($data):void
    {
        require __DIR__."/../../theme/admin/curso1.php";
    }
    public function delegacia($data):void
    {
        require __DIR__."/../../theme/admin/delegacia.php";
    }
    public function noticias($data):void
    {
        require __DIR__."/../../theme/admin/noticias.php";
    }
    public function noticiaEspecifica($data):void
    {
        require __DIR__."/../../theme/admin/noticia1.php";
    }
    public function eventoEspecifico($data):void
    {
        require __DIR__."/../../theme/admin/noticia2.php";
    }
    public function contato($data):void
    {
        require __DIR__. "/../../theme/admin/FaleConosco.php";   
    }
    public function sobreNos($data):void
    {
        require __DIR__. "/../../theme/admin/sobreNos.php";
    }
    public function update($data):void
    {
        require __DIR__."/../../theme/admin/updateDivu.php";
    }
    public function cadastro($data):void
    {     
        require __DIR__."/../../theme/admin/cadastroUser.php";
    }
    public function cadastroDivugacao($data):void
    {
        require __DIR__."/../../theme/admin/cadastroDivu.php";
    }
    public function cadastroParticipante($data):void
    {
        require __DIR__."/../../theme/admin/cadastroPartic.php";
    }
}