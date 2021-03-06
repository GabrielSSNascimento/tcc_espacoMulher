<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividades</title>
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

div{
    margin-left: 50px;
    margin-bottom: 20px;
}

#t1{
    font-size: 22px;
    margin-left: 45px;
    color:#333333;
}div.conteiner{
    display: inline-block;
}

.container-flex{
    display: flex;
}
.conteiner-flex, #ti1,a:link, a:visited{
    text-decoration: none;
    font-weight: 700;
    color: #1a1a1a;
    font-size: 15px;
}
.item2 {
    margin-left: 15%;
}

.item1 {
    margin-left: 23%;
}



.icones{
    width: 70px;
    height: 60px;
}

#ti1{
    margin-left: 85px;
    margin-top: -15px;
    margin-right: 70px;
}

#ti2{
    margin-top: -15px;
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
        
    </header>    <h1 id="t1"> Conheça nossos Cursos</h1>
    
        <main>
        <section class="container-flex">
            <div class="item1">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at1" class="icones"/></a>
            </div>
            

            <div class="item2">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at2"  class="icones"/></a>
            </div>
        </section>

        <section class="container-flex">
        <a href="curso1Professor.php"><p id="ti1">Curso 1</p></a>
        <a href="curso1Professor.php"><p id="ti2">Curso 2</p></a>
        </section>

        <section class="container-flex">
            <div class="item1">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at1" class="icones"/></a>
            </div>
            

            <div class="item2">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at2"  class="icones"/></a>
            </div>
        </section>

        <section class="container-flex">
        <a href="curso1Professor.php"><p id="ti1">Curso 1</p></a>
        <a href="curso1Professor.php"><p id="ti2">Curso 2</p></a>
        </section>

        <section class="container-flex">
            <div class="item1">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at1" class="icones"/></a>
            </div>
            

            <div class="item2">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at2"  class="icones"/></a>
            </div>
        </section>

        <section class="container-flex">
        <a href="curso1Professor.php"><p id="ti1">Curso 1</p></a>
        <a href="curso1Professor.php"><p id="ti2">Curso 2</p></a>
        </section>

        <section class="container-flex">
            <div class="item1">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at1" class="icones"/></a>
            </div>
            

            <div class="item2">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at2"  class="icones"/></a>
            </div>
        </section>

        <section class="container-flex">
        <a href="curso1Professor.php"><p id="ti1">Curso 1</p></a>
        <a href="curso1Professor.php"><p id="ti2">Curso 2</p></a>
        </section>

        <section class="container-flex">
            <div class="item1">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at1" class="icones"/></a>
            </div>
            

            <div class="item2">
                <a href="curso1Professor.php"><img src="imagens/cursos/curso.png" alt="at2"  class="icones"/></a>
            </div>
        </section>

        <section class="container-flex">
        <a href="curso1Professor.php"><p id="ti1">Curso 1</p></a>
        <a href="curso1Professor.php"><p id="ti2">Curso 2</p></a>
        </section>
        </main>
    <footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="FaleConoscoProfessor.php" id="fale">Fale Conosco<a/></u>
             
            <u><a href="SobreNosProf.php" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>

</html>