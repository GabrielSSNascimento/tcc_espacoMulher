<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiação mulheres em destaque</title>
    <style type="text/css">
        body{
            background-color: rgba(240, 240, 240, 0.36);        
            max-width: 360px;
            font-family: arial;
            padding:10px;
            background-color: rgba(240, 240, 240, 0.36);


        }


    #logo {
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
            
            #id, a:link, a:visited{
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

        #palestra{
            width:335px;
            height: 173px;
            align: center;
            margin-left: 18px;
        }
        h2{
            color: #6D1E4B;
            font-size: 1.1em;
            font-style: bold;
            text-align: left;
            margin-left: 16px;
        }
        #sub{
            text-align: left;
    color: #0d0d0d;
     letter-spacing: 1;
    line-height: 1.2;
     margin-left:15px;
     font-size: 17px;
 }
        #data{
            font-size: 0.8em;
            margin-left:18px;
        }
        #prg {
            text-align: left;
    color: #0d0d0d;
     letter-spacing: 1;
    line-height: 1.2;
     margin-left:15px;
     font-size: 17px;
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
        font-size: 12px;
        color: #053201;
        font-family: arial;
        margin-top: -120px;
        font-weight: 900;
    }
    #titulo{
        font-size: 16px;
        text-align: center;
        font-weight: 700;
        color: #343434;
    }
    #caixinha{
        height: 667px;
        background-image: url(imagens/home/home.jpg);
        padding: 0;
    }
    #texto{
        text-align: center;
        font-size: 13px;
        color: #666666;
        font-family: arial;
        padding:15px;
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
        <li id="id"><a id="a" href="homeLog.php">Home</a></li>
        <li id="id"><a id="a" href="perfil.php">Perfil</a></li>
        <li id="id"><a id="a" href="atividadesAluno.php">Atividades</a></li>
        <li id="id"><a id="a" href="cursosAluno.php">Cursos</a></li>
        <li id="id"><a id="a" href="delegaciaAluno.php">Delegacia</a></li>
        <li id="id"><a id="a" href="noticiasAluno.php">Divulgações</a></li>
        <li id="id"><a id="a" href="FaleConoscoAluno.php">Fale Conosco</a></li>   
        <li id="id"><a id="a" href="../publico/index.php">Sair</a></li>       
           
        </ul>
    </nav>
    <a href="index.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a>  


        <hr id="barra">
    </header>
    <main>
            <div class="manchete">
                <h2>Premiação marca reconhecimento das mulheres em destaque de Barueri</h2>
                <p id="sub" name="sub" alt="sub">Foi muito emocionante a cerimônia do prêmio Mulher em Destaque Barueri, realizado na noite de quinta-feira (2 de maio). O evento, que está em sua segunda edição, conta com a realização da Secretaria da Mulher e tem o apoio do Conselho Municipal da Mulher de Barueri.</p>
                <img src="imagens/noticias/medalhas.jpg" id="palestra" name="palestra" alt="palestra">
                <p id="data">- 16 de abril de 2019</p>
            </div>
    
    <hr>
    
         
    <p id="prg">Foi muito emocionante a cerimônia do prêmio <a id="cor">Mulher em Destaque Barueri</a>, realizado na noite de <a id="cor">quinta-feira (2 de maio).</a> O evento, que está em sua <a id="cor">segunda edição</a>, conta com a realização da <a id="cor">Secretaria da Mulher</a> e tem o apoio do <a id="cor">Conselho Municipal da Mulher de Barueri.</a><br><br>

O objetivo é reconhecer o trabalho individual de <a id="cor">mulheres</a> que se destacaram nas categorias: Cultura, Esportes, Literatura, Voluntariado, Saúde, Educação, Empreendedorismo e Mulher Inspiração.<br><br>

A festa de premiação aconteceu no auditório da <a id="cor">Câmara de Barueri</a>, que ficou lotado para aplaudir as <a id="cor">63 mulheres </a> indicadas em todas as categorias.<br><br>

A <a id="cor">Secretária da Mulher</a>, Giani Cristina, abriu a cerimônia e salientou o privilegio das <a id="cor">baruerienses</a> por contar com os importantes serviços oferecidos pela pasta. “Independente da revelação das <a id="cor">vencedoras</a>, quero que todas sintam-se <a id="cor">ganhadoras</a>, pois ao serem indicadas provou-se a importante <a id="cor">história</a> que cada uma de vocês têm para <a id="cor">todos nós”</a>, disse.<br><br>

A presidente do <a id="cor">Conselho da Mulher</a>, Fabíola Sarcinella, destacou a importância do evento. “Esse <a id="cor">Prêmio </a>é o resultado do trabalho de união entre o <a id="cor">Poder Executivo</a>, por intermédio da <a id="cor">Secretaria da Mulher</a>, e da <a id="cor">sociedade civil</a>, que se faz representada pelos membros do <a id="cor">Conselho Municipal da Mulher de Barueri</a>. É uma forma de reconhecer e destacar a força da <a id="cor">mulher na sociedade barueriense”</a>, avaliou.<br><br>

A atriz <a id="cor">Nana Pequini</a>, vencedora da categoria <a id="cor">Cultura</a>, se emocionou com a premiação. “Tantos anos de dedicação à arte em <a id="cor">Barueri</a> valeram muito a pena. Receber este carinho só nos faz sentir cada vez mais <a id="cor">motivadas</a> e <a id="cor">empoderadas</a> para seguir <a id="cor">nosso propósito</a>.<br><br>

Moradora do Jardim Belval, <a id="cor">Lurdes Cancissi de Moraes</a>, com <a id="cor">95 anos de idade</a>, recebeu a menção honrosa por ser a <a id="cor">mulher mais velha de Barueri</a>. Ela é mãe de <a id="cor">12 filhos</a> e tem <a id="cor">22 netos</a> e <a id="cor">18 bisnetos.</a><br><br>

<a id="cor">As vencedoras de cada categoria</a> que receberam medalhas, flores e diplomas foram:<br><br> Nana Pequini<a id="cor"> (Cultura)</a> , Maria de Lourdes Barbosa Santos <a id="cor">(Esportes)</a>, Lourdes Ramos Viana da Silva <a id="cor">(Literatura)</a>, Glória Rocha Ferreira <a id="cor">(Voluntariado)</a>, Nilza Helena Meneghin <a id="cor">(Saúde)</a> , Maria do Carmo Balieiro Clemente <a id="cor">(Educação)</a>, Vilma Regina de Souza de Oliveira <a id="cor"> (Empreendedorismo)</a> e Neyde Corrêa Silva <a id="cor">(Mulher Inspiração)</a>.

</p>
        </main>
<footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConosco.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNosAluno.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>
</html>