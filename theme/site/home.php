<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="imagens/favicon.ico">
    
</head>

<style type="text/css">
    body {
        width: 360px;
        margin: 0;
        padding:0;
        background-color: rgba(240, 240, 240, 0.36);
        font-family: arial;
        color: rgb(51, 51, 51);
    }

    #logo {
        width: 160px;
        margin-left: 100px;
    }
    .txt:link{
        color: black;
    }
    .txt:visited{
    font-size: 17px;
    line-height: 1.5;
    font-weight: 500;
    color: black;
}
    .entrar {
        background: #6D1E4B;
        border: 1px solid purple;
        border-radius: 3px;
        color: #fff;
        display: block;
        font-family: "arial";
        font-size: 17px;
        font-weight: bold;
        line-height: 35px;
        text-align: center;
        text-decoration: none;
        padding: 5px 10px;
        position: inline;
        width: 90px;
        border-top: 2px;
        margin-left: 36%;
        margin-bottom: 53px;
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
                font-family: arial;
                background-color:#fff;
                width: 360px;
                height: 550px;
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


            #button{
                width: 100px;
                height: 40px;
                margin-top: 10px;
                margin-left: 13px;
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
        margin-bottom: 425px;
    }
    #titulo{
        font-family: arial;
        font-size: 18px;
        text-align: center;
        font-weight: 700;
        color: #1a1a1a;
    }
    #caixinha{
        height: 667px;
        background-image: url(imagens/home/home.jpg);
        padding: 0;
    }
    #texto{
        text-align: center;
        font-size: 15px;
        color: #4d4d4d;
        font-family: arial;
        padding:15px;
    }
    footer{
        font-family: arial;
        background-color: #6D1E4B;
        padding: 20px;
    }
    
    #fale{
        text-decoration: none;
        color: white;
    }
    ul,li,#sobre:link{
        margin-top: 10px;
        text-decoration: none;
        color: white;
    }
    ul,li,#sobre:visited{
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
u,#fale:link{
    text-decoration: none;
}
u,#fale:visited{
    text-decoration: none;
}
.manchete1{
    font-family: arial;
    background-color: #fff;
    width: 360px;
    border-radius: 10px;
    margin:0;
    -webkit-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
}
.manchete2{
    font-family: arial;''
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
    font-family: arial;
    font-size: 35px;
    color: #262626;
    text-align: center;
}
#ti2 a{
    color:#6D1E4B;
    text-decoration: none;
    
    
}

#ti2 a:hover{
    color:#6D1E4B;
    
    
}

#id a{
    color: #333333;
    text-decoration: none;
    
    
}

#id a:hover{
    color: #333333;
    
    
}
.txt a{
    color: gray;
    line-height: 150%;
    text-decoration: none;
}

.fieldset{
    border: none;
}

.entrar:visited{
    color: white;
}
.entrar:link{
    color: white;
}
</style>

<body>
<header>
<div id="caixinha">  
    
        <input type="checkbox" id="chec">
    <label for="chec" id="label">
        <img id="menu" src="imagens/menu.png"> 
    </label>
    <nav id="nav">
        <ul id="ul"> 
        <li id="id"><a id="a" href="<?=url("atividades")?>">Atividades</a></li>
        <li id="id"><a id="a" href="<?=url("cursos")?>">Cursos</a></li>
        <li id="id"><a id="a" href="<?=url("delegacia")?>">Delegacia</a></li>
        <li id="id"><a id="a" href="<?=url("noticia")?>">Divulgações</a></li>
        <li id="id"><a id="a" href="<?=url("contato")?>">Fale Conosco</a></li>
            
            <a href="<?=url("site/signin")?>"><button id="button" type="button">Entrar</button></a>
            <a href="<?=url("site/cadastro")?>"><button id="button1" type="button">Cadastre-se</button></a>
            
        </ul>
    </nav>
    <img src="imagens/Delegacia/barueri_logo.png" id="logo" name="logo" alt="logo"/>
    <hr id="barra">
</div>


    
    <p id="texto_home">Seja uma mulher que levante outras mulheres</p>

      <a href="<?=url("site/signin")?>" class="entrar">Entrar</a>

    <hr id="barra">
</header>
    <main>
     <h1 id="txtNoti">Notícias</h1>
    <div class="manchete1">
   

        <img src="imagens/noticias/palestra.jpg" id="palestra" alt="palestra">
        <fieldset class="fieldset">
               
                <h2 id="ti2"><a href="noticias1.php">Câncer de ovário é tema de palestra na Secretaria da Mulher</a></h2>
                <p class="txt"><a href="noticias1.php">Ter acesso à informação pode salvar vidas e foi com esse objetivo que a Secretaria da Mulher promoveu na segunda-feira (dia 6), no Dia Mundial de Combate ao Câncer de Ovário, uma palestra sobre o tema.</a></p>
                <h3 id="tema">Palestra sobre Câncer</h3>       
            </fieldset>   
    </div>

    <br>
        <div class="manchete2">
        
        <img src="imagens/noticias/medalhas.jpg" id="medalhas" alt="medalhas">
        <fieldset class="fieldset">    
                <h2 id="ti2"><a href="noticias2.php">Premiação marca reconhecimento das mulheres em destaque de Barueri</a></h2>
                <p class="txt"><a href="noticias2.php">Foi muito emocionante a cerimônia do prêmio Mulher em Destaque Barueri, realizado na noite de quinta-feira (2 de maio). O evento, que está em sua segunda edição, conta com a realização da Secretaria da Mulher e tem o apoio do Conselho Municipal da Mulher de Barueri.</a></p>
                <h3 id="tema">Premiação de Destaque</h3>
            </fieldset>    
    </div>
        <div class="corpo">
        <a href="<?=url("atividades")?>"><img src="imagens/home/natacao.png" id="icone2" alt="atividades" name="atividades"></a>
        <h1 id="titulo">Atividades</h1>
        <h2 id ="texto">No Espaço Mulher temos várias Atividades, como Natação, Musculação, Pilates e Gap.</h2>

        <a href="<?=url("cursos")?>"><img src="imagens/home/Curso.png" id="icone2" alt="cursos" name="cursos"></a>
        <h1 id="titulo">Cursos</h1>
        <h2 id="texto">No Espaço Mulher temos cursos Recreativos e Profissionalizantes, nas áreas de Culinária, Música e Artes.</h2>

        <a href="<?=url("noticia")?>"><img src="imagens/home/Delegacia.png" id="icone3" alt="delegacia" name="delegacia"><a/>
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
        <u><a href="<?= url("contato/contato")?>.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="<?= url("sobreNos")?>" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>

</html>