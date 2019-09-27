<?php
namespace Source\App;
use League\Plates\Engine;

use Source\Models\Usuario;


class Web
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
        require __DIR__. "/../../theme/site/home.php";
    
    }
    public function perfil($data):void
    {
        require __DIR__."/../../theme/site/perfil.php";
    }
    public function atividades($data):void 
    {
        require __DIR__."/../../theme/site/atividades.php";
        
    }
    public function atividadeEspecifica($data):void
    {
        require __DIR__."/../../theme/site/atividade1.php";
    }
    public function cursos($data):void 
    {
        require __DIR__."/../../theme/site/cursos.php";
    }
    public function curosEspecifico($data):void
    {
        require __DIR__."/../../theme/site/curso1.php";
    }
    public function delegacia($data):void
    {
        require __DIR__."/../../theme/site/delegacia.php";

    }
    public function noticias($data): void 
    {
        require __DIR__."/../../theme/site/noticias.php";
    }
    public function noticiaEspecifica($data):void
    {
        require __DIR__."/../../theme/site/noticia1.php";
    }
    public function eventoEspecifico($data):void
    {
        require __DIR__."/../../theme/site/noticia2.php";
    }
    public function contato($data): void 
    {
        require __DIR__. "/../../theme/site/FaleConosco.php";
        
    }
    public function sobreNos($data):void
    {
        require __DIR__. "/../../theme/site/sobreNos.php";
    }
    public function login($data):void
    {
        require __DIR__."/../../theme/site/login.php";
    }
    public function loginFuncionario($data):void
    {
        require __DIR__."/../../theme/site/loginProf.php";
    }
    public function cadastro($data):void
    {
        require __DIR__."/../../theme/site/cadastro.php";
    }
    public function cadastroFuncionario($data):void
    {
        require __DIR__."/../../theme/site/cadastroProf.php";
    }

   public function efetuarLogin($data):void
   {

    var_dump($data);

    $usuario = new Usuario();
    $arrayAutenticacaoRsm = $usuario->find("rsm = :vl_rsm", "vl_rsm={$data["rsm"]}")->fetch(true);
    
    if($arrayAutenticacaoRsm > 0){
        $arrayAutenticacaoSenha = $usuario->find("senha_usuario = :senha", "senha={$data["senha"]}")->fetch(true);       
         if($arrayAutenticacaoSenha > 0){
            foreach($arrayAutenticacaoRsm as $userItem){
                $cod_status_usuario = $userItem->cod_status_usuario;   
            }
             
             if($cod_status_usuario == 'A'){

                switch ($cod_status_usuario){
                    case 'D':
                        $url = "admin/perfil";
                        break;
                    case 'P':
                        $url = "professor/perfil";
                        break;
                    case 'A':
                        $url = "aluno/perfil";
                        break;
                    case 'F':
                        $url = "funcionario/perfil";
                    default:
                        break;
                }
    
                $link = url($url);
    
                echo "<script>";
                echo "location.href='{$link}'";
                echo "</script>";
    
            }else{
                echo "Usuário inativo!";
            }
         }else{
             echo "Senha não confere!";
         }
    }else{
        echo "RSM não exite!";
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*
    var_dump($arrayAutenticacao);

    echo count($arrayAutenticacao);

    foreach($arrayAutenticacao as $userItem){
       $cod_status_usuario = $userItem->cod_status_usuario;
    }

    if(count($arrayAutenticacao) > 0){
        if($cod_status_usuario == 'A'){

            switch ($cod_status_usuario){
                case 'D':
                    $url = "";
                    break;
                case 'P':
                    $url = "";
                    break;
                case 'A':
                    $url = "aluno/perfil";
                    break;
                case 'F':
                    $url = "";
                default:
                    break;
            }

            $link = url($url);

            echo "<script>";
           // echo "location.href='{$link}'";
            echo "</script>";

        }else{
            echo "Usuário inativo!";
        }
    }else{
        echo "Usuário ou senha incorreto!";
    }
    
*/
    //$action = $_REQUEST['acao'];
  
   
   /* switch($action){
    
    case 'login':

        $arrayAutenticacao = login();
    
        if($arrayAutenticacao['autorizacao_usuario']){
            if($arrayAutenticacao['cod_tipo_usuario'] === 'A'){
                switch ($arrayAutenticacao['tipo_usuario']){
                    case 'D':
                        $url = "indexAdmin.php?theme=admin&pagina=perfilAdmin.php";
                        break;
                    case 'P':
                        $url = "indexProf.php?theme=professor&pagina=perfilProf.php";
                        break;
                    case 'A':
                        $url = "indexAluno.php?theme=aluno&pagina=perfil.php";
                        break;
                    case 'F':
                        $url = "indexFunc.php?theme=funcionario&pagina=perfilFunc.php";
                    default:
                        break;
                }
                echo "<script>";
                echo "location.href='{$url}'";
                echo "</script>";
            }else{
                echo 'Conta Inativa';
            }
        }else{
            echo'email ou senha invalidos';
        }
        break;
    
    case 'logout':
        try{
            logout();
        }catch(Exception $exc){
            echo "<script>";
            echo "location.href='index.php?theme=site&pagina=erro&cod_erro={$exc->getCode()}'";
            echo "</script>";
        }finally{
            echo "location.href='index.php'";
        }
        break;
    
    default:
    
    break;
    
    }*/
    }
    public function efetuarCadastro($data):void
    {
        //colocar a função depois
    }
 


    public function error(array $data):void
    {
         //echo "<h1>Web Erro {$data["errcode"]}</h1>";
        // var_dump($data);

        require __DIR__. "/../../theme/site/404.php";
    }
}