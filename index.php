<?php
 require __DIR__ . "/vendor/autoload.php";


 //Arquivo responsável pelas rotas(Controlador)

 use CoffeeCode\Router\Router;

 $router = new Router(ROOT);
 /*
 Controladores 
 */
$router->namespace("Source\App");
/*
WEB 
home
*/

$router->group(null);
$router->get("/", "Web:home");

/*$router->group("contact");
$router->get("/", "Web:contact");
*/


/*
Router - Padrão
*/

//Arquivos:
$router->group("arquivos");
$router->get("/", "Web:arquivos");

//Divulgacao:
$router->group("divulgacao");
$router-get("/", "Web:divulgacao");
//Participantes:
$router->group("participantes");
$router->get("/","Web:participantes");
//Usuarios:
$router->group("usuarios");
$router->get("/", "Web:Usuarios");


//Outros Metodos
$router->post("/","Web:contact");

//Obs:
// regra padrão (valores dinâmicos devem ficar "sempre assim")
// das url's estáticas

//veja:
$router->get("/{sector}", "Web:contact");
$router->get("/supoerte", "Web:support")




/*
Erros
*/
$router->group("ooops");
$router->get("/{errcode}", "Web:error");
$router->dispatch();


if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}