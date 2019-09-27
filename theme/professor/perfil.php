<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/perfilProf.css">
    <title>Perfil Professor</title>
    <style> 
    
            body{
                margin: 0;
                padding: 0;
                background-color: rgba(240, 240, 240, 0.36);
                max-width:360px;
                font-family: arial;
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
    height: 0.5px;
    background-color: white;
    margin:0;
    margin-bottom: 15px;
    margin-top: 5px;

}
#fale{
    margin-left: 50px;
    margin-right: 30px;
}
u,#fale, a:link,a:visited{
    text-decoration: none;
}
#logo {
    width: 160px;
    margin-left: 110px;        

}
#barra {
        width: 360px;
        height: 4px;
        background-color: #96B83D;
        margin:0;
        padding:0;
        margin-bottom: 30px;
    }

    table{
        width: 85%;
        margin-left: 7.5%;
        border: 1px solid black;
    }
    #t01, th, td {
  border-collapse: collapse;
  border: 1px solid black;
  vertical-align: middle;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
  background-color: #fff;
}
table#t01 th {
  color: white;
  background-color: #96B83D;
}



#t02, th, td {
  border-collapse: collapse;
  border: 1px solid black;
  vertical-align: middle;
}
table#t02 tr:nth-child(even) {
  background-color: #eee;
}
table#t02 tr:nth-child(odd) {
  background-color: #fff;
}
table#t02 th {
  color: white;
  background-color: #96B83D;
}



.content{
    display:flex; 
    justify-content: center;
    flex-direction: column;
}

.imgP{
    width: 146px;
    height: 140px;
    border-radius: 100%;
    border-style: solid;
    border-width: 2px;
    margin-left: 25%;
    margin-bottom: 10px;
}
.nome{
    margin-left: 37%;
    font-style: bold;
    font-family: arial;
    font-size: 1.2rem;
}

h2{
    font-family: arial;
    font-size: 1.3rem;
    margin-left: 26%;
    margin-top: none;
}
a:hover{
    color: gray;
}
.sair{
    margin-bottom: 20%;
    margin-left: 42.5%;
}


hr{
    background-color: purple;
    height: 2px;

}

.a{
    margin-right: 25px;
}


h3{
    margin-left: 28%;
    margin-bottom: 28px;
}


.select1{
    margin-left: 78px;
    margin-top: 20px; 
    height: 25px;
    width: 120px;
}
.select2{
    margin-left: 78px;
    margin-top: 20px; 
    width: 120px;
    height: 25px;
}

.botao{
    width: 80px;
    padding: 7px;
    margin-bottom: 15px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    background-color: #6D1E4B;
    color: white;
    margin-left: 30px;
}
.tabela{
    width: 300px;
    height: 425px;
    margin-top: 25px;
    margin-left: 20px;
}
.c1{
    margin-right: 20px;
}
.c1, .c2{
    display: inline;
    margin-left: 10%
}



    .liga_desliga{
        margin-left: 37%;
    }
		.liga_desliga__checkbox {
			position: absolute;
            
            
		}

		.liga_desliga__botao {
			display: inline-block;
			vertical-align: middle;
			position: relative;
			cursor: pointer;
		}

		.liga_desliga__botao::before,
		.liga_desliga__botao::after {
			content: "";
			box-shadow: 0 0 0 1px #CCC;
			transition: all 0.2s ease;
		}

		.liga_desliga__botao::before {
			display: inline-block;
			border-radius: 1em;
			height: 15px;
			width: 35px;
			margin-right: 0.5em;
			background: #900;
            margin-top: 1.2px;
		}

		.liga_desliga__botao::after {
			position: absolute;
			left: 0.00025em;
			width: 17px;
			height: 17px;
			border-radius: 100%;
			background: #FFF;
		}

		.liga_desliga__checkbox:checked + .liga_desliga__botao::before {
			background: #55D069;
		}

		.liga_desliga__checkbox:checked + .liga_desliga__botao::after {
			left: 1.2em;
		}
        .botao2{
    width: 140px;
    padding: 12px;
    margin-bottom: 15px;
    border:1px solid #DDD;
    border-radius: 5px;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
    background-color: #6D1E4B;
    color: white;
    margin-left: 110px;
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
        <li id="id"><a id="a" href="<?=url("professor/home")?>">Home</a></li>
        <li id="id"><a id="a" href="<?=url("atividades/atividadeProf")?>">Atividades</a></li>
        <li id="id" ><a id="a" href="<?=url("cursos/cursosProf")?>">Cursos</a></li>
        <li id="id"><a id="a" href="<?=url("delegacia/delegaciaProf")?>">Delegacia</a></li>
        <li id="id"><a id="a" href="<?=url("noticia/noticiasProf")?>">Divulgações</a></li>
        <li id="id"><a id="a" href="<?=url("contato/contatoProf")?>">Fale Conosco</a></li>   
        <li id="id"><a id="a" href="<?=url()?>">Sair</a></li>       
        </ul>
    </nav>
    <img src="imagens/Delegacia/barueri_logo.png" id="logo" name="logo" alt="logo" /> 


        <hr id="barra">
        
    </header>
        
 
    <main>   
    <section class="content"> 
        <img src="imagens/perfilProf/dilma_perfil.png" class="imgP" alt="imagem perfil">
        <label class="nome">Professor</label>
        <h2>R.S.M.: 000001</h2>
        <p class="sair"><a href="<?=url()?>">SAIR</a></p>
    </section>    
    <h3>Lista de Presença com Scanner</h3>
    
    <div class="c1">
  <input type="radio" id="ativ" name="check" value="atividades"
         checked>
  <label for="huey">Atividades</label>
</div>

<div class="c2">
  <input type="radio" id="cur" name="check" value="cursos">
  <label for="dewey">Cursos</label>
</div>

        <br>
        <form>
        <select class="select1">
            <option value="selecione">Selecione</option>
            <option value="listItem1">Item1</option>
            <option value="listItem2">Item2</option>
            <option value="listItem3">Item3</option>
            <option value="listItem4">Item4</option>
            <option value="listItem5">Item5</option>
            <option value="listItem6">Item6</option>
        </select>

        <input type="submit" class="botao" value="Scanner">
<br>
        <select class="select2">
            <option value="Turmas">Turmas</option>
            <option value="Turma1">Turma1</option>
            <option value="Turma2">Turma2</option>
            <option value="Turma3">Turma3</option>
            <option value="Turma4">Turma4</option>
        </select>
    </form><br>

    <table id="t02">
    <tr>
      <th>N°</th>
      <th>Nome</th> 
      <th>Presença</th>
    </tr>
    <tr>
      <td>01</td>
      <td>Smith</td>
      <td>-</td>
    </tr>
    <tr>
      <td>02</td>
      <td>Jackson</td>
      <td>-</td>
    </tr>
    <tr>
      <td>03</td>
      <td>Doe</td>
      <td>-</td>
    </tr>
    <tr>
      <td>04</td>
      <td>Smith</td>
      <td>-</td>
    </tr>
    <tr>
      <td>05</td>
      <td>Jackson</td>
      <td>-</td>
    </tr>
    <tr>
      <td>06</td>
      <td>Doe</td>
      <td>-</td>
    </tr>
    <tr>
      <td>07</td>
      <td>Smith</td>
      <td>-</td>
    </tr>
    <tr>
      <td>08</td>
      <td>Jackson</td>
      <td>-</td>
    </tr>
    <tr>
      <td>09</td>
      <td>Doe</td>
      <td>-</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Doe</td>
      <td>-</td>
    </tr>
  </table><br>
  <h3>Lista de Presença Manual</h3>
    
    <div class="c1">
  <input type="radio" id="ativ" name="check" value="atividades"
         checked>
  <label for="huey">Atividades</label>
</div>

<div class="c2">
  <input type="radio" id="cur" name="check" value="cursos">
  <label for="dewey">Cursos</label>
</div>

        <br>
        <form>
        <select class="select1">
            <option value="selecione">Selecione</option>
            <option value="listItem1">Item1</option>
            <option value="listItem2">Item2</option>
            <option value="listItem3">Item3</option>
            <option value="listItem4">Item4</option>
            <option value="listItem5">Item5</option>
            <option value="listItem6">Item6</option>
        </select>

      
<br>
        <select class="select2">
            <option value="Turmas">Turmas</option>
            <option value="Turma1">Turma1</option>
            <option value="Turma2">Turma2</option>
            <option value="Turma3">Turma3</option>
            <option value="Turma4">Turma4</option>
        </select>
    </form><br>

    <table id="t01">
    <tr>
      <th>N°</th>
      <th>Nome</th> 
      <th>Presença</th>
    </tr>

    <tr>
      <td>01</td>
      <td>Smith</td>
      <td>	<div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga1">
		<label for="liga_desliga1" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>02</td>
      <td>Jackson</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga2">
		<label for="liga_desliga2" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>03</td>
      <td>Doe</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga3">
		<label for="liga_desliga3" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>04</td>
      <td>Smith</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga4">
		<label for="liga_desliga4" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>05</td>
      <td>Jackson</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga5">
		<label for="liga_desliga5" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>06</td>
      <td>Doe</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga6">
		<label for="liga_desliga6" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>07</td>
      <td>Smith</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga7">
		<label for="liga_desliga7" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>08</td>
      <td>Jackson</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga8">
		<label for="liga_desliga8" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>09</td>
      <td>Doe</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga9">
		<label for="liga_desliga9" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Doe</td>
      <td><div class="liga_desliga">
		<input type="checkbox" class="liga_desliga__checkbox" id="liga_desliga10">
		<label for="liga_desliga10" class="liga_desliga__botao"></label>
	</div></td>
    </tr>
  </table><br>
  <input type="submit" class="botao2" value="Enviar">


    </main>    
    <footer>
    <p id="textoF2">Redes Sociais</p>
    <a href="https://m.facebook.com/secmulherbarueri/"><img src="imagens/facebook.png" id="facebook" name="facebook espaço mulher" alt="face"/></a>
    <a href="https://twitter.com/MulherBarueri"><img src="imagens/twitter.png" id="twitter" name="twitter espaço mulher" alt="twitter"/></a>
    <a href="https://www.instagram.com/mulherbarueri/?hl=pt-br"><img src="imagens/instagram.png" id="instagram" name="instagram espaço mulher" alt="insta"/></a><br>
    <hr class="barra2">
            
            
        <p id="textoF">Av. Sebastião Davino dos Réis, 56 - Jardim Tupanci, Barueri - SP / CEP 06414-007/(11) 4706-4046 </p>
        <u><a href="<?=url("contato/contatoProf")?>" id="fale">Fale Conosco<a/></u>
             
            <u><a href="<?=url("sobreNos/sobreNosProf")?>" id="sobre">Sobre Nós<a/></u>
    </footer>
</body>
</html>