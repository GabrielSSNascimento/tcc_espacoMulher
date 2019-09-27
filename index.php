<?php
 require __DIR__ . "/vendor/autoload.php";

// Rotas com controllers (MVC)

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

// para o router funcionar como um controlador...

/*
 *  Controllers
 */
$router->namespace("Source\App");
//pagina que aparecer na index e após o log oof
$router->group(null);
$router->get("/","Web:home");

//paginas com formulario no usuario não logado
$router->group("site");
$router->get("/signin", "Web:login");
$router->get("/signinFuncionario", "Web:loginFuncionario");
$router->get("/cadastro","Web:cadastro");
$router->get("/cadastroFuncionario","Web:cadastroFuncionario");
//post para enviar as informações (ainda em desenvolvimento)
$router->post("/login","Web:efetuarLogin");
$router->post("/cadastroUsuario","Web:efetuarCadastro");

//paginas das atividades em geral
$router->group("atividades");
$router->get("/", "Web:atividades");
$router->get("/atividadesAluno","Aluno:atividades");
$router->get("/atividadesProf","Professor:atividades");
$router->get("/atividadesAdmin","Admin:atividades");
$router->get("/atividadesFunc","Func:atividades");

//paginas dos cursos em geral
$router->group("cursos");
$router->get("/","Web:cursos");
$router->get("/cursosAluno","Aluno:cursos");
$router->get("/cursosProf","Professor:cursos");
$router->get("/cursosAdmin","Admin:cursos");
$router->get("/cursosFunc","Func:cursos");

//pagina das noticias e eventos em geral
$router->group("noticia");
$router->get("/noticiasAluno","Aluno:noticias");
$router->get("/noticiasProf","Professor:noticias");
$router->get("/noticiasAdmin","Admin:noticias");
$router->get("/noticiasFunc","Func:noticias");
$router->get("/", "Web:noticias");

//paginas para pegar cada tipo de divugação de modo especifico
$router->group("especifico");
$router->get("/noticiaEspecificaProf","Professor:noticiaEspecifica");
$router->get("/eventoEspecificoProf","Professor:eventoEspecifico");
$router->get("/cursoEspecificoProf","Professor:cursosEspecifico");
$router->get("/atividadesEspecificaProf","Professor:atividaeEspecifica");
$router->get("/noticiaEspecificaAluno","Aluno:noticiaEspecifica");
$router->get("/eventoEspecificoAluno","Aluno:eventoEspecifico");
$router->get("/cursoEspecificoAluno","Aluno:cursosEspecifico");
$router->get("/atividadesEspecificaAluno","Aluno:atividaeEspecifica");
$router->get("/noticiaEspecificaAdmin","Admin:noticiaEspecifica");
$router->get("/eventoEspecificoAdmin","Admin:eventoEspecifico");
$router->get("/cursoEspecificoAdmin","Admin:cursosEspecifico");
$router->get("/atividadesEspecificaAdmin","Admin:atividaeEspecifica");


//paginas da delegacia
$router->group("delegacia");
$router->get("/delegaciaAluno","Aluno:delegacia");
$router->get("/delegaciaProf","Professor:delegacia");
$router->get("/delegaciaAdmin","Admin:delegacia");
$router->get("/delegaciaFunc","Func:delegacia");
$router->get("/","Web:delegacia");


//paginas de contato de cada usuario
$router->group("contato");
$router->get("/contatoProf","Professor:contato");
$router->get("/contatoAluno","Aluno:contato");
$router->get("/contato","Web:contato");
$router->get("/contatoAdmin","Admin:contato");
$router->get("/contatoFunc","Func:contato");

//paginas de sobre nos para cada usuario
$router->group("sobreNos");
$router->get("/sobreNosAluno","Aluno:sobreNos");
$router->get("/sobreNosProf","Professor:sobreNos");
$router->get("/","Web:sobreNos");
$router->get("/sobreNosAdmin","Admin:sobreNos");
$router->get("/sobreNosFunc","Func:sobreNos");

// paginas do aluno logado
$router->group("aluno");
$router->get("/","Aluno:home");
$router->get("/perfil","Aluno:perfil");
$router->get("/horario","Aluno:horarios");
$router->get("/carteira","Aluno:carteirinha");

//paginas do professor logado
$router->group("professor");
$router->get("/", "Professor:home");
$router->get("/perfil","Professor:perfil");

//paginas do administrador logado e suas skills
$router->group("Admin");
$router->get("/","Admin:home");
$router->get("/update","Admin:update");
$router->get("/cadastroUsuario","Admin:cadastro");
$router->get("/cadastroDivu","Admin:cadastroDivugacao");
$router->get("/cadastroParticipante","Admin:cadastroParticipante");
//post para enviar as informações (ainda em desenvolvimento)
$router->post("/updateDivu","Admin:efetuarUpdate");
$router->post("/cadastroDivuFunc","Admin:efetuarCadastroDivu");
$router->post("/cadastroUsuarioFunc","Admin:efetuarCadastroUsuario");
$router->post("/cadastroParticipanteFunc","Admin:efetuarCadastroParticipante");

//pagina dos funcionarios que talvez seja colacada futuramente
// $router->group("Func");
// $router->get("/","Func:home");
// $router->get("/update","Func:updateDivu");
// $router->get("/cadastroUsuario","Func:cadastroUsuario");
// $router->get("/cadastroDivu","Func:cadastroDivu");
// $router->get("/cadastroParticipante","Func:cadastroParticipante");
// //post para enviar as informações
// $router->post("/updateDivu","Func:efetuarUpdate");
// $router->post("/cadastroDivuFunc","Func:efetuarCadastroDivu");
// $router->post("/cadastroUsuarioFunc","Func:efetuarCadastroUsuario");
// $router->post("/cadastroParticipanteFunc","Func:efetuarCadastroParticipante");

//-------------------------------------------- requerir API ---------------------------------------------

$router->group("inifieb");
$router->get("/", "Cit:home");

$router->get("/login","Cit:login");
$router->post("/login","Cit:validarLogin");
$router->get("/instrutores", "Cit:consultaInstrutores");
$router->get("/instrutor-turmas/{idProfessor}","Cit:consultaTurmasPorInstrutor");

$router->get("/incluir-frequencia", "Cit:incluirFrequencia");
$router->get("/alunos-frequentes", "Cit:consultaAlunosFrequentes");
$router->get("/aluno-foto/{idAluno}","Cit:consultaFotoAluno");
$router->get("/aluno-contato/{idAluno}","Cit:consultaDadosContatoAluno");
$router->get("/aluno-turmas/{idAluno}","Cit:consultaTurmasAluno");
$router->get("/aluno-frequencia-por-turma/{idTurma}/{idAluno}","Cit:consultaFrequenciaAlunoPorAlunoTurma");
$router->get("/aluno-atestados/{idAluno}","Cit:consultaAtestadosPorAluno");



$router->get("/cursos-tipo", "Cit:consultaTiposCurso");
$router->get("/cursos/{idTipoCurso}","Cit:consultaCursos");
$router->get("/curso-agenda/{idTipoCurso}/{idCursoCiclo}","Cit:consultaAgendaAtividades");
$router->get("/curso-frequencia/{idCursoCiclo}","Cit:consultaFrequenciaAlunoPorAlunoTurmaCurso");

$router->get("/turmas-abertas/{idCursoCiclo}","Cit:consultaTurmasAbertas"); 
$router->get("/turma-frequentes/{idTurma}","Cit:consultaAlunosFrequentesPorTurma");
$router->get("/turma-frequencia/{idTurma}","Cit:consultaFrequenciaAluno");


/*
$router->group("contato");
$router->get("/aluno","aluno:contato");
$router->get("/professor", "professor:contato");
$router->get("/admin", "admin:contato");

$router->group("atividades");
$router->get("/aluno","aluno:atividades");
$router->get("/professor", "professor:atividades");
$router->get("/admin", "admin:atividades");
*/
/*
 * ERROS 
 * 
 */
$router->group("ooops");
$router->get("/{errcode}", "Web:error");


$router->dispatch();

if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}