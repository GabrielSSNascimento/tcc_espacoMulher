<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Perfil </title>
    <style>
body {
    width: 360px;
    font-size: 1.0em;
    margin: 0;
    padding: 0;
    font-family: arial;
    color: rgb(51, 51, 51);
}

#h{
    font-weight: 700;
    color: #1a1a1a;
    font-size: 15px;
    font-family: arial;
    margin-top: -16px;
    margin-left:55px;
}

#c{
    font-weight: 700;
    color: #1a1a1a;
    font-family: arial;
    font-size: 15px;
    margin-top: -16px;
    margin-left: 40px;
}

#q{
    font-weight: 700;
    color: #1a1a1a;
    font-family: arial;
    font-size: 15px;
    margin-top: 0px;
    margin-left: 45.3px;
}





    #logo {
        width: 160px;
        margin-left: 110px;       
        height: 50px; 

    }
    


#alerta {
    margin-left: 10%;
    margin-bottom:30px;
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
            
            #id, a:visited, a:link{
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
    .sair  {
        color: #4d4d4d;
        margin-left: 45%;
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
h2 {
    color: #262626;
    margin-left: 38%;
}
#prg {
    color: #262626;
    margin-left: 37%;
    font-weight: bold;
    font-family: arial;
}


#prg2 {
    color: #262626;
    margin-left: 43.5%;
    font-weight: bold;
}

#dilma {
    width: 148px;
    height: 140px;
    margin-left: 29%;
    border-radius: 50%;
    border-style: solid ;
    border-width: 2px;
    border-color: #262626;

}

#barra {
        height: 4px;
        background-color: #96B83D;
        margin:0;
        padding:0;
        margin-bottom: 15px;
    }
    .container-flex {
        margin-left: -20px;
        margin-right: -50px;
    display: flex;
}

.item3 {
    margin-left: 16%;

}

.item2 {
    margin-left: 16%;
}

.item1 {

    margin-left: 15%;
}
.modal {
  
  margin-top: 75px;
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 15px;
  top: 0;
  width: 80%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */

}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  height: auto;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#code{
    
    margin-left: 15px;
}
#myBtn{
    background: none;
    border: none;
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
    <li id="id"><a id="a" href="atividadesAluno.php">Atividades</a></li>
    <li id="id" ><a id="a" href="cursosAluno.php">Cursos</a></li>
    <li id="id"><a id="a" href="delegaciaAluno.php">Delegacia</a></li>
    <li id="id"><a id="a" href="noticiasAluno.php">Divulgações</a></li>
    <li id="id"><a id="a" href="FaleConoscoAluno.php">Fale Conosco</a></li>   
    <li id="id"><a id="a" href="../publico/index.php">Sair</a></li>       
    </ul>
</nav>

<img src="imagens/Delegacia/barueri_logo.png" id="logo" name="logo" alt="logo" /> 
    <hr id="barra">
    
</header>

    <img src="imagens/perfil/dilma_perfil.png" id="dilma" alt="dilma" />
    <main>
        <div>
            <p id="prg2">Aluna</p>
            <p id="prg"> R.S.M: 00001 </p>
        </div>
        <p ><a class="sair" href="../publico/index.php">Sair</a></p>
    </main>
    <main>
        <section class="container-flex">
            <div class="item1">
                <a href="horarios.php"><img src="imagens/perfil/rel.png" alt="op" id="icones1"/></a>
            </div>
            

            <div class="item2">
                <a href="carteirinha.php"><img src="imagens/perfil/cart.png" alt="op"  id="icones2"/></a>
            </div>
            

            <div class="item3">
            <button id="myBtn"><a href="#"><img src="imagens/perfil/qr.png" alt="op" id="icones3"/></a></button>
            </div>
            <div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <img src="imagens/qr_code.png" id="code" alt="QR CODE">
  </div>

</div>
<script>

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


        </section>
        <section class="container-flex">
        <a href="horarios.php" id="h"><p >Horários</p></a>
        <a href="carteirinha.php" id="c"><p >Carterinha</p></a>
        <a href="#" id="q">QR-Code</p></a>
        </section>

    </main>
    <h2>Alertas</h2>
    <br>
    <img src="imagens/perfil/alerta.PNG" id="alerta" alt="alerta" />
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