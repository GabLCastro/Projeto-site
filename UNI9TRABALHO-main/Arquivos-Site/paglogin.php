<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css"> 
<style>
.divlogin{background:white; width:60%; height:810px; position:relative; left:1%; border-radius:50%; 
    display: flex; justify-content: center;align-items: center; color:black;}
.bluediv{background:RGB(14,75,239); width:100%; height:900px; display: flex; justify-content: center;align-items: center; position:relative; top:190px;}
.txtlogin{background:white; width:100%; height:250px; position:relative; top:200px; color:black; font-size:80px; display: flex; justify-content: center;align-items: center;
font-family:Andale Mono, monospace;}
.barralogin{background:rgb(18,10,143); width:100%;display: flex; justify-content: center;align-items: center; color:white;}
.email{font-size:28px; position:relative; bottom:30px;left:220px;font-family:Gill Sans, sans-serif;}
.emailinput{border-radius:10%; height:17px;position:relative; bottom:4px;}
.senha{font-size:28px;position:relative; top:20px; right:52px;font-family:Gill Sans, sans-serif;}
.inputsenha{border-radius:10%; height:17px;position:relative; right:1px; bottom:2px;}
.exibirsenhatxt{font-size:15px;}
.botaologin{color:white;background:blue; font-size:23px; border-radius:50%; height:60px; width:90px; border:0px;
position:relative;top: 120px; right:280px; }
</style>
</head>
<body>
<div id="superior"> 
     <img id="logo"src="imgs/logomark.png" alt="logo"> <a href="paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <img src="imgs/lupa.png" class="lupa"><input class="pesquisabar"><a href="index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="index.php"><span id="cabecalho"> Plataformas &#9660; <span> </a>
     <a href="PLATAFORMAS/LANCAMENTOS/paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="PLATAFORMAS/PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a>
    </div>  
</div>

<div class="txtlogin"><div class="barralogin"> LOGIN </div></div>
<div class="bluediv"> <div class="divlogin"><p class="email"> Email: <input class="emailinput" id="emailinputid"></p><p class="senha">Senha: <input class="inputsenha" id="inputsenhaid" type="password">
<span class="exibirsenhatxt"> exibir </span><input type="checkbox"></p>
<input type="button" value="Entrar" class="botaologin" onclick="vipacess()"> </div> 

</div>
<?php
echo "TesteASAS"
?>
<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>

<script>
   
    function vipacess(){ 
       
        var email = document.getElementById("emailinputid").value;
        var senha = document.getElementById("inputsenhaid").value;
        if (email=="loginvip" && senha =="123") {
            window.open( 'http://www.google.com.br' );
        }else{window.alert("Erro");}
        

    }
    
</script>
</body>

</html>

