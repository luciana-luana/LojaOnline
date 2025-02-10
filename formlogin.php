<?php
session_start();

if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) 
{
    //Acessa
    include_once("config.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $hash = password_hash($senha, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM utilizadores WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("tela-login.php?invalid=&email=$email");
        echo "<h2>Email ou password incorreta</h2>";

    } else {
        
        $row = $result->fetch_assoc();
        $hash = $row["senha"];

       $_SESSION["email"] = $email;
       $_SESSION["senha"] = $senha;
       header("location:administrador.php");

    } 

} else {
    header("location: tela-login.php");
   
}
          
?>      