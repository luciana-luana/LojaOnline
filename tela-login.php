<?php

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');


h2{
	font-family: Shadows Into Light;
	text-align: center;
    font-size: 30px
}

p, a{
	text-align: center;
	color:white;
    
}
.caixa0{
	background-color:#9799ca;
	margin-bottom: 50px;
	padding: 20px 0px 0px 0px;
	width: auto;
	height: 150px;
}
.caixa1{
	font-family: 'Dosis', arial;
	font-size: 16px;
	margin: 0 auto;
	padding: 25px;
	padding-bottom: 50px;
	width: 500px;
	border-radius: 11px 11px 11px 11px;
	-moz-border-radius: 11px 11px 11px 11px;
	-webkit-border-radius: 11px 11px 11px 11px;
	border: 0px solid #000000;
	color: white;
	background-color:#9799ca;
	text-align: center;
}

.botao{
    border-radius: 15px;
    text-transform: uppercase;
    color: white;
    font-size: 15px;
    padding: 10px 50px;
    cursor: pointer;
    background-color: transparent;
    border: 1px solid white;
}

.botao:hover{
    background-color: white;
    color: #9799ca;
}

table {
	color: white;
}
th, td {
	padding: 10px;
	border-bottom: 1px solid white;
}
    </style>


</head>

<body>
    <div class="caixa0">
        <span id="logo"><img src="IMG/natura2.png" style="height: 200px; width: 200px; padding-top:2px;"></span>
    </div>

    <div class="caixa1">

        <h2>Login Área restrita</h2>
        
        <form method="Post" action="formlogin.php"> 
            <input type="text" name="email" placeholder="Inserir o email" ><br>
           <br><input type="password" name="senha" placeholder="Inserir a senha"><br><br>
            <input  class="botao" type="submit" name = "submit" value="Enviar">
        </form>

    </div>
</body>
 
</html>
