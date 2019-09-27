<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestra sobre o Câncer</title><style type="text/css">
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
            #id, a:link, a:visited{
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
#cor{
            color: #86245c;
        }
        #ti2 a{
    color:#6D1E4B;
    text-decoration: none;
    
    
}

#ti2 a:hover{
    color:#6D1E4B;
    
    
}

.txt a{
    color: gray;
    line-height: 150%;
    text-decoration: none;
}

.container-flex {
    display: flex;
    margin-bottom: 20px;
}

.item2 {
    margin-left: 10%;
    background-color: #6D1E4B;
    border:1px solid #DDD;
    border-radius: 5px;
    width: 80px;
    padding: 8px;
    height: 22px
}
.item1 p{
    color: #DDD;
    font-family: arial, helvetica, sans-serif;
    font-size: 13px;
    text-align: center;
    margin-top: 3px
}
.item2 p{
    color: #DDD;
    font-family: arial, helvetica, sans-serif;
    font-size: 13px;
    text-align: center;
    margin-top: 3px
}
.item1 {
    margin-left: 18%;
    background-color: #6D1E4B;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    color: white;
    width: 80px;
    padding: 8px;
    height: 22px;
}
</style>
    
</head>
<body> 


       
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
    <a href="index.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a>


        <hr id="barra">
  
    <main>
            <div class="manchete">
                <h2>Câncer de ovário é tema de palestra na Secretaria da Mulher</h2>
                <p id="sub" name="sub" alt="sub">Ter acesso à informação pode salvar vidas e foi com esse objetivo que a Secretaria da Mulher promoveu na segunda-feira (dia 6), no Dia Mundial de Combate ao Câncer de Ovário, uma palestra sobre o tema.</p>
                <img src="imagens/noticias/palestra.jpg" id="palestra" name="palestra" alt="palestra">
                <p id="data">- 13 de maio de 2019</p>
            </div>
    
    <hr>
      
    <p id="prg">O encontro aconteceu no auditório da <a id="cor">Secretaria da Mulher</a> e foi conduzido pelo enfermeiro <a id="cor">Edmar Carias Lessa</a>, que falou sobre os fatores de risco e a importância do diagnóstico precoce.<br><br>

O <a id="cor">câncer de ovário</a> é a segunda neoplasia ginecológica mais comum e, segundo o <a id="cor">Inca (Instituto Nacional do Câncer)</a>, estima-se que 250 mil mulheres são diagnosticadas em todo mundo.<br><br>

De acordo com o <a id="cor">profissional de saúde o câncer de ovário </a>não causa sintomas em sua fase inicial e por isso é tão importante fazer o diagnóstico precoce e ir regularmente ao <a id="cor">médico ginecologista.</a><br><br>

            “Você é provedora da sua saúde, se encorajar e buscar informação é a principal ferramenta para o tratamento”, afirmou o enfermeiro.<br><br>

            Fatores de risco
            <a id="cor">As mulheres </a>que têm maior risco de desenvolver a doença apresentam <a id="cor">histórico familiar</a> de cânceres no ovário, obesidade, fatores genéticos, estão acima de 40 anos, ou passaram por tratamento de reposição hormonal.<br><br>

            A doença pode ser tratada com <a id="cor">cirurgia ou quimioterapia.</a> A investigação pode ser feita por meio de exames clínicos, laboratoriais ou radiológicos. Existe ainda um tratamento alternativo e eficaz chamado <a id="cor">terapia alvo</a> que é menos agressivo, pois se utiliza de medicamentos que atacam apenas as células cancerígenas.<br><br>

            A <a id="cor">Secretaria da Mulher</a> também dispõe de serviços de <a id="cor">orientação às mulheres</a> no sentido de promover o bem-estar e a prevenção. Para mais informações sobre palestras educativas, ligue para <a id="cor">4706-4046.</a></p>

            <section class="container-flex">

            <div class="item1">
                <a href="updateNot.php"><p><b>Alterar</b></p></a>
            </div>
            

            <div class="item2">
                <a href="#"><p><b>Deletar</b></p></a>
            </div>
</section>
        </main>
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