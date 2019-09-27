<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.2.1.js"></script>
    <title>Espaço de Estética e Beleza</title>
    <style type="text/css">
    body {
        font-family: arial;
        max-width: 360px;
        margin: 0;
        padding:0;
        background-color: rgba(240, 240, 240, 0.36);

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


            #a{
                text-decoration: none;
                color: black;
            }
             
            #menu{
                width: 40px;
                height: 40px;
                margin-left: 0px;          
                margin-top: -5px;
            }
            
            input[type="checkbox"]{
                display: none;
            }
            
            #nav{
                background-color:#fff;
                width: 360px;
                height: 580px;
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
                width: 
                75%;
                
                
            }
            #id, a:link,a:visited{
                color: #333333;
            }
            
            #a{
                display: block;
                padding: 18px 5px;
                color: black;
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
            #button{
                width: 100px;
                height: 40px;
                margin-top: 30px;
                margin-left: 5px;
                background-color: #6D1E4B;
                color: white;
                border-radius: 7px;
            }

            #button1{
                width: 100px;
                height: 40px;
                margin-top: 10px;
                margin-left: 30px;
                background-color: #6D1E4B;
                color: white;
                border-radius: 7px;
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
    color: #1a1a1a;
    font-size: 30px;
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
        <li id="id"><a id="a" href="index.php">Home</a></li>
        <li id="id"><a id="a" href="atividades.php">Atividades</a></li>
        <li id="id" ><a id="a" href="cursos.php">Cursos</a></li>
        <li id="id"><a id="a" href="delegacia.php">Delegacia</a></li>
        <li id="id"><a id="a" href="noticias.php">Divulgações</a></li>
        <li id="id"><a id="a" href="FaleConosco.php">Fale Conosco</a></li>
            
            <a href="login.php"><button id="button" type="button">Entrar</button></a>
            <a href="cadastro.php"><button id="button1" type="button">Cadastre-se</button></a>
            
        </ul>
    </nav>
    <a href="index.php"><img src="imagens/Delegacia/barueri_logo.png" id="logo" name="logo" alt="logo" /></a>  

    
    <hr id="barra">
    </header>
    <main> 
        <div>
            <h1>Espaço de Estética e Beleza</h1>
            <div class="Slides" style="max-width:500px">
  <img class="mySlides" src="imagens/cursos1/cursos1.jpg">
  <img class="mySlides" src="imagens/cursos1/cursos2.png">
  <img class="mySlides" src="imagens/cursos1/cursos3.png">
  <img class="mySlides" src="imagens/cursos1/cursos4.png">

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
        </div>
    </main>
    <p id="prg"> É um moderno espaço de aprendizado e <a id="cor">aprimoramento profissional</a> para as <a id="cor">mulheres</a> que queiram se especializar no promissor mercado de trabalho da <a id="cor">beleza</a> e da <a id="cor">estética.</a><br> São oferecidos <a id="cor">cursos</a> de manicure, auxiliar e cabeleireiro, massagem e maquiagem.<br> Neste segmento a <a id="cor">Secretaria da Mulher</a> busca a parceria com vários profissionais do setor e constante aprimoramento dos <a id="cor">cursos</a> através de <a id="cor">workshop</a> e <a id="cor">palestras.</a> </p>
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
            <div><p class="hora">9h00</p><p class="atividade">ás 10h00</p></div>
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
    </ul>
    <footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConosco.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNos.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>

</html>