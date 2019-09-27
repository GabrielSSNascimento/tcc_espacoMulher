<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        margin-bottom: -7px;
        margin-left: 110px;
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
h2{
    color: #262626;
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
    font-family: arial;
    color: #262626;
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
    <a href="index.php"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a>


    
        <hr id="barra">
    </header>
<main>
    <section class="content">
        <div class="cadastro">
            <h2>Cadastro</h2>
            <form class="form" method="<?= $form->method; ?>" action="./">
                <label>R.S.M.:</label><br>
                <input type="numeric" class="field" value="<?= $form->rsm; ?>"name="rsm">
                <label>Nome:</label><br>
                <input type="text" class="field" value="<?= $form->nome; ?>" placeholder="nome">
                <label>Senha:</label><br>
                <input type="password" class="field" value="<?= $form->senha; ?>" name="senha">
                <label>Confirmar senha:</label><br>
                <input type="password" class="field" name="senha">
                <input type="submit" class="botao" value="Enviar">
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
        <u><a href="FaleConosco.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNos.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>
</html>