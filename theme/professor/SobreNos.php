
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre Nós</title>
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
        margin-left: 110px;  
        height: 50px;      

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
        padding: 5px 15px;
        position: relative;
        width: 80px;
        border-top: 2px;
        margin-left: 33%;
        margin-bottom: 26px;

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
#prg {
    text-align: left;
    color: #0d0d0d;
     letter-spacing: 1;
    line-height: 1.2;
     margin-left:15px;
     font-size: 17px;
 }
            
            #img {
                width:335px;
            height: 173px;
            align: center;
            margin-left: 18px;
            }
            #h1 {

    color: #1a1a1a;
     font-size: 30px;
     text-align: center;
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
    <a href="homelog.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a> 


        <hr id="barra">
        
    </header>
    <main>
        <div>
            <h1 id="h1"> Sobre nós</h1>
            <img src="imagens/sobre/imagem_delegacia.png" id="img" alt="img" />

            <p id="prg">O <a id="cor">Espaço Mulher de Barueri</a> oferece <a id="cor">gratuitamente</a>, atividades culturais, esportivas e de lazer.
                Em <a id="cor">seis mil metros quadrados</a> de área construida, suas <a id="cor">instalações</a> oferecem: Piscina, quadra, Academia,
                delegacia da mulher,
                espaço de estética e beleza, sala de dança e biblioteca.</p>

            <p id="prg">No <a id="cor">Espaço Mulher</a> existe também o <a id="cor">Cyber Café</a>, uma ferramenta importante de integração dos
                cidadãos
                com o mundo, o acesso
                é <a id="cor">gratuito</a> e disponibilizado as pessoas que <a id="cor">frequentam o local.</a><br><br> A <a id="cor">internet pública</a> facilita a
                comunicação e
                a informação, gerando
                um <a id="cor">universo de possibilidades</a> de pesquisa, troca de mensagens instantâneas, ensino e consulta de livros
                e
                demais publicações.</p>
        </div>
    </main>
    <footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConoscoAluno.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNosProf.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>

</html>


