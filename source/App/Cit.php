<?php

namespace Source\App;



use League\Plates\Engine;
use Source\Models\User;
use Source\Support\ApiIniFieb;

class Cit
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

    /*fim aula 7*/

    public function home($data): void
    {
        echo "<h1>Web Fieb - Informática para Internet </h1>"; 

    }

    //http://localhost/phptips/ep01/inifieb/login
    public function login($data):void
    {
        //var_dump($data);

        echo $this->view->render("login", [
            "title" => " Login | " . SITE

        ]);
    }
    // api/App/ValidarLogin?login={login}&senha={senha}
    public function validarLogin($data):void
    {
        //var_dump($data);
        /*
        Login Usuário: 26072324819
        Senha: 1234abc@ 
        */
        $apiIniFieb = new ApiIniFieb();
        $datas = $apiIniFieb->endPoints("ValidarLogin?login={$data['login']}&senha={$data['senha']}");
        echo "<pre>";
        print_r($datas);
    }

    //api/App/ConsultaInstrutores
    //http://localhost/phptips/ep01/inifieb/instrutores
public function consultaInstrutores($data):void
{
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaInstrutores");
    echo "<pre>";
    print_r($datas);
}

//api/App/ConsultaTurmasPorInstrutor?idProfessor={idProfessor}
//http://localhost/phptips/ep01/inifieb/instrutor-turmas/3393
public function consultaTurmasPorInstrutor($data):void
{
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaTurmasPorInstrutor?idProfessor={$data['idProfessor']}");
    echo "<pre>";
    print_r($datas);
}

    //api/App/IncluirFrequencia
   //http://localhost/phptips/ep01/inifieb/incluir-frequencia
public function incluirFrequencia($data): void
{
   /* echo $this->view->render("include-frequency", [
        "title" => " Incluir Frequência | " . SITE
    ]);*/

    //$rsm = $_POST['rsm'];

    $rsm = 245358;
    //$dateNow = new \DateTime("now");
    //$dataOcorrencia = $dateNow->format(DATE_US);
    
    //$dataOcorrencia = str_replace(" ","T",$dataOcorrencia);
    //$dataOcorrencia = mb_substr($dataOcorrencia, 0, 24);
    
    //$dataOcorrencia = $dataOcorrencia."-03:00"; // string
   // $dataOcorrencia = date(DATE_ISO8601);
    //$dataOcorrencia = date(DATE_RFC850);
    //$dataOcorrencia = date(DATE_ATOM);
   // $dataOcorrencia = strtotime($dataOcorrencia); // unix time
   // $dataOcorrencia = $dateNow->format('Y-m-d\TH:i:s.u');
   $dataOcorrencia = date(DATE_W3C);
    

    $idTurma =  5787;
    $fgFalta = true;
    $fgJustifica = true;
    $justificativa = "Teste Fieb - Rogerio 5";
   //echo "Aluno:{$rsm}";
   $bodyParameters = [
       'idTurma'=> $idTurma,
       'RSM'=> $rsm,
       'DataOcorrencia'=> $dataOcorrencia,
       'fgFalta'=> $fgFalta,
       'fgJustifica'=> $fgJustifica,
       'Justificativa'=> $justificativa

   ];

   $bodyParameters = json_encode($bodyParameters);
    $apiIniFieb = new ApiIniFieb();
   //$apiIniFieb->endPoints("IncluirFrequencia", $bodyParameters);
    $datas = $apiIniFieb->endPointIncluirFrequencia("IncluirFrequencia", $bodyParameters);
   echo "<pre>";
   print_r($datas);

}

 //api/App/ConsultaAlunosFrequentes
 //http://localhost/phptips/ep01/inifieb/alunos-frequentes
    public function consultaAlunosFrequentes()
    {
         $apiIniFieb = new ApiIniFieb();
         $datas = $apiIniFieb->endPoints("ConsultaAlunosFrequentes");
         echo "<pre>";
        print_r($datas);
        // var_dump($datas);
         /*foreach($datas['Object'] as $key=> $aluno){
             echo "RSM: {$aluno['RSM']}<br>";
             echo "NOME: {$aluno['NomeAluno']}<br>";
             echo "DATA NASC.:{$aluno['DataNasc']}<br>";
             echo "EMAIL:{$aluno ['email']}<br>";
             echo "------------------------<br>";
         }*/
    }

    //api/App/ConsultaFotoAluno?idAluno={idAluno}
    //http://localhost/phptips/ep01/inifieb/aluno-foto/245356
    public function consultaFotoAluno($data)
    {
        //idAluno=245355

        var_dump($data);
        $apiIniFieb = new ApiIniFieb();
        $datas = $apiIniFieb->endPoints("ConsultaFotoAluno?idAluno={$data['idAluno']}");   
        //$datas = json_decode($body,true);
          
           echo "<pre>";
           print_r($datas);
           //var_dump($datas);
           echo "***********************************<br>";
           // lista dos valores que estão chegando
           /*foreach($datas['Object'] as $key=> $aluno){
               echo "{$key}  -  {$aluno}<br>";
              
               echo "------------------------<br>"; 
             }
            */

           // $datasArrayMeu["Object"] = [
             //   "RSM"=>"1542", 
             //   "Foto"=>"minha"
           // ];

            //echo "<pre>";
          //  print_r($datasArrayMeu);
               

          echo "RSM : {$datas['Object']['RSM']}<br>";
          echo "Foto : {$datas['Object']['Foto']}<br>";

          $foto = $datas['Object']['Foto'];

          echo "<img src='data:image/jpeg;base64, $foto' />";
       
    }

   // api/App/ConsultaDadosContatoAluno?idAluno={idAluno}
   //http://localhost/phptips/ep01/inifieb/aluno-contato/245356
    public function consultaDadosContatoAluno($data): void
    {
        var_dump($data);
        $apiIniFieb = new ApiIniFieb();
        $datas = $apiIniFieb->endPoints("ConsultaDadosContatoAluno?idAluno={$data['idAluno']}");
        echo "<pre>";
        print_r($datas);
    }
   
    //api/App/ConsultaTurmasAluno?idAluno={idAluno}
   // http://localhost/phptips/ep01/inifieb/aluno-turmas/245356
    public function consultaTurmasAluno($data):void
    {
        $apiIniFieb = new ApiIniFieb();
        $datas = $apiIniFieb->endPoints("ConsultaTurmasAluno?idAluno={$data['idAluno']}");
        echo "<pre>";
        print_r($datas);
    }

    //POST api/App/ConsultaFrequenciaAlunoPorAlunoTurma?idTurma={idTurma}&idAluno={idAluno}
    // http://localhost/phptips/ep01/inifieb/aluno-frequencia-por-turma/5544/245356
  public function consultaFrequenciaAlunoPorAlunoTurma($data):void
  {
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaFrequenciaAlunoPorAlunoTurma?idTurma={$data['idTurma']}&idAluno={$data['idAluno']}");
    echo "<pre>";
    print_r($datas); 
  }

  // api/App/ConsultaAtestadosPorAluno?idAluno={idAluno}
  //http://localhost/phptips/ep01/inifieb/aluno-atestados/245434

  public function consultaAtestadosPorAluno($data):void
  {
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaAtestadosPorAluno?idAluno={$data['idAluno']}");
    echo "<pre>";
    print_r($datas); 
  }
  
  // api/App/ConsultaTiposCurso
  // http://localhost/phptips/ep01/inifieb/cursos-tipo
   public function consultaTiposCurso($data):void
   {
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaTiposCurso");
    echo "<pre>";
    print_r($datas); 
   }


 //api/App/ConsultaCursos?idTipoCurso={idTipoCurso}
 //http://localhost/phptips/ep01/inifieb/cursos/11
   public function consultaCursos($data):void
   {
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaCursos?idTipoCurso={$data['idTipoCurso']}");
    echo "<pre>";
    print_r($datas); 
   }

//api/App/ConsultaAgendaAtividades?idTipoCurso={idTipoCurso}&idCursoCiclo={idCursoCiclo}
//http://localhost/phptips/ep01/inifieb/curso-agenda/11/52
public function consultaAgendaAtividades($data):void
{
 
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaAgendaAtividades?idTipoCurso={$data['idTipoCurso']}&idCursoCiclo={$data['idCursoCiclo']}");
    echo "<pre>";
    print_r($datas); 
}

//api/App/ConsultaFrequenciaAlunoPorAlunoTurmaCurso?idCursoCiclo={idCursoCiclo}
//http://localhost/phptips/ep01/inifieb/curso-frequencia/52

public function consultaFrequenciaAlunoPorAlunoTurmaCurso($data):void
{
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaFrequenciaAlunoPorAlunoTurmaCurso?idCursoCiclo={$data['idCursoCiclo']}");
    echo "<pre>";
    print_r($datas);
}

//api/App/ConsultaTurmasAbertas?idCursoCiclo={idCursoCiclo}
//http://localhost/phptips/ep01/inifieb/turmas-abertas/52

public function consultaTurmasAbertas($data):void
{
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaTurmasAbertas?idCursoCiclo={$data['idCursoCiclo']}");
    echo "<pre>";
    print_r($datas); 
}

//api/App/ConsultaAlunosFrequentesPorTurma?idTurma={idTurma}
//http://localhost/phptips/ep01/inifieb/turma-frequentes/5507

public function consultaAlunosFrequentesPorTurma($data):void
{
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaAlunosFrequentesPorTurma?idTurma={$data['idTurma']}");
    echo "<pre>";
    print_r($datas);
}


//api/App/ConsultaFrequenciaAluno?idTurma={idTurma}
//http://localhost/phptips/ep01/inifieb/turma-frequencia/5507

public function consultaFrequenciaAluno($data):void
{
    $apiIniFieb = new ApiIniFieb();
    $datas = $apiIniFieb->endPoints("ConsultaFrequenciaAluno?idTurma={$data['idTurma']}");
    echo "<pre>";
    print_r($datas);
}

  //api/App/IncluirFrequencia
   public function ajaxIncluirFrequencia($data): void
   {
       /*Obs.: Para incluir uma presença o campo fgFalta deve ser igual a falso e o campo fgJustificativa deve ser igual a falso e o 
       campo Justificativa igual a vazio, agora para incluir uma falta basta informar o campo fgFalta igual a verdadeiro. 
       Caso o campo fgJustificativa seja verdadeiro, o campo Justificativa deve ser informado, com a isso a falta não será contabilizada.
       Após inclusão caso o valor retornado seja maior que zero o registro da frequência foi incluído com sucesso.
       Quanto a leitura do QRCode o valor retornado, refere-se ao RSM (IdAluno).*/
       $rsm = $_POST['rsm'];
      
      
      
   }



    public function error(array $data):void
    {
         //echo "<h1>Web Erro {$data["errcode"]}</h1>";
        // var_dump($data);

        echo $this->view->render("error",[
            "title" =>"Error {$data['errcode']} | " . SITE,
            "error" => $data["errcode"]
        ]);
    }
}