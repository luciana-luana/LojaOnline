<!doctype html>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pagina-administrador">
    <meta name="author" content="Luciana da Cruz">
    <title>Pagina-administrador</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
.card-body{
  background-color:#9799ca;
  height: 100%;
  width: 250px;

}

.card-title{
 margin-top: 50px;
}

.nav-link{
    background-color:#9799ca; 
    width: 500px; 
}
.nav{
    background-color:#9799ca;
    color:black;
}
</style>
</head>

<body>

<div class="container-fluid text-center">
 
<div class= "row">
<div class = "col-sm-3" id="style-col-3">


<div class = "card" id="style-card">
    <div class = "card-body">
        <h3 class="card-title" style="font-family: Shadows Into Light;">Olá Administrador!</h3>
        <img src="img/luci.png" alt="luci" style="width: 250px; height: 250px;">
        <p style="text-align:center;">Nome: Luciana da Cruz</p>
        <p style="text-align:center;">Email: lucianadacruz.unicv@gmail.com</p>
</div>
<nav class= "nav fex-column">
    <a class="nav-link" href="#" data-target="encomendas">Encomendas</a>
    <a class="nav-link" href="#" data-target="product">Produtos</a>
</nav>
<div class="card-body">
<a href="index.html">Logout</a>
</div>
</div>
</div>
  
<div class ="col-sm-9" id="style-col-9">
<div id="conteudo-principal">O conteudo vai ser carregado aqui

</div>


</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
$(document).ready(function (){
 $(".nav-link").on("click", function (e){
      e.preventDefault();
 var target = $(this).data("target");
 $("#conteudo-principal").load(target + ".php");
 });   
});
</script>

</body>

</html>