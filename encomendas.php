<?php
include("config.php");
 
$sql="SELECT idencomendas, nome, datanasc, endereco, telemovel, email from encomendas";
$result = $conexao->query($sql);
?>

<!doctype html>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="produt">
    <meta name="author" content="Luciana da Cruz">
    <title>Encomendas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.btn-custom{
    margin: 10px;
}
</style>

</head>

<body>

<div class="container text-center mt-5">
    <h1>Lista de encomendas existentes</h1>
    <table class="table table-striped mt-4" style="text-align: center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de nascimento</th>
                <th>Endereço</th>
                <th>Telemóvel</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody> 

        <?php
         if ($result->num_rows > 0){
        

        while ($user_data = $result ->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $user_data["idencomendas"]. "</td>";
            echo "<td>". $user_data["nome"]. "</td>";
            echo "<td>". $user_data ["datanasc"]. "</td>";
            echo "<td>". $user_data["endereco"]. "</td>";
            echo "<td>". $user_data["telemovel"]. "</td>";
            echo "<td>". $user_data["email"]. "</td>";
        echo "<td>

        </td>";

           

     echo "</tr>";
        }
      }else{ 
        echo "<tr><td colspan='6'>Nenhum utilizador encontrado</td></tr>";
      }
      
      $conexao->close();
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>