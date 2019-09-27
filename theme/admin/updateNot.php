<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            body{
                margin:0;
                padding:0;
                font-family: arial;
            }   

            #logo {
                width: 160px;
                margin-left: 110px;        

            }
    
            #a{
                text-decoration: none;
                color: black;
            }
            
            #ul{
                list-style: none;
            }
            
            #menu{
                width: 40px;
                height: 40px;
                margin-left: 0px;
                margin-top: -9px;
            }
            
            input[type="checkbox"]{
                display: none;
            }
            
            #nav{
                background-color:white;
                width: 370px;
                height: 500px;
                left: -370px;
                position: absolute;
                transition: all .5s;
                
            }
            
            input[type="checkbox"]:checked ~ nav{
                transform: translateX(360px);
                
            }
            
            #ul{
              
                top: 50px;
                position: absolute;
                width: 80%;
                
            }
            
            #a{
                display: block;
                padding: 20px 5px;
                color: black;
                font-weight:bold; 
                font-size: 17px; 
            }
            
            
            #label{
               
                padding: 15px;
                position: absolute;
                z-index: 1;
            }

            #id{
                border-bottom: 1px ridge black;
                text-align:center;

            }

            #id:hover{
                background-color: rgb(248, 221, 253);
            }

            #button{
                width: 120px;
                height: 40px;
                margin-top: 30px;
                margin-left: 5px;
                background-color: #6D1E4B;
                color: white;
                border-radius: 7px;
                font-size:16px;
            }

            #button1{
                width: 120px;
                height: 40px;
                margin-top: 30px;
                margin-left: 30px;
                background-color: #6D1E4B;
                color: white;
                border-radius: 7px;
                font-size:16px;
            }
            #barra {
        height: 4px;
        background-color: #96B83D;
        margin:0;
        padding:0;
        margin-bottom: 15px;
    }

/*---------------------------------------------------------*/


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
    margin-left: 60px;
    margin-right: 30px;
}
u,#fale, a:link,a:visited{
    text-decoration: none;
}
/*------------------------------------------------------------------------*/

h2{
    text-align: center;
}

.content{
    display:flex; 
    justify-content: center;
}
.cadastro{
    width: 100%;
    max-width: 280px;
}

.form{
    display: flex;
    flex-direction: column;
}
.field{
    padding: 5px;
    margin-bottom: 15px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
}
.botao{
    width: 140px;
    padding: 9px;
    margin-bottom: 15px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    background-color: #6D1E4B;
    color: white;
    margin-left: 70px;
}

    </style>
    
    <title>Update Not</title>
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

<img src="imagens/barueri_logo.png" id="logo" name="logo" alt="logo" /> 

    <hr id="barra">
    
</header>
<main>
    <section class="content">
        <div class="cadastro">
            <h2>Cadastro</h2>
                        <form class="form" method="POST" action="./email.php">
		<input type="hidden" name="acaoP*&$$@" value="updateAtv">
		<input type="hidden" name="cod_divu" value="<?= $arrayGetDivu[0][cod_divu] ?>">
                <label>Título divugação:</label><br>
                <input type="text" class="field" name="titulo" id="titulo_divu" value="#">
                <label>Descrição divulgação:</label><br>
                <textarea class="field" id="desc_divu" value="#"></textarea><br>
                <label>Contato divulgação:</label><br>
                <input type="tel" class="field" name="telefone" id="tel_divu" value="#"><br>
                <label>Data e Hora:</label><br>
                <input type="date_time" class="field" name="data_hora" id="data_hora" value="#"> <br> 
                <hr>
                
                <!-- abaixo as imagens de titulo -->
                <input type="hidden" name="acaoDivu" value="insertArqTitle">
		<input type="hidden" name="cod_divu" value="<?= $arrayGetArq[0][cod_divu] and $arrayGetArq[0][tipo_arq] = "T" ?>">
                <label>Imagens sobre o titulo:</label><br>
                <input type="file" id="img_title" value="#"><br>
                <label>Legenda arquivos título:</label>
                <input class="field" type="text" id="leg_title" value="#">
                <label>Descrição arquivo:</label>
                <textarea class="field" id="desc_title"value="#"></textarea> 

                <!-- abaixo altera as imagens da galeria -->
		
                <hr>
                <input type="hidden" name="acaoDivu" value="insertArqGal">
		<input type="hidden" name="cod_divu" value="<?= $arrayGetArq[0][cod_divu] and $arrayGetArq[0][tipo_Arq] = "G" ?>">
                <label>Galeria de imagens:</label><br>   
                <input type="file" id="img_gal" value="#"><br>
                <label>Legenda arquivos galeria:</label>
                <input class="field" type="text" id="leg_gal"value="#">
                <label>Descrição arquivo:</label>
                <textarea class="field" id="desc_gal" value="#"></textarea> 

                <input type="submit" class="botao" value="Alterar"> 
                </form>
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
        <u><a href="FaleConoscoAluno.php" id="fale">Fale Conosco</a></u>  
        <u><a href="SobreNosAluno.php" id="sobre">Sobre Nós</a></u>
</footer> 


  
</body>
</html>