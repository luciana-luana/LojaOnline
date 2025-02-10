<?php

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <title>contato</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projeto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="casopratico">
    <meta name="author" content="Luciana da Cruz">
    <script src="https://kit.fontawesome.com/7147b9e925.js" crossorigin="anonymous"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn7fd-hZ8qFcHa66Rq8GASryLVRP9JfQo&callback=inicializar"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
 <style>
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
</style>
</head>

<body>

<div class="navbar">
        <div class="logo">
            <img src="IMG/natura.png" style="width: 220px; height: 220px; margin-right: 850px;" alt="natura">
           </div>
        <a href="index.html">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="formulario.php">Contatos</a>
        <a href="index.html#quemsomos">Quem somos</a>
        <a class='carrinho' href='carrinho.php'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
              </svg>
      </a>
      <a href="tela-login.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
          <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m0 5.996V14H3s-1 0-1-1 1-4 6-4q.845.002 1.544.107a4.5 4.5 0 0 0-.803.918A11 11 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664zM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
        </svg> 
      </a>
    </div>


    <header style="padding-top: 300px; padding-bottom: 60px; padding-right: 80px;padding-left: 50px;">
      
    <div class="row mx-lg-n5" class="columns">
   <div class="col py-3 px-lg-5 border-bs-body-bg"> <!--coluna 1 > -->
<h1 style="font-family:Shadows Into Light, cursive;color: #9799ca; font-size: 80px;">Contatos</h1>
<p>Para mais informações ou questões sobre produtos NaturaSkinCare 
    não hesite em entrar em contato conosco</p>
    <br>
    <div class="col-sm">
                <ul>
                <li><i class="fa-solid fa-location-dot fa-bounce" style="color: #01060e;"></i>Porto, Portugal</li>    
                <li style="font-family: fantasy; color:black;"><i class="fa-sharp fa-solid fa-phone fa-shake" style="color: black;"></i>(+351) 912649938</li>
                    <li style="font-family: fantasy; color: black;"><i class="fa-solid fa-envelope" style="color: black;"></i>lucianadacruz.unicv@gmail.com</li>
                </ul>
              </div>
   
</div>

  <div class="col py-3 px-lg-5 border -bs-body-bg"><!--coluna 2 > -->
    <h1>Precisa de ajuda?<br><br>Prencha o formulário e entraremos em contato brevemente</h1>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome</label>
  <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Apelido</label>
  <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Apelido">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telemovel</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Telemóvel">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Escreva a sua mensagem ou questão aqui</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <input type="submit"  name="submit" id="submit" class="btn" value="Enviar">
</div>

  </div>
</div>
  
        
    </header>
           
   

    <footer style="height: 400px">

<div class="container">
    <div class="row">
      <div class="col-sm">
        <img src="IMG/natura2.png" style="width: 400px; height: 400px;" alt="logosemfundo">
      </div>
      <div class="col-sm" style="padding-top: 200px;">
        <a href="#instagram"><i class="fa-brands fa-facebook"style="color:black"></i></a>
    <a href="#facebook"><i class="fa-brands fa-instagram" style="color: black"></i></a>
    <a href="#linkedin"><i class="fa-brands fa-linkedin"style="color: black"></i></a>
    <a href="#twiter"><i class="fa-brands fa-twitter"style="color: black"></i></a>
    <p style="font-family: fantasy; padding-bottom: 60px; color:black;">Luciana da Cruz</p>
      </div>
      <div class="col-sm" style="padding-top: 150px;">
        <ul>
            <li style="font-family: fantasy; color:black;"><i class="fa-sharp fa-solid fa-phone fa-shake" style="color: black;"></i>(+351) 912649938</li>
            <li style="font-family: fantasy; color: black;"><i class="fa-solid fa-envelope" style="color: black;"></i>lucianadacruz.unicv@gmail.com</li>
        </ul>
      </div>
    </div>
  </div>

</footer>

    </body>

</html>