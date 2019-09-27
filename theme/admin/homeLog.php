<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Mulher</title>
    <style type="text/css">
      body {
        font-family: arial;
        max-width: 360px;
        margin: 0;
        padding:0;
        background-color: rgba(240, 240, 240, 0.36);

    }

    #logo {
        width: 160px;
        margin-left: 100px;
    }
   #barra {
        width: 360px;
        height: 4px;
        background-color: #96B83D;
        margin:0;
        padding:0;
        margin-bottom: 30px;
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
                width:  75%;
                
                
            }
            
            #id:visited{
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

    #icone2{
        width: 83px;
        height: 83px;
        margin-left: 140px;
        

    }
    #icone3{
        width: 83px;
        height: 83px;
        margin-left: 140px;
    }

    #texto_home {
        text-align: center;
        font-size: 20px;
        color:  #404040;
        font-family: arial;
        margin-top: -570px;
        font-weight: 700;
        margin-bottom: 230px;
    }
    #titulo{
        font-size: 18px;
        text-align: center;
        font-weight: 700;
        color: #1a1a1a;
    }
  #texto{
        text-align: center;
        font-size: 15px;
        color: #4d4d4d;
        font-family: arial;
        padding:15px;
    }
    footer{
        background-color: #6D1E4B;
        padding: 20px;
    }
    
    #fale{
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
u,#fale:visited{
    text-decoration: none;
}
.manchete1{
    background-color: #fff;
    width: 360px;
    border-radius: 10px;
    margin:0;
    -webkit-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
}
.manchete2{
    background-color: #fff;
    width: 360px;
    border-radius: 10px;
    margin:0;
    -webkit-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
}
#tema{
    font-size: 16px;
    color: #333333;
}

#palestra{
    border-radius: 10px 10px 0px 0px; 
    width:360px;
    height: 200px;
    margin-bottom: 0px;
}
#medalhas{
    border-radius: 10px 10px 0px 0px; 
    width:360px;
    height: 200px;
    margin-bottom: 0px;
}
.corpo{
    margin-top: 12%;
}
#txtNoti{
    font-size: 35px;
    color: #262626;
    text-align: center;
}
.manchete1 .manchete2, a:link{
    text-decoration: none;
}
.manchete1 .manchete2, {
   color: #6D1E4B;
   text-decoration: none;
}
.manchete,a:visited{
    text-decoration: none;
}
.manchete1 .manchete2{
    color: green;
}
.fieldset{
    border: none;
}
#ti2 a{
    color:#6D1E4B;
    text-decoration: none;
    
    
}

#ti2 a:hover{
    color:#6D1E4B;
    
    
}

#txt a{
    color: gray;
    line-height: 150%;
    text-decoration: none;
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
        <li id="id"><a id="a" href="HomeLog.php">Home</a></li>
        <li id="id"><a id="a" href="atividades.php">Atividades</a></li>
        <li id="id" ><a id="a" href="cursos.php">Cursos</a></li>
        <li id="id"><a id="a" href="delegacia.php">Delegacia</a></li>
        <li id="id"><a id="a" href="noticias.php">Divulgações</a></li>
        <li id="id"><a id="a" href="FaleConosco.php">Fale Conosco</a></li>   
        <li id="id"><a id="a" href="../publico/index.php">Sair</a></li>       
        </ul>
    </nav>
     
    <a href="homelog.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a>

        <hr id="barra">
        
    </header>     <main>
     <h1 id="txtNoti">Notícias</h1>
    <div class="manchete1">
   

        <img src="imagens/noticias/palestra.jpg" id="palestra" alt="palestra">
        <fieldset class="fieldset">
               
                <h2 id="ti2"><a href="noticias1Aluno.php">Câncer de ovário é tema de palestra na Secretaria da Mulher</a></h2>
                <p id="txt"><a href="noticias1Aluno.php">Ter acesso à informação pode salvar vidas e foi com esse objetivo que a Secretaria da Mulher promoveu na segunda-feira (dia 6), no Dia Mundial de Combate ao Câncer de Ovário, uma palestra sobre o tema.</a></p>
                <h3 id="tema">Palestra sobre Câncer</h3>       
            </fieldset>   
    </div>

    <br>
        <div class="manchete2">
        
        <img src="imagens/noticias/medalhas.jpg" id="medalhas" alt="medalhas">
        <fieldset class="fieldset">    
                <h2 id="ti2"><a href="noticias2Aluno.php">Premiação marca reconhecimento das mulheres em destaque de Barueri</a></h2>
                <p id="txt"><a href="noticias2Aluno.php">Foi muito emocionante a cerimônia do prêmio Mulher em Destaque Barueri, realizado na noite de quinta-feira (2 de maio). O evento, que está em sua segunda edição, conta com a realização da Secretaria da Mulher e tem o apoio do Conselho Municipal da Mulher de Barueri.</a></p>
                <h3 id="tema">Premiação de Destaque</h3>
            </fieldset>    
    </div>
        <div class="corpo">
        <a href="atividadesAluno.php"><img src="imagens/home/natacao.png" id="icone2" alt="atividades" name="atividades"></a>
        <h1 id="titulo">Atividades</h1>
        <h2 id ="texto">No Espaço Mulher temos várias Atividades, como Natação, Musculação, Pilates e Gap.</h2>

        <a href="cursosAluno.php"><img src="imagens/home/Curso.png" id="icone2" alt="cursos" name="cursos"></a>
        <h1 id="titulo">Cursos</h1>
        <h2 id="texto">No Espaço Mulher temos cursos Recreativos e Profissionalizantes, nas áreas de Culinária, Música e Artes.</h2>

        <a href="delegaciaAluno.php"><img src="imagens/home/Delegacia.png" id="icone3" alt="delegacia" name="delegacia"><a/>
        <h1 id="titulo">Delegacia</h1>
        <h2 id="texto">Junto do Espaço Mulher temos a Delegacia da Mulher que visa, ajudar as mulher vítimas de violência e conscientizar a população de Barueri.</h2>

    </div>

    <footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConoscoAluno.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNosAluno.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>

</html>