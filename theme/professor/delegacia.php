<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Delegacia Da Mulher</title>
 
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

p {
     text-align: justify;
 }
 #delegacia {
     margin-top: 12px;
     margin-left: 10px;
     width:340px;
     height:150px;
 }
 #prg {
    color: #0d0d0d;
     letter-spacing: 1;
    line-height: 1.2;
     margin-left:10px;
     font-size: 17px;
     width:340px;
 }
 #t1{
     color: #1a1a1a;
     font-size: 30px;
     margin-bottom: -10px;
     text-align: center;
 }
 #t2{
    color: #262626;
     font-size: 23px;
     margin-bottom: -20px;
     margin-top: -15px;
     margin-left: 33%;

 }
 #t3{
    color: #262626;
     font-size: 23px;
     margin-bottom: -20px;
     margin-left: 13%;

 }
 
 #t3{
    color: #262626;
     font-size: 23px;
     margin-bottom: -10px;
     text-align:center;

 }
 
 ul,li,#num{
     margin-left: -5px;
            color:#262626 ;
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
    <a href="homelogProfessor.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a> 


        <hr id="barra">
        
    </header>	<main>
    <h1 id="t1">Delegacia Da Mulher</h1><br>	
    <img src="imagens/Delegacia/imagem_delegacia.png" id="delegacia" name="delegacia" alt="delegacia"/>
    
    

    <p id="prg">Delegacia da Mulher em Barueri é conhecida como DEAM (Delegacia Especializada em Atendimento à Mulher)
        e tem como principal objetivo,<a id="cor"> oferecer uma condição e tratamento diferenciado de atendimento ao público feminino.</a> <br><br>
        No <a id="cor">Brasil</a>, muitas <a id="cor">mulheres</a> são vítimas de <a id="cor">violência doméstica e familiar</a>, e o acesso ao serviço, garante a prevenção e repressão aos delitos praticados contra elas. <br><br>
        O surgimento da <a id="cor">Delegacia da Mulher</a> se deu em 1985, a ideia seria reduzir o constrangimento causado no atendimento.<br><br>
         Antigamente era comum que algumas mulheres, se sentissem envergonhadas com as situações, e por isso, deixassem de dar queixa dos agressores.</p><br>
    <h1 id="t2"> Localização </h1><br>

    <p id="prg">
    Av. Sebastião Davino dos Réis, 756<br>  CEP 06414-007<br>          
            Fone: 4198-0522 <br>
            Horário de atendimento: segunda a sexta, das 8h às 18h <br> </p>
    <h1 id="t3">Contatos de emergência</h1><br>
    <ul>
        <li id="num">119837484</li>
        <li id="num">118738583</li>
        <li id="num">113646374</li>
        <li id="num">117466385</li>

    </ul>
  
</main>  

<footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 756 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConoscoProfessor.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNosProf.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>
</html>