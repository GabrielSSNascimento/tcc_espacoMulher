<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.2.1.js"></script>
    <title>Natação iniciante</title>
    
<style type="text/css">
 body {
        font-family: arial;
        width: 360px;
        margin: 0;
        padding:0;
    }

    #logo {
        height: 50px;
        width: 160px;
        margin-left: 110px;
    }

   
    #barra {
        height: 4px;
        background-color: #96B83D;
        margin:0;
        padding:0;
        margin-bottom: 15px;
    }


    #menu{
                width: 40px;
                height: 40px;
                margin-top: -5px;
            }
            
            input[type="checkbox"]{
                display: none;
            }
            
            #nav{
                background-color:#fff;
                width: 360px;
                height: 630px;
                left: -370px;
                position: absolute;
                transition: all .5s;

                
            }
            
            input[type="checkbox"]:checked ~ nav{
                transform: translateX(370px);
                
            }
            
            #ul{
                list-style: none;
                top: 30px;
                position: absolute;
                width:  75%;
                
                
            }
            
            #id, a:link,a:visited{
                color: #333333;
            }
            #a{
                text-decoration: none;
                display: block;
                padding: 18px 5px;
                font-weight:bold; 
                font-size: 18px; 
            }
            
            
            #label{
               
                padding: 15px;
                position: absolute;
                z-index: 1;
            }

            #id{
                padding:5px;
                margin: 5px;
                border-bottom: 1px ridge #595959;
                text-align:center;

            }

    #facebook {
    width:40px;
    height:30px;
    margin-left:65px;
}
#textoF {
    font-size: 13px;
    color:white;
}
#textoF2{
    margin-top: -10px;
    font-size: 14px;
    color:white;
    text-align: center;
}
#email {
    font-size: 13px;
    color:white;
}
#instagram {
    width:40px;
    height:30px;
    margin-left:30px;
}
#twitter {
    width:40px;
    height:30px;
    margin-left:30px;

}
.barra2{
    margin:0;
    margin-bottom: 15px;
    margin-top: 5px;

}
#fale{
    margin-left: 40px;
    margin-right: 30px;
}
u,#fale, a:link,a:visited{
    text-decoration: none;
}

.mySlides{
    
    width: 340px;
    height: 170px;
    margin-left: 10px;
}


#prg {
    text-align: justify;
    color: #0d0d0d;
     letter-spacing: 1;
    line-height: 1.2;
     margin-left:18px;
     font-size: 17px;
     width: 340px;
     margin-left: 10px;
}
h1 {
    font-size: 30px;
    color: #1a1a1a;
    text-align: center;
}
ul,li,#num{
    margin-left: -5px;
    text-align: justify;
    color: #0d0d0d;
     letter-spacing: 1;
    line-height: 1.2;
     font-size: 17px;
}
ul,li{
    color:white;
}
h2{
    color: #262626;
    text-align: center;
}
.diaSemana{
    color: #262626;
    width: 100%;
    display: flex;
    text-align: center;
}

.diaSemana div{
    width: 45%;
    /*border: solid 1px;*/
}

.container-dia{
    display: flex;
    flex-wrap: nowrap;
    width: 550%;
    
}

.container-dia .dia{
    width: 18%;
    display: none;
    border: solid 2px lightgray;
}

.container-dia div{
    display: flex;
}

.container-dia div .hora{
    width: 15%;
    text-align: center;
}

.container-dia div .atividade{
    width: 75%;

}
#cor{
            color: #86245c;
        }
        footer{
        background-color: #6D1E4B;
        padding: 20px;
    }
    
    #fale,visited{
        text-decoration: none;
        color: white;
    }
    ul,li,#sobre,visited{
        margin-top: 10px;
        text-decoration: none;
        color: white;
    }
</style>
</head>

<body>      
    <header>
    
  
<input type="checkbox" id="chec">
    <label for="chec" id="label">
        <img id="menu" src="imagens/menu.png"> 
    </label>
    <nav id="nav">
        <ul id="ul"> 
        <li id="id"><a id="a" href="homeLogProfessor.php">Home</a></li>
        <li id="id"><a id="a" href="perfilProf.php">Perfil Professor</a></li>
        <li id="id"><a id="a" href="atividadesProfessor.php">Atividades</a></li>
        <li id="id"><a id="a" href="cursosProfessor.php">Cursos</a></li>
        <li id="id"><a id="a" href="delegaciaProfessor.php">Delegacia</a></li>
        <li id="id"><a id="a" href="noticiasProfessor.php">Divulgações</a></li>
        <li id="id"><a id="a" href="FaleConoscoProfessor.php">Fale Conosco</a></li>   
        <li id="id"><a id="a" href="../publico/index.php">Sair</a></li>       
        </ul>
    </nav>
    <a href="index.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a>


    <hr id="barra">
    </header>
    <main>
</head>

<body>

<h1>Natação iniciante</h1>

<div class="Slides" style="max-width:360px">
  <img class="mySlides" src="imagens/Atividades1/atividades4.png">
  <img class="mySlides" src="imagens/Atividades1/atividades3.png">
  <img class="mySlides" src="imagens/Atividades1/atividades2.png">
  <img class="mySlides" src="imagens/Atividades1/atividades1.png">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);
}
</script>            
   </main>
    <p id="prg"> A <a id="cor">natação</a> é uma <a id="cor">atividade física</a> que pode ser
        simultaneamente <a id="cor">útil</a> e <a id="cor">recreativa.</a><br>
        <a id="cor">Mulheres</a> com idade a partir dos <a id="cor">18 anos</a> e
        <a id="cor">gestantes</a> podem utilizar a <a id="cor">piscina</a> em <a id="cor">aulas matriculadas.</a>
        É <a id="cor">necessário</a> apresentação de<a id="cor"> exame dermatológico e clínico.</a></p>

    <script type="text/javascript">
            $(document).ready(function () {
                $("#anima3").hide();
                $("#anima1").show();
                $("#anima2").hide();

           //      $("#botao1").css("z-index", "1");
          

                $("#quinta").click(function () {
                    $("#anima3").hide();
                    $("#anima1").hide();
                    $("#anima2").show();
                });
                
                    $("#sexta").click(function () {
                        $("#anima3").show();
                        $("#anima1").hide();
                        $("#anima2").hide();
                    });
                    $("#segunda").click(function () {
                        $("#anima3").hide();
                        $("#anima1").show();
                        $("#anima2").hide();
                    });

            });
</script>
   <script type="text/javascript">
            $(document).ready(function (){
                /*$(".diaSemana div").eq(0).css({"background-color":"lightgray"});*/
                var data = new Date(); //pega a data atual
                var num = data.getDay(); //pega o dia da semana e subtrai 1
                if(num > 0 && num < 6){ //avalia se o dia da semana está entre segunda e sexta
                    $(".diaSemana div").eq(num - 1).css({"background-color":"lightgray"}); //indica o dia da semana 
                    $(".container-dia .dia").eq(num - 1).css({"display":"block"}); //exibe o horário do dia
                } else {
                    $(".diaSemana div").eq(0).css({"background-color":"lightgray"}); //final de semana exibe a segunda-feira
                    $(".container-dia .dia").eq(0).css({"display":"block"}); //final de semana exibe a segunda-feira
                }
                $(".diaSemana div").click(function(){ // quando clica-se em algum dia da semana
                    var pos = $(this).index(); //pega o índice da div correspondente
                    $(".diaSemana div").css({"background-color":"white"}); //tinge de brando toda a div dos dias da semana
                    $(this).css({"background-color":"lightgray"}); //coloca background cinza-claro do dia da semana correspondente ao clique
                    for(x = 0; x < $(".container-dia div").length; x++){ 
                        $(".container-dia .dia").eq(x).hide(); //esconde os conteúdos
                    };
                    $(".container-dia .dia").eq(pos).fadeIn(); //exibe o conteúdo correspondente ao clique
                });
            });
</script>
<h2 id="hora">Horários</h2>
    <div class="diaSemana">
        <div><h3>Seg - Qua</h3></div>
        <div><h3>Ter - Qui</h3></div>
        <div><h3>Sex</h3></div>                        
    </div>
    <section class="container-dia">    
        <div class="dia">
            <div><p class="hora">07h00</p><p class="atividade"> ás 08h00</p></div>
            <div><p class="hora">09h00</p><p class="atividade">ás 10h00</p></div>
            <div><p class="hora">11h00</p><p class="atividade">ás 12h00</p></div>
        </div>
        <div class="dia">
            <div><p class="hora">07h00</p><p class="atividade">ás 08h00</p></div>
            <div><p class="hora">09h00</p><p class="atividade">ás 10h00</p></div>
            <div><p class="hora">11h00</p><p class="atividade">ás 12h00</p></div>
        </div>
        <div class="dia">
            <div><p class="hora">07h00</p><p class="atividade">ás 08h00</p></div>
            <div><p class="hora">09h00</p><p class="atividade">ás 10h00</p></div>
            <div><p class="hora">11h00</p><p class="atividade">ás 12h00</p></div>
        </div>
    </section>



    <h2>Documentos Necessários</h2>
    <ul>
        <li id="num">RG</li>
        <li id="num">CPF</li>
        <li id="num">Comprovante</li>
        <li id="num">Atestado Dermatológico</li>
        <li id="num">Atestado Clínico</li>
    </ul>
    <footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConosco.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNosProf.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>

</html>