<?php

namespace Source\App;

class Web
{
    //Aqui posso colocar todos os recursos que serão inicializados para todos os sites da web
    //Manipulação de Sessão
    public function __construct()
    {

    }
    public function home($data): void
    {
        echo "<h1>Web Home</h1>";

    }
    public function divulgacao($data): void
    {
    echo "<h1>Divulgação</h1>";

        require __DIR__ . "/../../theme/admin/cadastroDivu.php";
        require __DIR__ . "/../../theme/admin/updateNot.php";
        require __DIR__ . "/../../theme/admin/updateEve.php";
        require __DIR__ . "/../../theme/admin/updateDel.php";
        require __DIR__ . "/../../theme/admin/updateAtv.php";
        require __DIR__ . "/../../theme/admin/updateCurs.php";


    }
    public function participantes($data):void
    {

    echo "<h1>participantes</h1>";
        require __DIR__ . "/../../theme/admin/cadastroParticipante.php";
        require __DIR__ . "/../../theme/admin/selectParticipantes.php";

    }
    public function usuarios($data): void
    {
        echo "<h1>Usuarios</h1>";

        require __DIR__ . "/../../theme/aluno/perfilAluno.php";
        require __DIR__ . "/../../theme/professor/perfilProf.php";
        require __DIR__ . "/../../theme/admin/perfilAdmin.php";
        require __DIR__ . "/../../theme/admin/cadastroAdmin.php";
        require __DIR__ . "/../../theme/admin/cadastroProf.php";
        require __DIR__ . "/../../theme/admin/cadastroUser.php";

    }


    public function contact($data): void
    {
        echo"<h1>Contact</h1>";
        require __DIR__ . "/../../theme/contact.php";
    }

    public function error(array $data): void
    {
        echo "<h1>Web Error {$data["errcode"]}</h1>";
        var_dump($data);
    }
}

