<?php

if (isset($_POST["submit"])) {

  include_once("config.php");

$nome = $_POST["nome"];
$datanasc= $_POST["datanasc"];
$endereco = $_POST["endereco"];
$telemovel = $_POST["telemovel"];
$email = $_POST["email"];


$opcoes = ['cost' => 12];

$sqlUtilizador = $conexao->prepare("SELECT * FROM encomendas WHERE email = ? or telemovel =?");
$sqlUtilizador->bind_param("ss", $email, $telemovel);
$sqlUtilizador->execute();
$sqlUtilizador->store_result(); 

if ($sqlUtilizador->num_rows == 1) {
    echo "<script>alert('Compra executada com sucesso!');</script>";

}else{$result = mysqli_query($conexao, "INSERT INTO encomendas (nome, datanasc, endereco, telemovel, email) 
VALUES('$nome', '$datanasc', '$endereco', '$telemovel', '$email')");

}
}
?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="casopratico">
    <meta name="author" content="Luciana da Cruz">
<style>
@import url('https://fonts.googleapis.com/css2?family=Matemasie&display=swap');
.{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.conteudos{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
    background-color: #9799ca;

}
.first-content{
  display: flex;
  display: none;
} 

.content{ 
background-color: white;
 width: 80%;
height: 80%;
border-radius: 20px;
display: flex;
justify-content: space-between;
align-items: center;
position: relative;
}

.forma{
    display: flex;
    flex-direction: column;
}
.first-column{
    margin-left: 60px;
    flex: 1 0 auto;
    z-index: 10;
}

.title{
text-transform: capitalize;
font-family: Matemasie;
}
.title-primary{
    font-size:30px;
    color: #9799ca;
}
.title-second{
   color: #9799ca;
}
.btn{
    border-radius: 15px;
    text-transform: uppercase;
    color: white;
    font-size: 15px;
    padding: 10px 50px;
    cursor: pointer;
    margin-left: 50px;
   
}
.btn-primary{
 background-color: transparent;
 border: 1px solid white;
}

.btn-primary:hover{
    background-color: white;
    border: 1px solid #35a43d;
    color: #35a43d;
}
.forma{
    display: flex;
    flex-direction: column;
    margin-right: 200px;
}
.forma input {
    height: 25px;
    border: none;
    background-color: #f0f0f0;
    margin: 8px;
}

.forma select{
    height: 25px;
    border: none;
    background-color: #f0f0f0;
    margin: 8px;
}



</style>

</head>
<body>
    <div class="conteudos">
        <div class="content first-content">
       <div class="first-column">
   <h2 class="title title-primary" style="padding-top: 100px;">Natura SkinCare</h2>
   <p>Sua pele merece o melhor da natureza</p>
   <img src="img/img3.png">
       </div>
    
        <div class="second-column">
  <h2 class="title title-second">Dados pessoais</h2>
  <form class="forma" method="Post" action="formcarrinho.php" onsubmit="return validarchave(this)">
  <input type="text" name="nome" id="nome" placeholder="Nome" required>
  <input type="email" name="email" id="email" placeholder="email" required>
  <input type="text" name="endereco" id="endereco" placeholder="endereco" required><br>
  <label for="dataTempo">Data de nascimento:</label>
        <input type="date" id="datanasc" name="datanasc" required>
  <input type="number" name="telemovel" id="telemovel" placeholder="Telemóvel" required>
  <input type="submit"  name="submit" id="submit" class="btn" style="height:40px; background-color: #9799ca; color:white" value="Registrar">
  </form>
 
</div>
  
</div>
    
         
    </div>

    <script>

     function validarchave(form) {
    let mensagem = "";
    let valido = "s";
 

    if (!validarTelemovel()) {

        valido = "n";
        mensagem += "O número de telemóvel deve conter exatamente 9 dígito\n";

    }

    if (!validarNascimento()) {

      valido = "n";
      mensagem += "A idade deverá ser igual ou superior a 18 anos. \n";

    }
    


    if (valido === "n") {
        alert(mensagem);
        return false;
    }


    return true;

}

function validarTelemovel(){
    const telemovel = document.getElementById('telemovel').value; 
    const telemovelPattern = /^\d{9}$/;
    return telemovelPattern.test(telemovel);
}    
            
 function validarNascimento() {
    const datanasc = document.getElementById('datanasc').value;
    const dataNascimento = new Date(datanasc);
    const hoje = new Date();

    // Calcula a idade com base na data atual
    let idade = hoje.getFullYear() - dataNascimento.getFullYear();
    const mes = hoje.getMonth() - dataNascimento.getMonth();

    // Ajuste se o mês atual for antes do mês de nascimento ou se é o mesmo mês mas o dia ainda não passou
    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNascimento.getDate())) {
        idade--;
    }

    // Verifica se a idade é maior ou igual a 18 anos
    return idade >= 18;
}


    </script>
</body>
</html>