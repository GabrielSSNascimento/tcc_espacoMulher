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
        
            }


    #barra {
        height: 4px;
        background-color: #96B83D;
        margin:0;
        padding:0;
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

h2{
    color: #262626;
    margin-top: 8px;
    text-align: center;
}

.content{
    display:flex; 
    justify-content: center;
    flex-wrap: wrap;
}
.login{
    width: 100%;
    max-width: 280px;
}
.form{
    display: flex;
    flex-direction: column;
}
.field1{
    padding: 7px;
    margin-bottom: 20px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    flex: 1;
}
.field2{
    padding: 7px;
    margin: 3px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    flex: 1;
}

.container-flex {
    display: flex;
}

.item2 {
    margin-left: 15%;
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
    margin-left: 8%;
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
.botao{
    display: inline;
    width: 80px;
    padding: 9px;
    margin-bottom: 15px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    background-color: #6D1E4B;
    color: white;
}
.botao1{
    display: inline;
    width: 110px;
    padding: 9px;
    margin-bottom: 40px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    background-color: #6D1E4B;
    color: white;
    margin-left:50%;
    margin-top:-30%;
}


a:link, a:visited{
    text-decoration: none;
    color: gray;
}

a:hover{
    color:#262626 ;
}

p{
    font-size: 12px;
}

#lbl{
    margin-left: 25px;
    display: flex;
    margin-top: -22px;  
    margin-bottom: 20px;

}
</style>

<header>
    
    
    <input type="checkbox" id="chec">
    <label for="chec" id="label">
        <img id="menu" src="imagens/menu.png"> 
    </label>
    <nav id="nav">
        <ul id="ul"> 
        <li id="id"><a id="a" href="<?=url()?>">Home</a></li>
        <li id="id"><a id="a" href="<?=url("atividades")?>">Atividades</a></li>
        <li id="id" ><a id="a" href="<?=url("cursos")?>">Cursos</a></li>
        <li id="id"><a id="a" href="<?=url("delegacia")?>">Delegacia</a></li>
        <li id="id"><a id="a" href="<?=url("noticia")?>">Divulgações</a></li>
        <li id="id"><a id="a" href="<?=url("contato")?>">Fale Conosco</a></li>
            
            <a href="<?=url("site/signin")?>"><button id="button" type="button">Entrar</button></a>
            <a href="<?=url("site/cadastro")?>"><button id="button1" type="button">Cadastre-se</button></a>
            
        </ul>
    </nav>
    <a href="<?=url()?>"><img src="imagens/Atividades/barueri_logo.png" id="logo" alt="logo"></a>

    
    <hr id="barra">
    </header>
<main>
    <br>
    <img src="imagens/login/iconeUser.png" class="user" alt="Professor">
            <a href="<?=url("site/signinFuncionario")?>"><label id="lbl">Sou Funcionário</label></a>
            
    <section class="content">
        <div class="login">
        <h2>Login</h2>
        
        <!--"index.php?theme=actions&pagina=actionLogin.php"-->
        <form class="form" action="<?= url("site/login"); ?>" method="post">    
            <input type="hidden" name="acao" value="login">          
            <input type="numeric" class="field1" name="rsm" placeholder="R.S.M." id="rsm">
            <input type="password" class="field2" name="senha" placeholder="Senha" id="senha">
            <a href="index.php?theme=site&pagina=esqueci.php"><p>Esqueceu sua senha?</p></a><br>
            <section class="container-flex">

            <div class="item1">
                <input type="submit" value="login">
            </div>
            

            <div class="item2">
                <a href="<?=url("site/cadastro")?>"><p><b>Cadastre-se</b></p></a>
            </div>
</section>
        </form>
        </div>
        </section>
    </main><br>