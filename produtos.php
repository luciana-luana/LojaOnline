<?php
session_start();
if(!isset($_SESSION['carrinho'])){
  $_SESSION['carrinho'] = array();
}
if (isset($_GET['comprar'])){
  $_SESSION['carrinho'][] = $_GET ['comprar'];
  header('location: ' .$_SERVER['PHP_SELF'] .'?'.SID);
  exit();
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Prod1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projeto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="casopratico">
    <meta name="author" content="Luciana da Cruz">
    <script src="https://kit.fontawesome.com/7147b9e925.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
 
 <style>
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');

#btn-addcarrinho{
    background-color: #9799ca;
    border-radius: 10px;
    font-size: 20px;
    border: solid 2px white;
    height: 50px;
    width: 250px;
    margin-bottom: 50px;
}
#quantity-container{
    height: 50px;
    width: 250px;
}
#menos{
    background-color: #9799ca;
    border-radius: 5px;
    width: 35px;
}
.bloco-galeria {
      margin: 30px;
      border: 1px solid #4169E1;
      width: 250px;
      text-align: center;
      float: left;
    }

    .bloco-galeria:hover {
      border: 1px solid #7fffd4;
    }

    .bloco-galeria img {
      width: 100%;
      height: 300px;
    }

    .desc {
      padding: 15px;
      text-align: center;
    }

    .galeria {
      margin: 20px;
      border: 1px solid #4169E1;
      width: 220px;
      text-align: center;
      float: left;
      border-radius: 50%;
    }

     .galeria:hover {
      border: #7fffd4;
    } 

    .galeria img {
      width: 100%;
      border-radius: 50%;
    }
</style>

</head>
<br>
<br>

<body>

<div class="navbar" >
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
    <?php 
          $iten = array ('ROZINO com vitamina C: Inclui limpador de toner, creme facial e soro', 
          'Morbea Skincare: Conjunto Coreano com 10 Peças',
          'Tratamento Facial Pele Mista - Gordurosa Kosmetiké: Ideal para peles com tendência gordurosa',
          'Kit Beleza Natural', 'Sakura Skin Care', 'Máscara Hidratante de Colágeno e Abacate', 'Creme Hidratação Redensificante Rich Sorbet I Timexpert Hydraluronic 50ml',
          'Garnier, Sérum facial iluminador e anti-manchas','Sérum facial 3 Pack - vitamina C, retinol, ácido hial',
          'Creme facial regeneradora + tónico + Leite Desmaquillante'
                ); 
          $preco = array (13,50,26,35,15,15,25,5,17,9); 
          $imagens = array ('img/prod1.jpg','img/prod2.jpg', 'img/prod3.jpg', 'img/prod4.jpg', 'img/prod5.jpg', 'img/prod6.png', 'img/prod7.png', 'img/prod8.jpg', 'img/prod9.jpg', 'img/prod10.png');
          $descricao = array ('Aclara o tom da pele, combate as rugas, hidrata e ilumina a pele, e suaviza as linhas de expressão, proporcionando uma pele radiante e saudável.',
          'Conjunto Coreano com 10 Peças de ácido hialurônico, toner facial, Cremes hidratantes e clareador para Mulheres. Kit de cuidados com a pele para viagem.',
          'Tratamento completo facial ideal para peles com tendência a gordura. Elimina todo o tipo de impurezas e controla o excesso de brillos. Cosméticos com grande poder de hidratação e recuperação da pele.',
          'Tudo o que precisas para momentos de beleza! Cuida de ti da cabeça aos pés com os indispensáveis de beleza.
           Esfoliante de Corpo Rico 250 ml + Óleo de Duche 200 ml + Leite de Corpo Nutritivo 200 ml+ Creme de Mãos Nutritivo 75 ml + Saco de Algodão.','Conjunto de cuidados com a pele sakura: Limpador facial, creme hidratante facial, protetor solar, máscara hidratante, toner para os olhos e sérum clareador',
           'Restaure elasticidade e firmeza da pele ao redor dos olhos, combatendo edema, bolsas e olheiras. Proporcione um brilho instantâneo antes da maquiagem ou eventos especiais, hidratando profundamente a pele ocular.',
           'Todo o poder do Ácido Hialurônico em uma fórmula exclusiva com HLG patenteado, sGAGS, NAG e PGA capaz de sintetizar ácido hialurônico endógeno, uma propriedade da pele que se perde com a idade.', 'Sérum facial hidratante anti-manchas e anti-olheiras com vitamina C e SPF25 para proteger a pele contra manchas solares, melhorando a uniformidade de todos os tipos de pele.',
           'o nosso sérum facial contém vitamina C, ácido hialurónico e retinol. Este produto inovador penetra profundamente nas camadas da pele, absorvendo-se imediatamente para uma ação SUPER hidratante e re- enchimento imediato.',
           'Creme Facial Kosmetiké que ajuda a corrigir as arrugas e imperfeições da pele. Contribui uma perfeita hidratación e regeneração, renovando a pele e alisando as arrugas e linhas de expressão conseguindo uma pele visivelmente mais jovem.'
          );
    ?>

   
    <div class="row mx-lg-n5" class="products-container">

    <?php
    for ($i = 0; $i < count($iten); $i++) {

    ?>

   <div class="col py-3 px-lg-5 border-bs-body-bg"> <!--coluna 1 > -->

   <?php echo '<img src="' . htmlspecialchars($imagens[$i], ENT_QUOTES, 'UTF-8') . '" alt="imagem" style="width: 500px; height: 500px;">'; ?>

    
</div>



  <div class="col py-3 px-lg-5 border -bs-body-bg"><!--coluna 2 > -->


 <h1 style="color:#9799ca; font-family:Shadows Into Light;"><?php echo htmlspecialchars($iten[$i]); ?></h1>


    <br><span style="font-size: 20px;">Descrição: <?php echo htmlspecialchars($descricao[$i]); ?></span><p style=" text-align: justify;"></p>


    <div class="col">
    <p>Frete grátis <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
</svg></p>
    </div>

    <span>Preço: 
    <p style="font-family:Shadows Into Light; font-size: 60px">
        <?php echo number_format($preco[$i], 2, ',', '.') . ' €'; ?>
    </p>
    </span>


<div class="btn-addcarrinho">
<a href="<?php echo $_SERVER['PHP_SELF'] . '?comprar=' . $i; ?>" class="botao">
  <button id="btn-addcarrinho">Adicionar ao carrinho</button>
 </a>
    </div>   

    <br>
    <p>O carrinho tem <?php echo count($_SESSION['carrinho']); ?> itens.</p>

<?php
}
?>
  
    </header>
           
    <section class="topo" style="text-align:center; margin-top: 100px; margin-bottom: 150px;">

<h1 style="font-size: 70px; color: #9799ca; font-family:Shadows Into Light">Brindes aleatórios Skincare</h1>

<div class="container2">
<div class="row rowcols-1 row-cols-sm-2 row-cols-md-4 row-cols-md-5">

<div class="col"> <!--circulo1 -->

<div class="galeria">
<a target="_blank" href="img/asse.png" >
 <img src="img/asse.png" alt="assessorio1">
</a>

</div>  
<div class="desc">Escova de limpeza</div>
</div>

<div class="col"><!--circulo2 -->

<div class="galeria">
<a target="_blank" href="img/assessorio2.jpeg">
 <img src="img/assessorio2.jpeg" alt="assessorio2">
</a>

</div>
<div class="desc">Rolos faciais</div>
</div>

<div class="col"><!--circulo3 -->
<div class="galeria">
<a target="_blank" href="img/assessorio3.jpg">
 <img src="img/assessorio3.jpg" alt="assessorio3">
</a>
</div>
<div class="desc">Massajador Facial</div>
</div>
<div class="col"> <!--circulo4 -->

<div class="galeria">
<a target="_blank" href="img/assessorio4.jpg">
 <img src="img/assessorio4.jpg" alt="assessorio4">
</a>
</div>
<div class="desc">Esponja para limpeza</div>
</div>
<div class="col"><!--circulo5 -->

<div class="galeria">
<a target="_blank" href="img/assessorio5.jpeg">
 <img src="img/assessorio5.jpeg" alt="assessorio5">
</a>

</div>
<div class="desc">Rolo de gelo</div>
</div>
</div>
</div>

</section>

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
    <script async src="javascript/loja.js"></script>
    </body>

</html>